@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit {{ implode(', ', $user->pluck('name')->toArray()) }} data!</h1>

                        <!--$model instead of $page but you can use $page->id as well--->
        <form action="/admin/changeuserdata/{{ $user->id }}" method="post">
            {!! csrf_field() !!}

@if (!$errors->isEmpty())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $message )
            
            <li>{{ $message }}</li>


        @endforeach

    </ul>

</div>

@endif

<div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name"
    name="title" value="{{ $user->name }}"/>
</div>

<div class="form-group">
    <label for="url">Email Address</label>
    <input type="email" class="form-control" id="email"
    name=url value="{{ $user->email }}"/>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit"/>
</div>

@endsection