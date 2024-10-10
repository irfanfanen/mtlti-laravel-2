@extends('layouts.app2')

@section('title', 'Edit Post')

@section('content')
    <nav aria-label="breadcrumb" class="bg-gray-100 py-4 rounded-md mb-0">
        <ol class="flex space-x-2">
            <li>
                <a href="{{ route('posts.index') }}" class="text-blue-600 hover:text-blue-800">Post List</a>
            </li>
            <li>
                <span class="text-gray-500">/</span>
                <span class="text-gray-700 font-medium">Edit Post</span>
            </li>
        </ol>
    </nav>

    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST" class="bg-white p-6 rounded-lg shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{ old('title', $post->title) }}" required>
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="body" class="block text-gray-700">Body</label>
            <textarea name="body" id="body" rows="4" class="w-full p-2 border border-gray-300 rounded mt-1" required>{{ old('body', $post->body) }}</textarea>
            @error('body')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-green-700">Update</button>
    </form>
@endsection
