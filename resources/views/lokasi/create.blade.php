@extends('layouts.min')

@section('content')
    <h1>Daftar sewa mobil</h1>

    <h2>Pesanan mobil</h2>

    <form action="{{route('lokasi.store')}}" method="POST">
        @csrf
        <div>
            <label for="kd_lokasi">Kode lokasi :</label>
            <input type="text" name="kd_lokasi" id="kd_lokasi">
        </div>

        <div>
            <label for="label">Label : </label>
            <input type="text" name="label" id="label">
        </div>

        <div>
            <label for="rak">Rak : </label>
            <input type="text" name="rak" id="rak">
        </div>

        
        <button type="submit" name="submit">Submit</button>
    </form>
    @endsection