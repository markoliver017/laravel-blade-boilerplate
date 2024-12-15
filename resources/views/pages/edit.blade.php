@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-center mb-6">Create User</h1>
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700" for="name">Name</label>
                <input class="input w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" type="text" name="name" id="name" value="{{old('name', $user->name ?? '')}}" >
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                <input class="input w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" type="email" name="email" id="email" value="{{old('email', $user->email ?? '')}}" >
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                Submit
            </button>
        </form>
    </div>
@endsection