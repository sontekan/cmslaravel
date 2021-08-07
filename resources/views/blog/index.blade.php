@extends('blog.main')

@section('blog')
<!-- Blog entries-->
<div class="col-lg-8">
 <!-- Nested row for non-featured blog posts-->
 <div class="row">
    @foreach ($blog as $row)
    <div class="col-lg-6">
        <!-- Blog post-->
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="/upload/{{$row->banner}}" alt="banner" width="50px" height="200px" /></a>
            <div class="card-body">
                <div class="small text-muted">Post on {{ $row->created_at->format('d F Y') }}</div>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$row->kategori->nama}}</a>
                <h2 class="card-title h4">{{$row->judul}}</h2>
                <a class="btn btn-primary" href="/{{ $row->slug }}">Baca →</a>
            </div>
        </div>
    </div>
    @endforeach
 </div>
 <!-- Pagination-->
 {{$blog->links('pagination')}}
</div>
@endsection