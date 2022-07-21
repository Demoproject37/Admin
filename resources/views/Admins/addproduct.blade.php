@extends('layouts.header')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <a href="{{route('products.index')}}">
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-eye"></i>Show Product
                            </button>
                        </a>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Add Product Page</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Product Form</h3>
                            </div>
                            <hr>
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product name</label>
                                    <input id="cc-pament" name="name"  type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Product Price</label>
                                    <input id="cc-pament" name="price" type="number" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Brand name</label>
                                    <input id="cc-pament" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category</label>
                                    <select class="form-control" name="cetegory">
                                        <option>----------</option>
                                        <option value="2wheeler">2wheeler</option>
                                        <option value="3wheeler">3wheeler</option>
                                        <option value="4wheeler">4wheeler</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <input type="file" name="image" id="file-input" name="file-input" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Write Some Description</label>
                                    <textarea class="form-control" name="dis" id="cc-pament"></textarea>
                                </div>

                                <div>
                                    <button id="payment-button"type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Add Product</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection