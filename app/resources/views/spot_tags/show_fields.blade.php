<!-- Spot Id Field -->
<div class="col-sm-12">
    {!! Form::label('spot_id', 'Spot Id:') !!}
    <p>{{ $spotTag->spot_id }}</p>
</div>

<!-- Tag Id Field -->
<div class="col-sm-12">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    <p>{{ $spotTag->tag_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $spotTag->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $spotTag->updated_at }}</p>
</div>

