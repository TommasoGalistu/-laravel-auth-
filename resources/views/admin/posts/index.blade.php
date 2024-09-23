@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Caricamento</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)

        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->added_at }}</td>
          <td
          class="d-flex gap-1">
          <a href="{{route('admin.posts.show', $post)}}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
          <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square "></i></a>
          <a href="" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </td></a>
        </tr>
        @endforeach

    </tbody>
  </table>
@endsection