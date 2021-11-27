<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $tour->user_id }}</p>
</div>

<!-- Photorally Division Id Field -->
<div class="col-sm-12">
    {!! Form::label('photorally_division_id', 'Photorally Division Id:') !!}
    <p>{{ $tour->photorally_division_id }}</p>
</div>

<!-- Transport Division Id Field -->
<div class="col-sm-12">
    {!! Form::label('transport_division_id', 'Transport Division Id:') !!}
    <p>{{ $tour->transport_division_id }}</p>
</div>

<!-- Schedule Field -->
<div class="col-sm-12">
    {!! Form::label('schedule', 'Schedule:') !!}
    <p>{{ $tour->schedule }}</p>
</div>

<!-- Departure Spot Field -->
<div class="col-sm-12">
    {!! Form::label('departure_spot', 'Departure Spot:') !!}
    <p>{{ $tour->departure_spot }}</p>
</div>

<!-- Departure At Field -->
<div class="col-sm-12">
    {!! Form::label('departure_at', 'Departure At:') !!}
    <p>{{ $tour->departure_at }}</p>
</div>

<!-- Return Spot Field -->
<div class="col-sm-12">
    {!! Form::label('return_spot', 'Return Spot:') !!}
    <p>{{ $tour->return_spot }}</p>
</div>

<!-- Return At Field -->
<div class="col-sm-12">
    {!! Form::label('return_at', 'Return At:') !!}
    <p>{{ $tour->return_at }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tour->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tour->updated_at }}</p>
</div>

