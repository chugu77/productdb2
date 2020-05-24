@extends('admin.layouts.app_admin')

@section('content')
    

    <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.categories.components.form')
    </form>

@endsection