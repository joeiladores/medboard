@extends('layouts.app')

@section('content')
<style>
.form-group {
    position: relative;
    margin-bottom: 1rem;
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
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="container text-center card p-4">
                <div class="row">
                    <div class="col">
                        <div>
                            <img class="rounded-circle img-thumbnail" style="width: 150px; height: 150px;"
                                src="{{ asset('images/avatars/'. $current_user->avatar) }}"
                                alt="{{ $current_user->name }}">
                            <br><br>
                            <div class="row">
                                <div class="col card text-muted text-left">
                                    <p class="text-muted">Bio: {{ $current_user->bio}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col order-1">
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">User Type: {{ $current_user->usertype}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">User Name: {{ $current_user->name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">Email: {{ $current_user->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">Phone: {{ $current_user->phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">BirthDate: {{ $current_user->birthdate}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">Address: {{ $current_user->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Edit your profile') }}</div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" enctype='multipart/form-data' method="post" novalidate>
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group with-floating-label">
                                    <label for="firstname" class="text-muted">First name:</label>
                                    <input type="text" id="firstname" name="firstname" placeholder="First name"
                                        class="form-control @error('firstname') is-invalid @enderror"
                                        value="{{old('firstname', $current_user->firstname)}}">
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group with-floating-label">
                                    <label for="lastname" class="text-muted">Last name:</label>
                                    <input type="text" id="lastname" name="lastname" placeholder="Your last name"
                                        class="form-control @error('lastname') is-invalid @enderror"
                                        value="{{old('lastname', $current_user->lastname)}}">
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
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

                        <label for="avatar" class="text-muted">Change Profile Picture</label>
                        <div class="form-group d-flex">
                            <div class="w-75 pr-1">
                                <input type='file' name='avatar' id="avatar"
                                    class="form-control border-0 py-0 pl-0 file-upload-btn"
                                    value="{{$current_user->avatar}}">
                                @if ($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">{{ $errors->first('avatar') }}</span>
                                @endif
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