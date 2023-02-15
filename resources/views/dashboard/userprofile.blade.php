@extends('layouts.app')

@section('content')
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.card-header {
    background-color: #0050d5;
}
.form-control{
    height:10%;
}

.form-group {
    position: relative;
    margin-bottom: 0.5rem;
    border: solid 1px linen;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
}

.form-group.with-floating-label label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 0.2rem;
    transition: all 0.3s ease-out;
    pointer-events: none;
    font-size: 0.7rem;
    color: #999;
}

.form-group.with-floating-label input[type="text"],
.form-group.with-floating-label textarea {
    padding: 1.3rem 2rem 0.3rem;
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
    font-size: 0.6rem;
    color: #999;
}

.form-group.with-floating-label input[type="text"]:focus+label,
.form-group.with-floating-label textarea:focus+label {
    transform: translateY(-3rem) scale(0.8);
    font-size: 0.6rem;
    color: #007bff;
}

.form-group.with-floating-label input[type="text"]:valid+label,
.form-group.with-floating-label textarea:valid+label {
    transform: translateY(-3rem) scale(0.8);
    font-size: 0.6rem;
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
                                src="{{ asset('images/avatars/'. $current_user->imagepath) }}"
                                alt="{{ $current_user->name }}">
                            <br><br>
                            <div class="row">
                                <div class="col card text-muted text-left">
                                    <p class="text-muted"> {{ $current_user->stickyNote }}</p>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">ID: {{ $current_user->department_id }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col order-1">
                        <div class="row">
                            <div class="col card m-1 text-muted text-left">
                                <p class="text-muted">User Type: {{ ucfirst( $current_user->usertype)}}</p>
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
                <div style="color:#fff;" class="card-header">{{ __('Edit your profile') }}</div>
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
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
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
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group with-floating-label">
                                    <label for="address" class="text-muted">Address:</label>
                                    <input type="text" id="address" name="address" placeholder="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{old('address', $current_user->address)}}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group with-floating-label">
                                    <label for="phone" class="text-muted">Phone Num:</label>
                                    <input type="text" id="phone" name="phone" placeholder="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{old('phone', $current_user->phone)}}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class=" with-floating-label">
                            <label for="stickyNote" class="text-muted">Edit sticky Note:</label>
                            <input type="longtext" id="stickyNote" name="stickyNote" placeholder="stickyNote"
                                class="form-control @error('stickyNote') is-invalid @enderror"
                                value="{{ old('stickyNote', $current_user->stickyNote) }}">
                            @error('stickyNote')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="imagepath" class="text-muted">Change Profile Picture</label>
                        <div class="form-group d-flex">
                            <div  class="w-75 pr-1">
                                <input style="width:50%;"   type='file' name='imagepath' id="imagepath"
                                    class=" border-0 py-0 pl-0 file-upload-btn"
                                    value="{{$current_user->imagepath}}">
                                @if ($errors->has('imagepath'))
                                <span class="invalid-feedback" role="alert">{{ $errors->first('imagepath') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="w-50 pr-1">
                                <input type="submit" name="submit" value="Save"
                                    class="btn btn-block btn-outline-primary">
                            </div>
                            @if($current_user->usertype === 'doctor')
                            <li class="nav-item btn btn-block btn-outline-primary">
                                <a class=" nav-link" href="{{ route('doctorHome') }}">Doctor Home</a>
                            </li>
                            @elseif($current_user->usertype === 'nurse')
                            <li class="nav-item btn btn-block btn-outline-primary">
                                <a class="nav-link" href="{{ route('nurseHome') }}">Nurse Home</a>
                            </li>
                            @elseif($current_user->usertype === 'admin')
                            <li class="nav-item btn btn-block btn-outline-primary">
                                <a class="nav-link" href="{{ route('adminHome') }}">Admin Home</a>
                            </li>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection