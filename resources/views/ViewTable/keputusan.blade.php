@extends('layouts.index')

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h5>View Matrik Keputusan</h5>
            </div>
        </div>



        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>

                        <th scope="col">ID Matrik</th>
                        <th scope="col">ID Alternatif</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">ID Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">ID Bobot</th>
                        <th scope="col">Value</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Keterangan</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($keputusan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->matrik_id }}</td>
                            <td>{{ $item->alternatif_id }}</td>
                            <td>{{ $item->nama_alternatif }}</td>
                            <td>{{ $item->kriteria_id }}</td>
                            <td>{{ $item->nama_kriteria }}</td>
                            <td>{{ $item->bobot_id }}</td>
                            <td>{{ $item->value }}</td>
                            <td>{{ $item->nilai }}</td>
                            <td>{{ $item->keterangan }}</td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
