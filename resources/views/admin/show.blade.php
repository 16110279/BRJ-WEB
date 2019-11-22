@extends('layouts.app')

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

                    <div>
                        <table class="table">

                            {{ $penawaran-> nama}}
                            <br>
                            {{ $penawaran-> email}}
                            <br>
                            {{ $penawaran-> spesifikasi}}
                            <br>
                            {{ $penawaran-> dana}}
                            <br>
                            <br>
                            <!-- <button class="btn-primary">Edit</button> &nbsp; -->
                            <a href="{{ $penawaran->id}}/edit" class="btn-primary">Edit</a> &nbsp;
                            <form action="{{ $penawaran->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn-danger">Hapus</button> &nbsp;
                            </form>
                            <a href="./">Kembali</a>

                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @endsection