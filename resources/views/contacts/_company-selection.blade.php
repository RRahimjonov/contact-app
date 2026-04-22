<div class="col">
    <select class="custom-select search-select" name="company_id"  onchange="this.form.submit()">
        <option value="" selected>All Companies</option>
        @foreach($companies as $company)
            <option value="{{ $company->id }}"
            @if($company->id == request()->query('company_id')) selected @endif
            >{{ $company->name }} ({{ $company->contacts_count }})</option>
        @endforeach
    </select>
</div>


