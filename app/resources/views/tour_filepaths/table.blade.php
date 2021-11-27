<div class="table-responsive">
    <table class="table" id="tourFilepaths-table">
        <thead>
        <tr>
            <th>Tour Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tourFilepaths as $tourFilepath)
            <tr>
                <td>{{ $tourFilepath->tour_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tourFilepaths.destroy', $tourFilepath->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tourFilepaths.show', [$tourFilepath->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tourFilepaths.edit', [$tourFilepath->id]) }}"
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
