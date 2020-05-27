@foreach ($categories as $category_list)

 <li data-id="{{$category_list->id ?? ""}}">  {{$category_list->category ?? ""}} 

  @if (count($category_list->children) > 0)
<ul>
    @include('public.components.tree', [
      'categories' => $category_list->children
    ])
</ul>
  @endif
</li>
@endforeach