@extends('app')
@section('title','RS UKDW | About')

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

                    @if(\Session::has('success_update'))
                    <div class="alert alert-success mt-3">
                        <p>{{ \Session::get('success_update') }}</p>
                    </div>
                    @endif

                    @foreach ($konten as $ktn)
                    <div class="form-group">
                        <textarea disabled="disabled" name="about" id="about" cols="100%" rows="5">{{ $ktn->about }}</textarea>
                    </div>

                    @if(auth()->user()->role == 'Admin')
                    <div>
                        <a href="/about/edit/{{ $ktn->id }}" class="btn btn-primary" data-toggle="tooltip" title="Edit"><i class="fas fa-edit" ></i> Edit About</a>
                    </div>
                    @endif
                    @endforeach
                </div>
               
            </div>
       
</div>
@endsection

