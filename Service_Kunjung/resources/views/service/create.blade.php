@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- @include('layouts/_flash') --}}
                <div class="card">
                    <div class="card-header">
                        Form Pemesanan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control  @error('id_user') is-invalid @enderror"
                                    name="id_user" value="{{Auth::user()->id}}">
                                    @error('id_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama" value="{{Auth::user()->name}}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Polisi</label>
                                <input type="text" class="form-control  @error('no_polisi') is-invalid @enderror"
                                    name="no_polisi">
                                @error('no_polisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">tanggal boking</label>
                                <input type="date" class="form-control  @error('tgl_boking') is-invalid @enderror"
                                    name="tgl_boking">
                                @error('tgl_boking')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Service</label>
                                <select class="form-control  @error('jenis_service') is-invalid @enderror" id="" name="jenis_service" style="color: black">
                                  <option value="" >Pilih Jenis Service</option>
                                  <option value="Service Ringan">Service Ringan</option>
                                  {{-- <option value="Pengecekan">Pengecekan</option> --}}
                                  <option value="Pasang Part">Pasang/Ganti Komponen</option>
                                </select>
                                @error('jenis_service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Komponen Request</label>
                                <select class="form-control  @error('id_barang') is-invalid @enderror" id="" name="id_barang" style="color: black">
                                  <option value="-">Pilih Komponen Request</option>
                                  @foreach($barang as $data)
                                    <option value="{{$data->id}}">{{$data->nama_barang  }} | {{$data->merk}} </option>  
                                  @endforeach
                                </select>
                                @error('id_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Part</label>
                                <input type="number" class="form-control  @error('jumlah') is-invalid @enderror"
                                    name="jumlah">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{Auth::user()->alamat}}">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Telephone</label>
                                <input type="text" class="form-control  @error('no_hp') is-invalid @enderror"
                                    name="no_hp" value="{{Auth::user()->no_hp}}">
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- kalo di pakai --}}
                            {{-- <div class="mb-3">
                                <label class="form-label">Part Request</label>
                                <select class="form-control  @error('id_mekanik') is-invalid @enderror" id="" name="id_mekanik" style="color: black">
                                  <option value="">Pilih Part Request</option>
                                  @foreach($mekanik as $data)
                                    <option value="{{$data->id}}">{{$data->nama_mekanik}}</option>  
                                  @endforeach
                                </select>
                                @error('id_mekanik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection