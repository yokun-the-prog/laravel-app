@foreach($spots as $spot)
<div class="card">

<div class="card-body p-0">

<div class="card-footer clearfix">
                    <div class="float-left">
    <tr>
        <td>{{ $spot->name }}</td>
        <td>{{ $spot->address }}</td>
        <td>{{ $spot->tel }}</td>
        <td>{{ $spot->standard_term }}</td>
        <td width="120">
            {!! Form::open(['route' => ['spots.destroy', $spot->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{{ route('spots.show', [$spot->id]) }}"
                    class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                </a>
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
    </div>
                </div>
                </div>
                </div>


@endforeach
