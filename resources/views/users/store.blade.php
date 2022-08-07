@extends('layouts.app')

@section('title' , 'Home')

@section('content')

{{print_r($req->all())}}
@endsection