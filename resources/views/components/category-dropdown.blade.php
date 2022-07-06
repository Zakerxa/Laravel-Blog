<div class="dropdown">

    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        {{ isset($currentcategory) ? $currentcategory->name : 'Filter By Category' }}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li>
            <a class="dropdown-item" href="/">All</a>
        </li>
        @foreach ($categories as $cat)
            <li>
                <a class="dropdown-item"
                    href="/?category={{ $cat->slug }}{{ request('search') ? '&search=' . request('search') : '' }}{{ request('author') ? '&author=' . request('author') : '' }}">{{ $cat->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
{{-- <select name="" id="" class="p-1 rounded-pill mx-3">
   <option value="">Filter by Tag</option>
</select> --}}
