<div>
    @if(session()->has('message'))
        <div class="alert alert-success text-center" style="font-size: 20px">{{ session()->get('message') }}</div>
    @elseif(session()->has('errors'))
        <div class="alert alert-danger text-center" style="font-size: 20px">{{ session()->get('errors') }}</div>
    @endif

</div>
