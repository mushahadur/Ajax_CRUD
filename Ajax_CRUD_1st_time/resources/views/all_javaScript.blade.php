<script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(){
        $("#my-form").submit(function(event){
            event.preventDefault();
            var form = $("#my-form")[0];
            var data =  new FormData(form);
            $("#btnSubmit").prop("disabled", true);
            $.ajax({
                type:"POST",
                url:"{{route('addStudent')}}",
                enctype:"multipart/form-data",
                data:data,
                processData:false,
                contentType:false,
                success:function(data){
                    if(data.status == 'success'){
                        $('#output').text("Save Student Info Successfully !!");
                        $("#btnSubmit").prop("disabled", false);
                        $('#studentModal').modal('hide');
                        $('#my-form')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                }, error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors, function (index, value){
                        $('#require').append('<span class="text-danger">'+value+'</span>'+'</br>');
                    });
                }
            });
        });

        // Show Update info New

        $(document).on('click', '.edit_student_form', function (e){
            e.preventDefault();

            let std_id = $(this).attr('stdId');
            let page = $(this).attr('href').split('page=')[1];
            alert(std_id);

            $.ajax({
                url:"{{route('editStudent')}}",
                method:"POST",
                data: {student_id:std_id},
                success:function(res){
                    if(res.status == 'success'){
                        $('#editForm')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                }
            });
        });

        // Show Update info
        // $(document).on('click', '.edit_student_form', function (e){
        //     let id = $(this).data('id');
        //     let name = $(this).data('name');
        //     let email = $(this).data('email');
        //
        //     $('#edit_id').val(id);
        //     $('#edit_name').val(name);
        //     $('#edit_email').val(email);
        //
        // });
        //  Update Student info New
        //  Update Student info by Ajax
        $(document).on('click', '#btnUpdateSubmit', function (e){
            e.preventDefault();
            let edit_id = $('#edit_id').val();
            let edit_name = $('#edit_name').val();
            let edit_email = $('#edit_email').val();
            let edit_image = $('#edit_image').val();
            $.ajax({
                url:"{{route('editStudent')}}",
                method:"POST",
                enctype:"multipart/form-data",
                data: {edit_id:edit_id, edit_name:edit_name, edit_email:edit_email, edit_image:edit_image},
                success:function(res){
                    if(res.status == 'success'){
                        $('#editModal').modal('hide');
                        $('#editForm')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                }, error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors, function (index, value){
                        $('.errorMessage').append('<span class="text-danger">'+value+'</span>'+'</br>');
                    });
                }
            });
        });


        //  Delete Student info by Ajax
        $(document).on('click', '.deleteStudent', function (e){
            e.preventDefault();
            let student_id = $(this).data('id');
            if(confirm("Are You Sure ??")){
                $.ajax({
                    url:"{{route('deleteStudent')}}",
                    method:"POST",
                    data: {student_id:student_id},
                    success:function(res){
                        if(res.status == 'success'){
                            $('.table').load(location.href+' .table');
                        }
                    }
                });
            }
        });
    });

</script>
