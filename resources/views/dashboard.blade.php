@extends('layout.layout')

@section('content')

<div class="container-fluid mt-4">
  <H1>Selamat Datang, {{ Auth::user()->name }} {{ Auth::user()->password }}</H1>
</div>




@endsection

