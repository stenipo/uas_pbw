@extends('app')
@section('title','RS UKDW | Contact')

@section('content')
<div class="container">
    
        <div class="card">
            <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-address-book"></i> Contact</h2>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(\Session::has('success_update'))
                    <div class="alert alert-success mt-3">
                        <p>{{ \Session::get('success_update') }}</p>
                    </div>
                    @endif

                    @foreach ($konten as $ktn)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" value="{{ $ktn->email }}" readonly >
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Telepon</label>
                            <input type="text" class="form-control" value="{{ $ktn->telepon }}" readonly>
                        </div>    

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Fax</label>
                            <input type="text" class="form-control" value="{{ $ktn->fax }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Alamat</label>
                            <textarea disabled="disabled" name="about" id="about" cols="100%" rows="5">{{ $ktn->alamat }}</textarea>
                        </div>
                    </div>

                    @if(auth()->user()->role == 'Admin')
                    <div>
                        <a href="/contact/edit/{{ $ktn->id }}" class="btn btn-primary" data-toggle="tooltip" title="Edit"><i class="fas fa-edit" ></i> Edit Contact</a>
                    </div>
                    @endif
                    @endforeach
   
                </div>
            </div>
        
</div>
@endsection
