<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student Panal</title>
   
        <link rel="stylesheet" href="{{asset('/')}}assets/css/all.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
<!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">

</head>
<body>

<header>
        <section class="py-2" style="background-color: #A3D2BE;">
            <div class="container">
                <div class="row py-2  text-secondary ">
                    <div class="col-md-6">
                        <ul class="nav">
                            <li class=" border-end pe-3 border-white"><a href=""><img  src="{{asset('/')}}assets/img/logo.png" alt="logo" style="height:80px;"> </a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav float-end" >
                            <li class="nav-item py-4"> 
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

<section>
    <div class="container">
        <h2 class="pt-5 text-center">This is All student Info</h2>
        <hr/>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">SI NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Course</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>dfgdgdfgdfgdfgdfg@Otto.com</td>
                    <td>4563453</td>
                    <td>algo</td>
                    <td class="border-end">
                        <a href="" class="btn btn-outline-success"><i class='fas fa-user-edit'></i></a>
                        <a href="" class="btn btn-outline-danger" ><i class="fa fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>@Otto</td>
                    <td>4563453</td>
                    <td>algo</td>
                    <td class="border-end">
                        <a href="" class="btn btn-outline-success"><i class='fas fa-user-edit'></i></a>
                        <a href="" class="btn btn-outline-danger" ><i class="fa fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td >Larry the Bird</td>
                    <td>@Otto</td>
                    <td>4563453</td>
                    <td>algo</td>
                    <td class="border-end">
                        <a href="" class="btn btn-outline-success"><i class='fas fa-user-edit'></i></a>
                        <a href="" class="btn btn-outline-danger" ><i class="fa fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- Model Start -->

<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="text-center text-primary" id="addModalLabel">Student Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="saveStudent" method="POST" id="addStudentForm">
          @csrf
        <div class="modal-body">
            <div class="errMessContainer"></div>
             <div class="form-group row mb-3">                                <div class="form-group row mb-3">
                <label class="col-form-label col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-md-3">Email</label>
                <div class="col-md-9">
                    <input type="email" id="email"  name="email" class="form-control" placeholder="Enter Email" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-md-3">Mobile</label>
                <div class="col-md-9">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Mobile Number" />
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-md-3">Course</label>
                <div class="col-md-9">
                    <input type="text" id="course" name="course" class="form-control" placeholder="Enter Course" />
                </div>
            </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success add_student">Save Student Info</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->








<!-- jquery plugins here-->

@include('includes.script')

</body>

</html>
