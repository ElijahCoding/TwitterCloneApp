@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $user->name }}</h3>

        @if (Auth::user()->isNot($user))
          @if (Auth::usr()->isFollowing($user))
            Unfollow
          @else
            <a href="#">Follow</a>
          @endif
        @endif
      </div>
    </div>
  </div>
@endsection
