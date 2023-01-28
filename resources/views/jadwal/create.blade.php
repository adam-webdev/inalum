@extends('layouts.layout')
@section('title', 'Tambah Jadwal')
@include('sweetalert::alert')

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
    @if (Session::get('pesan'))
        <div class="alert alert-danger pesan-erorr d-flex justify-content-between align-items-center">
            <p> {{ Session::get('pesan') }} </p>
            <p style="font-weight: bold" id="close">X</p>
        </div>
    @endif
    <div class="card">
        <form action="{{ route('jadwal.store') }}" method="post">
            @csrf
            <div class="row  justify-content-between align-items-center ">
                <div class="tanggal">
                    <label for="tanggal">Tanggal :</label>
                    <input class="tanggal-utama" type="date" name="tanggal" required>
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
                        <td class="col-6"> <input type="text" name="pl1_fr1"></td>
                        <td class="col-6"> <input type="text" name="pl1_fr2"></td>
                        <td class="col-6"><input type="text" name="pl1_fh1"></td>
                        <td class="col-6"><input type="text" name="pl1_fh2"></td>
                        <td class="col-6"><input type="text" name="pl1_fs1"></td>
                        <td class="col-6"><input type="text" name="pl1_fr2"></td>
                        <td class="col-4"><input type="text" name="pl1_st"></td>
                        <td class="col-4"><input type="text" name="pl1_sw"></td>
                        <td class="col-4"><input type="text" name="pl1_af"></td>
                        <td class="col-4"><input type="text" name="pl1_tr"></td>
                        <td class="col-4"><input type="text" name="pl1_s"></td>
                        <td class="col-6"><input type="text" name="pl1_lainlain1"></td>
                        <td class="col-6"><input type="text" name="pl1_lainlain2"></td>
                        <td class="col-10">FST</td>
                        <td class="col-10">General</td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-2(St-3 & 4)</td>
                        <td class="col-6"> <input type="text" name="pl2_fr1"></td>
                        <td class="col-6"> <input type="text" name="pl2_fr2"></td>
                        <td class="col-6"><input type="text" name="pl2_fh1"></td>
                        <td class="col-6"><input type="text" name="pl2_fh2"></td>
                        <td class="col-6"><input type="text" name="pl2_fs1"></td>
                        <td class="col-6"><input type="text" name="pl2_fr2"></td>
                        <td class="col-4"><input type="text" name="pl2_st"></td>
                        <td class="col-4"><input type="text" name="pl2_sw"></td>
                        <td class="col-4"><input type="text" name="pl2_af"></td>
                        <td class="col-4"><input type="text" name="pl2_tr"></td>
                        <td class="col-4"><input type="text" name="pl2_s"></td>
                        <td class="col-6"><input type="text" name="pl2_lainlain1"></td>
                        <td class="col-6"><input type="text" name="pl2_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-3(St-5 & 6)</td>
                        <td class="col-6"> <input type="text" name="pl3_fr1"></td>
                        <td class="col-6"> <input type="text" name="pl3_fr2"></td>
                        <td class="col-6"><input type="text" name="pl3_fh1"></td>
                        <td class="col-6"><input type="text" name="pl3_fh2"></td>
                        <td class="col-6"><input type="text" name="pl3_fs1"></td>
                        <td class="col-6"><input type="text" name="pl3_fr2"></td>
                        <td class="col-4"><input type="text" name="pl3_st"></td>
                        <td class="col-4"><input type="text" name="pl3_sw"></td>
                        <td class="col-4"><input type="text" name="pl3_af"></td>
                        <td class="col-4"><input type="text" name="pl3_tr"></td>
                        <td class="col-4"><input type="text" name="pl3_s"></td>
                        <td class="col-6"><input type="text" name="pl3_lainlain1"></td>
                        <td class="col-6"><input type="text" name="pl3_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">Start-Up</td>
                        <td class="col-6"> <input type="text" name="startup_fr1"></td>
                        <td class="col-6"> <input type="text" name="startup_fr2"></td>
                        <td class="col-6"><input type="text" name="startup_fh1"></td>
                        <td class="col-6"><input type="text" name="startup_fh2"></td>
                        <td class="col-6"><input type="text" name="startup_fs1"></td>
                        <td class="col-6"><input type="text" name="startup_fr2"></td>
                        <td class="col-4"><input type="text" name="startup_st"></td>
                        <td class="col-4"><input type="text" name="startup_sw"></td>
                        <td class="col-4"><input type="text" name="startup_af"></td>
                        <td class="col-4"><input type="text" name="startup_tr"></td>
                        <td class="col-4"><input type="text" name="startup_s"></td>
                        <td class="col-6"><input type="text" name="startup_lainlain1"></td>
                        <td class="col-6"><input type="text" name="startup_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">TRP</td>
                        <td class="col-6"> <input type="text" name="trp_fr1"></td>
                        <td class="col-6"> <input type="text" name="trp_fr2"></td>
                        <td class="col-6"><input type="text" name="trp_fh1"></td>
                        <td class="col-6"><input type="text" name="trp_fh2"></td>
                        <td class="col-6"><input type="text" name="trp_fs1"></td>
                        <td class="col-6"><input type="text" name="trp_fr2"></td>
                        <td class="col-4"><input type="text" name="trp_st"></td>
                        <td class="col-4"><input type="text" name="trp_sw"></td>
                        <td class="col-4"><input type="text" name="trp_af"></td>
                        <td class="col-4"><input type="text" name="trp_tr"></td>
                        <td class="col-4"><input type="text" name="trp_s"></td>
                        <td class="col-6"><input type="text" name="trp_lainlain1"></td>
                        <td class="col-6"><input type="text" name="trp_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">GC</td>
                        <td class="col-6"> <input type="text" name="gc_fr1"></td>
                        <td class="col-6"> <input type="text" name="gc_fr2"></td>
                        <td class="col-6"><input type="text" name="gc_fh1"></td>
                        <td class="col-6"><input type="text" name="gc_fh2"></td>
                        <td class="col-6"><input type="text" name="gc_fs1"></td>
                        <td class="col-6"><input type="text" name="gc_fr2"></td>
                        <td class="col-4"><input type="text" name="gc_st"></td>
                        <td class="col-4"><input type="text" name="gc_sw"></td>
                        <td class="col-4"><input type="text" name="gc_af"></td>
                        <td class="col-4"><input type="text" name="gc_tr"></td>
                        <td class="col-4"><input type="text" name="gc_s"></td>
                        <td class="col-6"><input type="text" name="gc_lainlain1"></td>
                        <td class="col-6"><input type="text" name="gc_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">CP / CF</td>
                        <td class="col-6"> <input type="text" name="cpcf_fr1"></td>
                        <td class="col-6"> <input type="text" name="cpcf_fr2"></td>
                        <td class="col-6"><input type="text" name="cpcf_fh1"></td>
                        <td class="col-6"><input type="text" name="cpcf_fh2"></td>
                        <td class="col-6"><input type="text" name="cpcf_fs1"></td>
                        <td class="col-6"><input type="text" name="cpcf_fr2"></td>
                        <td class="col-4"><input type="text" name="cpcf_st"></td>
                        <td class="col-4"><input type="text" name="cpcf_sw"></td>
                        <td class="col-4"><input type="text" name="cpcf_af"></td>
                        <td class="col-4"><input type="text" name="cpcf_tr"></td>
                        <td class="col-4"><input type="text" name="cpcf_s"></td>
                        <td class="col-6"><input type="text" name="cpcf_lainlain1"></td>
                        <td class="col-6"><input type="text" name="cpcf_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">MSR</td>
                        <td class="col-6"> <input type="text" name="msr-fr1"></td>
                        <td class="col-6"> <input type="text" name="msr_fr2"></td>
                        <td class="col-6"><input type="text" name="msr-_h1"></td>
                        <td class="col-6"><input type="text" name="msr_fh2"></td>
                        <td class="col-6"><input type="text" name="msr_fs1"></td>
                        <td class="col-6"><input type="text" name="msr_fr2"></td>
                        <td class="col-4"><input type="text" name="msr_st"></td>
                        <td class="col-4"><input type="text" name="msr_sw"></td>
                        <td class="col-4"><input type="text" name="msr_af"></td>
                        <td class="col-4"><input type="text" name="msr_tr"></td>
                        <td class="col-4"><input type="text" name="msr_s"></td>
                        <td class="col-6"><input type="text" name="msr_lainlain1"></td>
                        <td class="col-6"><input type="text" name="msr_lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
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
                    <tr>
                        <td class="col-20"><input type="text" name="kendaraan_schedule[]"></td>
                        <td class="col-50"><input type="text" name="isipekerjaan_schedule[]"></td>
                        <td class="col-10"> <input type="time" name="mulai_schedule[]"></td>
                        <td class="col-10"><input type="time" name="selesai_schedule[]"></td>
                        <td class="col-10"><input type="text" name="status_schedule[]"></td>
                    </tr>

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
                    <tr>
                        <td class="col-20"><input type="text" name="kendaraan_trouble[]"></td>
                        <td class="col-25"><input type="text" name="jeniskerusakan_trouble[]"></td>
                        <td class="col-25"><input type="text" name="isiperbaikan_trouble[]"></td>
                        <td class="col-10"> <input type="time" name="mulai_trouble[]"></td>
                        <td class="col-10"><input type="time" name="selesai_trouble[]"></td>
                        <td class="col-10"><input type="text" name="status_trouble[]"></td>
                    </tr>

                </tbody>
            </table>
            <div class="flex">
                <p class="schedule others">OTHERS</p>
                <button type="button" class="add-other mr-2"><i class="fas fa-plus"></i></button>
            </div>
            <table class="table-custom table-bordered-custom">
                <tbody id="add-row-other">
                    <tr>
                        <td width="100%" class="other">
                            <input name="others[]" id="">
                        </td>
                    </tr>
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
                    <tr>
                        <td class="col-4" id="no">1</td>
                        <td class="col-6 h-30px"><input type="date" name="tgl_kendaraan[]"></td>
                        <td class="col-10 h-30px"><input type="time" name="waktu_kendaraan[]"></td>
                        <td class="col-30 h-30px"><input type="text" name="kontraktor[]"></td>
                        <td class="col-30 h-30px"><input type="text" name="jenis_pekerjaan[]"></td>
                        <td class="col-10 h-30px"><input type="text" name="lokasi[]"></td>
                        <td class="col-10 h-30px"><input type="text" name="ket[]"></td>
                    </tr>
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
                        <td>
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
                        <td class="col-10"> <input type="time" name="mulai_shedule[]"></td>
                        <td class="col-10"><input type="time" name="selesai_schedule[]"></td>
                        <td class="col-10"><input type="text" name="status_schedule[]"></td>
                        <td>
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
                        <td>
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
                        <td>
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
                $('.pesan-erorr').css('display', 'none')
            })

        });
    </script>

@endsection
