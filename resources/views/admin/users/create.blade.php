@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Page for your website</h1>
        <form action="{{ route('pages.store') }}" method="post">
            @include('admin.pages.paritals.fields')


        </form>


</div>

@endsection