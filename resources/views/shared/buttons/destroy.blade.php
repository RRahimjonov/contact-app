<form action="{{ $action }}"
      method="POST"
      style="display: inline">
    @csrf
    @method('DELETE')
    @if(isset($buttonStyle) && $buttonStyle == 'Delete')
        <button type="submit" class="btn btn-outline-danger" title="Delete">Delete</button>
    @else
        <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></button>
    @endif
</form>
