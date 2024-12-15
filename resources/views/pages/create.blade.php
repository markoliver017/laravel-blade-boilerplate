@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-center mb-6">Create User</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @include('pages.form')
        </form>
    </div>
@endsection