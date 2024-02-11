<?php
    // inheritance
    // class parent: biasanya lbh general dr child class
    class Sekolah {
        public $gedung;
        public $kantin;
    }

    // child class 
    class SD extends Sekolah {
        public $seragam;
        function __construct($lantai, $kantin){
            $this->seragam = "seragam putih-merah<br>";
            $this->gedung = "$lantai lantai<br>";
            $this->kantin = "$kantin kantin<br>";
        }
    }

    $sdn01petang = new SD(3, 1);
    echo $sdn01petang->seragam;
    echo $sdn01petang->gedung;
    echo $sdn01petang->kantin;

    $sdn02petang = new SD(5, 2);
    echo $sdn02petang->seragam;
    echo $sdn02petang->gedung;
    echo $sdn02petang->kantin;
    
    // create class SMP
    class SMP extends Sekolah {
        public $seragam;
        public $ekskul;
        function __construct($lantai, $kantin, $ekskul){
            $this->seragam = "seragam putih-biru<br>";
            $this->gedung = "$lantai lantai<br>";
            $this->kantin = "$kantin kantin<br>";
            $this->ekskul = $ekskul;
        }
    }

    $smp01pagi = new SMP(6, 2, ["Karate", "PMR", "Pramuka"]);
    echo $smp01pagi->seragam;
    echo $smp01pagi->gedung;
    echo $smp01pagi->kantin;
    foreach ($smp01pagi->ekskul as $ekstra){
        echo "Ekskul: $ekstra<br>";
    }
?>