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
            background-color: rgb(203, 203, 84);
            /* margin-top: -7px; */
            word-spacing: 30px;
            color: black;
            padding-left: 10px;
            margin-bottom: -1px;
        }

        .trouble {
            background-color: rgb(89, 135, 210);
            margin-bottom: -1px;
        }

        .table-bordered-custom,
        table>tbody>tr>td {
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
            height: 40px;
            font-weight: bold;
        }


        table>tbody>tr>td>input {
            width: 90%;
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
            font-weight: bold;
        }

        .col-50 {
            width: 50%;
            font-weight: bold;
        }

        .col-4 {
            width: 4%;
        }

        #fscreen {
            position: absolute;
            top: 0;
            left: 0;
        }

        .other input {
            width: 100%;
            height: 80px;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <form action="" method="post">
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
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black">DI V/S</td>
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
                        <td class="col-10"><input type="text" name="pl2-fst1"></td>
                        <td class="col-10"><input type="text" name="pl2-general1"></td>
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
                        <td class="col-10"><input type="text" name="pl3-fst2"></td>
                        <td class="col-10"><input type="text" name="pl3-general2"></td>
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
                        <td class="col-10"><input type="text" name="startup-fst3"></td>
                        <td class="col-10"><input type="text" name="startup-general3"></td>
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
                        <td class="col-10"><input type="text" name="trp-fst4"></td>
                        <td class="col-10"><input type="text" name="trp-general4"></td>
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
                        <td class="col-10"><input type="text" name="gc-fst5"></td>
                        <td class="col-10"><input type="text" name="gc-general5"></td>
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
                        <td class="col-10"><input type="text" name="cpcf-fst6"></td>
                        <td class="col-10"><input type="text" name="cpcf-general6"></td>
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
                        <td class="col-10"><input type="text" name="msr-fst7"></td>
                        <td class="col-10"><input type="text" name="msr-general7"></td>
                    </tr>
                </tbody>
            </table>
            <p class="schedule">SCHEDULE PREVENTIVE MAINTENANCE</p>
            <table class="table-custom table-bordered-custom">
                <tbody>
                    <tr>
                        <td class="col-20">KEND.</td>
                        <td class="col-50"> ISI PEKERJAAN</td>
                        <td class="col-10"> MULAI</td>
                        <td class="col-10">SELESAI</td>
                        <td class="col-10">STATUS</td>
                    </tr>
                    <tr>
                        <td class="col-20"><input type="text" name="kendaraan[]"></td>
                        <td class="col-50"><input type="text" name="isipekerjaan[]"></td>
                        <td class="col-10"> <input type="text" name="mulai[]"></td>
                        <td class="col-10"><input type="text" name="selesai[]"></td>
                        <td class="col-10"><input type="text" name="status[]"></td>
                    </tr>

                </tbody>
            </table>
            <p class="schedule trouble">TROUBLE</p>
            <table class="table-custom table-bordered-custom">
                <tbody>
                    <tr>
                        <td class="col-20">KEND.</td>
                        <td class="col-50"> ISI PEKERJAAN</td>
                        <td class="col-10"> MULAI</td>
                        <td class="col-10">SELESAI</td>
                        <td class="col-10">STATUS</td>
                    </tr>
                    <tr>
                        <td class="col-20"><input type="text" name="kendaraan[]"></td>
                        <td class="col-50"><input type="text" name="isipekerjaan[]"></td>
                        <td class="col-10"> <input type="text" name="mulai[]"></td>
                        <td class="col-10"><input type="text" name="selesai[]"></td>
                        <td class="col-10"><input type="text" name="status[]"></td>
                    </tr>

                </tbody>
            </table>
            <p class="schedule others">OTHERS</p>
            <table class="table-custom table-bordered-custom">
                <tbody>
                    <tr>
                        <td width="100%" class="other">
                            <input name="others" id="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p><br></p>

        </form>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#fscreen").css({
                width: $(document).width(),
                height: $(document).height()
            });
        });
    </script>

@endsection
