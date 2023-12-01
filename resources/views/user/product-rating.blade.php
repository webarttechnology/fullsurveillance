@section('title', 'Product rating | full Surveilance')
@section('meta_desc', 'Product rating | full Surveilance')
@extends('user.master.layout')
@section('content')
    <main class="main-content">
        <div class="product-detail-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-detail-thumb me-lg-6">
                            <div class="swiper single-product-thumb-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($product->product_image as $item)
                                        <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="{{ url($item->img ?? '#') }}">
                                            <img src="{{ url($item->img ?? '#') }}" width="640" height="530" alt="Image">
                                        </a>
                                    @endforeach
                                </div>
                                <!-- swiper pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="single-product-nav-wrp">
                                <div class="swiper single-product-nav-slider">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->product_image as $item)
                                            <div class="nav-item swiper-slide">
                                                <img src="{{ url($item->img) }}" alt="Image" width="127"
                                                    height="127">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-style11">
                                    <!--== Start Swiper Navigation ==-->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-detail-content">
                            <h2 class="product-detail-title mt-n1 me-10">{{ $product->name }}</h2>
                            <div class="product-detail-price">${{ number_format($product->discount_price, 2) }} - <span
                                    class="price-old">${{ number_format($product->actual_price, 2) }}</span></div>
                            @if ($checkrating == null)
                                <form action="{{ url('/save-rating') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="product_id" id="product_id">

                                    <div class="product-detail-review">
                                        <div class="product-detail-review-icon">
                                            {{-- <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> --}}

                                            <div class="star-rating">
                                                <input type="radio" id="5-stars" name="rating" value="5" />
                                                <label for="5-stars" class="star">&#9733;</label>
                                                <input type="radio" id="4-stars" name="rating" value="4" />
                                                <label for="4-stars" class="star">&#9733;</label>
                                                <input type="radio" id="3-stars" name="rating" value="3" />
                                                <label for="3-stars" class="star">&#9733;</label>
                                                <input type="radio" id="2-stars" name="rating" value="2" />
                                                <label for="2-stars" class="star">&#9733;</label>
                                                <input type="radio" id="1-star" name="rating" value="1" />
                                                <label for="1-star" class="star">&#9733;</label>
                                            </div>
                                        </div>
                                        {{-- <p class="product-detail-review-show">( 1 Review )</p> --}}
                                    </div>

                                    <div>
                                        <label for="">Add Comments</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="20" rows="5"
                                            placeholder="Write Your Comments !!!!!!!"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                                </form>
                            @else
                                <div class="product-detail-review">
                                    <div class="product-detail-review-icon">
                                        @for ($i = 1; $i <= $checkrating->star_rating; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor

                                        @for ($i = $checkrating->star_rating + 1; $i <= 5; $i++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor

                                    </div>
                                    {{-- <p class="product-detail-review-show">( 1 Review )</p> --}}
                                </div>
                                <div>
                                    <label for=""><u>Comments:</u> </label>
                                    <p>{{ $checkrating->comment }}</p>
                                    {{-- <textarea class="form-control" cols="20" rows="5" placeholder="Write Your Comments !!!!!!!">{{ $checkrating->comment }}</textarea> --}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $('.stars').on('click', function() {
            let ratingValue = $(this).prev().val();
            let productid = $('#product_id').val();
            $.ajax({
                url: '/save-rating',
                method: 'POST',
                data: {
                    rating: ratingValue,
                    prodid: productid
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response.message);
                    // Handle success response as needed
                },
                error: function(error) {
                    console.error('Error:', error);
                    // Handle error response
                }
            });
        });
    </script>
@endsection
