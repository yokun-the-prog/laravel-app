<!-- Tour Id Field -->
<div class="col-sm-12">
    {!! Form::label('tour_id', 'Tour Id:') !!}
    <p>{{ $tourFilepath->tour_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tourFilepath->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tourFilepath->updated_at }}</p>
</div>

