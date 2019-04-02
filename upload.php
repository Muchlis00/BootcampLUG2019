<?php

function upload()
{
    $namaFoto = $_FILES[ 'uploadfoto' ][ 'name' ];
    $ukuranFoto = $_FILES[ 'uploadfoto' ][ 'size' ];
    $tmpFoto = $_FILES[ 'uploadfoto' ][ 'tmp_name' ];  
    
    //mengecek file fotonya//
    $ekstensiValid = ['jpg', 'jpeg', 'png', 'bmp'];
    $ekstensiFoto = explode('.',$namaFoto);
    $ekstensiFoto = strtolower(end($ekstensiFoto));
    if (!in_array($ekstensiFoto, $ekstensiValid)){
        return false;
    }    

    //ukuran
    if ($ukuranFoto > 2000000){
        return false;
    }
    

    //proses upload
    $destFile = __DIR__. '/fotomhs/'.$namaFoto;
    move_uploaded_file($tmpFoto, $destFile);
    chmod ($destFile, 0666);
    
    return $namaFoto;
}

?>