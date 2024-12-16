@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex justify-between">
        <h2 class="text-2xl font-bold">Welcome to the Dashboard</h2>
        <a href="{{route('users.create') }}" class="btn btn-sm btn-default"> <i class="fa fa-add"></i> Add User</a>
    </div>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-xs btn-default" href="{{route('users.show', $user)}}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-xs btn-default" href="{{route('users.edit', $user)}}"><i class="fa fa-pencil"></i></a>
                        {{-- <a class="btn btn-xs btn-default action_user" data-action="edit" data-obj="{{json_encode($user)}}" href="#"><i class="fa fa-pencil"></i></a> --}}
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-xs" type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No Datas Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>


    {{-- <button class="btn" onclick="my_modal_1.showModal()">open modal</button> --}}
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="flex justify-between">
                <h3 class="text-lg font-bold">Add User</h3>
                <form method="dialog">
                    <button><i class="fa fa-close"></i></button>
                </form>
            </div>
            <p class="py-4">Press ESC key or click the button below to close</p>
            <div class="modal-action">

            </div>
        </div>
    </dialog>
    {{-- @dump(get_defined_vars()) --}}
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        $(document).ready(function(){
            $('.action_user').click(function(){
                var action = $(this).attr('data-action');
                var obj = JSON.parse($(this).attr('data-obj'));
                console.log(obj);
                my_modal_1.showModal();
            });
        });
    }, false);
</script>
{{-- @section('content')
    <h1>Posts</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Create Post</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('users.show', $post) }}">View</a>
                        <a href="{{ route('users.edit', $post) }}">Edit</a>
                        <form action="{{ route('users.destroy', $post) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection --}}