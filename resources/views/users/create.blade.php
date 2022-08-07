@extends('layouts.app')

@section('title' , 'Home')

@section('content')
<form action="{{route('users.store')}}" method="POST" class='container'>

@csrf

<table>
<!-- <tr>
<td><label>id</label></td>
<td><input type="text" name="id"></td>    
</tr> -->
<tr>
    <td><label>Name</label></td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td><label>E-mail</label>
</td>
    <td><input type="email" name="email"></td>
</tr>
<tr>
    <td>
    <label >email verfication</label>

    </td>
    <td>
    <input type="text">
    </td>
</tr>
<tr>
    <td></td>
    <td><button type="submit" class="btn btn-primary">submit</button></td>
</tr>
</table>






</form>
@endsection