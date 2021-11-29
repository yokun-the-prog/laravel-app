<div class="table-responsive">
    <table class="table" id="erratumDivisions-table">
        <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($erratumDivisions as $erratumDivision)
            <tr>
                <td>{{ $erratumDivision->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['erratumDivisions.destroy', $erratumDivision->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('erratumDivisions.show', [$erratumDivision->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('erratumDivisions.edit', [$erratumDivision->id]) }}"
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
