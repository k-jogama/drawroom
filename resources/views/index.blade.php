@extends('app')

@section('title', 'ホーム')

@section('content')
@include('nav')
<div class="container">
  <div id="accordion-search" class="accordion mt-3">
    <div class="card bg-light">
      <div id="header-search" class="header btn btn-link" data-toggle="collapse" data-target="#card-search" aria-expanded="true" aria-controls="card-search">
        <i class="fas fa-search"></i>{{ config('const.SEARCH_CONDITION') }}
      </div>
      <div id="card-search" class="collapse" aria-labelledby="header-search" data-parent="#accordion-search">
        <div class="card-body">
          <div>
            <div>{{ config('const.SEARCH_WORD') }}</div>
            <div><input type="text" name="search-word" class="search-word"></div>
          </div>
          <div class="mt-3">
            <div>{{ config('const.WORKLOCATION') }}</div>
            <div><input type="text" name="worklocation" class="worklocation"></div>
          </div>
          <div class="text-center mt-5">
            <button type="button" class="btn btn-info w-25">{{ config('const.TO_SEARCH') }}</button>
            <button type="button" class="btn btn-outline-info w-25">{{ config('const.CONDITION_CREAR') }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-3">
    {{ config('const.ALL') }}{{ count($posts) }}{{ config('const.COUNT') }}
  </div>
  @foreach($posts as $post)
  <div class="card mb-4 shadow-sm mt-3">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">
        <a href="">{{ $post['title'] }}</a>
      </h4>
    </div>
    <div class="card-body">
      <div>{{ $post['text'] }}</div>
      <div class="text-right mt-5">
        <span class="ml-3 small">{{ config('const.CONTRIBUTOR') }}：<a href="">{{ $post['contributor'] }}</a></span>
        <span class="ml-3 small">{{ config('const.POSTDATE') }}：{{ $post['postdate'] }}</span>
        <span class="ml-3 small">{{ config('const.WORKLOCATION') }}：{{ $post['worklocation'] }}</span>
        <span class="ml-3 small">{{ config('const.DELIVERYDATE') }}：{{ $post['deliverydate'] }}</span>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection