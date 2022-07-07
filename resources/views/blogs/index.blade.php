{{-- <x-layout>

    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>

    <div class="col-8">
        @foreach ($blogs as $blog)
            <div class="card shadow m-2 p-3">
                <h3>
                    <a class="text-decoration-none" href="blog/{{ $blog->slug }}"> {{ $blog->title }}
                    </a>
                </h3>

                <p><a href="categories/{{$blog->category->slug}}">{{$blog->category->name}}</a></p>
                <b class="pb-2">Author :<a class="text-decoration-none text-primary" href="author/{{$blog->author->username}}"> {{$blog->author->name}}</a></b>
                <p class="text-muted">Published at - {{ $blog->created_at->diffForHumans() }} </p>
                <p>{{ $blog->intro }} </p>
            </div>
        @endforeach
    </div>
    <div class="col-4">
        <div class="bg-dark m-2" style="min-height: 300px"></div>
    </div>

</x-layout> --}}

<x-layout>
    <x-hero />
    <x-blog-section :blogs="$blogs"/>
    <x-subscribe />
</x-layout>

</body>

</html>


{{-- @extends('layout')

@section('title')
    <title>Blog</title>
@endsection

@section('content')
    <div class="col-8">
        @foreach ($blogs as $blog)
            <div class="card shadow m-2 p-3">
                <h3>
                    <a href="blog/{{ $blog->slug }}"> {{ $blog->title }}
                    </a>
                </h3>
                <p class="text-muted">Published at - {{ $blog->created_at }} </p>
                <p>{{ $blog->intro }} </p>
            </div>
        @endforeach
    </div>
    <div class="col-4">
        <div class="bg-dark m-2" style="min-height: 300px"></div>
    </div>
@endsection --}}
