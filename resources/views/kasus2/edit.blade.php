@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <p>Update Data Kasus</p>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kasus2.update', $kasus2->id) }}" method="POST">
                            <input type="hidden" name="_method" value="put">
                            @csrf
                            <div class="col">
                                @livewire('dropdowns', ['selectedRw'=>$kasus2->id_rw,
                                'selectedKelurahan'=>$kasus2->rw->id_kelurahan,
                                'selectedKecamatan'=>$kasus2->rw->kelurahan->id_kecamatan,
                                'selectedKota'=>$kasus2->rw->kelurahan->kecamatan->id_kota,
                                'selectedProvinsi'=>$kasus2->rw->kelurahan->kecamatan->kota->id_provinsi])
                            </div>

                            <center>
                                <h2>
                                    <p>-- Data Kasus Local --</p>
                                </h2>
                            </center>

                            <div class="form-group">
                                <label for="">Jumlah Positif</label>
                                <input type="text" name="jumlah_positif" class="form-control" id="exampleInputEmail1"
                                    value="{{ $kasus2->jumlah_positif }}  ">
                                @if ($errors->has('jumlah_positif'))
                                    <span class="text-danger">{{ $errors->first('jumlah_positif') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Meninggal</label>
                                <input type="text" name="jumlah_meninggal" class="form-control" id="exampleInputEmail1"
                                    value="{{ $kasus2->jumlah_meninggal }} ">
                                @if ($errors->has('jumlah_meninggal'))
                                    <span class="text-danger">{{ $errors->first('jumlah_meninggal') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Sembuh</label>
                                <input type="text" name="jumlah_sembuh" class="form-control" id="exampleInputEmail1"
                                    value="{{ $kasus2->jumlah_sembuh }}  ">
                                @if ($errors->has('jumlah_sembuh'))
                                    <span class="text-danger">{{ $errors->first('jumlah_sembuh') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                    value="{{ $kasus2->tanggal }}">
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                            <div class="float-right">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
