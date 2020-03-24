@extends('layouts.master')

@section('title', 'Log in')

@section('content')
<div class="py-12 px-32">
    <h1 class="text-3xl font-bold text-center mb-12">Log in to EGHS French</h1>

    <div class="card mx-auto" style="max-width: 500px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex flex-col mb-6">
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" class="rounded px-4 py-2"
                    required autocomplete="email" autofocus placeholder="your@email.address">
            </div>

            <div class="flex flex-col mb-6">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="rounded px-4 py-2"
                    required placeholder="password123">
            </div>

            <button type="submit" class="px-4 py-2 bg-brand-500 border border-brand-600 rounded text-white mr-6">
                Log in
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

            <p class="mt-12">
                If you're taking French at EGHS but don't have an account, contact your teacher
                for a registration link.
            </p>
        </form>
    </div>
</div>
@endsection
