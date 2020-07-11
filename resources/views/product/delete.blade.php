<div class="modal"  id="delete{{$list->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            Are you sure want to delete this Product??
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
            <a href="{{ url('product/' .$list->id. '/delete') }}"  class="btn btn-danger">Delete</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
</div>