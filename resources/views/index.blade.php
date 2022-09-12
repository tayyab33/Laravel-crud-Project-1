@extends('layouts')
@section('content')


<h1>list of data</h1>

<table id="customers">
  <tr>
    <th>id</th>
    <th>Bookprice</th>
    <th>BookName</th>
     <th>Action</th>
  </tr>
  @foreach($Sales as $Sale)
  <tr>
    <td>{{ $Sale->id }}</td>
    <td>{{ $Sale->bookprice }}</td>
    <td>{{ $Sale->bookname }}</td>
    <td> <a href="delete/{{ $Sale->id }}" class="buttonr">delete</a>    &nbsp; <a href="/updater/{{ $Sale->id }}" class="button">update</a></td>

  </tr>
  @endforeach
</table>
<hr>
<br>
<br>

<div>
  <form action="/save">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="bookname" placeholder="Your bookname..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="bookprice" placeholder="Your bookprice..">
  
    <input type="submit" value="Submit">
  </form>
</div>


@endsection
