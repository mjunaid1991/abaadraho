@extends('layouts.master')
@section('meta_keywords', '')
@section('meta_description')
@section('meta_title', '')
@section('content')

    <section class="our-log-reg bgc-f7">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_content style2 mb0-991">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active text-thm" aria-current="page">Login</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

        @if (request()->get('ref'))
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="text-center text-danger fz20" role="alert">
                            Please login to continue.
                        </p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @include('partials.errors')
                    @include('partials.messages')
                </div>
                <div class="col-md-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="login_form inner_page">
                        <form action="/web/login" method="POST" id="login-form">
                            @csrf
                            <div class="heading">
                                <h3 class="text-center">Login To Your Account</h3>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"
                                       @if(Cookie::has('adminemail')) value="{{ Cookie::get('adminemail') }}" checked
                                       @endif name="email" id="inlineFormInputGroupUsername2"
                                       placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"
                                       @if(Cookie::has('adminpwd')) value="{{ Cookie::get('adminpwd') }}"
                                       @endif name="password" id="exampleInputPassword1" placeholder="Password"
                                       required>
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember"
                                       value="First_Choice">
                                <label class="custom-control-label" for="remember">Remember me</label>
                                <a class="tdu btn-fpswd float-right" href="{{url('/reset-password')}}">Forgot
                                    Password?</a>
                            </div>
                            <input type="hidden" name="ref"
                                   value="{!! request()->get('ref') ?: (request()->server('HTTP_REFERER') ?: config('app.url')) !!}">
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>

                            <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
                            <div class="row">
                                <div class="col-lg">
                                    <!-- <a href="{{ route('facebook.login') }}"
                                       class="btnFacebookLogin btn btn-block color-white bgc-fb mb0 login-social"><i
                                            class="fa fa-facebook"></i> Facebook</a> -->

                                    <a href="{{ route('facebook-auth') }}"
                                       class="btnFacebookLogin btn btn-block color-white bgc-fb mb0 login-social"><i
                                            class="fa fa-facebook"></i> Facebook</a>
                                </div>

                                <div class="col-lg">
                                    <!-- <a href="/google-login?ref={!! request()->get('ref') ?: (request()->server('HTTP_REFERER') ?: config('app.url')) !!}"
                                       class="btnGoogleLogin btn btn2 btn-block color-white bgc-gogle mb0 login-social"><i
                                            class="fa fa-google"></i> Google</a> -->
                                    <a href="{{ route('google-auth') }}" class="btnGoogleLogin btn btn2 btn-block color-white bgc-gogle mb0 login-social"><i class="fa fa-google"></i> Google</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="sign_up_form inner_page">
                        <div class="heading">
                            <h3 class="text-center">Register Your Account</h3>
                        </div>
                        <div class="details">
                            <form action="/register-web-user" method="POST" id="registration-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName" name="first_name" placeholder="First Name" value="{!! old('first_name') !!}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName" name="last_name" placeholder="Last Name" value="{!! old('last_name') !!}" required>
                                </div>
                                <div class="form-group">
                                    {{-- phoneInputMask --}}
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{!! old('phone_number') !!}" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{!! old('email') !!}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="registerConfirmPassword" name="password_confirmation" placeholder="Re-enter Password" required>
                                </div>
                                <input type="hidden" name="ref" value="{!! request()->get('ref') ?: (request()->server('HTTP_REFERER') ?: config('app.url')) !!}">
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        small.help-block {
            color: #ec1c23;
        }

        .intl-tel-input {
            width: 100%;
        }
    </style>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#registration-form')
                .find('[name="phone_number"]')
                .intlTelInput({
                    utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js',
                    autoPlaceholder: true,
                    preferredCountries: ['pk', 'us', 'gb']
                });

            $('#registration-form')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                notEmpty: {
                                    message: 'First Name is Required'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                notEmpty: {
                                    message: 'Last Name is Required'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Email is Required'
                                },
                                emailAddress: {
                                    message: 'Email is not valid'
                                }
                            }
                        },
                        phone_number: {
                            validators: {
                                notEmpty: {
                                    message: 'The Phone Number is required'
                                },
                                callback: {
                                    message: 'The Phone Number is not valid',
                                    callback: function (value, validator, $field) {

                                        var mobilenum = $field.intlTelInput("getNumber", intlTelInputUtils.numberFormat.E164);
                                        $field.val(mobilenum);

                                        return value === '' || $field.intlTelInput('isValidNumber');
                                    }
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'Password is Required'
                                }
                            }
                        },
                        password_confirmation: {
                            validators: {
                                notEmpty: {
                                    message: 'Password Confirmation is Required'
                                }
                            }
                        }
                    }
                })
                // Revalidate the number when changing the country
                .on('click', '.country-list', function () {
                    $('#registration-form').formValidation('revalidateField', 'phone_number');
                });

            $('#login-form')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Email is Required'
                                },
                                emailAddress: {
                                    message: 'Email is not valid'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'Password is Required'
                                }
                            }
                        }
                    }
                })
        });
    </script>
@endsection
