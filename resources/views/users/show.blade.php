@extends('layouts.default')
@section('title', $user->name)
@section('content')
{{ $user->username }} - {{ $user->email }}
@stop