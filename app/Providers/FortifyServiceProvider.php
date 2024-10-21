<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use Laravel\Fortify\Contracts\LoginResponse;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->instance(LoginResponse::class, new class implements LoginResponse
        {
            public function toResponse($request): RedirectResponse
            {
                return redirect(auth()->user()->getRedirectRoute());
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Login View
        Fortify::loginView(function () {
            return view('frontend.auth.login');
        });

        // Register View
        Fortify::registerView(function () {
            return view('frontend.auth.register');
        });

        // Reset Password View
        Fortify::requestPasswordResetLinkView(function () {
            return view('frontend.auth.forgot-password');
        });

        // Reset Password View
        Fortify::resetPasswordView(function ($request) {
            return view('frontend.auth.reset-password', ['request' => $request]);
        });

        // Two Factor Challenge View
        Fortify::twoFactorChallengeView(function () {
            return view('frontend.auth.two-factor-challenge');
        });

        // Verify Email View
        Fortify::verifyEmailView(function () {
            return view('frontend.auth.verify-email');
        });

        // Confirm Password View
        Fortify::confirmPasswordView(function () {
            return view('frontend.auth.confirm-password');
        });

        // Login With Username Or Email
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)
                ->orWhere('username', $request->email)
                ->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }
        });
        
        // Fortify Default Features Configuration
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
