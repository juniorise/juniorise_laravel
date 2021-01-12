<div class="modal fade bg-white" id="edit-modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <form class=" form-horizontal modal-content" style="border: none !important;" action="{{ route('profile.update',Auth::user()->id) }}" method="POST"
              role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label class="mr-sm-2">Update your profile</label>
            <div class="form-group">
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                       placeholder="Firstname"
                       name="first_name" value="{{Auth::user()->first_name}}" required autofocus>
                @error('first_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                       placeholder="Lastname"
                       name="last_name" value="{{Auth::user()->last_name}}" required autofocus>
                @error('last_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text" style="width: 47px !important;">🎓</div>
                </div>
                <input type="text" class="form-control @error('major') is-invalid @enderror" id="major"
                       placeholder="Enter major, eg. CS student"
                       name="major" value="{{Auth::user()->major}}" required autofocus>
                @error('major')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text" style="width: 47px !important;">🏫</div>
                </div>
                <input type="text" class="form-control @error('school') is-invalid @enderror" id="school"
                       placeholder="Update school"
                       name="school" value="{{Auth::user()->school}}" required autofocus>
                @error('school')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group mb-2">
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                       placeholder="Update description"
                       name="description" value="{{Auth::user()->description}}" required autofocus>
                @error('description')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <?php
            $imageProfile = "/assets/recentshare/profile.png";
            if(Auth::user()->imageProfile AND File::exists(Auth::user()->profilePath)){
                $imageProfile = Auth::user()->imageProfile;
            }
            ?>
            <div class="form-group">
                <input type="file" class="form-control-file" id="image" name="image" onchange="previewFile(this)"
                       accept="image/*">

                <img id="previewImg" src="{{ $imageProfile }}" style="max-width:130px;margin-top:20px;">
            </div>
            <button type="submit" class="btn btn-primary rounded-0">{{ __('Update') }}</button>
            <a onclick="hidemodal();" class="form-group btn btn-light rounded-0">{{ __('Cancel') }}</a>
        </form>
    </div>
</div>
