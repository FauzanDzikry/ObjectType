<?php
class produk{
    public $nama,
           $model,
           $harga;

public function getcetak(){
    return "$this->nama,$this->model,$this->harga";
}
public function __construct($nama="nama",$model="model",$harga=0){
    $this->nama=$nama;
    $this->model=$model;
    $this->harga=$harga;
}
}

class cetakinfoproduk{
    public function cetakinfo(Produk $produk){
        $str="nama,model(Rp...)";
        $str="{$produk->nama},{$produk->getcetak()}";
    }
}

$produk1 = new produk("HP","IP X",10000000);
$produk2 = new produk("Powerbank","Anker",350000);
$produk3 = new produk("HP","Samsung S20",13000000);
$infoproduk = new cetakinfoproduk();

echo "Nama barang : ". $produk1->getcetak();
echo "<br>";
echo "Nama barang : ". $produk2->getcetak();
echo"<br>";
echo "Nama barang : ". $produk3->getcetak();
echo "<br>";
echo $infoproduk->cetakinfo($produk2);
?>
