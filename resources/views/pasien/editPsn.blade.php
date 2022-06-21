@extends('app')
@section('title','RS UKDW | Edit Pasien')

@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-edit" ></i> Edit Data Pasien</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <!-- Form -->
            <form method="POST" action="/masterdata/pasien/updated/{{ $pasien->id }}">
            @csrf
            @method('PUT')      
            @php 
                $kln = array();
                $kln = explode(',', $pasien->keluhan);
            @endphp
           
            
            <input type="hidden" class="form-control" name="id" id="id" value="{{ $pasien->id }}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">No Pasien</label>
                        <input type="text" class="form-control" name="no_pasien" id="no_pasien" value="{{ $pasien->no_pasien }}" readonly >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" value="{{ $pasien->nama_pasien }}">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" @php if(($pasien->jenis_kelamin)=='Laki-Laki') echo 'checked' @endphp>
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-Laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input " type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" @php if(($pasien->jenis_kelamin)=='Perempuan') echo 'checked' @endphp>
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Jenis Rawat</label>
                        <select class="form-control" name="jenis_rawat" id="jenis_rawat">
                            <option value="0">--Pilih Jenis Rawat--</option>
                            <option value="Rawat Inap" @php if(($pasien->jenis_rawat)=='Rawat Inap') echo 'selected' @endphp>Rawat Inap</option>
                            <option value="Rawat Jalan" @php if(($pasien->jenis_rawat)=='Rawat Jalan') echo 'selected' @endphp>Rawat Jalan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Keluhan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Demam" <?php in_array('Demam', $kln) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Demam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Batuk" <?php in_array('Batuk', $kln) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Batuk
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Muntah-Muntah" <?php in_array('Muntah-Muntah', $kln) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Muntah-Muntah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Pusing" <?php in_array('Pusing', $kln) ? print 'checked':''?> id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Pusing
                            </label>
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/masterdata/pasien" class="btn btn-danger">Back</a>
            </form>
            <!-- End Form -->
                </div>
            </div>
           
</div>
@endsection
