@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card logCard position-absolute top-50 start-50 translate-middle">
                <div class="card-header logCard-Header">{{ __('چوونەژورەوە') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class=" row">
                            <label for="email" class="">{{ __('ئیمەیڵ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="">{{ __('تێپەڕەووشە') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="input @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-1">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn logBTNA">
                                    {{ __('چوونەژوورەوە') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
