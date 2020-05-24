<label for="">ID</label>
<input class="form-control" type="text" name="id" placeholder="Increment" value="{{$product->id ?? ""}}" readonly="">

<label for="">Category Id</label>
<select class="form-control" name="parent_id">
  <option value="0">-- No Category --</option>
  @include('admin.categories.components.categories', ['categories' => $categories])    
</select>

<label for="">Product Name</label>
<input type="text" class="form-control" name="product_name" placeholder="Product name" value="{{$product->product_name ?? ""}}" required>


<label for="">Description</label>
<input class="form-control" type="text" name="description" placeholder="description" value="{{$product->description ?? ""}}" readonly="">

<label for="">Image</label>
<input class="form-control" type="text" name="image" placeholder="image" value="{{$product->image ?? ""}}" readonly="">

<hr />

<input class="btn btn-primary" type="submit" value="Save">

