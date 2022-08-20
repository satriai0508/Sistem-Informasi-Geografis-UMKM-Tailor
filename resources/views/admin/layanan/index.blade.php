@extends('admin.layouts.main')

@section('container')
@if(session('success'))
<div class="alert alert-success container container-fluid" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="container container-fluid">
  <div class="card">
    <div class="card-body">
      <a href="/admin/layanan/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="myTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Usaha</th>
              {{-- <th>Jahit</th>
              <th>Konveksi</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($layanans as $layanan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              @if($layanan->nama_toko)
              <td>{!! $layanan->nama_toko !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif
              {{-- @if($layanan->jahit->jenis)
              <td>{!! $layanan->jahit->jenis !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif
              @if($layanan->konveksi->jenis)
              <td>{!! $layanan->konveksi->jenis !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif --}}
              <td>
                {{-- <a href="/admin/layanan/{{ $layanan->id }}" class="btn btn-info"><i data-feather="eye"></i></a> --}}
                <a href="/admin/layanan/{{ $layanan->id }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
                @can('admin')
                <form action="/admin/layanan/{{ $layanan->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button href="/admin/layanan/{{ $layanan->id }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
                </form>
                @endcan
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Usaha</th>
              {{-- <th>Jahit</th>
              <th>Konveksi</th> --}}
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
