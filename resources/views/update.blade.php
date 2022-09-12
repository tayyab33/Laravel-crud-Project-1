@extends('layouts')
@section('content')
    <div>
  <form action="/updateNow/{{ $Sales->id }}">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="bookname" placeholder="Your bookname.." value="{{ $Sales->bookname }}">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="bookprice" placeholder="Your bookprice.." value="{{ $Sales->bookprice }}">
  
    <input type="submit" value="Submit">
  </form>
</div>
@endsection