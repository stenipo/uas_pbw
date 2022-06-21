@extends('app')
@section('title','RS UKDW | Edit Ruangan')

@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-edit" ></i> Edit Data Ruangan</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <!-- Form -->
            <form method="POST" action="/masterdata/ruangan/updated/{{ $ruangan->id }}">
            @csrf
            @method('PUT')      
           
            
            <input type="hidden" class="form-control" name="id" id="id" value="{{ $ruangan->id }}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">No Ruangan</label>
                        <input type="text" class="form-control" name="no_ruangan" id="no_ruangan" value="{{ $ruangan->no_ruangan }}" readonly >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nama Ruangan</label>
                        <select class="form-control" name="nama_ruangan" id="nama_ruangan">
                            <option value="0">--Pilih Nama Ruangan--</option>
                            <option value="Mawar" @php if(($ruangan->nama_ruangan)=='Mawar') echo 'selected' @endphp>Mawar</option>
                            <option value="Anggrek" @php if(($ruangan->nama_ruangan)=='Anggrek') echo 'selected' @endphp>Anggrek</option>
                            <option value="Melati" @php if(($ruangan->nama_ruangan)=='Melati') echo 'selected' @endphp>Melati</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Keterangan</label>
                        <select class="form-control" name="keterangan" id="keterangan">
                            <option value="0">--Pilih Keterangan--</option>
                            <option value="Tersedia" @php if(($ruangan->keterangan)=='Tersedia') echo 'selected' @endphp>Tersedia</option>
                            <option value="Tidak Tersedia" @php if(($ruangan->keterangan)=='Tidak Tersedia') echo 'selected' @endphp>Tidak Tersedia</option>
                        </select>
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/masterdata/ruangan" class="btn btn-danger">Back</a>
            </form>
            <!-- End Form -->
                </div>
            </div>
           
</div>
@endsection
