@extends('layouts.master')

@section('content')

<div class="py-16 px-2">
    <h1 class="text-center text-5xl text-purple"><strong>ADMIN LOGIN</strong></h1>

    <div class="h-8"></div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="px-4 sm:px-16 py-16 container mx-auto flex flex-col">
            <div class="mb-8 w-full flex flex-col sm:flex-row flex-wrap items-start sm:items-center">
                <div class="w-full flex flex-col sm:flex-row">
                    <label class="inline-block w-full sm:w-1/4 pr-4" for="name">{{ __('Name') }}</label>

                    <input class="inline-block w-full sm:w-3/4 px-4 py-2 bg-darkbg border-2 {{ $errors->has('password') ? 'border-red' : 'border-teal' }}"  id="name" type="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                @if ($errors->has('name'))
                    <span class="text-red-600" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="mb-8 w-full flex flex-col sm:flex-row flex-wrap items-start sm:items-center">
                <div class="w-full flex flex-col sm:flex-row">
                    <label class="inline-block w-full sm:w-1/4 pr-4" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <input class="inline-block w-full sm:w-3/4 px-4 py-2 bg-darkbg border-2 {{ $errors->has('password') ? 'border border-red' : 'border-teal' }}"  id="password" type="password" name="password" required>
                </div>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="mb-8 flex justify-end items-center">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="pl-2" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="mb-8 flex justify-end">
                <button type="submit" class="px-6 py-1 bg-orange text-darkbg"><strong>$login</strong></button>
            </div>
        </div>
    </form>
</div>
@endsection
