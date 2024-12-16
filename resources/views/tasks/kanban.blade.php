@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-6">My Tasks</h1>
    <div class="flex justify-evenly gap-4">
        @foreach (['pending', 'in_progress', 'completed'] as $status)
            <div class="border flex-1 p-4 rounded-lg shadow bg-gray-50">
                <h2 class="font-bold text-lg capitalize">{{ strToUpper(str_replace('_', ' ', $status)) }}</h2>
                <ul class="mt-4 space-y-2">
                    @forelse ($tasks[$status] ?? [] as $task)
                        <li class="p-2 border rounded-lg bg-white shadow">
                            <strong>{{ $task->name }}</strong>
                            <p class="text-sm text-gray-500">{{ $task->created_at->diffForHumans() }}</p>
                        </li>
                    @empty
                        <p class="text-gray-500">No tasks in this column.</p>
                    @endforelse
                </ul>
            </div>
        @endforeach
    </div>
</div>
@endsection
