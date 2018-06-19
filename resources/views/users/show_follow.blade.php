@extends('layouts.default')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>{{ $title }}</h1>
  <ul class="users">
    @foreach ($users as $user)
      <li>
        <img src="{{ $user->gravatar() }}" alt="{{ $user->username }}" class="gravatar"/>
        <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->username }}</a>
      </li>
    @endforeach
  </ul>

  {!! $users->render() !!}
</div>
@include('shared._index_foot')
@stop