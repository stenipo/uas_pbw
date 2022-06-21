@extends('app')
@section('title','UKDW | My Profile')
@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-user-alt"></i> My Profile</h2>
                </div>

                <div class="card-body">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Nama</label>
                            <input type="email" class="form-control" value="{{ Auth::user()->name }}" readonly >
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                        </div>  

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Role</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->role }}" readonly>
                        </div>

                </div>
            </div>
</div>
@endsection
