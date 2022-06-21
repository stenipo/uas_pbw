@extends('app')
@section('title','RS UKDW | Tambah Dokter')
@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-plus"></i> Tambah Data Dokter</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form -->
            <form method="POST" action="/masterdata/dokter/simpan">
            @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">No Dokter</label>
                        <input type="text" class="form-control" name="no_dokter" id="no_dokter" placeholder="Masukkan No Dokter" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" placeholder="Masukkan Nama Dokter">
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
                        <label for="" class="font-weight-bold">Spesialis</label>
                        <select class="form-control" name="spesialis" id="spesialis">
                            <option>--Pilih Spesialis--</option>
                            <option value="Anak">Anak</option>
                            <option value="Penyakit Dalam">Penyakit Dalam</option>
                            <option value="Kanker">Kanker</option>
                            <option value="Mata">Mata</option>
                            <option value="Gigi">Gigi</option>
                            <option value="Kebidanan dan Kandungan">Kebidanan dan Kandungan</option>
                            <option value="Tulang">Tulang</option>
                            <option value="Jantung dan Pembuluh Darah">Jantung dan Pembuluh Darah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Layanan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Rawat Inap" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Rawat Inap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Rawat Jalan" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Rawat Jalan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Operasi" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Operasi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Control" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Control
                            </label>
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/masterdata/dokter" class="btn btn-danger">Back</a>
            </form>
            <!-- End Form -->
            
                </div>
            </div>
           
</div>
@endsection
