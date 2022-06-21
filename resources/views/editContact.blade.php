@extends('app')
@section('title','RS UKDW | Edit Contact')
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

                    <form method="POST" action="/contact/updated/{{ $konten->id }}">
                    @csrf
                    @method('PUT')  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $konten->email }}"  >
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $konten->telepon }}" >
                        </div>    

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Fax</label>
                            <input type="text" name="fax" id="fax" class="form-control" value="{{ $konten->fax }}" >
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Alamat</label>
                            <textarea  name="alamat" id="alamat" cols="100%" rows="5">{{ $konten->alamat }}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/contact" class="btn btn-danger">Back</a>
                    </form>

   
                </div>
            </div>
        
</div>
@endsection
