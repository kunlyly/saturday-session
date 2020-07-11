<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index => $list)
            <tr>
                <td>{{ $index + $offset +1 }}</td>
                <td>{{ $list->name ?? '' }}</td>
                <td>{{ $list->description ?? '' }}</td>
                <td>
                    <a href="{{ url('category/'. $list->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                    <a data-toggle="modal" data-target="#delete{{$list->id}}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                    </a>
                    @include('category.delete')
                </td>
            </tr>
        @endforeach
        
    </tbody>
  </table>