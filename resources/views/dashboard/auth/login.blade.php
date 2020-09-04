@extends('layouts.login')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="{{ asset('assets/admin/images/logo/logo-dark.png') }}"
                                        alt="branding logo">
                                </div>
                                {{-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Easily Using</span>
                  </h6> --}}
                            </div>
                            <div class="card-content">
                                {{-- <div class="text-center">
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                      <span class="la la-facebook"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                      <span class="la la-twitter"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                      <span class="la la-linkedin font-medium-4"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                      <span class="la la-github font-medium-4"></span>
                    </a>
                  </div> --}}
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>Administraion</span>
                                </p>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-body">
                                    @error('password')
                                    <span class="text-danger mb-2">{{$message}}</span>
                                    @enderror
                                    <br>
                                    @error('email')
                                    <span class="text-danger mb-3">{{$message}}</span>
                                    @enderror

                                    <form class="form-horizontal form-simple" action="{{ route('admin.Post.login') }}"
                                        method="post" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" class="form-control"
                                                id="user-password" placeholder="Enter Password">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>

                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember"
                                                        name="remember-me">
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a
                                                    href="recover-password.html" class="card-link">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-block" name="submit"><i
                                                class="ft-unlock"></i> Login</button>
                                    </form>
                                </div>
                                {{-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>New to Modern ?</span>
                  </p> --}}
                                {{-- <div class="card-body">
                        <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection
