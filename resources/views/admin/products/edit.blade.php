@extends('admin.layouts.app_admin')

@section('content')
    

    <form class="form-horizontal" action="{{route('admin.product.update', $product)}}" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.products.components.form')
    </form>

@endsection