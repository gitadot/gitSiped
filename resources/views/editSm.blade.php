@extends('templates.main')
@section('content')
<div class="container-fluid">    
      <div class="row mt-4">          
                  <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" >
                        <form action="/update/{{ $edt->id }}" method="post" enctype="multipart/form-data">
                              @csrf

                              <div class="mb-3">
                                    <label for="jenis_surat" class="form-label fw-bold">Jenis Surat</label>
                                    <input type="text" class="form-control" id="jenis_surat" name="jenis_surat" value="{{ $edt->jenis_surat}}" >
                              </div> 
                              <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"  value="{{$edt->tanggal }}" >
                              </div> 
                              <div class="mb-3">
                                    <label for="nomor" class="form-label fw-bold">Nomor</label>
                                    <input type="text" class="form-control" id="nomor" name="nomor"  value="{{$edt->nomor }}" >
                              </div> 
                              <div class="mb-3">
                                    <label for="asal" class="form-label fw-bold">Asal</label>
                                    <input type="text" class="form-control" id="asal" name="asal"  value="{{$edt->asal }}" >
                              </div> 
                              <div class="mb-3">
                                    <label for="hal" class="form-label fw-bold">Hal</label>
                                    <input type="text" class="form-control" id="hal" name="hal"  value="{{$edt->hal }}" >
                              </div> 
                              <div class="mb-3">
                                    <label for="fileUpload" class="form-label fw-bold">fileUpload</label>
                                    <input type="file" class="form-control form-control-sm" id="fileUpload" name="fileUpload"  value="{{$edt->fileUpload }}" >
                              </div> 
                              <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                              </div>
                        </form>
                  </div>
            
      </div>
</div>



    
@endsection