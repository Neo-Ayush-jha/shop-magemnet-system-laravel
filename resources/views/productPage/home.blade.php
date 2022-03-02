@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-10">
                    </div>
                    <div class="col">
                        <a href="{{route('create')}}" class="btn btn-success">Insert product</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-brand"><h3>manage prodycts</h3></div>
                        <table class="table">
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>discount_price</th>
                                <th>Qty</th>
                                <th >Image</th>
                                <th>action</th>
                            </tr>
                            @foreach ($products as $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->title}}</td>
                                <td>{{$pro->brand}}</td>
                                <td>{{$pro->price}} </td>
                                <td>{{$pro->discount_price}} <del>{{$pro->discount_price}}</del></td>
                                <td>{{$pro->qty}}</td>
                                <td>
                                    <img src="{{asset('product_image/'.$pro->image)}}" style="height: 50px" alt="">
                                </td>
                                <td>
                                    <a href="{{route('delete',$pro->id)}}" class="btn btn-danger">X</a>
                                    <a href="" class="btn btn-info">edit</a>
                                    <a href="" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection