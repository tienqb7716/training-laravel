@extends('dashboard')
@section('content')
<div class="container">
        
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($users as $u)
          <tr>
            <th scope="row">{{$u->id}}</th>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->phone}}</td>
          </tr>
    @endforeach

        </tbody>
      </table>
    </div>

@endsection