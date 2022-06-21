@extends('app')
@section('title','RS UKDW | Tambah Pasien')
@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-plus"></i> Tambah Data Pasien</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form -->
            <form method="POST" action="/masterdata/pasien/simpan">
            @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">No Pasien</label>
                        <input type="text" class="form-control" name="no_pasien" id="no_pasien" placeholder="Masukkan No Pasien" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Pasien">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" checked>
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-Laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input " type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Jenis Rawat</label>
                        <select class="form-control" name="jenis_rawat" id="jenis_rawat">
                            <option>--Pilih Jenis Rawat--</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Rawat Jalan">Rawat Jalan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Keluhan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Demam" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Demam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Batuk" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Batuk
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Muntah-Muntah" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Muntah-Muntah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Pusing" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Pusing
                            </label>
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/masterdata/pasien" class="btn btn-danger">Back</a>
            </form>
            <!-- End Form -->
            
                </div>
            </div>
           
</div>
@endsection
