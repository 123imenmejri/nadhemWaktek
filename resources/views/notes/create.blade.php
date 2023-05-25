<!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Note</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>

<body>
<div class="container bg-image">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form id="formNotes" method="POST" action="{{ route('notes.edit', $ev->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <textarea class="form-control" name="note" id="summernote">{{ $ev->note }}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Enregistrer note</button>
                            <button type="submit" class="btn btn-primary">Supprimer note</button>
                            
  
                        
                        </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(document).ready (function() {
        $('#summernote').summernote({
            height: 400
        });

        var note = localStorage.getItem('note');
                  var storedNoteId = localStorage.getItem('noteId');
           var formElement = document.getElementById('formNotes');

           if (formElement) {
               formElement.action = formElement.action.replace('__EVENT__', storedNoteId);
           }



    
});


           
      
   </script>

   </div>
   </html>
   <style>
       .bg-image {
           background-image: url('/images/backgrounds/about-bg.png');
           background-size: cover;
       }
   </style>

   </body>
