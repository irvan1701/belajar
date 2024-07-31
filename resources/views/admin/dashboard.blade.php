@extends('layout.layout')

@section('content')

<div class="container-fluid mt-4">
  <H1>Selamat Datang, {{ Auth::user()->name }}</H1>
</div>




@endsection

