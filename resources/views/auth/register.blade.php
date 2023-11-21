@extends('layouts.auth')

@section('title', 'Household of David CRM - Register')

@section('css')
    
@endsection

@section('content')
    <div class="card overflow-hidden">
        <div class="bg-primary">
            <div class="text-primary text-center p-4">
                <h5 class="text-white font-size-20">Register</h5>
                {{-- <p class="text-white-50">Get your free Veltrix account now.</p> --}}
                <a href="#" class="logo logo-admin">
                    <img src="{{ url('assets/images/logo-sm.png') }}" height="24" alt="logo">
                </a>
            </div>
        </div>

        <div class="card-body p-4">
            <div class="p-3">
                <form class="mt-4" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">First Name<span class="red">*</span></label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Your first name" value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                            <small class="text-danger">{{ $errors->first('first_name') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Last Name<span class="red">*</span></label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Your last name" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <small class="text-danger">{{ $errors->first('last_name') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email<span class="red">*</span></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number<span class="red">*</span></label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Enter phone number" value="{{ old('phone_number') }}">
                        @if ($errors->has('phone_number'))
                            <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Branch<span class="red">*</span></label>
                        <select name="branch" class="form-control @error('branch') is-invalid @enderror">
                            <option value="" selected>Choose your branch</option>
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('branch'))
                            <small class="text-danger">{{ $errors->first('branch') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender<span class="red">*</span></label>
                        <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                            <option value="" selected>Choose your gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @if ($errors->has('gender'))
                            <small class="text-danger">{{ $errors->first('gender') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password">
                        @if ($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12 text-end">
                            <button class="btn btn-primary w-md waves-effect waves-light col-md-12" type="submit">Register</button>
                        </div>
                    </div>

                    {{-- <div class="mt-2 mb-0 row">
                        <div class="col-12 mt-4">
                            <p class="mb-0">By registering you agree to the Veltrix <a href="#" class="text-primary">Terms of Use</a></p>
                        </div>
                    </div> --}}

                </form>

            </div>
        </div>

    </div>

    <div class="mt-5 text-center">
        <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login </a> </p>
        <p>© <?= date('Y') ?> Household of David</p>
    </div>
    @section('js')
        
    @endsection
@endsection