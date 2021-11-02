@if (count($errors) > 0)
<div class="alert alert-danger" style="">
    <ul style ="padding-left:30px">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif
@if (session('message'))
    <div class="alert alert-success" style="padding-left:20px">
    {{ session('message') }}
    </div>
@endif