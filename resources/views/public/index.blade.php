@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
              <div id="jstree">
              <ul>
@include('public.components.tree')
              </ul>
              </div>
              {{--  <button>demo button</button>  --}}

            </div>
            <div class="col">

                <table id="table"
                
                data-auto-refresh="true"
                >
                    <thead>
                      <th data-field="id">ID</th>
                      <th data-field="category_id">Category ID</th>
                      <th data-field="product_name">Product Name</th>
                      <th data-field="description">Description</th>
                      <th data-field="image">Image</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection

