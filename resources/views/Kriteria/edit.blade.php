@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <h5>Edit Data Kriteria</h5>
        <div class="line-custom"></div>
        <form action="{{ url('kriteria/' . $data->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID </label>
                <input type="text" name="id" class="form-control " placeholder="Disabled input" readonly>
                <div id="emailHelp" class="form-text">ID will automated increment</div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kriteria </label>
                <input type="text" name="nama" class="form-control" value="{{ $data->nama_kriteria }}" />
            </div>

            <div class="mb-3 form-check"></div>
            <button type="submit" name="kirim" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
@endsection
