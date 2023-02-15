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

.form-control {
    height: 40px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #E5E7EB;
    padding: 10px;
}

.form-group {
    margin-bottom: 10px;
}

.form-group label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group textarea {
    width: 100%;
    height: 40px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #E5E7EB;
    padding: 10px;
    transition: border-color 0.2s ease-in-out;
}

.form-group input[type="text"]:focus,
.form-group textarea:focus {
    border-color: #60A5FA;
}

.form-group .invalid-feedback {
    color: #EF4444;
    margin-top: 4px;
    font-size: 14px;
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

        <div class="col-md-8 col-lg-6">
            <div class="card mb-3">
                <div class="card-header text-center">
                    <img src="{{ Storage::url('public/images/profile/'.Auth::user()->imagepath) }}"
                        class="img-fluid rounded-pill" style="width: 50px; height: 50px; object-fit:cover;">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">ID:</div>
                        <div class="col-8 col-md-9">{{ $current_user->department_id }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">User Type:</div>
                        <div class="col-8 col-md-9">{{ ucfirst($current_user->usertype) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">User Name:</div>
                        <div class="col-8 col-md-9">{{ $current_user->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">Email:</div>
                        <div class="col-8 col-md-9">{{ $current_user->email }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">Phone:</div>
                        <div class="col-8 col-md-9">{{ $current_user->phone }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">Birth Date:</div>
                        <div class="col-8 col-md-9">{{ $current_user->birthdate }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-3 text-muted">Address:</div>
                        <div class="col-8 col-md-9">{{ $current_user->address }}</div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-muted mt-3">
                            {{ $current_user->stickyNote }}
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
                            <div class="w-75 pr-1">
                                <input style="width:50%;" type='file' name='imagepath' id="imagepath"
                                    class=" border-0 py-0 pl-0 file-upload-btn" value="{{$current_user->imagepath}}">
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