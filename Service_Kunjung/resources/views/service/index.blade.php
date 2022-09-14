@extends('layouts.admin')

@section('content')
@if(Auth::user()->role=='admin' || Auth::user()->role=='user')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{-- @include('layouts/_flash') --}}
            <div class="card">
                <div class="card-header">
                    Data Service Pelanggan
                    <a href="{{ route('service.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Nama Pemesan</th>
                                    @if(Auth::user()->role=='admin')
                                    
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">Tanggal Booking</th>
                                        
                                    @endif
                                    <th scope="col">Jenis Service</th>
                                    <th scope="col">Request Part</th>
                                    <th scope="col">jumlah part</th>
                                    @if(Auth::user()->role=='admin')
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp</th>
                                    @endif
                                    <th>total</th>
                                    @if(Auth::user()->role=='admin')
                                        
                                    <th scope="col">aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($service as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$data->nama}}</td>
                                        @if(Auth::user()->role=='admin')
                                        <td>{{$data->no_polisi}}</td>
                                        <td>{{$data->tgl_boking}}</td>
                                        
                                        @endif
                                        <td>{{$data->jenis_service}}</td>
                                        <td>{{$data->barang->nama_barang}}
                                        | {{$data->barang->merk}}</td>
                                        @php
                                            if ($data->jenis_service =='Service Ringan') {
                                                $harga=85000;
                                            }else {
                                                $harga=15000;
                                            }
                                        @endphp
                                        <td>{{$data->jumlah}}</td>
                                        @if(Auth::user()->role=='admin')
                                            
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->no_hp}}</td>
                                        @endif
                                        {{-- <td>{{$data->mekanik->nama_mekanik}}</td> --}}
                                        <td>{{number_format($data->total=$data->barang->harga_barang*$data->jumlah+$harga,0,",",".")}}</td>
                                        @if(Auth::user()->role=='admin')
                                        <td>
                                            <form action="{{ route('service.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                {{-- <a href="{{ url('laporan'); }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> | --}}
                                                <button type="submit" class="btn btn-sm btn-outline-success"
                                                    onclick="return confirm('Apakah Service Udah Selesai?')">Selesai
                                                </button>
                                            </form>
                                        </td>
                                            
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection