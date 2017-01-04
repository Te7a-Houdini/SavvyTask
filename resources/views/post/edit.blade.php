@extends('layouts.admin')

@section('content')

    @include('post._form',compact('post','url','method','action'))

@endsection