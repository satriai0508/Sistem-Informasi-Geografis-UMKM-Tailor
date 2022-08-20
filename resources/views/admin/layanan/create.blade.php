@extends('admin.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    <form action="/admin/layanan" method="post">
      @csrf
      <h4 class="fs-4 text-dark text-bold mb-3 d-flex justify-content-center">Create Data</h4>
      <div class="form-group row mb-2">
        <label for="nama_toko" class="col-sm-3 text-end control-label col-form-label">Nama Usaha</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('nama_toko')
                                is-invalid
                            @enderror" id="nama_toko" name="nama_toko" placeholder="Enter Nama Toko" required value="{{ auth()->user()->name }}" readonly />
          @error('nama_toko')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="jahit_id" class="col-sm-3 text-end control-label col-form-labe">Jahit</label>
        <div class="col-md-6">
          <select class="form-select" name="jahit_id">
          <option value="nullable" selected>Not Selected</option>
            @foreach($jahits as $jahit)
            @if(old('jahit_id') == $jahit->id)
            <option value="{{ $jahit->id }}" selected>{{ $jahit->nama_toko }}</option>
            @else
            <option value="{{ $jahit->id }}">{{ $jahit->nama_toko }}</option>
            @endif
            @endforeach
          </select>
          @error('jahit_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="konveksi_id" class="col-sm-3 text-end control-label col-form-labe">Konveksi</label>
        <div class="col-md-6">
          <select class="form-select" name="konveksi_id">
            <option value="nullable" selected>Not Selected</option>
            @foreach($konveksis as $konveksi)
            @if(old('konveksi_id') == $konveksi->id)
            <option value="{{ $konveksi->id }}" selected>{{ $konveksi->nama_toko }}</option>
            @else
            <option value="{{ $konveksi->id }}">{{ $konveksi->nama_toko }}</option>
            @endif
            @endforeach
          </select>
          @error('konveksi_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
