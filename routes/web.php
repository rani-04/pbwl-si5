<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route :: get('mahasiswa', function (){
    //return view ('mahasiswa')
    $nim = [123,124,125];
    //WHILE
    $nilai_awal = 0;
    $jumlah = count ($nim);
    //while ($nilai_awal < $jumlah){
    //echo $nim[$nilai_awal]. "<br>";
    //$nilai_awal++;
    //}

    //for ($i=0; $i < $jumlah ; $i++){
    // echo $nim[$i]. '<br>';
    //}
    return view('mahasiswa',compact ('nim','jumlah'));
});