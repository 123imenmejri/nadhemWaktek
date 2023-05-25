@extends('layouts.app')

@section('content')
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <!-- Start Card Style -->
            <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <!-- Start Dashboard Top  -->
                            <div class="rbt-dashboard-content-wrapper">
                                @if ($user->cover_pic)
                                    <img class="tutor-bg-photo bg_image height-350 "
                                        src="{{ asset('storage/cover_pics/' . $user->cover_pic) }}" alt="Instructor">
                                @else
                                    <div class="tutor-bg-photo bg_image bg_image--21 height-350"></div>
                                @endif
                                <!-- Start Tutor Information  -->
                                <div class="rbt-tutor-information">
                                    <div class="rbt-tutor-information-left">
                                        <div class="thumbnail rbt-avatars size-lg">
                                            <img src="{{ asset('storage/images/' . $user->image) }}" alt="Instructor">
                                        </div>
                                        <div class="tutor-content">
                                            <h5 class="title">{{ $user->name }}</h5>
                                            <ul class="rbt-meta rbt-meta-white mt--5">
                                                <li><i class="feather-email"></i>{{ $user->email }}</li>
                                                <li><i class="feather-award"></i>{{ $user->phone_number }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rbt-tutor-information-right">
                                        <div class="tutor-btn">
                                          
                                            <span class="icon-reverse-wrapper">
                                                <a href="{{ url('/hel') }}" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">Plan a meeting</a>
                                            </span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tutor Information  -->
                            </div>
                            <!-- End Dashboard Top  -->

                            <div class="row g-5">
                                <div class="col-lg-3">
                                    <!-- Start Dashboard Sidebar  -->
                                    <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                        <div class="inner">
                                            <div class="content-item-content">

                                                <div class="rbt-default-sidebar-wrapper">
                                                    <div class="section-title mb--20">
                                                        <h6 class="rbt-title-style-2">Welcome, {{ $user->name }}</h6>
                                                    </div>
                                                    <nav class="mainmenu-nav">
                                                        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                            <li><a href="student-dashboard.html"><i
                                                                        class="feather-home"></i><span>Dashboard</span></a>
                                                            </li>
                                                            <li><a href="student-profile.html"><i
                                                                        class="feather-user"></i><span>My Profile</span></a>
                                                            </li>
                                                            <li><a href="student-my-quiz-attempts.html"><i
                                                                        class="feather-help-circle"></i><span>My
                                                                        Meetings</span></a></li>
                                                        </ul>
                                                    </nav>

                                                    <div class="section-title mt--40 mb--20">
                                                        <h6 class="rbt-title-style-2">User</h6>
                                                    </div>

                                                    <nav class="mainmenu-nav">
                                                        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                            <li><a href="{{ url('/settings/{id}/edit') }}"><i
                                                                        class="feather-settings"></i><span>Settings</span></a>
                                                            </li>


                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <button class="rbt-btn btn-md hover-icon-reverse"
                                                                    type="submit"></i> Logout</button>

                                                            </form>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Dashboard Sidebar  -->
                                </div>
                                <div class="col-lg-9">
                                    <!-- Start Instructor Profile  -->
                                    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                        <div class="content">
                                            <div class="section-title">
                                                <h4 class="rbt-title-style-3">My Profile</h4>
                                            </div>
                                            <!-- Start Profile Row  -->
                                            <div class="rbt-profile-row row row--15">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="rbt-profile-content b2">Registration Date</div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="rbt-profile-content b2">{{ $user->created_at }}</div>
                                                </div>
                                            </div>
                                            <!-- End Profile Row  -->

                                            <!-- Start Profile Row  -->
                                            <div class="rbt-profile-row row row--15 mt--15">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="rbt-profile-content b2"> Name</div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="rbt-profile-content b2">{{ $user->name }}</div>
                                                </div>
                                            </div>
                                            <!-- End Profile Row  -->

                                            <!-- Start Profile Row  -->
                                            <div class="rbt-profile-row row row--15 mt--15">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="rbt-profile-content b2">Email</div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="rbt-profile-content b2">{{ $user->email }}</div>
                                                </div>
                                            </div>


                                            <!-- Start Profile Row  -->
                                            <div class="rbt-profile-row row row--15 mt--15">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="rbt-profile-content b2">Phone Number</div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="rbt-profile-content b2">{{ $user->phone_number }}</div>
                                                </div>
                                            </div>
                                            <!-- End Profile Row  -->



                                            <!-- Start Profile Row  -->

                                            <!-- End Profile Row  -->
                                        </div>
                                    </div>
                                    <!-- End Instructor Profile  -->

                                </div>
                            
                            </div>
                            <!-- Delete button -->
                            <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rbt-profile-content b2"></div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <form method="POST" action="{{ route('user.delete', $user->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rbt-btn btn-md hover-icon-reverse">Supprimer Profile</button>
                                                <button  href="{{ route('login') }}" class="rbt-btn btn-md hover-icon-reverse" type="submit"></i> Modifier profile</button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--  End Delete button -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Style -->
        </div>
    </div>
@endsection


