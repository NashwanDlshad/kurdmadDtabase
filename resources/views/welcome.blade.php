@extends('layouts.app')
@section('content')

@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/home') }}" class="">سەرەتا</a>
    @else
    <a href="{{ route('login') }}" class="logBTN btn position-absolute top-50 start-50 translate-middle">چوونەژوورەوە</a>

    {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif --}}
    @endauth
</div>
@endif
@endsection
