@if(Session::has('success'))
    <script>
        $(document).ready(function() {
            toastr.success("{{Session::get('success')}}");
        });
    </script>
@endif
