
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<label for="">ID</label>
<input class="form-control" type="text" name="id" placeholder="Increment" value="{{$product->id ?? ""}}" readonly="">

<label for="">Category Id</label>
<select class="form-control" name="category_id">
  <option value="">-- No Category --</option>
  @include('admin.products.components.categories')
</select>

<label for="">Product Name</label>
<input type="text" class="form-control" name="product_name" placeholder="Product name" value="{{$product->product_name ?? ""}}" required>


<label for="">Description</label>
<input class="form-control" type="text" name="description" placeholder="description" value="{{$product->description ?? ""}}">

<label for="">Image</label>
<input class="form-control" type="file" name="image" placeholder="image" value="{{$product->image ?? ""}}" > 
@isset($product->image)
<br>
<a href="{{asset('images/')}}/{{$product->image}}">
<img src="{{asset('images/')}}/{{$product->image}}" width="50px">
    </a>
@endisset

<hr />

<input class="btn btn-primary" type="submit" value="Save">