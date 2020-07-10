leavel_id<div class="table-responsive">
    <table class="table" id="leavels-table">
        <thead>
            <tr>
                <th>Leavel</th>
        <th>Course Id</th>
        <th>Leavel Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leavels as $leavel)
            <tr>
                <td>{{ $leavel->leavel }}</td>
            <td>{{ $leavel->course_id }}</td>
            <td>{{ $leavel->leavel_description }}</td>
                <td>
                    {!! Form::open(['route' => ['leavels.destroy', $leavel->leavel_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('leavels.show', [$leavel->leavel_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('leavels.edit', [$leavel->leavel_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
