@extends('layouts.main')

@section('head')
  @parent
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <div class="jumbotron col-12">
          <h1 class="display-4">Наш адрес</h1>
          <h2 class="lead">{{$city}}</h2>
          <p class="lead">{{$street}}</p>
          <p class="lead ion-ios-telephone"> {{$phone}}</p>
          <p class="lead ion-email"> {{$email}}</p>
        </div>

        <div class="jumbotron jumbotron-fluid">

        </div>
    </div><!--/row-->
  </div>
@endsection
