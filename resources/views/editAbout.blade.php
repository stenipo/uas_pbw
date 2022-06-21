@extends('app')
@section('title','RS UKDW | Edit About')

@section('content')
<div class="container">

            <div class="card">
                <div class="card-header">
                    <h2 class="mt-2"><i class="fas fa-home"></i> About</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/about/updated/{{ $konten->id }}">
                    @csrf
                    @method('PUT')  
                    <input type="hidden" class="form-control" name="id" id="id" value="{{ $konten->id }}">
                    
                    <div class="form-group">
                        <textarea name="about" id="about" cols="100%" rows="5">{{ $konten->about }}</textarea>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/about" class="btn btn-danger">Back</a>
                    </form>
                </div>
               
            </div>
       
</div>
@endsection

