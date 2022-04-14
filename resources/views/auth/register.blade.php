@extends("layouts.main")

@section('content')
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg');  margin: 0">
        <div class="container position-relative px-4 px-lg-5">
            <div id="page-wrapper">
                <!-- Main -->
                <div id="main-wrapper">
                    <div class="container rounded" style="max-width: 500px; background-color: white; padding: 16px;">
                        <form method="POST">
                            @csrf
                            <h3 class="text-center mb-4" style="color: #007189">Register</h3>
                            <!-- Username input -->
                            @error('username')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="form-outline mb-4">
                                <input name="username" value="{{ old('username') }}" type="text" id="form2Example1"
                                    class="form-control" placeholder="Username" />
                            </div>

                            <!-- Email input -->
                            @error('email')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="form-outline mb-4">
                                <input name="email" value="{{ old('email') }}" type="email" id="form2Example1"
                                    class="form-control" placeholder="Email" />
                            </div>

                            <!-- Password input -->
                            @error('password')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="form-outline mb-4">
                                <input name="password" value="{{ old('password') }}" type="password" id="form2Example2"
                                    class="form-control" placeholder="Password" />
                            </div>
                            <!-- Password confirmation -->
                            @error('password')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="form-outline mb-4">
                                <input name="password_confirmation" value="{{ old('password_confirmation') }}"
                                    type="password" id="form2Example2" class="form-control"
                                    placeholder="Confirm password" />
                            </div>
                            <!-- 2 column grid layout for inline styling -->

                            <div class="row mb-4">
                                <div class="col d-flex">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" name='remember' type="checkbox" value=""
                                            id="form2Example31" checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col text-end">
                                    <!-- Simple link -->

                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>
                            <p class="m-0 text-center" style="font-size: 16px">Already have an account? <a
                                    href="{{ route('login') }}">Log in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
