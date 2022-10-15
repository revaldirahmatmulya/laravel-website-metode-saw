@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <h5>Edit Data Matrik</h5>
        <div class="line-custom"></div>
        <form action="{{ url('matrik/' . $data->id) }}" method="POST">
            @method('put');
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID </label>
                <input type="text" name="id" class="form-control " placeholder="Disabled input" readonly>
                <div id="emailHelp" class="form-text">ID will automated increment</div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alternatif </label>
                <select class="form-select" aria-label="Default select example" name="alternatif">


                    @foreach ($alternatif as $item)
                        <option value="{{ $item->id }}" @if ($item->id == $data->id_alternatif) selected @endif>
                            {{ $item->nmalternatif }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Bobot </label>
                <select class="form-select" aria-label="Default select example" name="bobot">


                    @foreach ($bobot as $item)
                        <option value="{{ $item->id }}" @if ($item->id == $data->id_bobot) selected @endif>
                            {{ $item->id . '->' . $item->value }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Skala </label>
                <select class="form-select" aria-label="Default select example" name="skala">
                    <option selected>Open this select menu</option>
                    @foreach ($skala as $item)
                        <option value="{{ $item->id }}">{{ $item->value . '->' . $item->keterangan }}</option>
                    @endforeach

                    @foreach ($skala as $item)
                        <option value="{{ $item->id }}" @if ($item->id == $data->id_skala) selected @endif>
                            {{ $item->value . '->' . $item->keterangan }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Value</label>
                <input type="text" name="value" class="form-control" value="{{ $data->value }}" />
            </div>

            <div class="mb-3 form-check"></div>
            <button type="submit" name="kirim" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
@endsection
