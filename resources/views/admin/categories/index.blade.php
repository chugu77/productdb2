@extends('admin.layouts.app_admin')

@section('content')
    
<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create Category</a>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Category</th>
    <th>Left</th>
    <th>Right</th>
    <th>Parent ID</th>
    <th class="text-right">Action</th>
  </thead>
  <tbody>
    @forelse ($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->category}}</td>

        <td>{{$category->_lft}}</td>
        <td>{{$category->_rgt}}</td>
        <td>{{$category->parent_id}}</td>

        <td style="text-align:right">
          <form method="post" onsubmit="if(confirm('You are about to delete node and all its subtree. Are you sure')){return true}else{return false}" action="{{route('admin.category.destroy', $category)}}">
          <input type="hidden" name="_method" value="DELETE">
          {{ csrf_field() }}
          <a href="{{route('admin.category.edit', $category)}}"><i class="fa fa-edit"></i></a>
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
        <td colspan="3">{{$categories->links()}}</td>
      </tr>
    </tfoot>
  </tbody>
</table>

 
@endsection