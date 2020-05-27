@extends('admin.layouts.app_admin')

@section('content')
    <h1> Admin Dashboard </h1>
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-info">
                <div class="container">
                    <h1>Categories {{$categoriesCount}}</h1>
                    <p class="lead">count of categories</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-success">
                <div class="container">
                    <h1>Products {{$productsCount}}</h1>
                    <p class="lead">count of products</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-warning">
                <div class="container">
                    <h1>Users {{$usersCount}}</h1>
                    <p class="lead">registered users count</p>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <a href="{{route('admin.category.create')}}" class="btn btn-lg btn-outline-primary btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add New Category</a>
                    {{--  <p class="lead text-secondary">some info</p>  --}}
                </div>
        </div>
        </div>
        <div class="col">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <a href="{{route('admin.product.create')}}" class="btn btn-lg btn-outline-success btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add New Product</a>
              {{--  <p class="lead text-secondary">some info</p>  --}}
            </div>
          </div>
        </div>
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <a onclick="if(confirm('You are about to delete node and all its subtree. Are you sure?')){return true}else{return false}" href="{{route('admin.category.truncate')}}" class="btn btn-lg btn-outline-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Categories Clear</a>
                    {{--  <p class="lead text-secondary">some info</p>  --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <a onclick="if(confirm('You are about to delete node and all its subtree. Are you sure?')){return true}else{return false}" href="{{route('admin.category.fill')}}" class="btn btn-lg btn-outline-danger btn-block"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp; Recreate sample data </a>
                    {{--  <p class="lead text-secondary">some info</p>  --}}
                </div>
            </div>
        </div>
    </div>

{{--  <div class="row">
    @include('admin.categories.components.tree', ['categories'=>$categories])
</div>  --}}

@endsection