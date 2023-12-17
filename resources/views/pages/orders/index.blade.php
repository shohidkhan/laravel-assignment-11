@extends('layouts.app')
@section("content")
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-header d-flex justify-content-between">
                        <span>Products</span>
                    </h4>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Product name</th>
                                    <th>Product Total Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->total_quantity }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection