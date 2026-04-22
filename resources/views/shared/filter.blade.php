<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                <a href="{{ request()->fullUrlWithQuery(['trash' => false]) }}" class="btn text-{{ !request()->query('trash') ? 'primary' : 'secondary' }}">All</a>|
                <a href="{{ request()->fullUrlWithQuery(['trash' => true]) }}" class="btn text-{{ request()->query('trash') ? 'primary' : 'secondary' }}">Trash</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <form>
            <input type="hidden" name="trash" value="{{ request()->query('trash') }}">
        <div class="row">
            @isset($filterDropDown)
                @include($filterDropDown)
            @endisset
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
                                <button class="btn btn-outline-secondary" id="reset-filter-btn" type="button">
                                    <i class="fa fa-refresh"></i>
                                </button>
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

@push('scripts')
    <script>
        document.getElementById('reset-filter-btn').addEventListener('click', () =>{
            let input = document.getElementById('search-input');
            let selects = document.querySelectorAll('.search-select');

            if(input){
                input.value = "";
            }

            selects.forEach(select => {
                select.selectedIndex = 0;
            })

            window.location.href = window.location.href.split('?')[0];
        })

        const toggleClearButton = () => {
            let query = location.search;
            let pattern = /[?&]search=/;  // ?serach=something or ?company_id=&search=
            let button = document.getElementById('reset-filter-btn');

            if(pattern.test(query)){
                button.style.display = "block";
            }else{
                button.style.display = "none";
            }
        }

        toggleClearButton();
    </script>
@endpush
