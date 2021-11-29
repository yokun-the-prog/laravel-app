<!-- Spot Id Field -->
<div class="col-sm-12">
    {!! Form::label('spot_id', 'Spot Id:') !!}
    <p>{{ $spotFilepath->spot_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $spotFilepath->title }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $spotFilepath->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $spotFilepath->updated_at }}</p>
</div>

