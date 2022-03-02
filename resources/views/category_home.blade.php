@extends('base')
@section('content')
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-2">
                @include('side')
            </div>
            @if (Session::has('message'))
            <p class="bg-success">{!!Session::get('message')!!}</p>
        @endif
            {{-- <div class="row"> --}}
                <div class="col-lg-3 ">
                
                    <div class="card">
                        <div class="card-body ">
                            <h2 class="text-4xl">Create Catrgory</h2>
                            <form action="/category" method="post">
                                @csrf
                                <div class="mb-3 mt-3 underline">
                                    <label for="">title</label>
                                    <input type="text" name="cat_title" class="form-control">
                    {{-- validation --}}
                                    @error('cat_title')
                                    <p class="text-danger small">{{$message}}</p>
                                        
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">cat_description</label>
                                    <input type="text" name="cat_description" class="form-control">
                                    
                                    @error('cat_description')
                                    <p class="text-danger small">{{$message}}</p>   
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" id="" class="btn btn-danger text-dark underline hover:decoration-dashed ">
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card">
                        <div class="card-body">
                            <table class="table hover:decoration-dashed ">
                                <tr>
                                    <th>id</th>
                                    <th>cat_title</th>
                                    <th>cat_description</th>
                                    <th>action</th>
                                </tr>
                                @foreach ($category as $ayush)
                            <tr>
                                <td>{{$ayush->id}}</td>
                                <td>{{$ayush->cat_title}}</td>
                                <td>{{$ayush->cat_description}}</td>
                                <td>
                                    <a href="/delete/{{$ayush->id}}" class="btn btn-danger">Delete</a>
                                    <a href="/category/edit/{{$ayush->id}}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection