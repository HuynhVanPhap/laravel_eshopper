@if(Session::has('fail'))
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> {{ __('Fail') }}</h5>
        {{ Session::get('fail') }}
    </div>
@endif
