<?php

// define('NAMA', 'Evita Silaen');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba {
//    Const NAMA = 'Evita';
// }

// echo Coba::NAMA;



// echo __LINE__;


// function coba(){
//    return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __class__;
}

$obj = new Coba;
echo $obj->kelas;












?>