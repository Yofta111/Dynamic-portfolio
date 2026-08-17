<section>
    <header class="mb-3">
        <h3 class="h5 font-weight-bold text-dark">{{ __('Update Password') }}</h3>
        <p class="text-muted text-sm">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-3">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="form-group">
            <label for="current_password" class="font-weight-bold text-dark">{{ __('Current Password') }}</label>
            <input id="current_password" name="current_password" type="password"
                   class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                   autocomplete="current-password" />
            @error('current_password', 'updatePassword')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- New Password -->
        <div class="form-group">
            <label for="password" class="font-weight-bold text-dark">{{ __('New Password') }}</label>
            <input id="password" name="password" type="password"
                   class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                   autocomplete="new-password" />
            @error('password', 'updatePassword')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="font-weight-bold text-dark">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" name="password_confirmation" type="password"
                   class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                   autocomplete="new-password" />
            @error('password_confirmation', 'updatePassword')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Action Button -->
        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-warning font-weight-bold px-4">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <span class="text-success font-weight-bold ml-3 text-sm">
                    <i class="fas fa-check-circle mr-1"></i> {{ __('Saved.') }}
                </span>
            @endif
        </div>
    </form>
</section>
