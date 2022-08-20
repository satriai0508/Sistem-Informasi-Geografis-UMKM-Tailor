@extends('admin.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    Welcome back, {{ auth()->user()->name }}
  </div>
</div>
@endsection
