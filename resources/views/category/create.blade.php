@extends('layouts.admin')

@section('content')

    @include('category._form',compact('category','url','method','action'))

@endsection