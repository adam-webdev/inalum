<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <style>
        * {
            font-family: 'Poppins';
        }

        .th {
            font-weight: 800;
        }

        .card {
            margin-top: 80px;
            display: flex;
            width: 100%;
            grid-row-gap: 10px;
            box-sizing: border-box;
        }

        .left {
            box-sizing: border-box;
        }

        .rigth {
            box-sizing: border-box;
            margin-left: 5px;
        }

        @media only screen and (max-width: 1200px) {
            .card {
                display: flex;
                flex-direction: column;
                position: relative;
            }

            .left {
                width: 100%;
            }

            .rigth {
                width: 100%;
                margin-top: 19px;
                margin-left: 5px;
            }

        }

        .wrapp {
            margin-top: -30px;
        }

        .tanggal {
            width: 40%;
            padding: 0 4px;
            background-color: rgb(215, 215, 114);
            border: 2px solid black;
            height: 40px;
            /* margin-top: 30px; */
            margin-bottom: -30px;
            font-size: 22px;
            font-weight: bold;
            color: #000;
        }

        .p-4 {
            padding: 10px;
        }

        input[type=date] {
            width: 50%;
            background-color: transparent;
            outline: none;
            border: none;
            font-size: 20px;
        }


        .table1,
        .table-custom {
            width: 100%;
            color: black;
        }

        .kendaraan {
            margin-top: 57px;
            font-size: 28px;
            text-align: center;
            border: 2px solid black;
            background-color: rgb(180, 192, 188);
            font-weight: bold;
            letter-spacing: 6px;
            width: 100%;
            color: black;
        }

        .schedule,
        .others {
            font-size: 18px;
            font-weight: 800;
            border: 2px solid black;
            background-color: rgb(203, 203, 84);
            word-spacing: 30px;
            color: black;
            padding-left: 10px;
        }

        .trouble {
            background-color: rgb(89, 135, 210);

        }

        .table-bordered-custom,
        table>tbody>tr>td {
            border: 2px solid black;
            border-collapse: collapse;
            position: relative;
            text-align: center;
            padding: 8px 0;
        }


        table>tbody>tr>td>input {
            width: 100%;
            height: 30px;
            border: none;
        }

        table>tbody>tr>td>input:focus {
            outline: none;
        }

        .col-left-1 {
            width: 80%;
        }

        .col-left-2 {
            width: 20%;
        }

        .col-12 {
            width: 12%;
        }

        .col-6 {
            width: 6%;
        }

        .col-4 {
            font-size: 16px;
            width: 4%;
        }

        .col-10 {
            width: 10%;
        }

        .col-16 {
            width: 16%;
        }

        .col-20 {
            width: 20%;
            /* font-weight: bold; */
        }

        .col-25 {
            width: 25%;
        }

        .col-50 {
            width: 50%;
            font-weight: bold;
        }

        .col-74 {
            width: 74%;
            border: none;
        }

        .col-4 {
            width: 4%;
            font-size: 16px;
        }

        .h30>input {
            height: 60px !important;
        }

        #fscreen {
            position: absolute;
            top: 0;
            left: 0;
        }

        .other input {
            width: 100%;
            height: 80px;
            position: relative;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(89, 135, 210);
        }

        .flex-kendaraan {
            display: flex;
            justify-content: space-between;
            background-color: rgb(180, 192, 188);
            border: 2px solid black;
            align-items: center;
        }

        .hapus-jadwal {
            margin-top: 20px;
            display: inline-block;
            padding: 8px 12px;
            border-radius: 4px;
            background: rgb(207, 58, 58);
            text-decoration: none;
            color: #fff;
        }

        .hapus-jadwal:hover {
            background: rgb(179, 56, 56);
            transition: .5s;
            box-shadow: 2px 2px 1px 1px rgba(0, 0, 0, 0.4);

        }

        .kendaraan2 {
            font-size: 24px;
            padding: 6px;
            text-align: center;
            background-color: rgb(180, 192, 188);
            font-weight: bold;
            border: 2px solid black;
            color: black;
            margin-top: 39px;
        }

        .card-tampilkan {
            /* background: rgb(96, 96, 96); */
            background-color: rgb(255, 255, 255);
            padding: 14px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgb(32 33 36 / 18%);
            font-size: 18px;
        }

        label {
            font-size: 20px;
        }

        .card-tampilkan input {
            border: 2px solid black;
            padding: 3px;
            width: 250px;
            background: white;
        }

        .tampilkan-btn,
        .input {
            padding: 6px 12px;
            font-size: 18px;
            background: rgb(89, 135, 210);
            border: 2px solid black;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
        }

        .tampilkan-btn:hover,
        .input:hover {
            transition: .5s;
            box-shadow: 2px 2px 1px 1px rgba(0, 0, 0, 0.4);
        }

        .edit {
            background-color: rgb(180, 192, 188);
            border: none;
            border-radius: 4px;
            padding: 8px 12px;

        }

        .bg-yellow {
            background-color: rgb(203, 203, 84);
        }

        .bold {
            font-weight: 800 !important;
        }
    </style>
</head>

<body style="background: rgb(233, 242, 255)">
    @include('sweetalert::alert')
    <div class="card-tampilkan">
        <form action="" method="get">
            <label for="">Filter :</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal">
            <button class="tampilkan-btn">Tampilkan</button>
        </form>
        @if (isset(auth()->user()->name))
            <a href="{{ route('jadwal.create') }}" class="input">Input Jadwal</a>
        @else
            <a href="{{ route('login') }}" class="input">Input Jadwal</a>
        @endif
    </div>
    @if (isset(auth()->user()->name))
        @if (isset($kendaraan->tanggal))
            <a href="/hapus/jadwal/{{ $kendaraan->tanggal }}" class="hapus-jadwal"
                onclick="return confirm('Yakin ingin menghapus jadwal ?')"> <i class="fas fa-trash"
                    style="margin-right:4px"></i>Hapus
                Jadwal</a>
            <a href="/jadwal/edit/{{ $kendaraan->tanggal }}" class="input edit"> <i class="fas fa-edit"
                    style="margin-right:4px"></i>
                Edit Jadwal</a>
        @else
            <p>Data Tidak ditemukan</p>
        @endif
    @endif
    <div class="card">
        <div class="left">
            <div class="tanggal">
                <label for="tanggal">Tanggal :</label>
                @if (isset($kendaraan->tanggal))
                    {{ \Carbon\Carbon::parse($kendaraan->tanggal)->format('d-m-Y') }}
                @endif
            </div>

            {{-- <p class="kendaraan">KENDARAAN</p>
            <table class="table1 table-bordered-custom">
                <tbody>

                </tbody>
            </table>
            <p><br></p> --}}
            {{-- <table class="table-custom table-bordered-custom" style="margin-top: -57px">
                <tbody>

                </tbody>
            </table> --}}
            <table class="table-custom table-bordered-custom" style="margin-top: 30px">
                <tbody>
                    <tr>
                        <td colspan="16" class="kendaraan">
                            KENDARAAN
                        </td>
                    </tr>
                    <tr>
                        <td class="col-left-1" colspan="14"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black"><br>
                        </td>
                        <td class="col-left-2" colspan="2"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black">
                            <b>Kendaraan
                            </b><br>
                        </td>
                    </tr>
                    <tr class="th">
                        <td class="col-12 bold">SUBSEKSI</td>
                        <td class="col-12" colspan="2"> F.R</td>
                        <td class="col-12" colspan="2">F.H</td>
                        <td class="col-12" colspan="2">F.S</td>
                        <td class="col-4">ST</td>
                        <td class="col-4">SW</td>
                        <td class="col-4">AF</td>
                        <td class="col-4">TR</td>
                        <td class="col-4">S</td>
                        <td class="col-12" colspan="2">Lain-lain</td>
                        <td class="col-20" colspan="2"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black">
                            DI V/S
                        </td>
                    </tr>
                    <tr>
                        <td class="col-12 bold">PL-1(St-1 & 2)</td>
                        <td class="col-6"> {{ $kendaraan->pl1_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl1_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl1_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl1_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl1_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl1_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl1_lainlain2 ?? '' }}</td>
                        <td class="col-10 bold">FST</td>
                        <td class="col-10 bold">General</td>
                    </tr>
                    <tr>
                        <td class="col-12 bold">PL-2(St-3 & 4)</td>
                        <td class="col-6"> {{ $kendaraan->pl2_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl2_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl2_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl2_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl2_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl2_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl2_lainlain2 ?? '' }}</td>
                        <td rowspan="7">
                            @foreach ($kendaraanDivs as $kd)
                                <span>{{ $kd->fst }}<br></span>
                            @endforeach
                        </td>
                        <td rowspan="7">
                            @foreach ($kendaraanDivs as $kd)
                                <span>{{ $kd->general }}<br></span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td class="col-12 bold">PL-3(St-5 & 6)</td>
                        <td class="col-6"> {{ $kendaraan->pl3_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl3_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl3_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl3_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl3_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->pl3_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->pl3_lainlain2 ?? '' }}</td>

                    </tr>
                    <tr>
                        <td class="col-12 bold">Start-Up</td>
                        <td class="col-6"> {{ $kendaraan->startup_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->startup_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->startup_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->startup_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->startup_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->startup_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->startup_lainlain2 ?? '' }}</td>

                    </tr>
                    <tr>
                        <td class="col-12 bold">TRP</td>
                        <td class="col-6"> {{ $kendaraan->trp_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->trp_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->trp_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->trp_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->trp_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->trp_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->trp_lainlain2 ?? '' }}</td>

                    </tr>
                    <tr>
                        <td class="col-12 bold">GC</td>
                        <td class="col-6"> {{ $kendaraan->gc_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->gc_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->gc_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->gc_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->gc_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->gc_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->gc_lainlain2 ?? '' }}</td>

                    </tr>
                    <tr>
                        <td class="col-12 bold">CP / CF</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->cpcf_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->cpcf_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->cpcf_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->cpcf_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->cpcf_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->cpcf_lainlain2 ?? '' }}</td>

                    </tr>
                    <tr>
                        <td class="col-12 bold">MSR</td>
                        <td class="col-6"> {{ $kendaraan->msr_fr1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_fr2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_fh1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_fh2 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_fs1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_fs2 ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->msr_st ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->msr_sw ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->msr_af ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->msr_tr ?? '' }}</td>
                        <td class="col-4"> {{ $kendaraan->msr_s ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_lainlain1 ?? '' }}</td>
                        <td class="col-6"> {{ $kendaraan->msr_lainlain2 ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="schedule" colspan="16">SCHEDULE PREVENTIVE MAINTENANCE</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bold">KEND</td>
                        <td colspan="8" class="bold">ISI PEKERJAAN</td>
                        <td colspan="3" class="bold">MULAI</td>
                        <td colspan="2" class="bold">SELESAI</td>
                        <td colspan="2" class="bold">STATUS</td>
                    </tr>

                    @foreach ($schedule as $s)
                        <tr>
                            <td colspan="2">{{ $s->kendaraan ?? '' }}</td>
                            <td colspan="8">{{ $s->isi_pekerjaan ?? '' }}</td>
                            <td colspan="3">{{ \Carbon\Carbon::parse($s->mulai)->format('h:i') ?? '' }}</td>
                            <td colspan="2">{{ \Carbon\Carbon::parse($s->selesai)->format('h:i') ?? '' }}</td>
                            <td colspan="2">{{ $s->status ?? '' }}</td>
                        </tr>
                    @endforeach

                    <tr>
                        <td class="schedule trouble" colspan="16">TROUBLE</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bold">KEND</td>
                        <td colspan="4" class="bold">JENIS KERUSAKAN</td>
                        <td colspan="4" class="bold">ISI PERBAIKAN</td>
                        <td colspan="3" class="bold">MULAI</td>
                        <td colspan="2" class="bold">SELESAI</td>
                        <td colspan="2" class="bold">STATUS</td>
                    </tr>
                    @foreach ($trouble as $s)
                        <tr>
                            <td colspan="2">{{ $s->kendaraan ?? '' }}</td>
                            <td colspan="4">{{ $s->jenis_kerusakan ?? '' }}</td>
                            <td colspan="4">{{ $s->isi_perbaikan ?? '' }}</td>
                            <td colspan="3">{{ \Carbon\Carbon::parse($s->mulai)->format('h:i') ?? '' }}</td>
                            <td colspan="2">{{ \Carbon\Carbon::parse($s->selesai)->format('h:i') ?? '' }}</td>
                            <td colspan="2">{{ $s->status ?? '' }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="schedule other" colspan="16">OTHERS</td>
                    </tr>

                    @foreach ($other as $o)
                        <tr>
                            <td colspan="16">{{ $o->kontent }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>


        <div class="rigth">
            <p class="kendaraan2">DAFTAR KOTRAKTOR YANG BEKERJA DI GEDUNG REDUKSI</p>
            <table class="table1 table-bordered-custom" style="margin-top: -25px">
                <tbody id="add-row-kendaraan">
                    <tr class="th">
                        <td class="col-4 bg-yellow p-4">NO</td>
                        <td class="col-16  bg-yellow p-4">TGL</td>
                        <td class="col-10  bg-yellow p-4">WAKTU</td>
                        <td class="col-25  bg-yellow p-4">KONTRAKTOR</td>
                        <td class="col-25  bg-yellow p-4">JENIS PEKERJAAN</td>
                        <td class="col-10  bg-yellow p-4">LOKASI</td>
                        <td class="col-10  bg-yellow p-4">KET</td>
                    </tr>
                    @foreach ($kontraktor as $k)
                        <tr>
                            <td class="col-4 p-4" id="no">{{ $loop->iteration }}</td>
                            <td class="col-16 p-4">
                                {{ \Carbon\Carbon::parse($k->input_tanggal)->format('d-m-Y') ?? '' }}
                            </td>
                            <td class="col-10 p-4">{{ \Carbon\Carbon::parse($k->waktu)->format('h:i') ?? '' }}
                            </td>
                            <td class="col-25 p-4">{{ $k->kontraktor ?? '' }}</td>
                            <td class="col-25 p-4">{{ $k->jenis_pekerjaan ?? '' }}</td>
                            <td class="col-10 p-4">{{ $k->lokasi ?? '' }}</td>
                            <td class="col-10 p-4">{{ $k->ket ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <script>
        $(document).ready(function() {


        });
    </script>
</body>

</html>
