<div class="table-responsive">
    <table class="table" id="schedulings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Leavel Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Semester Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schedulings as $scheduling)
            <tr>
                <td>{{ $scheduling->course_id }}</td>
            <td>{{ $scheduling->leavel_id }}</td>
            <td>{{ $scheduling->shift_id }}</td>
            <td>{{ $scheduling->classroom_id }}</td>
            <td>{{ $scheduling->batch_id }}</td>
            <td>{{ $scheduling->day_id }}</td>
            <td>{{ $scheduling->time_id }}</td>
            <td>{{ $scheduling->teacher_id }}</td>
            <td>{{ $scheduling->semester_id }}</td>
            <td>{{ $scheduling->start_time }}</td>
            <td>{{ $scheduling->end_time }}</td>
            <td>{{ $scheduling->status }}</td>
                <td>
                    {!! Form::open(['route' => ['schedulings.destroy', $scheduling->scheduling_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schedulings.show', [$scheduling->scheduling_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('schedulings.edit', [$scheduling->scheduling_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
