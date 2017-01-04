@extends('layouts.admin')

@section('content')

    @include('user._form',compact('user','url','method','action'))

@endsection