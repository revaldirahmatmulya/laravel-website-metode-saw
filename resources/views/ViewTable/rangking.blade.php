@extends('layouts.index')

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h5>View Rangking</h5>
            </div>
        </div>



        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Alternatif</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">Rangking</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach ($rangking as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->alternatif_id }}</td>
                            <td>{{ $item->nama_alternatif }}</td>
                            <td>{{ $item->rangking }}</td>


                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
