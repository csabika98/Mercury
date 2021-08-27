@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                    <th>Name</th>
                    <th>Email address</th>
                    <th>Roles</th>
            </tr>
        </thead>

        @foreach ($model as $user )
        <tr>
            <td>
            <a href='/admin/changeuserdata/{{ $user->id }}/edit'>{{ $user->name }}</a>
        </td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit',['user'=>$user->id]) }}">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</a>
            </td>
        </tr>    


        @endforeach


</div>

@endsection