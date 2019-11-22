@extends('./layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/admin/{{$penawaran->id}}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama" value="{{$penawaran->nama}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{$penawaran->email}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="No Telp" value="{{$penawaran->no_telp}}">
                            @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" a class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi Rumah Yang Diinginkan" value="{{$penawaran->spesifikasi}}">
                            @error('spesifikasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" id="dana" name="dana" class="form-control @error('dana') is-invalid @enderror" placeholder="Dana" value="{{$penawaran->dana}}">
                            @error('dana')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary px-5">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    @endsection