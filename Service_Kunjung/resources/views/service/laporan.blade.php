@extends('layouts.admin')

@section('content')
@if(Auth::user()->role=='admin')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Laporan
                    
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">Tanggal Booking</th>
                                    <th scope="col">Jenis Service</th>
                                    <th scope="col">Request Part</th>
                                    <th scope="col">jumlah part</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; 
                                
                                    if ($service->jenis_service=='Service Ringan') {
                                        $harga=75000;
                                    }elseif ($service->jenis_service=='Pasang/Ganti Komponen') {
                                        $harga=$service->barang->harga_barang;
                                    }
                                @endphp
                                @foreach ($service as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->no_polisi}}</td>
                                        <td>{{$data->tgl_boking}}</td>
                                        <td>{{$data->jenis_service}}</td>
                                        <td>{{$data->barang->nama_barang}}
                                        | {{$data->barang->merk}}</td>
                                        <td>{{$data->jumlah}}</td>
                                        <td>{{$data->total=$data->barang->harga_barang*$data->jumlah+$data->harga}}</td>
                                        {{-- <td>{{$data->mekanik->nama_mekanik}}</td> --}}
                                        
                                        <td>
                                            <form action="{{ route('mekanik.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                {{-- <a href="{{ route('mekanik.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> | --}}
                                                <button type="submit" class="btn btn-sm btn-outline-success"
                                                    onclick="return confirm('Apakah Service Udah Selesai?')">Selesai
                                                </button>
                                            </form>
                                        </td>
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