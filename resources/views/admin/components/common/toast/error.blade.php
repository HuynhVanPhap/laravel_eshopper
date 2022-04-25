@if(Session::has('error'))
    <script>
        $(document).ready(function() {
            toastr.error("{{Session::get('error')}}");
        });
    </script>
@endif
