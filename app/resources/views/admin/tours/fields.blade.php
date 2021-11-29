<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Photorally Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photorally_division_id', 'Photorally Division Id:') !!}
    {!! Form::text('photorally_division_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Transport Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transport_division_id', 'Transport Division Id:') !!}
    {!! Form::text('transport_division_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule', 'Schedule:') !!}
    {!! Form::text('schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Departure Spot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_spot', 'Departure Spot:') !!}
    {!! Form::text('departure_spot', null, ['class' => 'form-control']) !!}
</div>

<!-- Departure At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_at', 'Departure At:') !!}
    {!! Form::text('departure_at', null, ['class' => 'form-control','id'=>'departure_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#departure_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Return Spot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('return_spot', 'Return Spot:') !!}
    {!! Form::text('return_spot', null, ['class' => 'form-control']) !!}
</div>

<!-- Return At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('return_at', 'Return At:') !!}
    {!! Form::text('return_at', null, ['class' => 'form-control','id'=>'return_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#return_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush