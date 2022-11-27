@extends('layouts.auth')

@section('title', 'Enter into account')

@section('content')
    <x-forms.auth-forms title="Enter into account" action="">
        @csrf

        <x-forms.text-input
            name="email"
            type="email"
            placeholder="E-mail"
            required="true"
            :isError="$errors->has('email')">
        </x-forms.text-input>

        @error('email')
        <x.forms.error>
            {{ $message }}
        </x.forms.error>
        @enderror

        <x-forms.text-input
            name="password"
            type="password"
            placeholder="Password"
            required="true"
            :isError="$errors->has('email')">
        </x-forms.text-input>

        <x-forms.primary-button>
            Enter
        </x-forms.primary-button>

        <x-slot:socialAuth>
            <ul class="space-y-3 my-2">
                <li>
                    <a href="#" class="relative flex items-center h-14 px-12 rounded-lg border border-[#A07BF0]">
                        <svg class="shrink0- absolute left-4 w-5 sm:w-6 h-5"></svg>
                        <span class="grow text-xxs md:text-xs font-bold text-center">Github</span>
                    </a>
                </li>
            </ul>
        </x-slot:socialAuth>

        <x-slot:buttons>
            <div class="space-y-3 mt-5">
                <div class="text-xss md:text-xs">
                    <a href="#" class="text-white hover:text-white/70 font-bold">Forgot password?</a>
                </div>
                <div class="text-xss md:text-xs">
                    <a href="{{ route('signUp') }}" class="text-white hover:text-white/70 font-bold">Registration</a>
                </div>
            </div>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection
