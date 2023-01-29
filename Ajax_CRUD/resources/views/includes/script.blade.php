
<!-- bootstrap js -->
<script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
<!-- jquery js -->
<script src="{{asset('/')}}assets/js/jquery-3.6.1.js"></script>
<!-- jquery js -->
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
    $(document).ready(function(){
        $(document).on('click','.add_student' function(e){
            e.preventDefault();

            let name    = $('#name').val();
            let email   = $('#email').val();
            let phone   = $('#phone').val();
            let course  = $('#course').val();
            console.log(name+email+phone+course);
        });

    });
</script>