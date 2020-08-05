@extends('app')

@section('title', 'ログイン')

@section('content')
<div class="container">
  <div class="row">
    <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
      <h1 class="text-center"><a class="text-dark" href="/">drawroom</a></h1>
      <div class="card mt-3">
        <div class="card-body text-center">
          <h2 class="h3 card-title text-center mt-2">{{ config('const.LOGIN') }}</h2>

          @include('error_card_list')

          <div class="card-text">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="md-form">
                <label for="email">{{ config('const.MAILADDRESS') }}</label>
                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
              </div>

              <div class="md-form">
                <label for="password">{{ config('const.PASSWORD') }}</label>
                <input class="form-control" type="password" id="password" name="password" required>
              </div>

              <input type="hidden" name="remember" id="remember" value="on">

              <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">{{ config('const.LOGIN') }}</button>

            </form>

            <div class="mt-0">
              <a href="{{ route('register') }}" class="card-text">{{ config('const.USER_ENTRY_HERE') }}</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection