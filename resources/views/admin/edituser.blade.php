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
                                    <option value=0 selected>Select ---</option>
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->

                        <!-- Gender -->
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" aria-label="Select gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ $user->gender }}" required autocomplete="gender" autofocus>
                                    <option value=0 selected>Select ---</option>
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
                                <select id="department" aria-label="Select department" class="form-select @error('department') is-invalid @enderror" name="department" value="{{ $user->department }}" required autocomplete="department" autofocus>
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