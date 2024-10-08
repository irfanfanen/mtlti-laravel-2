@extends('layouts.app2')

@section('title', 'Dashboard')

@section('content')
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id)}}"> {{$post->title}} </a>
                <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-warning"> Edit</a>
            </li>
        @endforeach
    </ul>
@endsection