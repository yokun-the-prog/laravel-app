<!-- Tour Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tour_id', 'Tour Id:') !!}
    {!! Form::text('tour_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Spot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spot_id', 'Spot Id:') !!}
    {!! Form::text('spot_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Erratum Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('erratum_division_id', 'Erratum Division Id:') !!}
    {!! Form::text('erratum_division_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Arrive At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arrive_at', 'Arrive At:') !!}
    {!! Form::text('arrive_at', null, ['class' => 'form-control','id'=>'arrive_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#arrive_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

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