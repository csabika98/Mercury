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
    <label for="title">Title</label>
    <input type="text" class="form-control" id="name"
    name="title" value="{{ $model->name }}"/>
</div>

<div class="form-group">
    <label for="url">URL</label>
    <input type="email" class="form-control" id="email"
    name=url value="{{ $model->email }}"/>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit"/>
</div>

