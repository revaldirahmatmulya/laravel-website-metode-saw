@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <a href="/skala/create">
                    <button type="button" class="btn btn-primary mt-3 mb-3">Tambah Data</button>
                </a>
            </div>
        </div>

        @if ($message = Session::get('inserted'))
            <div class="alert alert-success alert-dismissible fade show mb-3 mt-3" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif ($message = Session::get('updated'))
            <div class="alert alert-primary alert-dismissible fade show mb-3 mt-3" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif ($message = Session::get('deleted'))
            <div class="alert alert-danger alert-dismissible fade show mb-3 mt-3" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Skala</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($skala as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->value }}</td>
                            <td>{{ $item->keterangan }}</td>

                            <td>

                                <a href="{{ url('skala/' . $item->id . '/edit') }}">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>

                                <a href="{{ url('skala/' . $item->id . '/delete') }}">
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
    </div>
@endsection
