<table class="table table-bordered table-striped table-hover" id="student-table">
    <thead>
    <tr>
        <th scope="col">SI NO</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Course</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->course}}</td>
            <td>
                <a href=""id="edit" class="btn btn-outline-success edit_student_form"
                   data-bs-toggle="modal"
                   data-bs-target="#editModal"
                   data-id="{{$student->id}}"
                   data-name = "{{$student->name}}"
                   data-email = "{{$student->email}}"
                   data-course = "{{$student->course}}"
                >
                    <i class='fas fa-user-edit'></i>
                </a>
                <a  data-id ="{{$student->id}}" class="btn btn-outline-danger deleteStudent" >
                    <i class="fa fa fa-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$students->links() }}
