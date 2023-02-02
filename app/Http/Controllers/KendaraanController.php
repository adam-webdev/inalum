<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\KendaraanDiVS;
use App\Models\Kontraktor;
use App\Models\Other;
use App\Models\Schedule;
use App\Models\Trouble;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KendaraanController extends Controller
{
    public function index(Request $request)
    {
        $tanggal = '';

        if ($request->tanggal) {
            $exist_tanggal = Kendaraan::where('tanggal', $request->tanggal)->exists();
            if ($exist_tanggal) {
                $tanggal = $request->tanggal;
            }
        } else {
            $tanggal = '2023-01-29';
        }

        $data = [
            'trouble' => Trouble::where('tanggal', $tanggal)->get(),
            'kendaraan' =>  Kendaraan::where('tanggal', $tanggal)->first(),
            'kendaraanDivs' =>  KendaraanDiVS::where('tanggal', $tanggal)->get(),
            'kontraktor' =>  Kontraktor::where('tanggal', $tanggal)->get(),
            'schedule' =>  Schedule::where('tanggal', $tanggal)->get(),
            'other' =>  Other::where('tanggal', $tanggal)->get(),

        ];
        return view('jadwal.index', $data);
    }
    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date'
        ], [
            'tanggal' => 'Tanggal Wajib Diisi!!'
        ]);
        $exist_tanggal = Kendaraan::where('tanggal', $request->tanggal)->exists();

        if ($exist_tanggal) {
            // Alert::error('Gagal', 'Data dengan tanggal ');
            return redirect()->route('jadwal.create')->with('pesan',  'Data dengan tanggal ' . Carbon::parse($request->tanggal)->format('d-m-Y') . ' sudah ada disistem, silahkan input tanggal yang berbeda !!');
        }


        $add = new Kendaraan();
        $add->tanggal = $request->tanggal;

        $add->pl1_fr1 = $request->pl1_fr1;
        $add->pl1_fr2 = $request->pl1_fr2;
        $add->pl1_fh1 = $request->pl1_fh1;
        $add->pl1_fh2 = $request->pl1_fh2;
        $add->pl1_fs1 = $request->pl1_fs1;
        $add->pl1_fs2 = $request->pl1_fs2;
        $add->pl1_st = $request->pl1_st;
        $add->pl1_sw = $request->pl1_sw;
        $add->pl1_af = $request->pl1_af;
        $add->pl1_tr = $request->pl1_tr;
        $add->pl1_s = $request->pl1_s;
        $add->pl1_lainlain1 = $request->pl1_lainlain1;
        $add->pl1_lainlain2 = $request->pl1_lainlain2;

        $add->pl2_fr1 = $request->pl2_fr1;
        $add->pl2_fr2 = $request->pl2_fr2;
        $add->pl2_fh1 = $request->pl2_fh1;
        $add->pl2_fh2 = $request->pl2_fh2;
        $add->pl2_fs1 = $request->pl2_fs1;
        $add->pl2_fs2 = $request->pl2_fs2;
        $add->pl2_st = $request->pl2_st;
        $add->pl2_sw = $request->pl2_sw;
        $add->pl2_af = $request->pl2_af;
        $add->pl2_tr = $request->pl2_tr;
        $add->pl2_s = $request->pl2_s;
        $add->pl2_lainlain1 = $request->pl2_lainlain1;
        $add->pl2_lainlain2 = $request->pl2_lainlain2;

        $add->pl3_fr1 = $request->pl3_fr1;
        $add->pl3_fr2 = $request->pl3_fr2;
        $add->pl3_fh1 = $request->pl3_fh1;
        $add->pl3_fh2 = $request->pl3_fh2;
        $add->pl3_fs1 = $request->pl3_fs1;
        $add->pl3_fs2 = $request->pl3_fs2;
        $add->pl3_st = $request->pl3_st;
        $add->pl3_sw = $request->pl3_sw;
        $add->pl3_af = $request->pl3_af;
        $add->pl3_tr = $request->pl3_tr;
        $add->pl3_s = $request->pl3_s;
        $add->pl3_lainlain1 = $request->pl3_lainlain1;
        $add->pl3_lainlain2 = $request->pl3_lainlain2;

        $add->startup_fr1 = $request->startup_fr1;
        $add->startup_fr2 = $request->startup_fr2;
        $add->startup_fh1 = $request->startup_fh1;
        $add->startup_fh2 = $request->startup_fh2;
        $add->startup_fs1 = $request->startup_fs1;
        $add->startup_fs2 = $request->startup_fs2;
        $add->startup_st = $request->startup_st;
        $add->startup_sw = $request->startup_sw;
        $add->startup_af = $request->startup_af;
        $add->startup_tr = $request->startup_tr;
        $add->startup_s = $request->startup_s;
        $add->startup_lainlain1 = $request->startup_lainlain1;
        $add->startup_lainlain2 = $request->startup_lainlain2;

        $add->trp_fr1 = $request->trp_fr1;
        $add->trp_fr2 = $request->trp_fr2;
        $add->trp_fh1 = $request->trp_fh1;
        $add->trp_fh2 = $request->trp_fh2;
        $add->trp_fs1 = $request->trp_fs1;
        $add->trp_fs2 = $request->trp_fs2;
        $add->trp_st = $request->trp_st;
        $add->trp_sw = $request->trp_sw;
        $add->trp_af = $request->trp_af;
        $add->trp_tr = $request->trp_tr;
        $add->trp_s = $request->trp_s;
        $add->trp_lainlain1 = $request->trp_lainlain1;
        $add->trp_lainlain2 = $request->trp_lainlain2;

        $add->gc_fr1 = $request->gc_fr1;
        $add->gc_fr2 = $request->gc_fr2;
        $add->gc_fh1 = $request->gc_fh1;
        $add->gc_fh2 = $request->gc_fh2;
        $add->gc_fs1 = $request->gc_fs1;
        $add->gc_fs2 = $request->gc_fs2;
        $add->gc_st = $request->gc_st;
        $add->gc_sw = $request->gc_sw;
        $add->gc_af = $request->gc_af;
        $add->gc_tr = $request->gc_tr;
        $add->gc_s = $request->gc_s;
        $add->gc_lainlain1 = $request->gc_lainlain1;
        $add->gc_lainlain2 = $request->gc_lainlain2;

        $add->cpcf_fr1 = $request->cpcf_fr1;
        $add->cpcf_fr2 = $request->cpcf_fr2;
        $add->cpcf_fh1 = $request->cpcf_fh1;
        $add->cpcf_fh2 = $request->cpcf_fh2;
        $add->cpcf_fs1 = $request->cpcf_fs1;
        $add->cpcf_fs2 = $request->cpcf_fs2;
        $add->cpcf_st = $request->cpcf_st;
        $add->cpcf_sw = $request->cpcf_sw;
        $add->cpcf_af = $request->cpcf_af;
        $add->cpcf_tr = $request->cpcf_tr;
        $add->cpcf_s = $request->cpcf_s;
        $add->cpcf_lainlain1 = $request->cpcf_lainlain1;
        $add->cpcf_lainlain2 = $request->cpcf_lainlain2;

        $add->msr_fr1 = $request->msr_fr1;
        $add->msr_fr2 = $request->msr_fr2;
        $add->msr_fh1 = $request->msr_fh1;
        $add->msr_fh2 = $request->msr_fh2;
        $add->msr_fs1 = $request->msr_fs1;
        $add->msr_fs2 = $request->msr_fs2;
        $add->msr_st = $request->msr_st;
        $add->msr_sw = $request->msr_sw;
        $add->msr_af = $request->msr_af;
        $add->msr_tr = $request->msr_tr;
        $add->msr_s = $request->msr_s;
        $add->msr_lainlain1 = $request->msr_lainlain1;
        $add->msr_lainlain2 = $request->msr_lainlain2;
        $add->save();

        $schedule = [];
        $trouble = [];
        $others = [];
        $kontraktors = [];
        $kendaraan_dvs = [];
        // save schedule
        $kendaraan = $request->input('kendaraan_schedule', []);
        $isi_pekerjaan = $request->input('isipekerjaan_schedule', []);
        $mulai = $request->input('mulai_schedule', []);
        $selesai = $request->input('selesai_schedule', []);
        $status = $request->input('status_schedule', []);

        foreach ($kendaraan as $index => $value) {
            $schedule[] = [
                'kendaraan' => $kendaraan[$index],
                'tanggal' => $request->tanggal,
                'isi_pekerjaan' => $isi_pekerjaan[$index],
                'mulai' => $mulai[$index],
                'selesai' => $selesai[$index],
                'status' => $status[$index],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        $simpan_schedule = DB::table('schedules')->insert($schedule);

        // save trouble
        $kendaraan_trouble = $request->input('kendaraan_trouble', []);
        $jenis_kerusakan = $request->input('jeniskerusakan_trouble', []);
        $isiperbaikan = $request->input('isiperbaikan_trouble', []);
        $mulai_trouble = $request->input('mulai_trouble', []);
        $selesai_trouble = $request->input('selesai_trouble', []);
        $status_trouble = $request->input('status_trouble', []);

        foreach ($kendaraan_trouble as $index => $value) {
            $trouble[] = [
                'kendaraan' => $kendaraan_trouble[$index],
                'tanggal' => $request->tanggal,
                'jenis_kerusakan' => $jenis_kerusakan[$index],
                'isi_perbaikan' => $isiperbaikan[$index],
                'mulai' => $mulai_trouble[$index],
                'selesai' => $selesai_trouble[$index],
                'status' => $status_trouble[$index],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        $simpan_trouble = DB::table('trouble')->insert($trouble);

        // save other
        $other = $request->input('others', []);
        foreach ($other as $index => $value) {
            $others[] = [
                'tanggal' => $request->tanggal,
                'kontent' => $other[$index],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        $simpan_other = DB::table('others')->insert($others);


        // save kendaraan DI v/s
        $fst = $request->input('fst', []);
        $general = $request->input('general', []);

        foreach ($fst as $index => $value) {
            $kendaraan_dvs[] = [
                'tanggal' => $request->tanggal,
                'fst' => $fst[$index],
                'general' => $general[$index],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('kendaraan_di_v_s')->insert($kendaraan_dvs);




        // save kontraktor
        $kontraktor = $request->input('kontraktor', []);
        $waktu = $request->input('waktu_kendaraan', []);
        $tanggal_kendaraan = $request->input('tgl_kendaraan', []);
        $jenis_pekerjaan = $request->input('jenis_pekerjaan', []);
        $lokasi = $request->input('lokasi', []);
        $ket = $request->input('ket', []);

        foreach ($kontraktor as $index => $value) {
            $kontraktors[] = [
                'tanggal' => $request->tanggal,
                'waktu' => $waktu[$index],
                'kontraktor' => $kontraktor[$index],
                'input_tanggal' => $tanggal_kendaraan[$index],
                'jenis_pekerjaan' => $jenis_pekerjaan[$index],
                'lokasi' => $lokasi[$index],
                'ket' => $ket[$index],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        $simpan_kontraktor = DB::table('kontraktors')->insert($kontraktors);
        Alert::success('Tersimpan', 'Data berhasil tersimpan');
        return redirect()->back();
    }
    public function delete($tanggal)
    {
        Trouble::where('tanggal', $tanggal)->delete();
        Kendaraan::where('tanggal', $tanggal)->delete();
        KendaraanDiVS::where('tanggal', $tanggal)->delete();
        Kontraktor::where('tanggal', $tanggal)->delete();
        Schedule::where('tanggal', $tanggal)->delete();
        Other::where('tanggal', $tanggal)->delete();
        Alert::success('Terhapus', 'Data berhasil dihapus');
        return redirect()->back();
    }
}