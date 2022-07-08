<x-layout>
    @if (session('success'))
      <p class="alert alert-success text-center">{{session('success')}}</p>
    @endif
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
