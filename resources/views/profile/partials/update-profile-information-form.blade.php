<section>
    <header class="mb-3">
        <h3 class="h5 font-weight-bold text-dark">{{ __('Profile Information') }}</h3>
        <p class="text-muted text-sm">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-3">
        @csrf
        @method('patch')

        <!-- Name Input -->
        <div class="form-group">
            <label for="name" class="font-weight-bold text-dark">{{ __('Name') }}</label>
            <input id="name" name="name" type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $user->name) }}"
                   required autofocus autocomplete="name" />
            @error('name')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Email Input -->
        <div class="form-group">
            <label for="email" class="font-weight-bold text-dark">{{ __('Email') }}</label>
            <input id="email" name="email" type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email', $user->email) }}"
                   required autocomplete="username" />
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-sm text-muted">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="btn btn-link p-0 text-warning align-baseline">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success mt-2 text-sm">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <!-- Action Button -->
        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-warning font-weight-bold px-4">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <span class="text-success font-weight-bold ml-3 text-sm">
                    <i class="fas fa-check-circle mr-1"></i> {{ __('Saved.') }}
                </span>
            @endif
        </div>
    </form>
</section>
