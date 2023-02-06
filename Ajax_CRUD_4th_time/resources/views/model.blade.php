<!-- Model Start -->

<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center text-primary" id="addModalLabel">Student Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="text-center errorMessage"></div>
            <form id="my-form">
                @csrf
                <div class="modal-body">
                    <div class="errMessContainer"></div>
                    <div class="form-group row mb-3">
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
                        <label class="col-form-label col-md-3">Course</label>
                        <div class="col-md-9">
                            <input type="text" id="course"  name="course" class="form-control" placeholder="Enter Course" />
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" class="form-control" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btnSubmit" class="btn btn-success">Save Student Info</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
