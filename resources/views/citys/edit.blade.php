@extends('layout')

@section('content')
<div class="column col-3">
<h3> Edit City</h3>
@if ($errors->any())
<div class="toast toast-error">
@foreach ($errors->all() as $error)
<span>{{$error}}</span> <br />
@endforeach
</div>
@endif
<form method="POST" action="{{route('citys.update', $city->id)}}">
<div class="form-group">
    @csrf
    @method('PUT')
    @include('citys.form')
</form>
</div>
@endsection