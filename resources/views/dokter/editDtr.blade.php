@extends('app')
@section('title','RS UKDW | Edit Dokter')
@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-edit" ></i> Edit Data Dokter</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <!-- Form -->
            <form method="POST" action="/masterdata/dokter/updated/{{ $dokter->id }}">
            @csrf
            @method('PUT')      
            @php 
                $lyn = array();
                $lyn = explode(',', $dokter->layanan);
            @endphp
           
            
            <input type="hidden" class="form-control" name="id" id="id" value="{{ $dokter->id }}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">No Dokter</label>
                        <input type="text" class="form-control" name="no_dokter" id="no_dokter" value="{{ $dokter->no_dokter }}" readonly >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nama dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" value="{{ $dokter->nama_dokter }}">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" @php if(($dokter->jenis_kelamin)=='Laki-Laki') echo 'checked' @endphp>
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-Laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input " type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" @php if(($dokter->jenis_kelamin)=='Perempuan') echo 'checked' @endphp>
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Spesialis</label>
                        <select class="form-control" name="spesialis" id="spesialis">
                            <option value="0">--Pilih Spesialis--</option>
                            <option value="Anak" @php if(($dokter->spesialis)=='Anak') echo 'selected' @endphp>Anak</option>
                            <option value="Penyakit Dalam" @php if(($dokter->spesialis)=='Penyakit Dalam') echo 'selected' @endphp>Penyakit Dalam</option>
                            <option value="Kanker" @php if(($dokter->spesialis)=='Kanker') echo 'selected' @endphp>Kanker</option>
                            <option value="Mata" @php if(($dokter->spesialis)=='Mata') echo 'selected' @endphp>Mata</option>
                            <option value="Gigi" @php if(($dokter->spesialis)=='Gigi') echo 'selected' @endphp>Gigi</option>
                            <option value="Kebidanan dan Kandungan" @php if(($dokter->spesialis)=='Kebidanan dan Kandungan') echo 'selected' @endphp>Kebidanan dan Kandungan</option>
                            <option value="Tulang" @php if(($dokter->spesialis)=='Tulang') echo 'selected' @endphp>Tulang</option>
                            <option value="Jantung dan Pembuluh Darah" @php if(($dokter->spesialis)=='Jantung dan Pembuluh Darah') echo 'selected' @endphp>Jantung dan Pembuluh Darah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Layanan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Rawat Inap" <?php in_array('Rawat Inap', $lyn) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Rawat Inap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Rawat Jalan" <?php in_array('Rawat Jalan', $lyn) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Rawat Jalan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Operasi" <?php in_array('Operasi', $lyn) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Operasi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="layanan[]" value="Control" <?php in_array('Control', $lyn) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Control
                            </label>
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/masterdata/dokter" class="btn btn-danger">Back</a>
            </form>
            <!-- End Form -->
                </div>
            </div>
           
</div>
@endsection
