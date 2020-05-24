@extends('admin.layouts.app_admin')

@section('content')
    

    <form class="form-horizontal" action="{{route('admin.product.store')}}" method="post">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.products.components.form')
    </form>

@endsection