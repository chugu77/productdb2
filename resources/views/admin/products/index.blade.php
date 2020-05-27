@extends('admin.layouts.app_admin')

@section('content')
    
<a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create Product</a>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Category ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Image</th>
    <th class="text-right">Action</th>
  </thead>
  <tbody>
    @forelse ($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->category_id}}</td>

        <td>{{$product->product_name}}</td>
        <td>{{$product->description}}</td>
        <td>
          @isset($product->image)
          
          <img src="{{asset('images/')}}/{{$product->image}}" width="50px">
     
          @endisset

        </td>

        <td style="text-align:right">
          <form method="post" onsubmit="if(confirm('You are about to delete product. Are you sure')){return true}else{return false}" action="{{route('admin.product.destroy', $product)}}">
          <input type="hidden" name="_method" value="DELETE">
          {{ csrf_field() }}
          <a href="{{route('admin.product.edit', $product)}}"><i class="fa fa-edit"></i></a>
          <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
          </form>          
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center"><h2>No Data</h2></td>
      </tr>
    @endforelse
    <tfoot>
      <tr>
        <td colspan="6">{{$products->links()}}</td>
      </tr>
    </tfoot>
  </tbody>
</table>

 
@endsection