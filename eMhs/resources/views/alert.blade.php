

@if(session('create'))
<div class="alert alert-success" role="alert">
  <strong>{{ session('create')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif(session('update'))
<div class="alert alert-warning" role="alert">
  <strong>{{ session('update')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 

@elseif(session('delete'))
<div class="alert alert-danger" role="alert">
  <strong>{{ session('delete')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
