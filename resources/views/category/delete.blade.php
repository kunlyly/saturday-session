{{-- <div class="modal fade" id="delete{{$list->id}}" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title" style="text-align: left">Delete Category</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this Category
            </div>
            <div class="modal-footer">
                <form action="{{ url('admin/constructions/' . $list->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <div class="text-right">
                        <button type="submit" class="btn btn-danger save-cancel">@lang('general.delete')</button>
                        <a href="{{ url('category/' .$list->id. '/delete') }}"  class="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<div class="modal"  id="delete{{$list->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            Are you sure want to delete this Category??
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
            <a href="{{ url('category/' .$list->id. '/delete') }}"  class="btn btn-danger">Delete</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
</div>