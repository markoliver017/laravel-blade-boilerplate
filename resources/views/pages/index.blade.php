@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2 class="text-2xl font-bold">Welcome to the Dashboard</h2>
    <p>This is your dashboard content.</p>
    @dump(get_defined_vars())
@endsection