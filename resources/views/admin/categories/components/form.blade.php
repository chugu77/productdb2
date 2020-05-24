

<label for="">ID</label>
<input class="form-control" type="text" name="id" placeholder="Increment" value="{{$category->id ?? ""}}" readonly="">

<label for="">Category</label>
<input type="text" class="form-control" name="category" placeholder="Category name" value="{{$category->category ?? ""}}" required>

<label for="">Parent Id</label>
<select class="form-control" name="parent_id">
  <option value="0">-- No parent --</option>
  @include('admin.categories.components.categories', ['categories' => $categories])    
</select>

<label for="">Left</label>
<input class="form-control" type="text" name="_lft" placeholder="_lft" value="{{$category->_lft ?? ""}}" readonly="">

<label for="">Right</label>
<input class="form-control" type="text" name="_rgt" placeholder="_rgt" value="{{$category->_rgt ?? ""}}" readonly="">

<hr />

<input class="btn btn-primary" type="submit" value="Save">

