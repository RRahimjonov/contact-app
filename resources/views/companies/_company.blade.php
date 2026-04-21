<tr>
    <th scope="row">{{ $loop->index + $companies->firstItem() }}</th>
    <td>{{ $company->name }}</td>
    <td>{{ $company->website }}</td>
    <td>{{ $company->email }}</td>
    <td>
        <a href="{{ route('contacts.index', ['company_id' => $company->id]) }}">
            {{ $company->contacts->count() }}
        </a>
    </td>
    <td width="150">
        @if(request()->query('trash'))
            <form action="{{ route('contacts.restore', $company->id) }}"
                  method="POST"
                  style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-circle btn-outline-info" title="Restore"><i class="fa fa-undo"></i></button>
            </form>
            <form action="{{ route('contacts.force-delete', $company->id) }}"
                  method="POST"
                  style="display: inline" onsubmit="return confirm('Are you sure!')">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete permanently"><i class="fa fa-times"></i></button>
            </form>
        @else
            <a href="{{ route('contacts.show', $company->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
            <a href="{{ route('contacts.edit', $company->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
            <form action="{{ route('contacts.destroy', $company->id) }}"
                  method="POST"
                  style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></button>
            </form>
        @endif
    </td>
</tr>
