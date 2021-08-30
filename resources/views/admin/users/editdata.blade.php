@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Edit user data!</h1>
    
                        <!--$model instead of $page but you can use $page->id as well--->
            <form action="" method="post">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            

<div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name"
    name="title" value="new name"/>
</div>

<div class="form-group">
    <label for="url">Email Address</label>
    <input type="email" class="form-control" id="email"
    name=url value="new email"/>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit"/>
</div>


@endsection
