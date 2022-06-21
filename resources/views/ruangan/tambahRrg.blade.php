@extends('app')
@section('title','RS UKDW | Tambah Ruangan')
@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-plus"></i> Tambah Data Ruangan</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form -->
            <form method="POST" action="/masterdata/ruangan/simpan">
            @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">No Ruangan</label>
                        <input type="text" class="form-control" name="no_ruangan" id="no_ruangan" placeholder="Masukkan No Ruangan" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nama Ruangan</label>
                        <select class="form-control" name="nama_ruangan" id="nama_ruangan">
                            <option>--Pilih Nama Ruangan--</option>
                            <option value="Mawar">Mawar</option>
                            <option value="Anggrek">Anggrek</option>
                            <option value="Melati">Melati</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Keterangan</label>
                        <select class="form-control" name="keterangan" id="keterangan">
                            <option>--Pilih Keterangan--</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>


                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/masterdata/ruangan" class="btn btn-danger">Back</a>
            </form>
            <!-- End Form -->
            
                </div>
            </div>
           
</div>
@endsection
