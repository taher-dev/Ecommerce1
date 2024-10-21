@extends('frontend.partials.master')

@section('title', 'Register')

@section('content')
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Create an Account</h1>
                                            <p class="mb-30">Already have an account? <a
                                                    href="{{ route('login') }}">Login</a>
                                            </p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required name="name"
                                                    placeholder="{{ __('Name') }}" value="{{ old('name') }}"
                                                    autocomplete="name" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required name="username"
                                                    placeholder="{{ __('Username') }}" value="{{ old('username') }}"
                                                    autocomplete="username" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email"
                                                    placeholder="{{ __('Email') }}" value="{{ old('email') }}"
                                                    autocomplete="email" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" required
                                                    autocomplete="new-password" placeholder="{{ __('Password') }}" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password_confirmation" required
                                                    autocomplete="new-password"
                                                    placeholder="{{ __('Confirm Password') }}" />
                                            </div>
                                            <!-- Captcha -->
                                            {{-- <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <input type="text" required="" name="email"
                                                        placeholder="{{ __('Security code') }}" />
                                                </div>
                                                <span class="security-code">
                                                    <b class="text-new">8</b>
                                                    <b class="text-hot">6</b>
                                                    <b class="text-sale">7</b>
                                                    <b class="text-best">5</b>
                                                </span>
                                            </div> --}}
                                            <div class="payment_option mb-50">
                                                <div class="custome-radio">
                                                    <input class="form-check-input" required="" type="radio"
                                                        name="role" value="user" id="exampleRadios3" />
                                                    <label class="form-check-label" for="exampleRadios3"
                                                        data-bs-toggle="collapse" data-target="#bankTranfer"
                                                        aria-controls="bankTranfer">I am a customer</label>
                                                </div>
                                                <div class="custome-radio">
                                                    <input class="form-check-input" required="" type="radio"
                                                        name="role" value="vendor" id="exampleRadios4" />
                                                    <label class="form-check-label" for="exampleRadios4"
                                                        data-bs-toggle="collapse" data-target="#checkPayment"
                                                        aria-controls="checkPayment">I am a vendor</label>
                                                </div>
                                            </div>
                                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="terms"
                                                                required id="exampleCheckbox12" />
                                                            <label class="form-check-label" for="exampleCheckbox12">
                                                                <span>
                                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                        'terms_of_service' =>
                                                                            '<a target="_blank" href="' .
                                                                            route('terms.show') .
                                                                            '" class="underline text-sm text-gray-900 hover:text-amber-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">' .
                                                                            __('Terms of Service') .
                                                                            '</a>',
                                                                        'privacy_policy' =>
                                                                            '<a target="_blank" href="' .
                                                                            route('policy.show') .
                                                                            '" class="underline text-sm text-gray-900 hover:text-amber-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">' .
                                                                            __('Privacy Policy') .
                                                                            '</a>',
                                                                    ]) !!}
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="form-group mb-30">
                                                <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                    name="login">{{ __('Register') }}</button>
                                            </div>
                                            <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be
                                                used to support your experience throughout this website, to manage access to
                                                your account, and for other purposes described in our privacy policy</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <div class="card-login mt-115">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="{{ asset('frontend/assets/imgs/theme/icons/logo-facebook.svg') }}"
                                            alt="Facebook" />
                                        <span>Continue with Facebook</span>
                                    </a>
                                    <a href="#" class="social-login google-login">
                                        <img src="{{ asset('frontend/assets/imgs/theme/icons/logo-google.svg') }}"
                                            alt="Google" />
                                        <span>Continue with Google</span>
                                    </a>
                                    <a href="#" class="social-login apple-login">
                                        <img src="{{ asset('frontend/assets/imgs/theme/icons/logo-apple.svg') }}"
                                            alt="Apple" />
                                        <span>Continue with Apple</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection