@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Users as $user)
 
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td><button  class="btn btn-primary"><a href="{{route('users.edit',['id'=>$user['id']])}}" style="color:black; text-decoration: none;">Edit</a></button>
      <button  class="btn btn-danger"><a href="{{route('users.destroy',['id'=>$user['id']])}}" style="color:black; text-decoration: none;">Delete</a></button>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection