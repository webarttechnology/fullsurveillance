@section('title', 'Product rating | full Surveilance')
@section('meta_desc', 'Product rating | full Surveilance')
@extends('user.master.layout')
@section('content')
<style>
.img-fluid {
    width: 100px !important;
    height: 70px !important;
}
</style>
    <main class="main-content">

        <!--== Start Compare Area Wrapper ==-->
        {{-- <button class="btn btn-sm btn-primary mt-5" style="float: right" id="add-more"><i class="icon-plus"></i></button> --}}

        <div class="compare-page-area section-space">
            <div class="container">
                <div class="table-responsive">
                    <table class="compare-table table table-bordered mb-0">
                        <tbody class="compare-table-content">
                            <tr>
                                <td class="first-column">Product</td>
                                @foreach ($item as $data)
                                    <td class="product-image-title">
                                        <a href="#" class="image">
                                            <img class="img-fluid"
                                                src="{{ url($data->product->product_image[0]->img ?? '#') }}" alt="Image"
                                                width="190px" height="148px">
                                        </a>
                                        <a href="#" class="category">{{ $data->product->name }}</a>
                                        <a href="#" class="title">{{ $data->product->name }}</a>
                                    </td>
                                @endforeach
                            </tr>

                            <tr>
                                <td class="first-column">Description</td>
                                @foreach ($item as $data)
                                    <td class="pro-desc">
                                        <p>{!! $data->product->desc !!}</p>
                                    </td>
                                @endforeach
                            </tr>

                            <tr>
                                <td class="first-column">Price</td>
                                @foreach ($item as $data)
                                    <td class="pro-price">${{ $data->product->actual_price }}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td class="first-column">Color</td>
                                @foreach ($item as $data)
                                    <td class="pro-color">Black</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td class="first-column">Stock</td>
                                @foreach ($item as $data)
                                    <td class="pro-stock">{{ $data->product->status }}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td class="first-column">Rating</td>
                                @foreach ($item as $data)
                                    @php
                                        $datas = App\Models\Ratings::where('product_id', $data->product->id)->pluck('star_rating');
                                        $averageRating = $datas->avg();
                                    @endphp
                                    <td class="pro-ratting">
                                        <i data-star="{{ $averageRating }}"></i>
                                    </td>
                                @endforeach

                            </tr>

                            <tr>
                                <td class="first-column">Remove</td>
                                @foreach ($item as $data)
                                    <td class="pro-remove">
                                        <a href="{{ url('/remove-compare/' . $data->id) }}"><i class="fa fa-trash-o"></i></a>
                                        {{-- <button><i class="fa fa-trash-o"></i></button> --}}
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--== End Compare Area Wrapper ==-->

    </main>
@endsection
@section('script')
    <script></script>
@endsection
