@extends('layouts.app')
@section("content")
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                @if(session("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ session("success") }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                <div class="card">
                    <h4 class="card-header d-flex  justify-content-between">
                        <span>Add Product</span>
                        <a href="{{ route('admin.products') }}" class="btn btn-primary">Back</a>
                    </h4>
                    <div class="card-body">
                        <form action="{{ route("admin.products.store") }}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="">Product Name</label>
                                <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Product Price</label>
                                <input type="text" class="form-control" placeholder="price of Product " name="price" value="{{ old('price') }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Product quantity</label>
                                <input type="text" class="form-control" placeholder="quantity of Product " name="quantity" value="{{ old('quantity') }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection