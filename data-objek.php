<?php
    class baju {
        public $warna;
        public $harga;
        public $ukuran;

        public function __construct($warna, $harga, $ukuran){
                $this->warna = $warna;
                $this->harga = $harga;
                $this->ukuran = $ukuran;
        }

        public function showBaju(){
            return
            "warna $this->warna
            <br>
            harga $this->harga
            <br>
            ukuran $this->ukuran";
        }
    }
    $gamis = new baju("merah", "200000", "XL");
    print $gamis->showBaju();
?>