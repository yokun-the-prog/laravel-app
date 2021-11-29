<div class="table-responsive">
    <table class="table" id="spotTags-table">
        <thead>
        <tr>
            <th>Spot Id</th>
        <th>Tag Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($spotTags as $spotTag)
            <tr>
                <td>{{ $spotTag->spot_id }}</td>
            <td>{{ $spotTag->tag_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['spotTags.destroy', $spotTag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('spotTags.show', [$spotTag->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('spotTags.edit', [$spotTag->id]) }}"
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
