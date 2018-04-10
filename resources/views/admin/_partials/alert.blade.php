@if(session('message'))
    <div class="row" style="padding: 10px 10px 0 10px;color:#fff;margin-left: 0;margin-right: 0">
        <div class="col-xs-12 alert alert-success">
            {{ session('message') }}
        </div>
    </div>
@endif