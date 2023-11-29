@extends('layout.master-2')

@section('content-2')
    <div class="balik">
        <a href="/electronic" class="next round" style="text-decoration: none;">
        < </a>
    </div>

    <br>
    <br>

    <form action="/select-tablet/store" method="post">
        @csrf
    <div class="container text-center">
        <div class="row row-card">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class='single'>
            <img src="{{ asset('asset/picture/Tablet.png') }}" class="gambar" alt="...">
            <p>Tablet</p>
            </div>
        </div>
        </div>
    </div>
    <br>
    <br>
    <div class="table text-center">
        <table class="table" id="return">
        <thead>
            <tr>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Nama</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Kode Device</th>
            <th scope="col">Mentoring Mapel</th>
            <th scope="col">Waktu Peminjaman</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <input type="date" name="tanggal_peminjaman" value="<?php echo date('Y-m-d'); ?>" readonly>
                </th>
                <td>
                    <input type="text" name="nama" value="{{ Auth::user()->name }}" readonly>
                </td>
                <td>
                    <select name="mata_pelajaran" id="mata_pelajaran" required>
                    @foreach($mapel as $value)
                        <option value="{{ $value->id }}">{{ $value->mapel }}</option>
                    @endforeach
                </select>
                </td>
                <td>
                    {{-- <select name="kode_device" id="kode_device" class="select2" required>
                            @foreach($device as $value)
                                <option value="{{ $value->nama_device }}">{{ $value->kode_device }}</option>
                            @endforeach
                    </select> --}}
                    <input type="text" name="kode_device" id="kode_device">
                </td>
                <td>
                    <select name="mentoring_mapel" id="mentoring_mapel" required>
                        @foreach($guru as $value)
                            <option value="{{ $value->nama }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="time" name="waktu_peminjaman" id="inputTime" step="1" readonly>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    <br>
    <div class="container">
        <div class="row">
          <div class="col text-center">
            <input type="submit" class="btn btn-lg" value="Confirm" style="background-color: #14274c; color:white">
          </div>
        </div>
    </div>
    </form>
@endsection

@push('scripts')
<script>
function setInputTime() {
 let currentTime = new Date();
 let hours = currentTime.getHours();
 let minutes = currentTime.getMinutes();
 let seconds = currentTime.getSeconds();

 let formattedTime = hours.toString().padStart(2, '0') + ':' +
                      minutes.toString().padStart(2, '0') + ':' +
                      seconds.toString().padStart(2, '0');

 // Set the value of the input field with id "inputTime"
 document.getElementById('inputTime').value = formattedTime;
}

setInputTime();
</script>
@endpush
