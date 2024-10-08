@extends('layouts.app2')

@section('title', 'Dashboard')

@section('content')
    <div class="mt-0 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h6 class="text-lg font-semibold">Total Admin</h6>
            <p class="text-2xl font-bold">{{$totalAdmins}}</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h6 class="text-lg font-semibold">Total User</h6>
            <p class="text-2xl font-bold">{{$totalUsers}}</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h6 class="text-lg font-semibold">Total Post</h6>
            <p class="text-2xl font-bold">123</p>
        </div>
    </div>
@endsection