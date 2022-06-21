@extends('app')
@section('title','RS UKDW | Home')

@section('content')
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-home"></i> Dashboard</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Jumbotron -->
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Selamat Datang, {{ Auth::user()->name }}!</h1>
                            <!-- <p class="lead">Anda login sebagai {{ Auth::user()->role }}</p> -->
                        </div>
                    </div>
                    <!-- End Jumbotron -->
                </div>
                
            </div>
            
</div>
@endsection
