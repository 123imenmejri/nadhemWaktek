        <!doctype html>
        <html class="no-js" lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Nathem_Waktek</title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">


            <link rel="icon" href="../favicon.ico" type="image/x-icon" />
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <!--  jQuery -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
            <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <!-- Custom CSS -->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!--multiple mail -->
<link rel="stylesheet" href="css/lib/email.css" />
<script src="js/lib/utils.js"></script>
<script src="js/lib/emails-input.js"></script>


            <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet"
                href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
            <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
            <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">
            <link rel="stylesheet" href="../node_modules/fullcalendar/dist/fullcalendar.min.css">
            <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
            <link rel="stylesheet" href="../node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
            <link rel="stylesheet" href="../dist/css/theme.min.css">
            <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
        </head>

        <body>
            <div class="hero">
                <nav>
                    <h1><strong>NADHEM WAKTEK </strong></h1>
                    <ul>
                        <li> <a class="nav-link" href="{{ url('/hel') }}">CALENDAR </a></li>
                        <li><a class="nav-link" href="{{ url('/home') }}">PROFILE </a></li>
                        <li><a class="nav-link" href="{{ url('/chart') }}">DASHBOARD</a></li>
                        <li><a class="nav-link" href="{{ url('/taskboard') }}">TASKBOARD </a></li>
                    </ul>
                    <img src="images/images/profile.png" class="user-pic" onclick="toggleMenu()">
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="uer-info">
                                <img src="images/images/profile.png">
                                <h2>hiba ghrairi</h2>
                            </div>
                            <hr>
                            <a href="#" class="sub-menu-link">
                                <img src="images/images/profile.png">
                                <p>Edit profile</p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="images/images/setting.png">
                                <p>Settings</p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="images/images/logout.png">
                                <p>logout </p>
                                <span></span>
                            </a>

                        </div>
                    </div>


                </nav>
                <section class="hero-section hero" data-background=""
                    style="background-image: url(images/hero-area/banner-bg.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center zindex-1">
                                <h1 class="mb-3">Plannifier votre réunion avec<br>
                                    NADHEM WAKTEK</h1>
                                <br> <br>
                                <p class="mb-4">'Nadhem Waktek' est une application web qui facilite la planication des
                                    réunions , les utilisateurs peuvent
                                    envoyer un lien qui se connecte aux calendriers de chacun à tout moment.</p>


                            </div>
                        </div>
                    </div>
                    <!-- background shapes -->
                    <div id="scene">
                        <img class="img-fluid hero-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png"
                            alt="">
                        <img class="img-fluid hero-bg-2 left-right-animation" src="images/background-shape/seo-ball-1.png"
                            alt="">
                        <img class="img-fluid hero-bg-3 left-right-animation" src="images/background-shape/seo-half-cycle.png"
                            alt="">
                        <img class="img-fluid hero-bg-4 up-down-animation" src="images/background-shape/green-dot.png"
                            alt="">
                        <img class="img-fluid hero-bg-5 left-right-animation"
                            src="images/background-shape/blue-half-cycle.png" alt="">
                        <img class="img-fluid hero-bg-6 up-down-animation" src="images/background-shape/seo-ball-1.png"
                            alt="">
                        <img class="img-fluid hero-bg-7 left-right-animation"
                            src="images/background-shape/yellow-triangle.png" alt="">
                        <img class="img-fluid hero-bg-8 up-down-animation"
                            src="images/background-shape/service-half-cycle.png" alt="">
                        <img class="img-fluid hero-bg-9 up-down-animation" src="images/background-shape/team-bg-triangle.png"
                            alt="">
                    </div>
                    <br><br><br>


                    <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->





                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-body">
                                <div id="calendar1"></div>
                            </div>
                        </div>
                    </div>
            </div>
        <!-- Edit Event Modal -->
        <!-- Modal HTML -->
        <div id="editEvent1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editEvent1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEvent1Label">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editEventForm" method="POST">
                <div class="modal-body">
                <div class="form-group" >
                    <label for="note-id" hidden >id</label>
                    <input type="text" class="form-control" id="note-id" name="id" autocomplete="off" hidden >
                </div>
                <input type="hidden" name="type" id="type" value="1" autocomplete="off">
                                                @csrf
                <div class="form-group">
                    <label for="editEname1">Event Name</label>
                    <input type="text" class="form-control" id="editEname1" name="name">
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="datetime-local" class="form-control" id="start_date" name="start_date">
                </div>
                
                <label for="notes"></label>
                    <a id="create-link" >Create New Note</a>
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-danger delete-event">Delete</button>
                </div>
            </form>
            </div>
        </div>
        </div>


            <div class="modal" id="addEvent1" tabindex="-1" role="dialog" aria-labelledby="addEventLabel"
                aria-hidden="true">
                
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    
                            <div class="tab-content">
                            
                                <div class="container">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                                    <br>

                                    <!-- Nav tabs -->
                                    

                                    <div id="content">
                                        <div class="form-group">
                                            
                                            
                                    <label>Réunions:</label>
                                    <input type="radio" name="content" value="show" >
                                    <div>
            
                                    <label>Taches</label>
                                    <input type="radio" name="content" value="hide"checked>
        <form id="addEventForm1" method="POST"action="{{ route('submit-form') }}"onsubmit="return validateForm()" >
                            <input type="hidden" name="type" id="type-p" value="1" autocomplete="off">
                                                @csrf
                                                

        <div class="form-group">
                    <label for="inputGroupSelect02">Lien de la réunion </label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect02" name="lien">
                            <option >Choisir ...</option>
                            <option>https://meet.google.com/cpf-vqrv-xjw</option>
                            <option >https://zoom.us/</option>
                            <option >https://teams.microsoft.com/</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="email">Email de l'invité</label>
                        <input type="text" class="form-control" name="emails"
                            id="email">

                        @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div> @endif
                    </div> 
                 
                    <div class="form-group">
            <label for="durée">Durée </label><br>


            <input type="text" class="form-control"id="durée" name="durée" placeholder="Entrez la durée en minutes"
                min="0">
            </div>
            </div>




            </div>
            </div>

            <div>
                <label for="name">Titre :</label><br>
                <input type="text" name="name" id="new-event"class="form-control">
            </div>

            <div>
                <label for="exampleFormControlTextarea1">Description:</label><br>
                <textarea name="message" id="exampleFormControlTextarea1"class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="start_date">Date :</label>
                <input type="datetime-local" name="start_date" class="form-control" id="start_date">
            </div>
            
            <input type="hidden" name="colorChosen" id="colorChosen">
            <div>
                <label for="colorChosen"> Couleur réunion:</label>
                <ul class="color-selector">

                    <li class="bg-yellow">
                        <input type="radio" data-color="bg-yellow" name="colorChosen" id="addColorYellow" value="bg-yellow">
                        <label for="addColorYellow"></label>
                    </li>
                    <div>
                        <label for="colorChosen">Couleur tache:</label>
                        <ul class="color-selector">



                            <li class="bg-green">
                                <input type="radio" data-color="bg-green" name="colorChosen" id="addColorGreen"
                                    value="bg-green">
                                <label for="addColorGreen"></label>
                            </li>

                        </ul>
                    </div>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Submit</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>



            </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script>
                window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')
            </script>
            <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
            <script src="../node_modules/screenfull/dist/screenfull.js"></script>
            <script src="../node_modules/moment/moment.js"></script>
            <script src="../node_modules/fullcalendar/dist/fullcalendar.min.js"></script>
            <script src="../node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
            <script src="../dist/js/theme.min.js"></script>
            <script src="../js/tache.js"></script>
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                let subMenu = document.getElementById("subMenu");

                function toggleMenu() {
                    subMenu.classList.toggle("open-menu");
                }





                $(document).ready(function() {
                    // Hide the form initially
                    $('#addEventForm1').hide();

                    // Show/hide the form based on the radio button selection
                    $('input[type=radio][name=content]').change(function() {
                        if (this.value == 'show') {
                            $('#addEventForm1').show();

                            $('#type-p').val(2);
                        } else {
                            $('#addEventForm1').hide();
                            $('#type-p').val(1);

                        }
                    });
                });

                function validateForm() {
                    var title = document.forms["addEventForm1"]["name"].value;
                    var description = document.forms["addEventForm1"]["message"].value;
                    var startDate = document.forms["addEventForm1"]["start_date"].value;

                    if (title == "" || description == "" || startDate == "") {
                        alert("veuillez remplir tous les champs!");
                        return false;
                    }
                }
                $(document).ready(function() {
                    $('.color-selector input[type="radio"]').change(function() {
                        var colorChosen = $(this).data('color');
                        $('#colorChosen').val(colorChosen);
                    });
                });


                $('#create-link').on('click', function() {
                    var noteId = $("#note-id").val();
                    var createLink = "{{ route('notes.create', ':noteId') }}";
                    createLink = createLink.replace(':noteId', noteId.trim());
                    window.location.href = createLink;
                });

            </script>
        

            <style>
                #calendar-container {
                    display: grid;
                    grid-template-columns: 200px 1fr;
                    padding: 20px;
                }

                #events {
                    grid-column: 1;
                }

                #calendar {
                    grid-column: 2;
                    height: 700px;
                }

                .dropEvent {
                    background-color: DodgerBlue;
                    color: white;
                    padding: 5px 16px;
                    margin-bottom: 10px;
                    text-align: center;
                    display: inline-block;
                    font-size: 16px;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .hero {
                    width: 100%;
                    min-height: 100vh;

                    color: #525252;
                }

                nav {
                    background-image: url(images/images/);
                    width: 100%;
                    padding: 10px 10%;
                    align-items: center;
                    justify-content: space-between;
                    position: relative;
                    display: flex;

                }

                .logo {
                    width: 120px;
                }

                .user-pic {
                    width: 70px;
                    border-radius: 50%;
                    cursor: pointer;
                    margin-left: 30px;
                }

                nav ul {
                    width: 100%;
                    text-align: right;
                }

                nav ul li {
                    display: inline-block;
                    list-style: none;
                    margin: 10px 20px;
                }

                nav ul li a {
                    color: #fff;
                    text-decoration: none;
                }

                .sub-menu-wrap {
                    position: absolute;
                    top: 100%;
                    right: 10%;
                    width: 320px;
                    max-height: 0px;
                    overflow: hidden;
                    transition: max-height 0.5s;
                }

                .sub-menu-wrap.open-menu {
                    max-height: 400px;
                }

                .sub-menu {
                    background: #d3ecf3;
                    padding: 20px;
                    margin: 10px;
                }

                .uer-info {
                    display: flex;
                    align-items: center;
                }

                .uer-info h3 {
                    font-weight: 500;
                }

                .uer-info img {
                    width: 60px;
                    border-radius: 50%;
                    margin-right: 15px;
                }

                .sub-menu hr {
                    border: 0;
                    height: 1px;
                    width: 100%;
                    background: #ccc;
                    margin: 15px 0 10px;
                }

                .sub-menu-link {
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                    color: #525252;
                    margin: 12px 0;
                }

                .sub-menu-link p {
                    width: 100%;
                }

                .sub-menu-link img {
                    width: 40px;
                    background: "e5e5e5";
                    border-radius: 50%;
                    padding: 8px;
                    margin-right: 15px;
                }

                .sub-menu-link span {
                    font-size: 22px;
                    transition:
                        transform 0.5s;
                }

                .sub-menu-link:hover span {
                    transform: translatex(5px);
                }

                .sub-menu-link:hover p {
                    font-weight: 600;
                }
            </style>
            </body>

        </html>
