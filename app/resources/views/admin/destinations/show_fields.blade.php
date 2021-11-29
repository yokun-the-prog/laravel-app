<!-- Tour Id Field -->
<div class="col-sm-12">
    {!! Form::label('tour_id', 'Tour Id:') !!}
    <p>{{ $destination->tour_id }}</p>
</div>

<!-- Spot Id Field -->
<div class="col-sm-12">
    {!! Form::label('spot_id', 'Spot Id:') !!}
    <p>{{ $destination->spot_id }}</p>
</div>

<!-- Erratum Division Id Field -->
<div class="col-sm-12">
    {!! Form::label('erratum_division_id', 'Erratum Division Id:') !!}
    <p>{{ $destination->erratum_division_id }}</p>
</div>

<!-- Arrive At Field -->
<div class="col-sm-12">
    {!! Form::label('arrive_at', 'Arrive At:') !!}
    <p>{{ $destination->arrive_at }}</p>
</div>

<!-- Departure At Field -->
<div class="col-sm-12">
    {!! Form::label('departure_at', 'Departure At:') !!}
    <p>{{ $destination->departure_at }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $destination->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $destination->updated_at }}</p>
</div>

