@extends('layouts.header')
@section('content')
    <link rel="stylesheet" href="{!! url('show/css/style.css') !!}">
    <link rel="stylesheet" href="{!! url('show/css/bootstrap/bootstrap.min.css') !!}" media="all">
    </head>

    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"></h2>
                            <a href="{{ route('products.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section" style="text-align: center;">All Product </h2>
                        {!! $product->withQueryString()->links() !!}
                        
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Brand</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $pro)
                                        <tr class="alert" role="alert">
                                            <td>
                                                <div class="img"
                                                    style="background-image: url(/image/{{ $pro->image }});">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="email">
                                                    <span> {{ $pro->name }}</span>
                                                    <span> {{ $pro->cetegory }}</span>
                                                </div>
                                            </td>
                                            <td>₹ {{ $pro->price }}</td>
                                            <td> {{ $pro->brand }}
                                            </td>
                                            <td> {{ $pro->dis }}</td>
                                            <td>
                                                <a href="{{ route('products.edit', $pro->id) }}"><button type="button"
                                                        class="close">
                                                        <span><i class="fa fa-edit"></i></span>
                                                    </button></a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('products.destroy', $pro->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href=""><button type="submit" class="close">
                                                            <span><i class="fa fa-trash"></i></span>
                                                        </button></a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>

        <script src="{!! url('show/js/jquery.min.js') !!}"></script>
        <script src="{!! url('show/js/popper.js') !!}"></script>
        <script src="{!! url('show/js/bootstrap.min.js') !!}"></script>
        <script src="{!! url('show/js/main.js') !!}"></script>
    @endsection
