@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Page</h1>

                        <!--$model instead of $page but you can use $page->id as well--->
        <form action="{{ route('pages.update', ['page'=>$model->id]) }}" method="post">
            {{ method_field('PUT') }}
            @include('admin.pages.paritals.fields')
            


        </form>


</div>

@endsection