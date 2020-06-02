@extends('layout')
@section('content')

<div class="card">
  <div class="card-image">
    <img src="{{ asset('img/city.jpg') }}" class="img-responsive">
  </div>
  <div class="card-header">
    <div class="card-title h5">{{$city->name}}</div>
    <div class="card-subtitle text-gray">{{$city->state}}</div>
  </div>
  <div class="card-body">
    <p>Population 2010: {{$city->population_2010}}</p>
    <p>Population Rank: {{$city->population_rank}}</p>
  </div>
  <div class="card-footer">
  <a href = " {{ route('citys.index') }} "><button class="btn btn-primary">Back</button></a>
  </div>
</div>
@endsection
