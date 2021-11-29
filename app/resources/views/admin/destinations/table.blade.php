<div class="table-responsive">
    <table class="table" id="destinations-table">
        <thead>
        <tr>
            <th>Tour Id</th>
        <th>Spot Id</th>
        <th>Erratum Division Id</th>
        <th>Arrive At</th>
        <th>Departure At</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($destinations as $destination)
            <tr>
                <td>{{ $destination->tour_id }}</td>
            <td>{{ $destination->spot_id }}</td>
            <td>{{ $destination->erratum_division_id }}</td>
            <td>{{ $destination->arrive_at }}</td>
            <td>{{ $destination->departure_at }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['destinations.destroy', $destination->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('destinations.show', [$destination->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('destinations.edit', [$destination->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
