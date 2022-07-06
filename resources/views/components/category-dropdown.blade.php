<div class="dropdown">

    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
      {{isset($currentcategory) ? $currentcategory->name : 'Filter By Category'}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach ($categories as $cat)
            <li><a class="dropdown-item" href="/?category={{ $cat->slug }}">{{ $cat->name }}</a></li>
        @endforeach
    </ul>
</div>
{{-- <select name="" id="" class="p-1 rounded-pill mx-3">
   <option value="">Filter by Tag</option>
</select> --}}
