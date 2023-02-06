<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student Creation </title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<header>
    <section class="py-2" style="background-color: #A3D2BE;">
        <div class="container">
            <div class="row text-secondary ">
                <div class="col-md-6">
                    <ul class="nav">
                        <li class=" border-end pe-3 border-white"><a href=""><img  src="{{asset('/')}}assets/img/logo.png" alt="logo" style="height:50px;"> </a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav float-end" >
                        <li class="nav-item py-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentModal">
                                Add a New Student
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</header>

<span class="text-success text-center" id="output"></span>
<section>
    <div class="container">
        <h2 class="pt-3 text-center">This is All student Info</h2>
        <hr/>
        <table class="table table-bordered table-striped table-hover" id="student-table">
            <thead>
            <tr>
                <th scope="col">SI NO</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Course</th>
                <th scope="col">Image</th>
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
                    <td><img src="{{asset($student->image)}}" alt="{{$student->name}}" height="70"width="110"/></td>
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

    </div>
</section>

<!-- Model Start -->
@include('model');
<!-- Modal End -->

<!--Edit  Model Start -->
@include('edit_model');
<!-- Edit Modal End -->

<!--All JavaScript Start -->
@include('all_javaScript');
<!-- All JavaScript  End -->



</body>
</html>
