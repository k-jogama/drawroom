@extends('app')

@section('title', 'ユーザー登録')

@section('content')
<div class="container">
  <div class="row">
    <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
      <h1 class="text-center"><a class="text-dark" href="/">drawroom</a></h1>
      <div class="card mt-3">
        <div class="card-body text-center">
          <h2 class="h3 card-title text-center mt-2">{{ config('const.USER_ENTRY') }}</h2>

          @include('error_card_list')

          <div class="card-text">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="md-form">
                <label for="name">{{ config('const.USER_NAME') }}</label>
                <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                <small>{{ config('const.USER_NAME_WARNING') }}</small>
              </div>
              <div class="md-form">
                <label for="email">{{ config('const.MAILADDRESS') }}</label>
                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
              </div>
              <div class="md-form">
                <label for="password">{{ config('const.PASSWORD') }}</label>
                <input class="form-control" type="password" id="password" name="password" required>
              </div>
              <div class="md-form">
                <label for="password_confirmation">{{ config('const.PASSWORD_CONFIRM') }}</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
              </div>
              <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">{{ config('const.USER_ENTRY') }}</button>
            </form>

            <div class="mt-0">
              <a href="{{ route('login') }}" class="card-text">{{ config('const.LOGIN_HERE') }}</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection