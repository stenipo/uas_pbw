@extends('app')
@section('title','RS UKDW | User')

@section('content')
<div class="container">
    
            <div class="card">
                <div class="card-header">
            
                    <h2 class="mt-2"><i class="fas fa-users"></i> Data Pengguna</h2>
                    
                </div>

                    <div class="card-body">
                    
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <div>

                    <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="/masterdata/user/search">
                        <h4 class="mt-2 mr-3 text-muted">Pencarian Cepat</h4>
                        <input class="form-control mr-sm-2" type="search" name="q" value="@php echo old('cari') @endphp"  placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Search"><i class="fas fa-search" ></i></button>
                    </form>
            </div>

            <!-- Form -->
            <form action="">

                <!-- Tabel -->
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <!-- @php $no=1; @endphp -->
                    @foreach($user as $no => $usr)
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo ++$no + ($user->currentPage()-1)*$user->perPage() ?></th>
                        <td>{{ $usr->name }}</td>
                        <td>{{ $usr->email }}</td>
                        <td>{{ $usr->role }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    <!-- End Table -->
                                            
            </form>
            <!-- End Form -->

            
            <!-- Pagination -->
            <!-- Total Data Mahasiswa : @php echo $user->total() @endphp -->
            @php echo $user->links() @endphp
            <!-- End Pagination -->
                </div>
            </div>
        
</div>
@endsection
