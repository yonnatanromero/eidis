<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>

<div class="form-group">
    {!! Form::label('completed', 'Completed:') !!}
    {!! Form::checkbox('completed') !!}
</div>

<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    {!! Form::checkbox('active') !!}
</div>


<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
