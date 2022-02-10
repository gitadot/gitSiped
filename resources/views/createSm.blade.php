@extends('templates.main')
@section('content')
<div class="container">    
      <div class="row ">          
                  <div class="col-md-10 offset-md-2 py-2" >
                        <form action="/store" method="post" enctype="multipart/form-data">
                              @csrf

                              <div class="mb-3">
                                    <label for="jenis_surat" class="form-label fw-bold">Jenis Surat</label>
                                    <input type="text" class="form-control  @error ('jenis_surat') is-invalid @enderror" id="jenis_surat" name="jenis_surat" placeholder="jenis_surat" value="{{ old('jenis_surat') }}">
                                    @error('jenis_surat')
                                        <div class="invalid-feedback">
                                              {{ $message }}
                                        </div>
                                    @enderror
                              </div> 
                              <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Tanggal</label>
                                    <input type="date" class="form-control  @error ('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" placeholder="tanggal" value="{{ old('tanggal') }}">
                                    @error('tanggal')
                                          <div class="invalid-feedback">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div> 
                              <div class="mb-3">
                                    <label for="nomor" class="form-label fw-bold">Nomor</label>
                                    <input type="text" class="form-control  @error ('nomor') is-invalid @enderror" id="nomor" name="nomor" placeholder="nomor" value="{{ old('nomor') }}">
                                    @error('nomor')
                                          <div class="invalid-feedback">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div> 
                              <div class="mb-3">
                                    <label for="asal" class="form-label fw-bold">Asal</label>
                                    <input type="text" class="form-control  @error ('asal') is-invalid @enderror" id="asal" name="asal" placeholder="asal" value="{{ old('asal') }}">
                                    @error('asal')
                                          <div class="invalid-feedback">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div> 
                              <div class="mb-3">
                                    <label for="hal" class="form-label fw-bold">Hal</label>
                                    <input type="text" class="form-control  @error ('hal') is-invalid @enderror" id="hal" name="hal" placeholder="hal" value="{{ old('hal') }}">
                                    @error('hal')
                                          <div class="invalid-feedback">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div> 
                              <div class="mb-3">
                                    <label for="fileUpload" class="form-label fw-bold">fileUpload</label>
                                    <input type="file" class="form-control form-control-sm  @error ('fileUpload') is-invalid @enderror" id="fileUpload" name="fileUpload" placeholder="fileUpload">
                                    @error('fileUpload')
                                          <div class="invalid-feedback">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                              </div>
                        </form>
                  </div>
            
      </div>
</div>
    
@endsection