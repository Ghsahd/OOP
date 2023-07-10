
<?php
// Buat lah kelas induk yang dapat menghitung total, rata rata dan mencari nilai tertinggi dan terendah
// si kelas anak akan membuat array sebanayak 50 index dengan nilai random
// rumus total nilai = nilai ke-1 + nilai ke-2
// rumus rata rata jumlah nilai/banyaknya data

class Induk{
    protected $data;
    public function totalNilai(){
        $this->data;
        $total = 0;
        foreach($this->data as $array){
            $total += $array;
        }
        echo "Total Nilai = " .$total;
    }
    public function rataNilai(){
        $size = sizeof($this->data);
        $total = 0;
        foreach($this->data as $array){
            $total += $array/$size;
        }
        echo "<br>";
        echo "Jumlah Array = ". $size;
        echo "<br>";
        echo "rata rata = ".$total;
    }
    public function maxNilai(){
        $max = $this->data[0];
        //proses iterasi menghasilkan nilai max
        foreach($this->data as $array){
            //jika nilai variabel $arraty lebih besar dari variabel $max,maka nilai $max akan diperbarui dengan $array
            //iterasi akan berhenti jika sudah tidak ada elemen yang diiterasi lagi 
            if($array > $max ){
                $max = $array;
            }
        }
        echo "<br>";
        echo "Nilai Tertinggi = ".$max;
        return $max;
    }
    public function minNilai(){
        $min = $this->data[0];
        //proses iterasi menghasilkan nilai min
        foreach($this->data as $array){
            if($array < $min ){
                $min = $array;
            }
        }
        echo "<br>";
        echo "Nilai Terendah = ".$min;
        return $min;
    }
}

class Anak extends Induk{
    public function randomArray(){
        $this->data = [];
        for($i = 0 ; $i < 50 ; $i++){
            $random = rand(1,50);
            $this->data[] = $random;
        }
        echo "<pre>";
        print_r($this->data);
        $hasilTotal = $this->totalNilai($this->data);
        $hasilRata = $this->rataNilai($this->data);
        $hasilMax = $this->maxNilai($this->data);
        $hasilMin = $this->minNilai($this->data);
        return [$hasilTotal,$hasilRata,$hasilMax,$hasilMin];  
    }
}
 
$objek1 = new Anak();
$objek1->randomArray();
