<div class="col">
    <select class="custom-select">
        <option value="" selected>All Companies</option>
        @foreach($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }} ({{ $company->contacts->count() }})</option>
        @endforeach
    </select>
</div>
