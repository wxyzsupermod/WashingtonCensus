@extends('layout')
@section('content')
<head><title>City Statistics</title></head>
<a class="btn btn-primary" href="{{route('citys.create')}}">Create</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
      <th>City</th>
      <th>State</th>
      <th>Population 2010</th>
      <th>Population rank</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cities as $city)
  <tr>
      <td>{{$city->name}}</td>
      <td>{{$city->state}}</td>
      <td>{{$city->population_2010}}</td>
      <td>{{$city->population_rank}}</td>
      <td><a href="{{route('citys.show', $city->id)}}">details</a></td>
      <td><a href="{{route('citys.edit', $city->id)}}">edit</a></td>
     
    
        
      

      <td>
        <form action="{{route('citys.destroy', $city->id)}}" method ="POST" onSubmit="return confirm('Are you sure?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-error">Delete</button>
        </form>
      </td>
      
      @endforeach  
    </tr>
  </tbody>
</table>
@endsection