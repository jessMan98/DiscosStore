@extends('layouts.principal')

@section('imagen')
<div class="background_image" style=" background-image:url(MusicStyle/images/featured_2.jpg)"></div>    
@endsection

@section('main')

@include('alerts.adminMessage')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
            

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @section('titulo')
            <div class="home_title" style="text-shadow: #B2A506  3px 5px;">Bienvenido a MusicMR {{ Auth::user()->name }}</div>  
        @endsection
        </div>
    </div>
</div>
@endsection
