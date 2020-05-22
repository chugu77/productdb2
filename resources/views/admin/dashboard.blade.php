@extends('admin.layouts.app_admin')

@section('content')
    <h1> Admin Dashboard </h1>
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-info">
                <div class="container">
                    <h1>Categories 10</h1>
                    <p class="lead">count of ategories</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-success">
                <div class="container">
                    <h1>Products 22</h1>
                    <p class="lead">count of products</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-warning">
                <div class="container">
                    <h1>Users 120</h1>
                    <p class="lead">registered users count</p>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <button type="button" class="btn btn-lg btn-outline-primary btn-block">Add New Category</button>
                    <p class="lead text-secondary">some info</p>
                </div>
        </div>
        </div>
        <div class="col">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <button type="button" class="btn btn-lg btn-outline-success btn-block">Add New Product</button>
              <p class="lead text-secondary">some info</p>
            </div>
          </div>
        </div>
    </div>

@endsection