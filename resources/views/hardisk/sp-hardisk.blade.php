@extends('layout.master-2')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts-2')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

@section('content-2')
    <div class="balik">
        <a href="/electronic" class="next round" style="text-decoration: none;">
            < </a>
    </div>

    <br>
    <br>

    <form action="/select-hardisk/store" method="post">
        @csrf
        <div class="container text-center">
            <div class='single'>
                <img src="{{ asset('asset/picture/Hard disk.png') }}" class="gambar" alt="...">
                <p>Hardisk (HDD)</p>
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
                                @foreach ($mapel as $value)
                                    <option value="{{ $value->mapel }}">{{ $value->mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="kode_device" id="kode_device" class="js-example-basic-single" required>
                                @foreach ($datahardisk as $value)
                                    <option value="{{ $value->kode_device }}">{{ $value->kode_device }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="kode_device" id="kode_device"> --}}
                        </td>
                        <td>
                            <select name="mentoring_mapel" id="mentoring_mapel" required>
                                @foreach ($guru as $value)
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
            <form>
                <fieldset>
                    <legend>Isi table</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_peminjaman" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Nama</label>
                        <input type="text" name="nama" value="{{ Auth::user()->name }}" readonly>

                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="disabledFieldsetCheck">Mata pelajaran </label>
                        <select name="mata_pelajaran" id="mata_pelajaran" required>
                            @foreach ($mapel as $value)
                                <option value="{{ $value->id }}">{{ $value->mapel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="disabledFieldsetCheck">Kode Device</label>
                        <select name="kode_device" id="kode_device" class="js-example-basic-single" required>
                            @foreach($datahardisk as $value)
                                <option value="{{ $value->kode_device }}">{{ $value->kode_device }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="disabledFieldsetCheck">Mentoring Mapel</label>
                        <select name="mentoring_mapel" id="mentoring_mapel" required>
                            @foreach ($guru as $value)
                                <option value="{{ $value->nama }}">{{ $value->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                </fieldset>
            </form>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <input class="btn btn-lg" type="submit" value="Confirm" style="background-color:#18244c; color:white">
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

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
