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
            <div class="col">2</div>
        </div>
    </div>
@endsection

