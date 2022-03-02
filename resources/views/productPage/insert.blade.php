@extends('base')    
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <h5>Insert Product</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" name="title" class="form-control">
                                @error('title')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">brand</label>
                                <input type="text" name="brand" class="form-control">
                                @error('brand')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">qty</label>
                                <input type="text" name="qty" class="form-control">
                                @error('qty')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">price</label>
                                <input type="text" name="price" class="form-control">
                                @error('price')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">descount_price</label>
                                <input type="text" name="descount_price" class="form-control">
                                @error('descount_price')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">category</label>
                                <select name="category_id" id="" class="form-select">
                                    @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <input type="text" name="description" class="form-control">
                                @error('description')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="" id="" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection