<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $spot->name }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $spot->address }}</p>
</div>

<!-- Tel Field -->
<div class="col-sm-12">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{{ $spot->tel }}</p>
</div>

<!-- Spot Location Field -->
<div class="col-sm-12">
    {!! Form::label('spot_location', 'Spot Location:') !!}
    <p>{{ $spot->spot_location }}</p>
</div>

<!-- Standard Term Field -->
<div class="col-sm-12">
    {!! Form::label('standard_term', 'Standard Term:') !!}
    <p>{{ $spot->standard_term }}</p>
</div>


<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $spot->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $spot->updated_at }}</p>
</div>

