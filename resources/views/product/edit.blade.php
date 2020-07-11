@extends('layout.default')
@section('contents')
<div class="row" style="padding-top: 20px">
    <div class="col-md-12">
        <div class="text-center">
            <h3>Update Product</h3>
        </div>
    </div>
</div> <br>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="/product/{{ $data->id }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if($data->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Qty:</label>
          <input type="text" class="form-control" name="qty" placeholder="Enter Qty" id="qty" value="{{ $data->qty }}">
        </div>
        <div class="form-group">
            <label>Cost:</label>
          <input type="text" class="form-control" name="cost" placeholder="Enter Cost" id="cost" value="{{ $data->cost }}">
        </div>
        <div class="form-group">
            <label>Price:</label>
          <input type="text" class="form-control" name="price" placeholder="Enter Price" id="price" value="{{ $data->price }}">
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
            <a href="{{ url('/category') }}" class="btn btn-secondary"> <i class="fa fa-backward" aria-hidden="true"></i>
                Back</a>
        </div>
    </form>

@endsection