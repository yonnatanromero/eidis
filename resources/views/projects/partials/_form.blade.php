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
    {!! Form::label('participant', 'Participantes:') !!}
    {!! Form::text('participant') !!}
</div>

<div class="form-group">
    {!! Form::label('percentage', 'Porcentaje:') !!}
    {!! Form::text('percentage') !!}
</div>

<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    {!! Form::checkbox('active') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
