@extends('base')
@section('content')
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-4xl">edit Catrgory</h2>
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3 mt-3 underline">
                                <label for="">title</label>
                                <input type="text" name="cat_title" value="{{$category->cat_title}}" class="form-control">
                                @error('cat_title')
                                <p class="text-danger small">{{$message}}</p>
                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">cat_description</label>
                                <input type="text" name="cat_description" value="{{$category->cat_description}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="submit" value="EDIT" id="" class="btn btn-warning w-100 text-dark underline hover:decoration-dashed ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    
@endsection