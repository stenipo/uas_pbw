@extends('app')
@section('title','RS UKDW | Dokter')
@section('content')
<div class="container">
    
            <div class="card">
                <div class="card-header">
            
                    <h2 class="mt-2"><i class="fas fa-user-nurse"></i> Data Dokter</h2>
                    
                </div>

                    <div class="card-body">
                    
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <div>

                    <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="/masterdata/dokter/search">
                        <h4 class="mt-2 mr-3 text-muted">Pencarian Cepat</h4>
                        <input class="form-control mr-sm-2" type="search" name="q" value="@php echo old('cari') @endphp"  placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Search"><i class="fas fa-search" ></i></button>
                    </form>

            
            </div>

            @if(auth()->user()->role == 'Admin')
            <div>
                <a href="/masterdata/dokter/tambah" class="btn btn-primary mt-3"><i class="fas fa-plus mr-2"></i>Tambah Data Dokter</a> 
            </div>
            @endif

            @if(\Session::has('success_insert'))
            <div class="alert alert-success mt-3">
                <p>{{ \Session::get('success_insert') }}</p>
            </div>
            @endif

            @if(\Session::has('success_delete'))
            <div class="alert alert-success mt-3">
                <p>{{ \Session::get('success_delete') }}</p>
            </div>
            @endif

            @if(\Session::has('success_update'))
            <div class="alert alert-success mt-3">
                <p>{{ \Session::get('success_update') }}</p>
            </div>
            @endif


            <!-- Form -->
            <form action="">

                <!-- Tabel -->
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Spesialis</th>
                        @if(auth()->user()->role == 'Admin')
                        <th scope="col">Aksi</th>
                        @endif
                        </tr>
                    </thead>
                    <!-- @php $no=1; @endphp -->
                    @foreach($dokter as $no => $dtr)
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo ++$no + ($dokter->currentPage()-1)*$dokter->perPage()?></th>
                        <td>{{ $dtr->no_dokter }}</td>
                        <td>{{ $dtr->nama_dokter }}</td>
                        <td>{{ $dtr->jenis_kelamin }}</td>
                        <td>{{ $dtr->layanan }}</td>
                        <td>{{ $dtr->spesialis }}</td>
                        @if(auth()->user()->role == 'Admin')
                        <td>
                            <a href="/masterdata/dokter/edit/{{ $dtr->id }}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fas fa-edit" ></i></a>
                            <a href="/masterdata/dokter/delete/{{ $dtr->id }}" class="btn btn-danger delete" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        @endif
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    <!-- End Table -->

                    

            </form>
            <!-- End Form -->

            
            <!-- Pagination -->
            <!-- Total Data Mahasiswa : @php echo $dokter->total() @endphp -->
            @php echo $dokter->links() @endphp
            <!-- End Pagination -->
                </div>
            </div>
        
</div>
@endsection
