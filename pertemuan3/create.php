<?php

    // Data 1
    $data[] = array(
        'no' => 1,
        'nama' => 'Naufal',
        'alamat' => 'Jakarta'
    );

    //Data 2
    $data[] = array(
        'no' => 2,
        'nama' => 'Nabila',
        'alamat' => 'Banjar'
    );

    // Mengencode data menjadi json
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);

    // Menyimpan data ke dalam anggota.json
    file_put_contents('anggota.json', $jsonfile);