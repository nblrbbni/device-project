@extends('layout.master-2')

@section('content-2')
    <div class="balik">
        <a href="/returndevice" class="next round" style="text-decoration: none">
            < </a>
    </div>

    <br />
    <br />
    {{-- main content --}}
    <form action="/return-HDMI/store" method="post">
        @csrf
        <div class="container text-center">
            <div class="row row-card">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="single">
                        <img src="{{ asset('asset/picture/Hdmi.png') }}"  alt="..." />
                        <p>HDMI</p>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="table text-center">
            <table class="table" id="return">
                <thead>
                    <tr>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor HDMI</th>
                        <th scope="col">Kondisi HDMI</th>
                        <th scope="col">Waktu pengembalian</th>
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
                            <input type="number" name="nomor_HDMI" required>
                        </td>
                        <td>
                            <input type="text" name="kondisi_HDMI" required>
                        </td>
                        <td>
                            <input type="time" name="waktu_pengembalian" id="inputTime" step="1" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <div class="buttonSp text-center">
            <input type="submit" class="btn btn-lg" value="Confirm" style="background-color: #14274c; color:white">
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

