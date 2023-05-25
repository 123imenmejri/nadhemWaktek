@extends('layouts.app')
@section('content')

<div class="rbt-dashboard-content-wrapper">
    <!-- Start Instructor Profile  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">

            <div class="section-title">
                <h4 class="rbt-title-style-3">Settings</h4>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- Start Profile Row  -->
                    <form method="POST" id="myForm" class="rbt-profile-row rbt-default-form row row--15" action="{{ route('settings.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="rbt-dashboard-content-wrapper">
                            @if($user->cover_pic)
                            <img  class="tutor-bg-photo bg_image height-350" src="{{ asset('storage/cover_pics/' . $user->cover_pic) }}" alt="Instructor">
                            @else
                            <div class="tutor-bg-photo bg_image bg_image--21 height-350"></div>
                            @endif
                            <!-- Start Tutor Information  -->
                            <div class="rbt-tutor-information">
                                <div class="rbt-tutor-information-left">
                                    <div class="thumbnail rbt-avatars size-lg position-relative">
                                        <img src="{{ asset('storage/images/' . $user->image) }}" alt="Instructor">
                                        <div class="rbt-edit-photo-inner">
                                            <input class="feather-camera" style="color: #333;" type="file" id="profile-photo-input" name="image" onchange="previewImage(this);">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="rbt-tutor-information-right">
                                    <div class="tutor-btn">
                                      <label class="rbt-btn btn-sm btn-border color-white radius-round-10" for="cover-photo-input">Edit Cover Photo</label>
                                      <input type="file" id="cover-photo-input" name="cover_pic" style="display: none;" onchange="previewCover(this);">
                                    </div>
                                </div>
                            </div>
                            <!-- End Tutor Information  -->
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="filter-select rbt-modern-select">
                                <label for="time_of_day" class="col-md-4 col-form-label text-md-right">{{ __('Time of Day') }}</label>
                                <select id="time_of_day" class="form-control @error('time_of_day') is-invalid @enderror" name="time_of_day">
                                    <option value="">-- Select Time of Day --</option>
                                    <option value="morning" {{ old('time_of_day', $user->time_of_day) == 'morning' ? 'selected' : '' }}>Morning : 8->12</option>
                                    <option value="evening" {{ old('time_of_day', $user->time_of_day) == 'evening' ? 'selected' : '' }}>Evening : 12->16 </option>
                                    <option value="night" {{ old('time_of_day', $user->time_of_day) == 'night' ? 'selected' : '' }}>Night : 20->20 </option>
                                </select>

                                @error('time_of_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mt--20">
                            <div class="rbt-form-group">
                                <a class="rbt-btn btn-gradient" href="#" onclick="document.forms['myForm'].submit(); return false;">Update Profile</a>
                            </div>
                          </div>
                    </form>
                    <!-- End Profile Row  -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Instructor Profile  -->

</div>

<script>
function previewImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var imgElement = input.parentElement.parentElement.querySelector("img");
      imgElement.setAttribute("src", e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<script>
    function previewCover(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          var coverElement = input.parentElement.parentElement.parentElement.querySelector(".cover-photo-input");
          coverElement.setAttribute("style", "background-image: url('" + e.target.result + "')");
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
</script>

@endsection
