@extends('layout.default')
@section('contents')
<div class="row" style="padding-top: 20px">
    <div class="col-md-12">
        <div class="text-center">
            <h3>Update Category</h3>
        </div>
    </div>
</div> <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/category/{{ $data->id }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="pwd">Description:</label>
            <textarea name="description" cols="30" rows="3"
                    class="form-control" placeholder="Enter Description">{{ $data->description ?? '' }}</textarea>
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
            <a href="{{ url('/category') }}" class="btn btn-secondary"> <i class="fa fa-backward" aria-hidden="true"></i>
                Back</a>
        </div>
    </form>

@endsection