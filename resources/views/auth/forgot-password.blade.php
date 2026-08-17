<x-guest-layout>
    <div class="w-full rounded-2xl border border-[#2A2F3A] bg-[#14171C] p-8 shadow-xl shadow-black/30">

        <!-- Badge -->
        <div class="mb-6 flex items-center gap-2.5">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#C9A227]/10 text-[#C9A227]">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                </svg>
            </span>
            <span class="font-mono text-[11px] font-medium uppercase tracking-[0.2em] text-[#8B92A3]">Reset Request</span>
        </div>

        <h1 class="mb-1 text-xl font-semibold text-[#E7E9EE]">Forgot password</h1>
        <p class="mb-6 text-sm text-[#8B92A3]">
            {{ __('Enter your email and we will send you a link to choose a new password.') }}
        </p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-5 rounded-lg border border-[#4ADE80]/20 bg-[#4ADE80]/5 px-4 py-3 text-sm text-[#4ADE80]">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="mb-1.5 block font-mono text-[11px] font-medium uppercase tracking-wider text-[#8B92A3]">Email</label>
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-[#8B92A3]">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0-.828.672-1.5 1.5-1.5h16.5c.828 0 1.5.672 1.5 1.5v10.5a1.5 1.5 0 01-1.5 1.5H3.75a1.5 1.5 0 01-1.5-1.5V6.75z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6" />
                        </svg>
                    </span>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full rounded-lg border border-[#2A2F3A] bg-[#1B1F27] py-2.5 pl-10 pr-3 text-sm text-[#E7E9EE] placeholder-[#5C6270] outline-none transition focus:border-[#C9A227] focus:ring-2 focus:ring-[#C9A227]/20" />
                </div>
                @error('email')
                <p class="mt-1.5 text-xs text-[#F87171]">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="mt-2 w-full rounded-lg bg-[#C9A227] px-4 py-2.5 text-sm font-semibold text-[#12151A] transition hover:bg-[#DDB53A] focus:outline-none focus:ring-2 focus:ring-[#C9A227]/40 focus:ring-offset-2 focus:ring-offset-[#14171C]">
                Email reset link
            </button>
        </form>
    </div>
</x-guest-layout>
