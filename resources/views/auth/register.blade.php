@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- User Type -->
                        <div class="row mb-3">
                            <label for="usertype" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select user type" name="usertype" id="usertype" required>
                                    <option selected>Select ---</option> 
                                    <option value="Admin">{{ __('Admin') }}</option>
                                    <option value="Doctor">{{ __('Doctor') }}</option>
                                    <option value="Nurse">{{ __('Nurse') }}</option>
                                    <option value="Chief Nurse">{{ __('Chief Nurse') }}</option>
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
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

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
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

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
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select gender" name="gender" id="gender" required>
                                    <option selected>Select ---</option> 
                                    <option value="Male">{{ __('Male') }}</option>
                                    <option value="Female">{{ __('Female') }}</option>
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
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

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
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                                <select class="form-select" aria-label="Select gender" name="department" id="department" required>
                                    <option value=0 selected>Select ---</option> 
                                    <option value=0>Doctors ----------</option> 
                                    <option value="Emergency Department">{{ __('Emergency Department') }}</option>
                                    <option value="Intensive Care Unit (ICU)">{{ __('Intensive Care Unit (ICU)') }}</option>
                                    <option value="Obstetrics and Gynecology (OB/GYN)">{{ __('Obstetrics and Gynecology (OB/GYN)') }}</option>
                                    <option value="Pediatrics">{{ __('Pediatrics') }}</option>
                                    <option value="Surgery">{{ __('Surgery') }}</option>
                                    <option value="Cardiology">{{ __('Cardiology') }}</option>
                                    <option value="Orthopedics">{{ __('Orthopedics') }}</option>\
                                    <option value=0>{{ __('Nurses ----------') }}</option>
                                    <option value="Nursing Department">{{ __('Nursing Department') }}</option>
                                    <option value=0>{{ __('Admin ----------') }}</option>
                                    <option value="IT Department">{{ __('IT Department') }}</option>
                                    <option value="Admission">{{ __('Admission') }}</option>
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
                            <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Specialization') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select gender" name="specialization" id="specialization" required>
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
                                    <option value="IT Department">{{ __('IT Department') }}</option>
                                    <option value="Admission">{{ __('Admission') }}</option>
                                   
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
                                <input id="imagepath" type="file" class="form-control @error('imagepath') is-invalid @enderror" name="imagepath" value="{{ old('imagepath') }}" required autocomplete="imagepath" autofocus>

                                @error('imagepath')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
