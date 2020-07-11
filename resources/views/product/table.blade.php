<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index => $list)
            <tr>
                <td>{{ $index + $offset + 1 }}</td>
                <td>{{ $list->name ?? '' }}</td>
                <td>{{ $list->qty ?? '' }}</td>
                <td>{{ $list->cost ?? '' }}</td>
                <td>{{ $list->price ?? '' }}</td>
                <td>{{ $list->category->name ?? '' }}</td>
                <td>
                    <a href="{{ url('product/'. $list->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                    <a data-toggle="modal" data-target="#delete{{$list->id}}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                    </a>
                    @include('product.delete')
                </td>
            </tr>
        @endforeach
        
    </tbody>
  </table>