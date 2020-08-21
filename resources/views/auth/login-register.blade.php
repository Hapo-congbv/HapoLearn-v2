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
                            <form class="hapo-form-login px-4 py-2">
                                <div class="form-group hapo-login">
                                    <label for="username">User Name:</label>
                                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="User Name">
                                </div>
                                <div class="form-group hapo-login">
                                    <label for="password">Password: </label>
                                    <input type="password" class="form-control" id="password" placeholder="**********">
                                </div>
                                <div class="form-check d-flex justify-content-lg-between">
                                    <div class="hapo-remember-me">
                                        <input type="checkbox" class="form-check-input" id="remember-me">
                                        <label class="form-check-label" for="remember-me">Remember me</label>
                                    </div>
                                    <div class="hapo-forgot">
                                        <a href="">Forgot password</a>
                                    </div>
                                </div>
                                <div class="hapo-login-link d-flex justify-content-lg-center align-items-center mt-3">
                                    <button type="submit" class="btn btn-primary hapo-login-linkbut text-center">Submit</button>
                                </div>
                            </form>
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
