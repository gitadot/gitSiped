@extends('templates.main')
@section('content')
<div  class="container-fluid">
  <div class="row">
    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Surat Masuk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div>
            <a href="/createSm" class="btn btn-sm btn-outline-success" role="button">Tambah</a>                      
          </div>        
        </div>        
      </div>  
      <div class="row">
        @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>              
        @endif
      </div>   
      <div class="row">
        @if ($message = Session::get('update'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>              
        @endif
      </div>   
      <div class="row">
        @if ($message = Session::get('delete'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>              
        @endif
      </div>   
     
      <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Surat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nomor</th>
                <th scope="col">Asal</th>
                <th scope="col">Hal</th>
                <th scope="col">File Upload</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                  @foreach ($srtMasuk as $key => $srM)                      
                  <tr>
                    <th scope="row">{{ $srtMasuk->firstItem() + $key}}</th>
                    <td>{{ $srM->jenis_surat }}</td>
                    <td>{{ date('d-m-Y',strtotime($srM->tanggal ))}}</td>
                    <td>{{ $srM->nomor }}</td>
                    <td>{{ $srM->asal }}</td>
                    <td>{{ $srM->hal }}</td>
                    <td>{{ $srM->fileUpload }}</td>
                    <td>Status</td>
                    <td >
                     <a href="/edit/{{ $srM->id }}" class="badge bg-warning"><span data-feather="edit"></span> </a>

                      <form action="/delete/{{ $srM->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Menghapus?')"><span data-feather="trash-2"></span></button>
                      </form>
                    </td>              
                  </tr>
                  @endforeach
             
            </tbody>
          </table>
          

                <div class="d-flex justify-content-start">
                      Showing
                      {{ $srtMasuk->firstItem() }}
                      to 
                      {{ $srtMasuk->lastItem() }}
                      of 
                      {{ $srtMasuk->total() }}
                      entries
                </div>
                <div class="d-flex justify-content-end">
                      {{ $srtMasuk->links() }}
                
                </div>

    </main>
  </div>
</div>
    
@endsection
    





