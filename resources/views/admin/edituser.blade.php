@extends('layouts.adminlayout')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">

                    @if( session('error') )
                    <div class="alert alert-danger my-3" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('updateuser') }}">
                        @csrf

                        <!-- User Type -->
                        <div class="row mb-3">
                            <label for="usertype" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select id="usertype" aria-label="Select user type" class="form-select @error('usertype') is-invalid @enderror" name="usertype" value="{{ $user->usertype }}" required autocomplete="usertype" autofocus>
                                    
                                    <option selected value="{{ $user->usertype }}">{{ $user->usertype }}</option>
                                    @if($user->usertype != 'Admin')
                                        <option value="Admin">{{ 'Admin' }}</option>
                                    @endif
                                    @if($user->usertype != 'Doctor')
                                        <option value="Doctor">{{ 'Doctor' }}</option>
                                    @endif
                                    @if($user->usertype != 'Nurse')
                                        <option value="Nurse">{{ 'Nurse' }}</option>
                                    @endif
                                    @if($user->usertype != 'Chief Nurse')
                                        <option value="Chief Nurse">{{ 'Chief Nurse' }}</option>
                                    @endif
                                </select>
                                @error('usertype')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Middle Name -->
                        <div class="row mb-3">
                            <label for="middlename" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ $user->middlename }}" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Birthdate -->
                        <div class="row mb-3">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $user->birthdate }}" required autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <!-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-light" name="email" value="{{ $user->email }}" required autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- Password -->
                        <!-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password }}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- Confirm Password -->
                        <!-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $user->passwrod }}" required autocomplete="new-password">
                            </div>
                        </div> -->

                        <!-- Gender -->
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" aria-label="Select gender" class="form-select @error('gender') is-invalid @enderror" name="gender" required autocomplete="gender" autofocus>
                                    <option selected value="{{ $user->gender }}">{{ $user->gender }}</option>
                                    @if($user->gender != 'Male')
                                        <option value="Male">{{ __('Male') }}</option>
                                    @else
                                        <option value="Female">{{ __('Female') }}</option>
                                    @endif
                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Department -->
                        <div class="row mb-3">
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select id="department" aria-label="Select department" class="form-select @error('department') is-invalid @enderror" name="department" required autocomplete="department" autofocus>
                                    @if($user->usertype == 'Doctor')
                                        <option selected value="{{ $user->department }}">{{ $user->department }}</option>
                                        @if($user->department != 'Emergency Department')
                                            <option value="Emergency Department">{{ 'Emergency Department' }}</option>
                                        @endif
                                        @if($user->department != 'Intensive Care Unit (ICU)')
                                            <option value="Intensive Care Unit (ICU)">{{ 'Intensive Care Unit (ICU)' }}</option>
                                        @endif
                                        @if($user->department != 'Obstetrics and Gynecology   (OB/GYN)')
                                            <option value="Obstetrics and Gynecology (OB/GYN)">{{ 'Obstetrics and Gynecology (OB/GYN)' }}</option>
                                        @endif
                                        @if($user->department != 'Pediatrics')
                                            <option value="Pediatrics">{{ 'Pediatrics' }}</option>
                                        @endif
                                        @elseif($user->department != 'Surgery')
                                            <option value="Surgery">{{ 'Surgery' }}</option>
                                        @if($user->department != 'Cardiology')
                                            <option value="Cardiology">{{ 'Cardiology' }}</option>
                                        @endif
                                        @if($user->department != 'Orthopedics')
                                            <option value="Orthopedics">{{ 'Orthopedics' }}</option>
                                        @endif
                                    @endif
                                    @if($user->usertype == 'Nurse')
                                        <option value={{ $user->department }}>{{ $user->department }}</option>
                                    @endif
                                    @if($user->usertype == 'Administrator')
                                        <option value={{ $user->department }}>{{ $user->department }}</option>
                                        @if($user->department != 'IT Department')
                                            <option value="IT Department">{{ __('IT Department') }}</option>
                                        @endif
                                        @if($user->department != 'Admission')
                                            <option value="Admission">{{ 'Admission' }}</option>
                                        @endif
                                    @endif
                                </select>
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Specialization -->
                        <div class="row mb-3">
                            <label for="specialization" class="col-md-4 col-form-label text-md-end">{{ __('Specialization') }}</label>

                            <div class="col-md-6">
                                <select id="specialization" aria-label="Select specialization" class="form-select @error('specialization') is-invalid @enderror" name="specialization" value="{{ $user->specialization }}" required autocomplete="specialization" autofocus>
                                    <option value=0 selected>Select ---</option>
                                    <option value=0>Doctors ----------</option>
                                    <option value="Internal Medicine">{{ __('Internal Medicine') }}</option>
                                    <option value="Surgeon">{{ __('Surgeon') }}</option>
                                    <option value="Pediatrician">{{ __('Pediatrician') }}</option>
                                    <option value="Ob-gyne">{{ __('Ob-gyne') }}</option>
                                    <option value="Orthopedic">{{ __('Orthopedic') }}</option>
                                    <option value="Cardiologist">{{ __('Cardiologist') }}</option>
                                    <option value="Orthopedics">{{ __('Orthopedics') }}</option>
                                    <option value="Neurologist">{{ __('Neurologist') }}</option>
                                    <option value=0>Nurses ----------</option>
                                    <option value="Registered Nurse">{{ __('Registered Nurse') }}</option>
                                    <option value="ICU Nurse">{{ __('ICU Nurse') }}</option>
                                    <option value="ER Nurse">{{ __('ER Nurse') }}</option>
                                    <option value="Geriatic Nurse">{{ __('Geriatic Nurse') }}</option>
                                    <option value="Orthopedic Nurse">{{ __('Orthopedic Nurse') }}</option>
                                    <option value=0>{{ __('Admin -----------') }}</option>
                                    <option value="Software Developer">{{ __('Software Developer') }}</option>
                                    <option value="Admission Officer">{{ __('Admission Officer') }}</option>
                                </select>
                                @error('specialization')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Path -->
                        <div class="row mb-3">
                            <label for="imagepath" class="col-md-4 col-form-label text-md-end">{{ __('Upload Image File') }}</label>

                            <div class="col-md-6">
                                <input id="imagepath" type="file" class="form-control @error('imagepath') is-invalid @enderror" name="imagepath" value="{{ $user->imagepath }}" autocomplete="imagepath" autofocus>

                                @error('imagepath')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="id" value="{{ $user->id }}">
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection