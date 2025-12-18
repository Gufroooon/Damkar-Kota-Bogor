@extends('layouts.app')

@section('title', 'Login - Dinas Pemadam Kebakaran Kota Bogor')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-red-700 via-red-800 to-gray-900 py-20 flex items-center justify-center">

    <div class="w-full max-w-md bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 shadow-2xl">
        <h2 class="text-3xl font-bold text-center text-white mb-6">
            Masuk Sistem Damkar Kota Bogor
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-white" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
<div>
    <label for="username" class="block text-white font-semibold mb-1">Username</label>
    <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus
        class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:ring-yellow-400 focus:border-yellow-400">

    <x-input-error :messages="$errors->get('username')" class="mt-2 text-yellow-300 text-sm" />
</div>


            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block text-white font-semibold mb-1">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:ring-yellow-400 focus:border-yellow-400">

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-yellow-300 text-sm" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4 flex items-center">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded bg-white/20 text-yellow-400 border-white/30 focus:ring-yellow-400">
                <label for="remember_me" class="ms-2 text-sm text-white">Ingat saya</label>
            </div>

            <!-- Submit -->
            <div class="mt-6 flex justify-between items-center">

                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                    class="text-sm text-yellow-300 hover:text-yellow-400 transition">
                    Lupa password?
                </a>
                @endif

                <button type="submit"
                    class="px-6 py-3 bg-yellow-400 text-red-900 font-bold rounded-lg hover:bg-yellow-500 transition shadow-lg">
                    Masuk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
