@extends('layout.default')
@section('content')
<a href="/user/create" class="btn btn-outline-primary">Create New User</a>
<table class="table table-hover">
    <thead>
      <th>Username</th>
      <th>Email</th>
      <th>Created</th>
      <th></th>
    </thead>
    <tbody>
@foreach($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at}}</td>
          <td><a href="/user/{{ $user->id }}/edit" class="btn btn-outline-primary">Edit User</a></td>
        </tr>
@endforeach
    </tbody>
</table>
@endsection