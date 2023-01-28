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

    <style>
        * {
            font-family: 'Poppins';
        }

        .th {
            font-size: 18px;
            font-weight: 800;
        }

        .card {
            margin-top: 80px;
            display: flex;
            width: 100%;
        }

        .left {
            width: 55%;
        }

        .rigth {
            width: 45%;
            margin-top: 18px;
            margin-left: 5px;
        }

        .wrapp {
            margin-top: -30px;
        }

        .tanggal {
            width: 30%;
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
            font-weight: bold;
            margin-top: -2px;
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
            word-spacing: 30px;
            color: black;
            padding-left: 10px;
            margin-bottom: -1px;
        }

        .trouble {
            background-color: rgb(89, 135, 210);

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
            font-size: 24px;
            text-align: center;
            background-color: rgb(180, 192, 188);
            margin-bottom: -2px;
            font-weight: bold;
            border: 2px solid black;
            color: black;
            height: 40px;
        }

        .card-tampilkan {
            /* background: rgb(96, 96, 96); */
            background-color: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgb(32 33 36 / 18%);
            font-size: 18px;
            position: sticky;
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

        .bg-yellow {
            background-color: rgb(203, 203, 84);
        }
    </style>
</head>

<body style="background: rgb(233, 242, 255)">

    <div class="card-tampilkan">
        <form action="" method="post">
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

    <div class="card">
        <div class="left">
            <div class="tanggal">
                <label for="tanggal">Tanggal :</label>
                2 Januari 2023
            </div>

            <p class="kendaraan">KENDARAAN</p>
            <table class="table1 table-bordered-custom">
                <tbody>
                    <tr>
                        <td class="col-left-1"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black"><br>
                        </td>
                        <td class="col-left-2"
                            style="font-size:20px;background:hsla(147, 66%, 27%, 0.448);border:2px solid black">
                            <b>Kendaraan
                            </b><br>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p><br></p>
            <table class="table-custom table-bordered-custom" style="margin-top: -57px">
                <tbody>
                    <tr class="th">
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
                            DI V/S
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-bordered-custom">
                <tbody>
                    <tr>
                        <td class="col-12">PL-1(St-1 & 2)</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">FST</td>
                        <td class="col-10">General</td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-2(St-3 & 4)</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                    <tr>
                        <td class="col-12">PL-3(St-5 & 6)</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                    <tr>
                        <td class="col-12">Start-Up</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                    <tr>
                        <td class="col-12">TRP</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                    <tr>
                        <td class="col-12">GC</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                    <tr>
                        <td class="col-12">CP / CF</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                    <tr>
                        <td class="col-12">MSR</td>
                        <td class="col-6"> test</td>
                        <td class="col-6"> test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-4">test</td>
                        <td class="col-6">test</td>
                        <td class="col-6">test</td>
                        <td class="col-10">test</td>
                        <td class="col-10">test</td>
                    </tr>
                </tbody>
            </table>
            <div class="wrapp">

                <p class="schedule">SCHEDULE PREVENTIVE MAINTENANCE</p>
                <table class="table-custom table-bordered-custom">
                    <tbody id="add-row-schedule">
                        <tr class="th">
                            <td class="col-20">KEND.</td>
                            <td class="col-50"> ISI PEKERJAAN</td>
                            <td class="col-10"> MULAI</td>
                            <td class="col-10">SELESAI</td>
                            <td class="col-10">STATUS</td>
                        </tr>
                        <tr>
                            <td class="col-20">test</td>
                            <td class="col-50">test</td>
                            <td class="col-10">test</td>
                            <td class="col-10">test</td>
                            <td class="col-10">test</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="wrapp">

                <p class="schedule trouble">TROUBLE</p>
                <table class="table-custom table-bordered-custom">
                    <tbody id="add-row-trouble">
                        <tr class="th">
                            <td class="col-20">KEND.</td>
                            <td class="col-25">JENIS KERUSAKAN</td>
                            <td class="col-25"> ISI PEKERJAAN</td>
                            <td class="col-10"> MULAI</td>
                            <td class="col-10">SELESAI</td>
                            <td class="col-10">STATUS</td>
                        </tr>
                        <tr>
                            <td class="col-20">test</td>
                            <td class="col-25">test</td>
                            <td class="col-25">test</td>
                            <td class="col-10"> test</td>
                            <td class="col-10">test</td>
                            <td class="col-10">test</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="wrapp">

                <p class="schedule others">OTHERS</p>
                <table class="table-custom table-bordered-custom">
                    <tbody id="add-row-other">
                        <tr>
                            <td width="100%" class="other">
                                test
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><br></p>
            </div>
        </div>

        <div class="rigth">
            <p class="kendaraan2">DAFTAR KOTRAKTOR YANG BEKERJA DI GEDUNG REDUKSI</p>
            <table class="table1 table-bordered-custom">
                <tbody id="add-row-kendaraan">
                    <tr class="th">
                        <td class="col-4 bg-yellow">NO</td>
                        <td class="col-6  bg-yellow">TGL</td>
                        <td class="col-10  bg-yellow">WAKTU</td>
                        <td class="col-30  bg-yellow">KONTRAKTOR</td>
                        <td class="col-30  bg-yellow">JENIS PEKERJAAN</td>
                        <td class="col-10  bg-yellow">LOKASI</td>
                        <td class="col-10  bg-yellow">KET</td>
                    </tr>
                    <tr>
                        <td class="col-4" id="no">1</td>
                        <td class="col-6 h-30px">test</td>
                        <td class="col-10 h-30px">test</td>
                        <td class="col-30 h-30px">test</td>
                        <td class="col-30 h-30px">test</td>
                        <td class="col-10 h-30px">test</td>
                        <td class="col-10 h-30px">test</td>
                    </tr>
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
