@extends('layout')

@section('content')
<div class="column col-3">
<h3> Create a Fake city</h3>
@if ($errors->any())
<div class="toast toast-error">
@foreach ($errors->all() as $error)
<span>{{$error}}</span> <br />
@endforeach
</div>
@endif
<form method="POST" action="{{route('citys.store')}}">
<div class="form-group">
    @csrf
    @include('citys.form')
</form>
</div>
@endsection