<script>
    $(function () {
        $(".data-bootstrap-switch").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    });

    // var Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: false,
    //     timer: 3000
    // });
</script>
