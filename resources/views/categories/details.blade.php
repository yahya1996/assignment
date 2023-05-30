@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$categories->title}}</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4>Category # {{$categories->id}}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            @if($categories->title != null)
            <div class="mb-3">
              <label class="form-label">Title :</label>
              <p>{{$categories->title}}</p>
            </div>
            @endif
            @if($categories->parent_id != null)
            <div class="mb-3">
              <label class="form-label">Parent Category :</label>
              <p>@if($categories->parent_id != 0)
                {{get_category_by_id($categories->parent_id)->title}}
                @endif
              </p>
            </div>
            @endif
        </div>
      </div>
    </div>
  </div>

@endsection