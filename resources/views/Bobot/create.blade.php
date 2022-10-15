@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <h5>Tambah Data Bobot</h5>
        <div class="line-custom"></div>
        <form action="{{ url('bobot/store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID </label>
                <input type="text" name="id" class="form-control " placeholder="Disabled input" readonly>
                <div id="emailHelp" class="form-text">ID will automated increment</div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Kriteria </label>
                <select class="form-select" aria-label="Default select example" name="kriteria">
                    <option selected>Open this select menu</option>
                    @foreach ($kriteria as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kriteria }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Value </label>
                <input type="text" name="value" class="form-control" placeholder="Contoh : 5.45" />
                <div id="emailHelp" class="form-text">Jika bilangan desimal, gunakan titik </div>
            </div>

            <div class="mb-3 form-check"></div>
            <button type="submit" name="kirim" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
@endsection
