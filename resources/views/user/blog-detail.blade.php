@section('title', ''.$blog->name.'')
@section('meta_desc', ''.$blog->name.'')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Blog Detail Area Wrapper ==-->
    <div class="blog-detail-area section-space">
        <div class="container">
            <div class="blog-detail">
                <img class="blog-detail-img w-100 mb-7" src="{{ $blog->img ?? '#' }}" width="1170" height="500" alt="Image">
                <div class="blog-detail-meta">
                    <a class="blog-detail-post-date" href="{{ url('blog') }}"><i class="icon-calendar"></i>{{ $blog->created_at->format('M d, Y') }}</a>
                    {{-- <a class="blog-detail-post-views" href="{{ url('blog') }}"><i class="icon-eye"></i> 290 Views</a> --}}
                </div>
                <h2 class="blog-detail-title"> {{ Str::limit($blog->name, 30, '...') }}</h2>
                <p class="mb-8">{!!  Str::limit( $blog->desc, 100, '...') !!}</p>
              
            </div>
        </div>
    </div>
    <!--== End Blog Detail Area Wrapper ==-->
</main>
@endsection