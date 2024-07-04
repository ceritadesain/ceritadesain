<div id="success-alert" class="alert alert-success mb-0 rounded-0 d-none"
    @if (Session::has('notif.success')) style="display: block !important" @endif>
    <div class="container">
        @if (Session::has('notif.success'))
            {{ Session::get('notif.success') }}
        @endif

    </div>

</div>

<div id="error-alert" class="alert alert-danger mb-0 rounded-0 d-none"
    @if (Session::has('notif.error')) style="display: block !important" @endif>
    <div class="container">
        @if (Session::has('notif.error'))
            {{ Session::get('notif.error') }}
        @endif

    </div>

</div>
