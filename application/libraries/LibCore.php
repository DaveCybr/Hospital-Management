<?php
/**
 *
 */
class LibCore
{

  public function AlertRounded_success($isi)
  {
    return '<div class="alert alert-success alert-rounded"> <i class="ti-user"></i> '.$isi.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>';
  }
  public function AlertRounded_info($isi)
  {
    return '<div class="alert alert-info alert-rounded"> <i class="ti-user"></i> '.$isi.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>';
  }
  public function AlertRounded_warning($isi)
  {
    return '<div class="alert alert-warning alert-rounded"> <i class="ti-user"></i> '.$isi.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>';
  }
  public function AlertRounded_danger($isi)
  {
    return '<div class="alert alert-danger alert-rounded"> <i class="ti-user"></i> '.$isi.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>';
  }

  public function warna_ujian($kode=0)
  {
    $warna[0] = "Pilih Warna";
    $warna[1] = "blue-gradient";
    $warna[2] = "aqua-gradient";
    $warna[3] = "peach-gradient";
    $warna[4] = "warm-flame-gradient";
    return $warna[$kode];
  }

  public function Jenis_Soal($kode=0)
  {
    $warna[0] = "Pilih Soal";
    $warna[1] = "Pilihan Ganda";
    $warna[2] = "Essay";
    return $warna[$kode];
  }

  public function Hari($value=0)
  {
    $hari[0] = "Pilih Hari";
    $hari[1] = "Senin";
    $hari[2] = "Selasa";
    $hari[3] = "Rabu";
    $hari[4] = "Kamis";
    $hari[5] = "Jum'at";
    $hari[6] = "Sabtu";
    $hari[7] = "Minggu";
    return $hari[$value];
  }

  public function AngkaHari($value=0)
  {
    $hari[0] = "Pilih Hari";
    $hari["Mon"] = "1";
    $hari["Tue"] = "2";
    $hari["Wed"] = "3";
    $hari["Thu"] = "4";
    $hari["Fri"] = "5";
    $hari["Sat"] = "6";
    $hari["Sun"] = "7";
    return $hari[$value];
  }

  public function Jenis_Ujian($value=0)
  {
    $hari[0] = "Pilih Jenis Ujian";
    $hari[1] = "Tugas";
    $hari[2] = "Quiz";
    $hari[3] = "UTS";
    $hari[4] = "UAS";
    return $hari[$value];
  }

  public function generate_kode($kode,$digit=8)
  {
    $lnorm = strlen($kode);
    $sisa = $digit - $lnorm;
    for ($i=0; $i < $sisa; $i++) {
      $kode = "0".$kode;
    }
    return $kode;
  }

  public function generate_NIM($tahun, $prodi, $no)
  {
    $kode = date("y", strtotime($tahun)).$prodi;
    $nourut = $this->generate_kode($no,4);
    $nim = $kode."".$nourut;
    return $nim;
  }

  public function tgl_php($value)
  {
    return date("Y-m-d", strtotime($value));
  }

  public function tgl_indo($value)
  {
    return date("d-m-Y", strtotime($value));
  }

  public function mdb_select_tahunajaran()
  {
    $thn="";
    for ($i=date("Y"); $i >= 2000 ; $i--) {
      $j = 1 + $i;
      $thn .= "<option value='".$i."/".$j."'>".$i."/".$j."</option>";
    }
    return $thn;
  }

}

 ?>
