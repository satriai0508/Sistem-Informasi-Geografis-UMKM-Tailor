@extends('admin.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    <form action="/admin/jahit/{{ strtolower($jahits->nama) }}" method="post">
      @method('put')
      @csrf
      <h4 class="fs-4 text-dark text-bold mb-3 d-flex justify-content-center">Edit Data</h4>
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
        <label for="harga" class="col-sm-3 text-end control-label col-form-label">Harga (Rp)</label>
        <div class="col-md-6">
          <input type="number" min="5000" max="100000" step="5000" class="form-control form-control-plaintext @error('harga')
                                is-invalid
                            @enderror" id="harga" name="harga" placeholder="Ex. 5000 (Rp)" required value="{{ old('harga', $jahits->harga) }}" />
          @error('harga')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="ukuran" class="col-sm-3 text-end control-label col-form-label">Ukuran</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('ukuran')
                                is-invalid
                            @enderror" id="ukuran" name="ukuran" placeholder="Ex: S, M, L, XL, XXL." required value="{{ old('ukuran',$jahits->ukuran) }}" />
          @error('ukuran')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="jenis" class="col-sm-3 text-end control-label col-form-label">Jenis</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('jenis')
                                is-invalid
                            @enderror" id="jenis" name="jenis" placeholder="Ex : Cut, Make, Trim." required value="{{ old('jenis',$jahits->jenis) }}" />
          @error('jenis')
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
