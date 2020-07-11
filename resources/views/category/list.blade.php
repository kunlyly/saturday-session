@extends('layout.default')
@section('contents')
<div class="row" style="padding-top: 20px">
    <div class="col-md-12">
        <div class="text-center">
            <h3>List all Categories</h3>
        </div>
        <div class="pull-right">
            <a href="{{ url('category/create') }}" class="btn btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> Create</a>
        </div>
    </div>
</div> <br>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    <i class="fa fa-check" aria-hidden="true"></i> {{ Session::get('success') }}

    {{ Session::forget('success') }}
</div>
@endif
<div class="row">
    @include('category.table')
</div>
<div class="pull-right">{{ $data->links() }}</div>

@endsection