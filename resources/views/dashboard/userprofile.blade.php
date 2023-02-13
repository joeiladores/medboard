@extends('layouts.app')

@section('content')
<style>
.form-group {
    position: relative;
    margin-bottom: 2rem;
}

.form-group.with-floating-label label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 1rem;
    transition: all 0.3s ease-out;
    pointer-events: none;
    font-size: 1rem;
    color: #999;
}

.form-group.with-floating-label input[type="text"],
.form-group.with-floating-label textarea {
    padding: 1.5rem 1rem 0.5rem;
    border-width: 0 0 2px 0;
    border-color: transparent;
    background-color: transparent;
    transition: all 0.3s ease-out;
}

.form-group.with-floating-label input[type="text"]:focus,
.form-group.with-floating-label textarea:focus {
    outline: none;
    border-color: #007bff;
}

.form-group.with-floating-label input[type="text"]:not(:focus)+label,
.form-group.with-floating-label textarea:not(:focus)+label {
    transform: translateY(-3rem);
    font-size: 0.8rem;
    color: #999;
}

.form-group.with-floating-label input[type="text"]:focus+label,
.form-group.with-floating-label textarea:focus+label {
    transform: translateY(-3rem) scale(0.8);
    font-size: 0.8rem;
    color: #007bff;
}

.form-group.with-floating-label input[type="text"]:valid+label,
.form-group.with-floating-label textarea:valid+label {
    transform: translateY(-3rem) scale(0.8);
    font-size: 0.8rem;
    color: #007bff;
}

.form-group .invalid-feedback {
    position: absolute;
    bottom: -2rem;
    left: 0;
    font-size: 0.8rem;
    color: #dc3545;
    animation: fadeIn 0.3s ease-out;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.form-group button {
    background-color: #007bff;
    color: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    border-width: 0;
    transition: all 0.3s ease-out;
    cursor: pointer;
    margin-top: 2rem;
}

.form-group button:hover {
    background-color: #0069d9;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Edit your profile') }}</div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" enctype='multipart/form-data' method="post" novalidate>
                        {{csrf_field()}}

                        <div class="form-group with-floating-label">
                            <label for="name" class="text-muted">Name:</label>
                            <input type="text" id="name" name="name" placeholder="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{old('name', $current_user->name)}}">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group with-floating-label">
                            <label for="firstname" class="text-muted">First name:</label>
                            <input type="text" id="firstname" name="firstname" placeholder="First name"
                                class="form-control @error('firstname') is-invalid @enderror"
                                value="{{old('firstname', $current_user->firstname)}}">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group with-floating-label">
                            <label for="lastname" class="text-muted">Last name:</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Your last name"
                                class="form-control @error('lastname') is-invalid @enderror"
                                value="{{old('lastname', $current_user->lastname)}}">

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group with-floating-label">
                            <label for="email" class="text-muted">Email Address:</label>
                            <input type="text" id="email" name="email" placeholder="Email address"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{old('email', $current_user->email)}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group with-floating-label">
                            <label for="bio" class="text-muted">Bio:</label>
                            <textarea name="bio" id="bio" class="form-control @error('bio') is-invalid @enderror"
                                placeholder="Bio" cols="30" rows="6">{{old('bio', $current_user->bio)}}</textarea>
                            @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="avatar" class="text-muted">Upload avatar</label>
                        <div class="form-group d-flex">
                            <div class="w-75 pr-1">
                                <input type='file' name='avatar' id="avatar"
                                    class="form-control border-0 py-0 pl-0 file-upload-btn"
                                    value="{{$current_user->avatar}}">
                                @if ($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">{{ $errors->first('avatar') }}</span>
                                @endif
                            </div>
                            <div class="w-25 position-relative" id="avatar-container">
                                <img class="rounded-circle img-thumbnail avatar-preview"
                                    style="width: 100px; height: 100px;"
                                    src="{{ asset('images/avatars/'. $current_user->avatar) }}"
                                    alt="{{ $current_user->firstname }} {{ $current_user->lastname }}">
                                <span class="avatar-trash">
                                    @if($current_user->avatar !== 'default.png')
                                    <a href="#" class="icon text-light" id="delete-avatar"
                                        data-uid="{{$current_user->id}}"><i class="fa fa-trash"></i></a>
                                    @endif
                                </span>
                            </div>
                        </div>

                        <div class="form-group d-flex mb-0">

                            <div class="w-50 pr-1">
                                <input type="submit" name="submit" value="Save" class="btn btn-block btn-primary">
                            </div>
                            <div class="w-50 pl-1">
                                <a href="{{ route('nurseHome') }}" class="btn btn-block btn-primary">Go back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection