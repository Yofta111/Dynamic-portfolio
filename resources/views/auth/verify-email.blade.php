<x-guest-layout>
    <div class="w-full rounded-2xl border border-[#2A2F3A] bg-[#14171C] p-8 shadow-xl shadow-black/30">

        <!-- Badge -->
        <div class="mb-6 flex items-center gap-2.5">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#C9A227]/10 text-[#C9A227]">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25l7.5 3v6c0 4.97-3.192 8.792-7.5 10.5-4.308-1.708-7.5-5.53-7.5-10.5v-6l7.5-3z" />
                </svg>
            </span>
            <span class="font-mono text-[11px] font-medium uppercase tracking-[0.2em] text-[#8B92A3]">Reauthenticate</span>
        </div>

        <h1 class="mb-1 text-xl font-semibold text-[#E7E9EE]">Confirm password</h1>
        <p class="mb-6 text-sm text-[#8B92A3]">This is a protected area. Confirm your password to continue.</p>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
            @csrf

            <!-- Password -->
            <div>
                <label for="password" class="mb-1.5 block font-mono text-[11px] font-medium uppercase tracking-wider text-[#8B92A3]">Password</label>
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-[#8B92A3]">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 10.5V7.125a4.5 4.5 0 119 0V10.5" />
                            <rect x="4.5" y="10.5" width="15" height="9.75" rx="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <input id="password" type="password" name="password" required autofocus autocomplete="current-password"
                           class="w-full rounded-lg border border-[#2A2F3A] bg-[#1B1F27] py-2.5 pl-10 pr-3 text-sm text-[#E7E9EE] placeholder-[#5C6270] outline-none transition focus:border-[#C9A227] focus:ring-2 focus:ring-[#C9A227]/20" />
                </div>
                @error('password')
                <p class="mt-1.5 text-xs text-[#F87171]">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="mt-2 w-full rounded-lg bg-[#C9A227] px-4 py-2.5 text-sm font-semibold text-[#12151A] transition hover:bg-[#DDB53A] focus:outline-none focus:ring-2 focus:ring-[#C9A227]/40 focus:ring-offset-2 focus:ring-offset-[#14171C]">
                Confirm
            </button>
        </form>
    </div>
</x-guest-layout>
