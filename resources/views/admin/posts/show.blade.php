@extends('layouts.app')

@section('content')



<h3>{{ $post->title }}</h3>
<p>{{ $post->description }}</p>

<a href="{{route('admin.posts.index')}}" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i></a>
<a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square "></i></a>
<a href="" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </td></a>

@endsection
