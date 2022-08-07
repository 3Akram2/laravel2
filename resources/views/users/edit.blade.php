@extends('layouts.app')

@section('title' , 'Home')

@section('content')
<form method="POST" action="{{Route('users.update' , ['id' => $user['id'] ])}}">
    @method('PUT')
    @csrf
    <table>
 <tr>
<td><label>id</label></td>
<td><input type="text" name="id" value="{{$user['id']}}"></td>    
</tr> 
<tr>
    <td><label>Name</label></td>
    <td><input type="text" name="name" value="{{$user['name']}}"></td>
</tr>
<tr>
    <td><label>E-mail</label>
</td>
    <td><input type="email" name="email" value="{{$user['email']}}"></td>
</tr>
<tr>
    <td></td>
    <td><button type="submit" class="btn btn-primary">submit</button></td>
</tr>
</table>






</form>
@endsection