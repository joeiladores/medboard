@extends('layouts.adminlayout', ['title' => 'Admin-Users'])

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
                    <form method="POST" action="{{ route('updateuser') }}" enctype="multipart/form-data">
                        @csrf                        

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

                        <!-- First Name -->
                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

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

                        <!-- User Type -->
                        <div class="row mb-3">
                            <label for="usertype" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select id="usertype" aria-label="Select user type" class="form-select @error('usertype') is-invalid @enderror" name="usertype" value="{{ $user->usertype }}" required autocomplete="usertype" autofocus>

                                    @if($user->usertype != 'admin') <option value='admin'>{{ 'admin' }}</option>
                                    @else <option selected value="{{ $user->usertype }}">{{ $user->usertype }}</option>
                                    @endif

                                    @if($user->usertype != 'doctor') <option value='doctor'>{{ 'doctor' }}</option>
                                    @else <option selected value="{{ $user->usertype }}">{{ $user->usertype }}</option>
                                    @endif

                                    @if($user->usertype != 'nurse') <option value=3>{{ 'nurse' }}</option>
                                    @else <option selected value="{{ $user->usertype }}">{{ $user->usertype }}</option>
                                    @endif

                                    @if($user->usertype != 'chiefnurse') <option value='chiefnurse'>{{ 'chief nurse' }}</option>
                                    @else <option selected value="{{ $user->usertype }}">{{ $user->usertype }}</option>
                                    @endif
                                </select>
                                @error('usertype')
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
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-light" name="email" value="{{ $user->email }}" required autocomplete="email" readonly>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Will display only if user is admin -->
                        @if(Auth::user()->usertype == 'admin')
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $user->passwrod }}" required autocomplete="new-password">
                            </div>
                        </div>
                        @endif

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
                            <label for="department_id" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select id="department_id" aria-label="Select department" class="form-select @error('department_id') is-invalid @enderror" name="department_id" value="{{ $user->department_id }}" required autocomplete="department_id" autofocus>
                                    <option selected value="{{ $userdept->id }}">{{ $userdept->name }}</option>
                                    @foreach($departments as $department)
                                    @if($department->id != $userdept->id)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Specialization -->
                        <div class="row mb-3">
                            <label for="specialization_id" class="col-md-4 col-form-label text-md-end">{{ __('Specialization') }}</label>

                            <div class="col-md-6">
                                <select id="specialization_id" aria-label="Select specialization" class="form-select @error('specialization_id') is-invalid @enderror" name="specialization_id" value="{{ $user->specialization_id }}" required autocomplete="specialization_id" autofocus>
                                    <option selected value="{{ $userspec->id }}">{{ $userspec->name }}</option>
                                    @foreach($specializations as $specialization)
                                    @if($specialization->id != $userspec->id)
                                    <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('specialization_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select id="status" aria-label="Select status" class="form-select @error('gender') is-invalid @enderror" name="status" required autocomplete="status" autofocus>
                                    <option selected value="{{ $user->status }}">{{ $user->status }}</option>
                                    @if($user->status != 'active')
                                    <option value='active'>active</option>
                                    @else
                                    <option value='inactive'>inactive</option>
                                    @endif
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Path -->
                        <div class="row mb-3">
                            <label for="imagepath" style="cursor: pointer;" class="col-md-4 col-form-label text-md-end">{{ __('Change Profile Photo') }}</label>

                            <div class="col-md-6">

                                <input id="imagepath" type="file" accept=".gif,.jpg,.jpeg,.png,.webp" class="form-control @error('imagepath') is-invalid @enderror" name="imagepath" value="{{ $user->imagepath }}" autocomplete="imagepath" autofocus>

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