@extends('base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                {{-- for category --}}
                <div class="list-group">
                    @foreach ($category as $cat)
                    <a href="{{route('categoryFilter',['cat_id'=>$cat->id])}}" class="list-group-item list-group-item-action">{{$cat->cat_title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{asset('product_image/'.$product->image)}}" class="w-100" style="object-fit:cover;height:200px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                {{-- table product --}}
                                <table class="table">
                                    <tr>
                                        <th>Title</th>
                                        <th>{{$product->title}}</th>
                                    </tr>
                                    <tr>
                                        <th>Categiry</th>
                                        <th>{{$product->category->cat_title}}</th>
                                    </tr>
                                    <tr>
                                        <th>Brand</th>
                                        <th>{{$product->brand}}</th>
                                    </tr>
                                    <tr>
                                        <th>Qualtity</th>
                                        <th>{{$product->qty}}</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h1 class="ms-5">
                    <span class="text-danger ">{{$product->discount_price}}</span>
                    <i class="bi bi-currency-dollar fs-2 "></i><span class="text-muted fs-2 ">:-{{$product->price}}</span>
                </h1>
                <a href="" class="btn btn-success btn-lg ms-3">Add to Card</a>
                <a href="" class="btn btn-warning btn-lg ms-2">Buy Now</a>
            </div>
            <div class="row mt-3  ">
                <div class="col-9 ms-auto">
                    <div class="card body-primary">
                        <div class="card-header bg-primary text-white">Description</div>
                        <div class="card-body">
                            <p class="lead">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection