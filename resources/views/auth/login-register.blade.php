<div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">LOGIN</a>
                            <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">REGISTER</a>
                        </div>
                        <button type="button" class="" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-times d-flex justify-content-center rounded-circle position-absolute align-items-center"></span>
                        </button>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                            <form class="hapo-form-login px-4 py-2" method="POST" action="{{ route('login') }}" >
                                @csrf
                                <div class="form-group hapo-login">
                                    <label for="username">User Name:</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group hapo-login">
                                    <label for="password">Password: </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check d-flex justify-content-between">
                                    <div class="hapo-remember-me d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="hapo-forgot">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="hapo-login-link d-flex justify-content-lg-center align-items-center mt-3">
                                    <button type="submit" class="btn btn-primary hapo-login-linkbut text-center">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </form>
                            <div class="modal-footer pb-3">
                                <span class="login-other mx-auto position-relative">Login with</span>
                                <button type="button" class="btn btn-google col-12 mx-auto border-none mt-n3">
                                    <i class="fab fa-google-plus-g logo-sz"></i> Google
                                </button>
                                <button type="button" class="btn btn-face col-12 mx-auto border-none">
                                    <i class="fab fa-facebook-f logo-sz"></i> Facebook
                                </button>
                            </div>
                            <div class="hapo-login-hr d-flex align-items-center justify-content-center">
                                <hr  width="37%" align="left" /><span class="">Login With</span><hr  width="37%" align="right" />
                            </div>
                            <div class="hapo-login-footer px-4 py-2 d-flex flex-column align-items-center justify-content-center">
                                <a href="#" class="col-12 my-1 py-3 hapo-button-google-link d-flex justify-content-center align-items-center">
                                    <i class="fab fa-google-plus-g" aria-hidden="true"> Google</i>
                                </a>
                                <a href="#" class="col-12 mt-1 mb-4 py-3 hapo-button-facebook-link d-flex justify-content-center align-items-center">
                                    <i class="fab fa-facebook-f" aria-hidden="true"> Facebook</i>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                             <form class="hapo-form-login px-4 py-2">
                                <div class="form-group hapo-register">
                                    <label for="username">User Name:</label>
                                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="User Name">
                                </div>
                                <div class="form-group hapo-register">
                                    <label for="email">Email: </label>
                                    <input type="email" class="form-control" id="email" placeholder="abc@123gmail.com">
                                </div>
                                <div class="form-group hapo-register">
                                    <label for="password">Password: </label>
                                    <input type="password" class="form-control" id="password" placeholder="**********">
                                </div>
                                 <div class="form-group hapo-register">
                                    <label for="password">Repeat Password: </label>
                                    <input type="password" class="form-control" id="repeatpassword" placeholder="**********">
                                </div>
                                <div class="hapo-register-link d-flex justify-content-lg-center align-items-center mt-4 mb-5">
                                    <button type="submit" class="btn btn-primary hapo-register-linkbut text-center">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
