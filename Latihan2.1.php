<?php
Class Guru {
    var $nama_nama = array ("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $alamat;
}

Class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;

}

Class kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class mobil{
    var $jumlahroda = 4;
    var $warna = "Merah";
    var $bahanbakar = "Pertamax";
    var $harga = 120000000;
    var $merk = 'A';

        public function StatusHarga()
        {
            if ($this ->harga >50000000) $status = 'Mahal';
            else $status = 'Murah';
            return $status;
        }
}

$ObjekBMW = new mobil;
$ObjekTesla = new mobil ;
$ObjekAudi= new mobil;
?>