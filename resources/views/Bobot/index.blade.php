@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a href="/bobot/create">
                <button type="button" class="btn btn-primary mt-3 mb-3">Tambah Data</button>
            </a>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Keterangan</th>

                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($bobot as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kriteria->nama_kriteria }}</td>
                        <td>{{ $item->value }}</td>



                        <td>

                            <a href="{{ url('bobot/' . $item->id . '/edit') }}">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                            <a href="{{ url('bobot/' . $item->id . '/delete') }}">
                                <button type="button" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
