<!-- Inori Muira Sitanggang - 121140020  -->
<!-- Praktikum Pemrograman Web RB - Tugas 7 -->

<?php

class Manusia{ //membuat kelas dengan nama Manusia
    public $nama;
    public $nik;
    public $usia;
    public $status;
    //class ini memiliki 4 variabel dengan status publik --> yang artinya dapat diakses secara langsung oleh class lain

    //fungsi dibawah ini berfungsi untuk menginisialisasi properti objek saat objek dibuat.
    public function __construct($nama, $nik, $usia, $status){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->usia = $usia;
        $this->status = $status;
    }

    //fungsi dibawah ini berfungsi untuk menampilkan informasi mengenai data diri
    public function dataDiri(){
        echo "Nama   : ".$this->nama."<br>";
        echo "NIK    : ".$this->nik."<br>";
        echo "Usia   : ".$this->usia."<br>";
        echo "Status : ".$this->status."<br><br>";
    }

    //bagian ini berfungsi untuk menghapus objek2 yang ditampilkan sebelumnya
    // public function __destruct(){
    //     echo "Objek dihapus <br>";
    // }
}

//$inori dan $Hosea adalah semua objek2 yang dibuat berdasarkan atribut yang ada pada class Manusia
$inori = new Manusia("Inori Muira Sitanggang","1357910", 19 , "Mahasiswa");
$Hosea = new Manusia("Hosea Obaja", "12345678910", 20, "Mahasiwa");

//Bagian ini berfungsi untuk memanggil fungsi data diri berdasarkan objek2 yang telah dibuat dengan isinya
$inori->dataDiri();
$Hosea->dataDiri();

//class berry merupakan class turunan/child dari class Manusia yang berfungsi sebagai parent
class berry extends Manusia {
    public $warna; //memiliki variabelnya sendiri, yaitu warna dengan status publik

    //bagian ini berfungsi menginisialisasi atribut objek.
    public function __construct($nama, $nik, $usia, $status, $warna) {
        parent::__construct($nama, $nik, $usia, $status); //parent ini diambil dari class Manusia.
        $this->warna = $warna; //hanya warna yang tidak dimiliki oleh class Manusia, maka bagian ini membuat atribut yang baru
    }

    //bagian ini untuk menampilkan informasi mengenai data diri baru berdasarkan class berry
    public function infomanusya() {
        echo "Nama   : ".$this->nama."<br>";
        echo "NIK    : ".$this->nik."<br>";
        echo "Usia   : ".$this->usia."<br>";
        echo "Status : ".$this->status."<br>";
        echo "Warna  : ".$this->warna."<br><br>";
    }
}

//objek manusya1 merupakan objek yang dibuat dari class berry dengan atribut yang dimiliki oleh class berry
$manusya1 = new berry("Anne", "08381234567", 25, "Pemenang", "Emas");

//Bagian ini berfungsi untuk memanggil fungsi data diri berdasarkan objek2 yang telah dibuat dengan isinya
$manusya1->infomanusya();
$manusya1->dataDiri();

class inori{ //membuat class baru dengan nama inori
    public $Nama;
    private $NIK; //variabel baru dengan status privat, yang artinya tidak dapat diakses secara langsung oleh kelas yang lain tanpa enkapsulasi
    
    //bagian ini berfungsi menginisialisasi atribut objek.
    public function __construct($NIK, $Nama) {
        $this->setNIK($NIK); //mengambil dari fungsi setNIK yang ada di bawah ini.
        $this->Nama = $Nama;
    }

    //membuat fungsi setNIK. Bagian ini juga berfungsi untuk mengenkapsulasi
    public function setNIK($NIK) {
        if(is_string($NIK) && strlen($NIK) > 0) { //apabila NIK adalah string dan panjang string lebih dari 0 maka menginisialisasi value NIK
            $this->NIK = $NIK;
        }else{
            //apabila tidak, maka menampilkan sebuah argumen untuk invalid value.
            throw new InvalidArgumentException("NIK harus diisi ya...");
        }
    }

    //fungsi yang digunakan untuk mengambil value NIK yang telah di inisialisasi pada __construct
    public function get_NIK() {
        return "NIK ".$this->Nama.": ".$this->NIK."<br>";
    }
}

//bagian ini untuk try atau percobaan, apabila kondisi pada line ke 82 terpenuhi, maka bagian try ini akan berjalan sempurna
try{
    $Aku = new inori("365", "inori");

    $Aku->setNIK("08384112345678");

    echo $Aku->get_NIK();
}catch(InvalidArgumentException $e){ //apabila try tidak berhasil, maka catch akan menampilkan status error bagi pengguna.
    echo "~Error!!! ".$e->getMessage()."<br>";
}

// Ini bagian regex
// bagian ini adalah hanya kalimat biasa dengan style yang telah dibuat pada baris di bawah ini.
$html = '<p style="font-size:30px";>Nama saya <span style="color:red;">Inori</span> dengan NIM <span style="color:blue;">121140020</span></p>';

$regex = '/<span style="color:\s*([^"]+)">/'; //mencocokan warna dan penyimpanan
$regexlg = '/<p style="font-size:\s*([^"]+)">/'; //mencocokan ukuran font

$ubahwarna = 'blue'; //inisialisasi warna

//membuat variabel baru yang berisi preg_replace yang fungsinya adalah menggantikan isi dari tag yang telah ditentukan pada regex
//bagian ini untuk mengganti warna
$newHtml = preg_replace($regex, '<span style="color: '.$ubahwarna. ';">', $html);
echo $newHtml;
//bagian ini untuk mengganti ukuran font
$newHtml = preg_replace($regex, '<p style="font-size: 12px;">', $html);
echo $newHtml;

?>
