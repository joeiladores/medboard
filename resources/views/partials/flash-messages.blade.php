<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>	
                {{ $message }}
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>	
                {{ $message }}
            </div>
            @endif

            @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>	
                {{ $message }}
            </div>
            @endif

            @if ($message = Session::get('info'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>	
                {{ $message }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>	
                Please check the form for errors
            </div>
            @endif
        </div>
    </div>
</div>