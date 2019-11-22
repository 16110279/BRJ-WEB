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
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Spesifikasi</th>
                                    <th scope="col">Dana</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col" colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penawaran as $p)
                                <tr>
                                    <th scope="row"> {{ $loop->iteration}} </th>
                                    <td> {{ $p->nama }}</td>
                                    <td> {{ $p->spesifikasi }}</td>
                                    <td> {{ $p->dana }}</td>
                                    <td> {{ $p->created_at }}</td>
                                    <td> <button class="btn-success">Detail</button> </td>
                                    <td> <button class="btn-primary">Process</button> </td>
                                    <td> <button class="btn-danger">Hapus</button> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @endsection