@extends('layouts.auth')

@section('title', 'Registration')

@section('content')
    <x-forms.auth-forms title="Registration" action="">
        @csrf

        <x-forms.text-input
            name="name"
            type="text"
            placeholder="Name"
            required="true"
            :isError="$errors->has('name')">
        </x-forms.text-input>

        @error('name')
        <x.forms.error>
            {{ $message }}
        </x.forms.error>
        @enderror

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
            :isError="$errors->has('password')">
        </x-forms.text-input>

        @error('password')
        <x.forms.error>
            {{ $message }}
        </x.forms.error>
        @enderror

        <x-forms.text-input
            name="password_confirmation"
            type="password"
            placeholder="Repeat password"
            required="true"
            :isError="$errors->has('email')">
        </x-forms.text-input>

        @error('password_confirmation')
        <x.forms.error>
            {{ $message }}
        </x.forms.error>
        @enderror

        <x-forms.primary-button>
            Registration
        </x-forms.primary-button>

        <x-slot:socialAuth>
            <ul class="space-y-3 my-2">
                <li>
                    <a href="#"
                       class="relative flex items-center h-14 px-12 rounded-lg border border-[#A07BF0] bg-white/20 hover:bg-white/20 active:bg-white/10 active:transition">
                        <svg class="shrink0- absolute left-4 w-5 sm:w-6 h-5"></svg>
                        <span class="grow text-xxs md:text-xs font-bold text-center">Github</span>
                    </a>
                </li>
            </ul>
        </x-slot:socialAuth>

        <x-slot:buttons>
            <div class="space-y-3 mt-5">
                <div class="text-xss md:text-xs">
                    <a href="{{ route('login') }}" class="text-white hover:text-white/70 font-bold">Sign up into account</a>
                </div>
            </div>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection
