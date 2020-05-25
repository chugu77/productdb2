@foreach ($categories as $category_list)

  <option value="{{$category_list->id ?? ""}}"

    @isset($product->category_id)

      @if ($product->category_id == $category_list->id)
        selected=""
      @endif

    @endisset

    >
    {!! $delimiter ?? "" !!}{{$category_list->category ?? ""}}
  </option>

  @if (count($category_list->children) > 0)

    @include('admin.products.components.categories', [
      'categories' => $category_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach