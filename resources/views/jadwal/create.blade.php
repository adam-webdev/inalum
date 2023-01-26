@extends('layouts.layout')
@section('title', 'Tambah Jadwal')

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

        input[type=date] {
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
            height: 40px;
            font-weight: bold;
        }


        table>tbody>tr>td>input {
            width: 100%;
            height: 30px;
            border: none;
            font-weight: bold;
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
            width: 4%;
        }

        .col-10 {
            width: 10%;
        }

        .col-20 {
            width: 20%;
            /* font-weight: bold; */
        }

        .col-25 {
            width: 25%;
            font-weight: bold;
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
    </style>
@endsection
@section('content')
    <div class="card">
        <form action="{{ route('jadwal.store') }}" method="post">
            @csrf
            <div class="row  justify-content-between align-items-center ">
                <div class="tanggal">
                    <label for="tanggal">Tanggal :</label>
                    <input type="date" name="tanggal" required>
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
                        <td class="col-6"> <input type="text" name="pl1-fr1"></td>
                        <td class="col-6"> <input type="text" name="pl1-fr2"></td>
                        <td class="col-6"><input type="text" name="pl1-fh1"></td>
                        <td class="col-6"><input type="text" name="pl1-fh2"></td>
                        <td class="col-6"><input type="text" name="pl1-fs1"></td>
                        <td class="col-6"><input type="text" name="pl1-fr2"></td>
                        <td class="col-4"><input type="text" name="pl1-st"></td>
                        <td class="col-4"><input type="text" name="pl1-sw"></td>
                        <td class="col-4"><input type="text" name="pl1-af"></td>
                        <td class="col-4"><input type="text" name="pl1-tr"></td>
                        <td class="col-4"><input type="text" name="pl1-s"></td>
                        <td class="col-6"><input type="text" name="pl1-lainlain1"></td>
                        <td class="col-6"><input type="text" name="pl1-lainlain2"></td>
                        <td class="col-10">FST</td>
                        <td class="col-10">General</td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-2(St-3 & 4)</td>
                        <td class="col-6"> <input type="text" name="pl2-fr1"></td>
                        <td class="col-6"> <input type="text" name="pl2-fr2"></td>
                        <td class="col-6"><input type="text" name="pl2-fh1"></td>
                        <td class="col-6"><input type="text" name="pl2-fh2"></td>
                        <td class="col-6"><input type="text" name="pl2-fs1"></td>
                        <td class="col-6"><input type="text" name="pl2-fr2"></td>
                        <td class="col-4"><input type="text" name="pl2-st"></td>
                        <td class="col-4"><input type="text" name="pl2-sw"></td>
                        <td class="col-4"><input type="text" name="pl2-af"></td>
                        <td class="col-4"><input type="text" name="pl2-tr"></td>
                        <td class="col-4"><input type="text" name="pl2-s"></td>
                        <td class="col-6"><input type="text" name="pl2-lainlain1"></td>
                        <td class="col-6"><input type="text" name="pl2-lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-3(St-5 & 6)</td>
                        <td class="col-6"> <input type="text" name="pl3-fr1"></td>
                        <td class="col-6"> <input type="text" name="pl3-fr2"></td>
                        <td class="col-6"><input type="text" name="pl3-fh1"></td>
                        <td class="col-6"><input type="text" name="pl3-fh2"></td>
                        <td class="col-6"><input type="text" name="pl3-fs1"></td>
                        <td class="col-6"><input type="text" name="pl3-fr2"></td>
                        <td class="col-4"><input type="text" name="pl3-st"></td>
                        <td class="col-4"><input type="text" name="pl3-sw"></td>
                        <td class="col-4"><input type="text" name="pl3-af"></td>
                        <td class="col-4"><input type="text" name="pl3-tr"></td>
                        <td class="col-4"><input type="text" name="pl3-s"></td>
                        <td class="col-6"><input type="text" name="pl3-lainlain1"></td>
                        <td class="col-6"><input type="text" name="pl3-lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">Start-Up</td>
                        <td class="col-6"> <input type="text" name="startup-fr1"></td>
                        <td class="col-6"> <input type="text" name="startup-fr2"></td>
                        <td class="col-6"><input type="text" name="startup-fh1"></td>
                        <td class="col-6"><input type="text" name="startup-fh2"></td>
                        <td class="col-6"><input type="text" name="startup-fs1"></td>
                        <td class="col-6"><input type="text" name="startup-fr2"></td>
                        <td class="col-4"><input type="text" name="startup-st"></td>
                        <td class="col-4"><input type="text" name="startup-sw"></td>
                        <td class="col-4"><input type="text" name="startup-af"></td>
                        <td class="col-4"><input type="text" name="startup-tr"></td>
                        <td class="col-4"><input type="text" name="startup-s"></td>
                        <td class="col-6"><input type="text" name="startup-lainlain1"></td>
                        <td class="col-6"><input type="text" name="startup-lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">TRP</td>
                        <td class="col-6"> <input type="text" name="trp-fr1"></td>
                        <td class="col-6"> <input type="text" name="trp-fr2"></td>
                        <td class="col-6"><input type="text" name="trp-fh1"></td>
                        <td class="col-6"><input type="text" name="trp-fh2"></td>
                        <td class="col-6"><input type="text" name="trp-fs1"></td>
                        <td class="col-6"><input type="text" name="trp-fr2"></td>
                        <td class="col-4"><input type="text" name="trp-st"></td>
                        <td class="col-4"><input type="text" name="trp-sw"></td>
                        <td class="col-4"><input type="text" name="trp-af"></td>
                        <td class="col-4"><input type="text" name="trp-tr"></td>
                        <td class="col-4"><input type="text" name="trp-s"></td>
                        <td class="col-6"><input type="text" name="trp-lainlain1"></td>
                        <td class="col-6"><input type="text" name="trp-lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">GC</td>
                        <td class="col-6"> <input type="text" name="gc-fr1"></td>
                        <td class="col-6"> <input type="text" name="gc-fr2"></td>
                        <td class="col-6"><input type="text" name="gc-fh1"></td>
                        <td class="col-6"><input type="text" name="gc-fh2"></td>
                        <td class="col-6"><input type="text" name="gc-fs1"></td>
                        <td class="col-6"><input type="text" name="gc-fr2"></td>
                        <td class="col-4"><input type="text" name="gc-st"></td>
                        <td class="col-4"><input type="text" name="gc-sw"></td>
                        <td class="col-4"><input type="text" name="gc-af"></td>
                        <td class="col-4"><input type="text" name="gc-tr"></td>
                        <td class="col-4"><input type="text" name="gc-s"></td>
                        <td class="col-6"><input type="text" name="gc-lainlain1"></td>
                        <td class="col-6"><input type="text" name="gc-lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">CP / CF</td>
                        <td class="col-6"> <input type="text" name="cpcf-fr1"></td>
                        <td class="col-6"> <input type="text" name="cpcf-fr2"></td>
                        <td class="col-6"><input type="text" name="cpcf-fh1"></td>
                        <td class="col-6"><input type="text" name="cpcf-fh2"></td>
                        <td class="col-6"><input type="text" name="cpcf-fs1"></td>
                        <td class="col-6"><input type="text" name="cpcf-fr2"></td>
                        <td class="col-4"><input type="text" name="cpcf-st"></td>
                        <td class="col-4"><input type="text" name="cpcf-sw"></td>
                        <td class="col-4"><input type="text" name="cpcf-af"></td>
                        <td class="col-4"><input type="text" name="cpcf-tr"></td>
                        <td class="col-4"><input type="text" name="cpcf-s"></td>
                        <td class="col-6"><input type="text" name="cpcf-lainlain1"></td>
                        <td class="col-6"><input type="text" name="cpcf-lainlain2"></td>
                        <td class="col-10"><input type="text" name="fst[]"></td>
                        <td class="col-10"><input type="text" name="general[]"></td>
                    </tr>
                    <tr>
                        <td class="col-12">MSR</td>
                        <td class="col-6"> <input type="text" name="msr-fr1"></td>
                        <td class="col-6"> <input type="text" name="msr-fr2"></td>
                        <td class="col-6"><input type="text" name="msr-fh1"></td>
                        <td class="col-6"><input type="text" name="msr-fh2"></td>
                        <td class="col-6"><input type="text" name="msr-fs1"></td>
                        <td class="col-6"><input type="text" name="msr-fr2"></td>
                        <td class="col-4"><input type="text" name="msr-st"></td>
                        <td class="col-4"><input type="text" name="msr-sw"></td>
                        <td class="col-4"><input type="text" name="msr-af"></td>
                        <td class="col-4"><input type="text" name="msr-tr"></td>
                        <td class="col-4"><input type="text" name="msr-s"></td>
                        <td class="col-6"><input type="text" name="msr-lainlain1"></td>
                        <td class="col-6"><input type="text" name="msr-lainlain2"></td>
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
                        <td class="col-20"><input type="text" name="kendaraan-schedule[]"></td>
                        <td class="col-50"><input type="text" name="isipekerjaan-schedule[]"></td>
                        <td class="col-10"> <input type="time" name="mulai-schedule[]"></td>
                        <td class="col-10"><input type="time" name="selesai-schedule[]"></td>
                        <td class="col-10"><input type="text" name="status-schedule[]"></td>
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
                        <td class="col-25"> ISI PEKERJAAN</td>
                        <td class="col-10"> MULAI</td>
                        <td class="col-10">SELESAI</td>
                        <td class="col-10">STATUS</td>
                    </tr>
                    <tr>
                        <td class="col-20"><input type="text" name="kendaraan-trouble[]"></td>
                        <td class="col-25"><input type="text" name="jeniskerusakan-trouble[]"></td>
                        <td class="col-25"><input type="text" name="isiperbaikan-trouble[]"></td>
                        <td class="col-10"> <input type="time" name="mulai-trouble[]"></td>
                        <td class="col-10"><input type="time" name="selesai-trouble[]"></td>
                        <td class="col-10"><input type="text" name="status-trouble[]"></td>
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
                            <input name="others" id="">
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
                        <td class="col-6 h-30px"><input type="text" name="tgl_kendaraan[]"></td>
                        <td class="col-10 h-30px"><input type="text" name="watku_kendaraan[]"></td>
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
                            <input name="others" id="">
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
                        <td class="col-20"><input type="text" name="kendaraan-schedule[]"></td>
                        <td class="col-25"><input type="text" name="isipekerjaan-schedule[]"></td>
                        <td class="col-10"> <input type="time" name="mulai-shedule[]"></td>
                        <td class="col-10"><input type="time" name="selesai-schedule[]"></td>
                        <td class="col-10"><input type="text" name="status-schedule[]"></td>
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
                        <td class="col-20"><input type="text" name="kendaraan-trouble[]"></td>
                        <td class="col-25"><input type="text" name="jeniskerusakan-trouble[]"></td>
                        <td class="col-25"><input type="text" name="isiperbaikan-trouble[]"></td>
                        <td class="col-10"> <input type="time" name="mulai-trouble[]"></td>
                        <td class="col-10"><input type="time" name="selesai-trouble[]"></td>
                        <td class="col-10"><input type="text" name="status-trouble[]"></td>
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
                        <td class="col-6 h-30px"><input type="text" name="tgl_kendaraan[]"></td>
                        <td class="col-10 h-30px"><input type="text" name="watku_kendaraan[]"></td>
                        <td class="col-30 h-30px"><input type="text" name="kontraktor[]"></td>
                        <td class="col-30 h-30px"><input type="text" name="jenis_pekerjaan-[]"></td>
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

        });
    </script>

@endsection
