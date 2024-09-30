<?php
class UTSPraktikum {
    private $username;
    private $password;
    private $BangunRuang; 
    private $sisi;
    private $panjang;
    private $lebar;
    private $alas;
    private $tinggi;
    private $sisiSegitiga;
    private $D1; 
    private $D2; 

    public function __construct($username, $password, $BangunRuang = null, $sisi = null, $panjang = null, $lebar = null, $alas = null, $tinggi = null, $sisiSegitiga= null, $D1 = null, $D2 = null) {
        $this->username = $username;
        $this->password = $password;
        $this->BangunRuang = $BangunRuang; 
        $this->sisi = $sisi;
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisiSegitiga = $sisiSegitiga;
        $this->D1 = $D1; 
        $this->D2 = $D2; 
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setBangunRuang($BangunRuang) {
        $this->BangunRuang = $BangunRuang;
    }

    public function setSisi($sisi) {
        $this->sisi = $sisi;
    }

    public function setPanjang($panjang) {
        $this->panjang = $panjang;
    }

    public function setLebar($lebar) {
        $this->lebar = $lebar;
    }

    public function setAlas($alas) {
        $this->alas = $alas;
    }

    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    public function setSisiSegitiga($sisiSegitiga) {
        $this->sisiSegitiga = $sisiSegitiga;
    }

    public function setD1($D1) {
        $this->D1 = $D1;
    }

    public function setD2($D2) {
        $this->D2 = $D2;
    }

    public function getBangunRuang() {
        switch ($this->BangunRuang) {
            case 1:
                return "Persegi";
            case 2:
                return "Persegi Panjang";
            case 3:
                return "Segitiga";
            case 4:
                return "Lingkaran";
            case 5:
                return "Belah Ketupat";
            default:
                return "tidak";
        }
    }

    public function hitungBangunRuang() {
        switch ($this->BangunRuang) {
            case 1: 
                return [
                    'luas' => $this->sisi * $this->sisi,
                    'keliling' => 4 * $this->sisi
                ];
            case 2: 
                return [
                    'luas' => $this->panjang * $this->lebar,
                    'keliling' => 2 * ($this->panjang + $this->lebar)
                ];
            case 3: 
                return [
                    'luas' => ($this->alas * $this->tinggi) / 2,
                    'keliling' => 3 * $this->sisiSegitiga 
                ];
            case 4: 
                return [
                    'luas' => pi() * pow($this->sisi, 2), 
                    'keliling' => 2 * pi() * $this->sisi 
                ];
            case 5:
                return [
                    'luas' => ($this->D1 * $this->D2) / 2,
                    'keliling' => 4 * $this->sisi 
                ];
            default:
                return null;
        }
    }
}

echo "Selamat datang di Aplikasi Bangun Ruang CLI\n";
echo "Silahkan Login terlebih dahulu :\n";

$username = readline("Masukan username: ");
$password = readline("Masukan password: ");

$UTSPraktikum = new UTSPraktikum($username, $password);

if ($username === "mrifqi" && $password === "1234") {
    echo "Password Benar\n";
} else {
    echo "Password salah\n";
    exit;
}

echo "Selamat datang, anda telah berhasil login di Aplikasi Bangun Ruang CLI.\n";

do {
    echo "Silahkan pilih salah satu bangun ruang :\n";
    echo "1. Persegi\n";
    echo "2. Persegi Panjang\n";
    echo "3. Segitiga\n";
    echo "4. Lingkaran\n";
    echo "5. Belah Ketupat\n";
    
    $bangunRuang = readline("Pilih nomor bangun ruang: ");
    $UTSPraktikum->setBangunRuang($bangunRuang);

    switch ($bangunRuang) {
        case 1:
            $sisi = readline("Masukan sisi persegi (cm): ");
            $UTSPraktikum->setSisi($sisi);
            break;
        case 2:
            $panjang = readline("Masukan panjang persegi panjang (cm): ");
            $lebar = readline("Masukan lebar persegi panjang (cm): ");
            $UTSPraktikum->setPanjang($panjang);
            $UTSPraktikum->setLebar($lebar);
            break;
        case 3:
            $alas = readline("Masukan alas segitiga (cm): ");
            $tinggi = readline("Masukan tinggi segitiga (cm): ");
            $sisiSegitiga = readline("Masukan sisi segitiga (cm): ");
            $UTSPraktikum->setAlas($alas);
            $UTSPraktikum->setTinggi($tinggi);
            $UTSPraktikum->setSisiSegitiga($sisiSegitiga);
            break;
        case 4:
            $sisi = readline("Masukan jari-jari lingkaran (cm): ");
            $UTSPraktikum->setSisi($sisi);
            break;
        case 5:
            $D1 = readline("Masukan diagonal 1 (cm): ");
            $D2 = readline("Masukan diagonal 2 (cm): ");
            $sisi = readline("Masukan sisi belah ketupat (cm): ");
            $UTSPraktikum->setD1($D1);
            $UTSPraktikum->setD2($D2);
            $UTSPraktikum->setSisi($sisi);
            break;
        default:
            echo "Pilihan tidak ada.\n";
    }

    $hasil = $UTSPraktikum->hitungBangunRuang();
    
    if ($hasil) {
        echo "Luas: " . $hasil['luas'] . " cm²\n";
        echo "Keliling: " . $hasil['keliling'] . " cm\n";
    }

    $kembali = readline("Kembali ke menu utama? (y/n): ");
} while (strtolower($kembali) === 'y');

echo "Terima kasih telah menggunakan Aplikasi Bangun Ruang CLI.\n";
?>