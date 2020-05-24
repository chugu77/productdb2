@extends('admin.layouts.app_admin')

@section('content')
    

    <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.categories.components.form')
    </form>

@endsection