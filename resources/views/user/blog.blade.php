@section('title', 'Blog | full Surveilance')
@section('meta_desc', 'Blog | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    {{-- <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Blog</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="page-header-thumb">
                        <img src="assets/images/photos/page-title.png" alt="Image-HasTech" width="546" height="281">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Grid Area Wrapper ==-->
    <div class="blog-grid-area section-space">
        <div class="container">
            <div class="row mb-n6 post-border-items">

                @foreach ($blog as $item)
                <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="{{ url('blog-detail', $item->slug) }}" class="post-item-thumb">
                            <img class="w-100" src="{{ $item->img ?? '#' }}" width="370" height="244" alt="Image-HasTech">
                        </a>
                        <div class="post-item-content">
                            <div class="post-item-meta">
                                <div class="post-item-date"><a href="blog.html"><i class="icon icon-calendar"></i> {{ $item->created_at->format('d M Y') }}</a></div>
                                {{-- <div class="post-item-views"><a href="blog.html"><i class="icon icon-eye"></i> 290 Views</a></div> --}}
                            </div>
                            <h4 class="post-item-title mb-2"><a href="{{ url('blog-detail', $item->slug) }}">{{ $item->name }}</a></h4>
                            <p class="post-item-desc">{!! $item->desc !!}</p>
                            <a class="btn-link fw-normal" href="{{ url('blog-detail', $item->slug) }}">Read More <i class="icon fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
                @endforeach

               
              
                
                <div class="col-12">
                    <nav class="pagination-area mt-6 mb-6">
                        @if ($blog->hasPages())
                        {{ $blog->onEachSide(3)->links('user.data.custom_pagination') }}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--== End Blog Grid Area Wrapper ==-->

</main>
@endsection