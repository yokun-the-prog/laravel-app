<div class="table-responsive">
    <table class="table" id="spotFilepaths-table">
        <thead>
        <tr>
            <th>Spot Id</th>
        <th>Title</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($spotFilepaths as $spotFilepath)
            <tr>
                <td>{{ $spotFilepath->spot_id }}</td>
            <td>{{ $spotFilepath->title }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['spotFilepaths.destroy', $spotFilepath->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('spotFilepaths.show', [$spotFilepath->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('spotFilepaths.edit', [$spotFilepath->id]) }}"
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
