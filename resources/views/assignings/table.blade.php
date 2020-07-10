<div class="table-responsive">
    <table class="table" id="assignings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Leavel Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($assignings as $assigning)
            <tr>
                <td>{{ $assigning->course_id }}</td>
            <td>{{ $assigning->leavel_id }}</td>
            <td>{{ $assigning->shift_id }}</td>
            <td>{{ $assigning->classroom_id }}</td>
            <td>{{ $assigning->batch_id }}</td>
            <td>{{ $assigning->day_id }}</td>
            <td>{{ $assigning->time_id }}</td>
                <td>
                    {!! Form::open(['route' => ['assignings.destroy', $assigning->assigning_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('assignings.show', [$assigning->assigning_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('assignings.edit', [$assigning->assigning_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
