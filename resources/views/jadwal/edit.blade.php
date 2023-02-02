@extends('layouts.layout')
@section('title', 'Edit Jadwal')
@section('css')
    <!-- include libraries(jQuery, bootstrap) -->

    <style>
        * {
            font-family: 'Poppins';
        }

        .tanggal {
            width: 50%;
            padding: 0 4px;
            background-color: rgb(215, 215, 114);
            border: 2px solid black;
            height: 40px;
            /* margin-bottom: -30px; */
            font-size: 22px;
            font-weight: bold;
            color: #000;
            margin-left: 10px;
        }

        .tanggal-utama {
            width: 80%;
            background-color: transparent;
            outline: none;
            border: none;
            font-size: 22px;
        }


        .table1,
        .table-custom {
            width: 100%;
            color: black;
            font-weight: bold;
        }

        .kendaraan {
            font-size: 30px;
            text-align: center;
            border: 2px solid black;
            background-color: rgb(180, 192, 188);
            margin-bottom: -2px;
            font-weight: bold;
            letter-spacing: 6px;
            color: black;

        }



        .schedule,
        .others {
            font-size: 30px;
            font-weight: 800;
            border: 2px solid black;
            /* background-color: rgb(203, 203, 84); */
            /* margin-top: -7px; */
            word-spacing: 30px;
            color: black;
            padding-left: 10px;
            margin-bottom: -1px;
            border-right: none;
            border-top: none;
        }

        .trouble {
            background-color: rgb(89, 135, 210);
            border-right: none;
            border-top: none;

        }

        .table-bordered-custom,
        table>tbody>tr>td {
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 0;
            box-sizing: border-box;
            height: 40px;
            font-weight: bold;
        }

        table tbody tr td input {
            width: 100%;
            height: 100%;
            height: 30px;
            border: none;
            font-weight: bold;
        }

        table>tbody>tr>td>input:focus {
            outline: none;
        }

        .col-left-1 {
            width: 80%;
            margin: 0;
            padding: 0;
        }

        .col-left-2 {
            width: 20%;
            margin: 0;
            padding: 0;
        }

        .col-12 {
            width: 12%;
            margin: 0;
            padding: 0;
        }

        .col-6 {
            width: 6%;
            margin: 0;
            padding: 0;
        }

        .col-4 {
            width: 4%;
            margin: 0;
            padding: 0;
        }

        .col-10 {
            width: 10%;
            margin: 0;
            padding: 0;
        }

        .col-20 {
            width: 20%;
            margin: 0;
            padding: 0;
            /* font-weight: bold; */
        }

        .col-25 {
            width: 25%;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .col-50 {
            width: 50%;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .col-74 {
            width: 74%;
            border: none;
            margin: 0;
            padding: 0;
        }

        .col-4 {
            width: 4%;
            margin: 0;
            padding: 0;
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

        .kendaraan2 {
            padding-left: 4px;
            font-size: 30px;
            text-align: center;
            border-right: none;
            border-bottom: 2px solid black;
            background-color: rgb(180, 192, 188);
            margin-bottom: -2px;
            font-weight: bold;
            color: black;
        }

        .btn-primary {
            width: 100%;
            font-size: 20px;
            padding: 8px;
        }
    </style>
@endsection

@section('content')
    @include('sweetalert::alert')
    @if (Session::get('pesan'))
        <div id="alert" class="alert alert-danger pesan-erorr d-flex justify-content-between align-items-center">
            <p> {{ Session::get('pesan') }} </p>
            <p style="font-weight: bold;cursor:pointer;" id="close">X</p>
        </div>
    @endif
    <div class="card">
        <form action="/jadwal/update/{{ $kendaraan->tanggal }}" method="post">
            @method('PUT')
            @csrf
            <div class="row  justify-content-between align-items-center ">
                <div class="tanggal">
                    <label for="tanggal">Tanggal :</label>
                    <input class="tanggal-utama" type="date" name="tanggal" value="{{ $kendaraan->tanggal }}" required>
                </div>
                <span class="fas fa-expand-arrows-alt fa-2x" style="color:black; margin-right:18px;cursor:pointer;"></span>
            </div>
            <p class="kendaraan">KENDARAAN</p>
            <table class="table1 table-bordered-custom">
                <tbody>
                    <tr>
                        <td class="col-left-1"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black"><br></td>
                        <td class="col-left-2"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black"><b>Kendaraan
                            </b><br></td>
                    </tr>
                </tbody>
            </table>
            <p><br></p>
            <table class="table-custom table-bordered-custom" style="margin-top: -40px">
                <tbody>
                    <tr>
                        <td class="col-12">SUBSEKSI</td>
                        <td class="col-12"> F.R</td>
                        <td class="col-12">F.H</td>
                        <td class="col-12">F.S</td>
                        <td class="col-4">ST</td>
                        <td class="col-4">SW</td>
                        <td class="col-4">AF</td>
                        <td class="col-4">TR</td>
                        <td class="col-4">S</td>
                        <td class="col-12">Lain-lain</td>
                        <td class="col-20"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black">
                            <div class="flex" style="background: 000">
                                <span></span>
                                <span>
                                    DI V/S
                                </span>
                                <button style="margin-left: 20px;" type="button" class="add-fst-general mr-2"><i
                                        class="fas fa-plus"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-bordered-custom">
                <tbody>
                    <tr>
                        <td class="col-12">PL-1(St-1 & 2)</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->pl1_fr1 }}" name="pl1_fr1"></td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->pl1_fr2 }}" name="pl1_fr2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl1_fh1 }}" name="pl1_fh1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl1_fh2 }}" name="pl1_fh2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl1_fs1 }}" name="pl1_fs1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl1_fs2 }}" name="pl1_fs2"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl1_st }}" name="pl1_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl1_sw }}" name="pl1_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl1_af }}" name="pl1_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl1_tr }}" name="pl1_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl1_s }}" name="pl1_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl1_lainlain1 }}"
                                name="pl1_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl1_lainlain2 }}"
                                name="pl1_lainlain2"></td>
                        <td class="col-10">FST</td>
                        <td class="col-10">General</td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-2(St-3 & 4)</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->pl2_fr1 }}" name="pl2_fr1"></td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->pl2_fr2 }}" name="pl2_fr2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl2_fh1 }}" name="pl2_fh1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl2_fh2 }}" name="pl2_fh2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl2_fs1 }}" name="pl2_fs1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl2_fs2 }}" name="pl2_fs2"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl2_st }}" name="pl2_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl2_sw }}" name="pl2_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl2_af }}" name="pl2_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl2_tr }}" name="pl2_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl2_s }}" name="pl2_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl2_lainlain1 }}"
                                name="pl2_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl2_lainlain2 }}"
                                name="pl2_lainlain2"></td>
                        </td>

                        <td rowspan="7" class="col-10">
                            @foreach ($kendaraanDivs as $kd)
                                <input type="text" value="{{ $kd->fst }}" name="fst[]"><br>
                            @endforeach
                        </td>
                        <td rowspan="7" class="col-10">
                            @foreach ($kendaraanDivs as $kd)
                                <input type="text" value="{{ $kd->general }}" name="general[]"><br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-3(St-5 & 6)</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->pl3_fr1 }}" name="pl3_fr1">
                        </td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->pl3_fr2 }}" name="pl3_fr2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl3_fh1 }}" name="pl3_fh1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl3_fh2 }}" name="pl3_fh2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl3_fs1 }}" name="pl3_fs1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl3_fs2 }}" name="pl3_fs2"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl3_st }}" name="pl3_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl3_sw }}" name="pl3_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl3_af }}" name="pl3_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl3_tr }}" name="pl3_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->pl3_s }}" name="pl3_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl3_lainlain1 }}"
                                name="pl3_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->pl3_lainlain2 }}"
                                name="pl3_lainlain2"></td>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-12">Start-Up</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->startup_fr1 }}"
                                name="startup_fr1"></td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->startup_fr2 }}"
                                name="startup_fr2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->startup_fh1 }}"
                                name="startup_fh1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->startup_fh2 }}"
                                name="startup_fh2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->startup_fs1 }}"
                                name="startup_fs1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->startup_fs2 }}"
                                name="startup_fs2"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->startup_st }}"
                                name="startup_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->startup_sw }}"
                                name="startup_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->startup_af }}"
                                name="startup_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->startup_tr }}"
                                name="startup_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->startup_s }}" name="startup_s">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->startup_lainlain1 }}"
                                name="startup_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->startup_lainlain2 }}"
                                name="startup_lainlain2"></td>

                    </tr>
                    <tr>
                        <td class="col-12">TRP</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->trp_fr1 }}" name="trp_fr1">
                        </td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->trp_fr2 }}" name="trp_fr2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->trp_fh1 }}" name="trp_fh1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->trp_fh2 }}" name="trp_fh2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->trp_fs1 }}" name="trp_fs1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->trp_fs2 }}" name="trp_fs2"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->trp_st }}" name="trp_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->trp_sw }}" name="trp_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->trp_af }}" name="trp_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->trp_tr }}" name="trp_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->trp_s }}" name="trp_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->trp_lainlain1 }}"
                                name="trp_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->trp_lainlain2 }}"
                                name="trp_lainlain2"></td>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-12">GC</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->gc_fr1 }}" name="gc_fr1"></td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->gc_fr2 }}" name="gc_fr2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->gc_fh1 }}" name="gc_fh1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->gc_fh2 }}" name="gc_fh2"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->gc_fs1 }}" name="gc_fs1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->gc_fs2 }}" name="gc_fs2"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->gc_st }}" name="gc_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->gc_sw }}" name="gc_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->gc_af }}" name="gc_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->gc_tr }}" name="gc_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->gc_s }}" name="gc_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->gc_lainlain1 }}"
                                name="gc_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->gc_lainlain2 }}"
                                name="gc_lainlain2"></td>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-12">CP / CF</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->cpcf_fr1 }}" name="cpcf_fr1">
                        </td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->cpcf_fr2 }}" name="cpcf_fr2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->cpcf_fh1 }}" name="cpcf_fh1">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->cpcf_fh2 }}" name="cpcf_fh2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->cpcf_fs1 }}" name="cpcf_fs1">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->cpcf_fs2 }}" name="cpcf_fs2">
                        </td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->cpcf_st }}" name="cpcf_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->cpcf_sw }}" name="cpcf_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->cpcf_af }}" name="cpcf_af">
                        </td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->cpcf_tr }}" name="cpcf_tr">
                        </td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->cpcf_s }}" name="cpcf_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->cpcf_lainlain1 }}"
                                name="cpcf_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->cpcf_lainlain2 }}"
                                name="cpcf_lainlain2"></td>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-12">MSR</td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->msr_fr1 }}" name="msr-fr1">
                        </td>
                        <td class="col-6"> <input type="text" value="{{ $kendaraan->msr_fr2 }}" name="msr_fr2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->msr_fh1 }}" name="msr-_h1">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->msr_fh2 }}" name="msr_fh2">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->msr_fs1 }}" name="msr_fs1">
                        </td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->msr_fs2 }}" name="msr_fs2">
                        </td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->msr_st }}" name="msr_st"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->msr_sw }}" name="msr_sw"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->msr_af }}" name="msr_af"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->msr_tr }}" name="msr_tr"></td>
                        <td class="col-4"><input type="text" value="{{ $kendaraan->msr_s }}" name="msr_s"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->msr_lainlain1 }}"
                                name="msr_lainlain1"></td>
                        <td class="col-6"><input type="text" value="{{ $kendaraan->msr_lainlain2 }}"
                                name="msr_lainlain2"></td>

                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-bordered-custom">
                <tbody id="add-fst-general">

                </tbody>
            </table>
            <div class="flex">
                <p class="schedule">SCHEDULE PREVENTIVE MAINTENANCE</p>
                <button type="button" class="add-schedule mr-2"><i class="fas fa-plus"></i></button>
            </div>
            <table class="table-custom table-bordered-custom">
                <tbody id="add-row-schedule">
                    <tr>
                        <td class="col-20">KEND.</td>
                        <td class="col-50"> ISI PEKERJAAN</td>
                        <td class="col-10"> MULAI</td>
                        <td class="col-10">SELESAI</td>
                        <td class="col-10">STATUS</td>
                    </tr>
                    @foreach ($schedule as $s)
                        <tr class="child-schedule">
                            <td class="col-20"><input type="text" value="{{ $s->kendaraan }}"
                                    name="kendaraan_schedule[]"></td>
                            <td class="col-50"><input type="text" value="{{ $s->isi_pekerjaan }}"
                                    name="isipekerjaan_schedule[]"></td>
                            <td class="col-10"> <input type="time"
                                    value="{{ \Carbon\Carbon::parse($s->mulai)->format('h:i') }}"
                                    name="mulai_schedule[]"></td>
                            <td class="col-10"><input type="time"
                                    value="{{ \Carbon\Carbon::parse($s->selesai)->format('h:i') }}"
                                    name="selesai_schedule[]"></td>
                            <td class="col-10"><input type="text" value="{{ $s->status }}"
                                    name="status_schedule[]"></td>
                            <td style="padding:4px;">
                                <button type="button" class="btn btn-sm btn-danger delete-schedule">
                                    <i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="flex">
                <p class="schedule trouble">TROUBLE</p>
                <button type="button" class="add-trouble mr-2"><i class="fas fa-plus"></i></button>
            </div>
            <table class="table-custom table-bordered-custom">
                <tbody id="add-row-trouble">
                    <tr>
                        <td class="col-20">KEND.</td>
                        <td class="col-25">JENIS KERUSAKAN</td>
                        <td class="col-25"> ISI PERBAIKAN</td>
                        <td class="col-10"> MULAI</td>
                        <td class="col-10">SELESAI</td>
                        <td class="col-10">STATUS</td>
                    </tr>
                    @foreach ($trouble as $t)
                        <tr class="child-trouble">
                            <td class="col-20"><input type="text" value="{{ $t->kendaraan }}"
                                    name="kendaraan_trouble[]"></td>
                            <td class="col-25"><input type="text" value="{{ $t->jenis_kerusakan }}"
                                    name="jeniskerusakan_trouble[]"></td>
                            <td class="col-25"><input type="text" value="{{ $t->isi_perbaikan }}"
                                    name="isiperbaikan_trouble[]"></td>
                            <td class="col-10"> <input type="time"
                                    value="{{ \Carbon\Carbon::parse($t->mulai)->format('h:i') }}"
                                    name="mulai_trouble[]"></td>
                            <td class="col-10"><input type="time"
                                    value="{{ \Carbon\Carbon::parse($t->selesai)->format('h:i') }}"
                                    name="selesai_trouble[]"></td>
                            <td class="col-10"><input type="text" value="{{ $t->status }}"
                                    name="status_trouble[]"></td>
                            <td style="padding:4px;">
                                <button type="button" class="btn btn-sm btn-danger delete-trouble">
                                    <i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex">
                <p class="schedule others">OTHERS</p>
                <button type="button" class="add-other mr-2"><i class="fas fa-plus"></i></button>
            </div>
            <table class="table-custom table-bordered-custom">
                <tbody id="add-row-other">
                    @foreach ($other as $o)
                        <tr class="child">
                            <td width="100%" class="other">
                                <input name="others[]" value="{{ $o->kontent }}">
                            </td>
                            <td style="padding:2px;">
                                <button type="button" class="btn btn-sm btn-danger delete-other btn-danger"><i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p><br></p>


            <div class="flex-kendaraan">
                <p class="kendaraan2">DAFTAR KOTRAKTOR YANG BEKERJA DI GEDUNG REDUKSI</p>
                <button type="button" class="add-kendaraan mr-2"><i class="fas fa-plus"></i></button>
            </div>
            <table class="table1 table-bordered-custom">
                <tbody id="add-row-kendaraan">
                    <tr>
                        <td class="col-4">NO</td>
                        <td class="col-6">TGL</td>
                        <td class="col-10">WAKTU</td>
                        <td class="col-30">KONTRAKTOR</td>
                        <td class="col-30">JENIS PEKERJAAN</td>
                        <td class="col-10">LOKASI</td>
                        <td class="col-10">KET</td>
                    </tr>
                    @foreach ($kontraktor as $k)
                        <tr class="child-kendaraan">
                            <td class="col-4" id="no">{{ $loop->iteration }}</td>
                            <td class="col-6 h-30px"><input type="date" value="{{ $k->tanggal }}"
                                    name="tgl_kendaraan[]"></td>
                            <td class="col-10 h-30px"><input type="time"
                                    value="{{ \Carbon\Carbon::parse($k->waktu)->format('h:i') }}"
                                    name="waktu_kendaraan[]"></td>
                            <td class="col-30 h-30px"><input type="text"
                                    value="{{ $k->kontraktor }}"name="kontraktor[]"></td>
                            <td class="col-30 h-30px"><input type="text" value="{{ $k->jenis_pekerjaan }}"
                                    name="jenis_pekerjaan[]"></td>
                            <td class="col-10 h-30px"><input type="text" value="{{ $k->lokasi }}"
                                    name="lokasi[]"></td>
                            <td class="col-10 h-30px"><input type="text" value="{{ $k->ket }}"
                                    name="ket[]"></td>
                            <td style="padding:2px;">
                                <button type="button" class="btn btn-sm btn-danger delete-kendaraan">
                                    <i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary my-4">Simpan</button>
        </form>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

            $('.add-fst-general').on('click', function() {
                $('#add-fst-general').append(`
                    <tr class="child-fst-general">
                        <td class="col-74"></td>
                        <td  class="col-6">
                            <button type="button" class="btn btn-sm btn-danger delete-fst-general">
                                <i class="fas fa-trash-alt"></i></button>
                        </td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>

                    </tr>
                `)
            })
            $(document).on('click', '.delete-fst-general', function() {
                $(this).parents('.child-fst-general').remove()
            })

            $('.add-other').on('click', function() {
                $('#add-row-other').append(`
                 <tr class="child">
                        <td width="100%" class="other">
                            <input name="others[]" id="">
                        </td>
                        <td style="padding:2px;">
                             <button  type="button" class="btn btn-sm btn-danger delete-other btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `)
            })
            $(document).on('click', '.delete-other', function() {
                $(this).parents('.child').remove()
            })

            $('.add-schedule').on('click', function() {
                $('#add-row-schedule').append(`
                    <tr class="child-schedule">
                        <td class="col-20"><input type="text" name="kendaraan_schedule[]"></td>
                        <td class="col-25"><input type="text" name="isipekerjaan_schedule[]"></td>
                        <td class="col-10"> <input type="time" name="mulai_schedule[]"></td>
                        <td class="col-10"><input type="time" name="selesai_schedule[]"></td>
                        <td class="col-10"><input type="text" name="status_schedule[]"></td>
                        <td style="padding:2px;">
                            <button type="button" class="btn btn-sm btn-danger delete-schedule">
                            <i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `)
            })
            $(document).on('click', '.delete-schedule', function() {
                $(this).parents('.child-schedule').remove()
            })

            $('.add-trouble').on('click', function() {
                $('#add-row-trouble').append(`
                    <tr class="child-trouble">
                        <td class="col-20"><input type="text" name="kendaraan_trouble[]"></td>
                        <td class="col-25"><input type="text" name="jeniskerusakan_trouble[]"></td>
                        <td class="col-25"><input type="text" name="isiperbaikan_trouble[]"></td>
                        <td class="col-10"> <input type="time" name="mulai_trouble[]"></td>
                        <td class="col-10"><input type="time" name="selesai_trouble[]"></td>
                        <td class="col-10"><input type="text" name="status_trouble[]"></td>
                        <td style="padding:2px;">
                            <button type="button" class="btn btn-sm btn-danger delete-trouble">
                            <i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `)
            })
            $(document).on('click', '.delete-trouble', function() {
                $(this).parents('.child-trouble').remove()
            })

            var no = 1

            console.log(no)
            $('.add-kendaraan').on('click', function() {
                $('#add-row-kendaraan').append(`
                    <tr class="child-kendaraan">
                       <td class="col-4" id="no">${++no}</td>
                        <td class="col-6 h-30px"><input type="date" name="tgl_kendaraan[]"></td>
                        <td class="col-10 h-30px"><input type="time" name="waktu_kendaraan[]"></td>
                        <td class="col-30 h-30px"><input type="text" name="kontraktor[]"></td>
                        <td class="col-30 h-30px"><input type="text" name="jenis_pekerjaan[]"></td>
                        <td class="col-10 h-30px"><input type="text" name="lokasi[]"></td>
                        <td class="col-10 h-30px"><input type="text" name="ket[]"></td>
                        <td style="padding:2px;">
                            <button type="button" class="btn btn-sm btn-danger delete-kendaraan">
                            <i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `)
            })
            $(document).on('click', '.delete-kendaraan', function() {
                --no
                $(this).parents('.child-kendaraan').remove()
            })

            $('#close').on('click', function() {
                $('#alert').remove()
            })

        });
    </script>

@endsection
