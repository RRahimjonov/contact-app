<form action="{{ $action }}"
      method="POST"
      style="display: inline" onsubmit="return confirm('Are you sure!')">

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete permanently"><i class="fa fa-times"></i></button>
</form>
