@extends('layouts.master')

@section('title')
Getfast - T-Shirt details
@endsection
@section('content')
<section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-area">
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4 class="text-white">Product Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4">
                                        <div class="book-img-details">
                                            <img src="{{$book->image_url}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="book-title">
                                            <h5>{{$book->title}}</h5>
                                        </div>
                                        <div class="author mb-2">
                                            By <a href="{{route('author', $book->author->slug)}}">{{$book->author->name}}</a>
                                        </div>
                                        @if(($book->quantity) > 1)
                                            <div class="badge badge-success mb-2">In Stock</div><br>{{$book->quantity}} produk tersisa
                                        @else
                                            <div class="badge badge-danger mb-2">out of Stock</div>
                                        @endif
                                        @if($book->discount_rate)
                                            <h6><span class="badge badge-warning">{{$book->discount_rate}}% Discount</span></h6>
                                        @endif
                                        <div class="book-price mb-2">
                                            <span class="mr-1">Price</span>
                                            @if($book->discount_rate)
                                                <span></span><strong class="line-through">Rp. {{$book->init_price}}</strong>
                                            @endif
                                                <span>now</span><strong>Rp. {{$book->price}}</strong>
                                            @if($book->discount_rate)
                                                <div><strong class="text-danger">Save Rp. {{$book->init_price - $book->price}}</strong></div>
                                            @endif
                                        </div>
                                        {{-- <div class="book-category mb-2 py-1 d-flex flex-row border-top border-bottom">
                                            <a href="{{route('category', $book->category->slug)}}" class="mr-4"><i class="fas fa-folder"></i> {{$book->category->name}}</a>
                                            <a href="#review-section" class="mr-4"><i class="fas fa-comments"></i> Reviews</a>
                                        </div> --}}
                                        <ul class="shop-list">
                                            <li>
                                                <strong>Category</strong>
                                                <span class="theme_color"><a href="{{route('category', $book->category->slug)}}" class="mr-4"> {{$book->category->name}}</a></span>
                                            </li>
                                            <li>
                                                <strong>cloth material</strong>
                                                <span class="theme_color">Hyget</span>
                                            </li>
                                            <li>
                                                <strong>Ink material</strong>
                                                <span class="theme_color">Plastisol</span>
                                            </li>
                                            <li>
                                                <strong>Designer</strong>
                                                <span class="theme_color">Getfast Production</span>
                                            </li>
                                        </ul>
                                        <form action="{{route('cart.add')}}" method="post">
                                            @csrf
                                            <div class="cart">
                                            <button type="submit" class="btn btn-danger btn-sm"> Add to cart</button>
                                            <span class="quantity-input mr-2 mb-2">
                                                <a href="#" class="cart-minus" id="cart-minus">-</a>
                                                <input title="QTY" name="quantity" type="text" value="1" class="qty-text">
                                                <a href="#" class="cart-plus" id="cart-plus">+</a>
                                            </span>
                                                <input type="hidden" name="book_id" value="{{$book->id}}">
                                                <button type="submit" class="btn btn-success btn-sm mt-2"> customize  </button>
                                            </div>
                                        </form>
                                        @include('layouts.includes.flash-message')
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="book-description p-3">
                                        <p>{!! Markdown::convertToHtml(e($book->description)) !!}</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
 <!-- Recommendations Card -->
 <div class="card card-body my-4">
    <h4>Similar Items</h4>
    <div class="row">
        @foreach($similarItems as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="img-fluid">
                    <h6 class="card-title">{{ $item->title }}</h6>
                    <p class="card-text">Price: {{ $item->price }}</p>
                    <!-- Add to Cart Button or other actions -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

                        <!-- COMMENTS HERE -->
                        @include('layouts.includes.reviews')
                    </div>
                </div>
                <!-- Sidebar -->
                    @include('layouts.includes.side-bar')
                <!-- Sidebar end -->
            </div>
        </div>
    </section>
@endsection
