@extends('app')
@section('title','RS UKDW | Ruangan')

@section('content')
<div class="container">
    
            <div class="card">
                <div class="card-header">
            
                    <h2 class="mt-2"><i class="fas fa-hospital-alt"></i> Data Ruangan</h2>
                    
                </div>

                    <div class="card-body">
                    
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <div>

                    <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="/masterdata/ruangan/search">
                        <h4 class="mt-2 mr-3 text-muted">Pencarian Cepat</h4>
                        <input class="form-control mr-sm-2" type="search" name="q" value="@php echo old('cari') @endphp"  placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Search"><i class="fas fa-search" ></i></button>
                    </form>

            
            </div>

            @if(auth()->user()->role == 'Admin')
            <div>
                <a href="/masterdata/ruangan/tambah" class="btn btn-primary mt-3"><i class="fas fa-plus mr-2"></i>Tambah Data Ruangan</a> 
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
                        <th scope="col">Nama Ruangan</th>
                        <th scope="col">No Ruangan</th>
                        <th scope="col">Keterangan</th>
                        @if(auth()->user()->role == 'Admin')
                        <th scope="col">Aksi</th>
                        @endif
                        </tr>
                    </thead>
                    <!-- @php $no=1; @endphp -->
                    @foreach($ruangan as $no => $rrg)
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo ++$no + ($ruangan->currentPage()-1)*$ruangan->perPage() ?></th>
                        <td>{{ $rrg->nama_ruangan }}</td>
                        <td>{{ $rrg->no_ruangan }}</td>
                        <td>{{ $rrg->keterangan }}</td>
                        @if(auth()->user()->role == 'Admin')
                        <td>
                            <a href="/masterdata/ruangan/edit/{{ $rrg->id }}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fas fa-edit" ></i></a>
                            <a href="/masterdata/ruangan/delete/{{ $rrg->id }}" class="btn btn-danger delete" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></a>
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
            <!-- Total Data Mahasiswa : @php echo $ruangan->total() @endphp -->
            @php echo $ruangan->links() @endphp
            <!-- End Pagination -->
                </div>
            </div>
        
</div>
@endsection
