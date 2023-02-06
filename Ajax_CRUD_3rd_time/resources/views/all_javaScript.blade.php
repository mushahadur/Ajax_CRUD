
<script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function (){
        $(document).on('click', '#btnSubmit', function (e){
            e.preventDefault();
            let name = $('#name').val();
            let email = $('#email').val();
            let course = $('#course').val();
            $.ajax({
                url:"{{route('addStudent')}}",
                method:"POST",
                data: {name:name, email:email, course:course},
                success:function(res){
                    if(res.status == 'success'){
                        $('#studentModal').modal('hide');
                        $('#my-form')[0].reset();
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


        // Show Update info
        $(document).on('click', '.edit_student_form', function (e){

            let id = $(this).data('id');
            let name = $(this).data('name');
            let email = $(this).data('email');
            let course = $(this).data('course');

            $('#edit_id').val(id);
            $('#edit_name').val(name);
            $('#edit_email').val(email);
            $('#edit_course').val(course);
        });

        //  Update Student info by Ajax
        $(document).on('click', '#btnUpdateSubmit', function (e){
            e.preventDefault();
            let edit_id = $('#edit_id').val();
            let edit_name = $('#edit_name').val();
            let edit_email = $('#edit_email').val();
            let edit_course = $('#edit_course').val();
            $.ajax({
                url:"{{route('editStudent')}}",
                method:"POST",
                data: {edit_id:edit_id, edit_name:edit_name, edit_email:edit_email, edit_course:edit_course},
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
