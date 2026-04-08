<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <form>
        <div class="row">
            @includeWhen(!empty($companies), 'contacts._company-selection')
            <div class="col">
                <form method="GET">
                    <div class="input-group mb-3">
                        <input type="text"
                               class="form-control"
                               placeholder="Search..."
                               aria-label="Search..."
                               aria-describedby="button-addon2"
                               name="search"
                               id="search-input"
                               value="{{ request()->query('search') }}"
                        >
                        <div class="input-group-append">
                            @if(request()->filled('search') || request()->filled('company_id'))
                                <button class="btn btn-outline-secondary" type="button"
                                onclick="document.getElementById('search-input').value = '', document.getElementById('search-select').selectedIndex = 0, this.form.submit()">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            @endif
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </form>
    </div>
</div>
