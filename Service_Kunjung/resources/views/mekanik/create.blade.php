@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        nambah Data Mekanik
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mekanik.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Mekanik</label>
                                <input type="text" class="form-control  @error('nama_mekanik') is-invalid @enderror"
                                    name="nama_mekanik">
                                @error('nama_mekanik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Telp</label>
                                <input type="text" class="form-control  @error('no_telp') is-invalid @enderror"
                                    name="no_telp">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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