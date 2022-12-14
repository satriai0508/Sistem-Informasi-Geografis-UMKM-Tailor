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
      <a href="/admin/jahit/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="myTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Usaha</th>
              <th>Harga</th>
              <th>Ukuran</th>
              <th>Jenis</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jahits as $jahit)
            <tr>
              <td>{{ $loop->iteration }}</td>
              @if($jahit->nama_toko)
              <td>{!! $jahit->nama_toko !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif
              @if($jahit->harga)
              <td>{!! $jahit->harga !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif
              @if($jahit->ukuran)
              <td>{!! $jahit->ukuran !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif
              @if($jahit->jenis)
              <td>{!! $jahit->jenis !!}</td>
              @else
              <td>
                <p class="text-danger text-bold text-capitalize h5">Not Found</p>
              </td>
              @endif
              <td>
                <a href="/admin/jahit/{{ strtolower($jahit->nama_toko) }}" class="btn btn-info"><i data-feather="eye"></i></a>
                <a href="/admin/jahit/{{ strtolower($jahit->nama_toko) }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
                <form action="/admin/jahit/{{ strtolower($jahit->nama_toko) }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button href="/admin/jahit/{{ strtolower($jahit->nama_toko) }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Usaha</th>
              <th>Harga</th>
              <th>Ukuran</th>
              <th>Jenis</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
