<!-- Model Start -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center text-primary" id="editModalLabel">Student Update Form</h1>
                <button type="button" id="close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="text-center errorMessage" id="require"></div>
            <form id="editForm">
                @csrf
                <input type="hidden" id="edit_id">
                <div class="modal-body">
                    <div class="errMessContainer"></div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="edit_name"  name="edit_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" id="edit_email" name="edit_email" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" id="edit_image" name="edit_image" class="form-control" />
                            <img class="pt-3" src="" alt="" height="100" width="130"/>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-3 modal-footer">
                    <div class="row pt-3">
                        <div class="col-md-3 mx-auto">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <input type="submit" id="updateBtn" value="Update Student Info" class="btn btn-outline-primary" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal End -->

