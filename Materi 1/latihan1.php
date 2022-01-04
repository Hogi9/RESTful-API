<?php
    $mahasiswa = [
        [
            "nama" => "M Darojatun Hogi",
            "npm" => "18081010088",
            "email" => "hogi_p@yahoo.co.id"
        ],
        [
            "nama" => "M Darojatun Hogi2",
            "npm" => "18081010089",
            "email" => "hogi_p@yahoo.co.id"
        ]
    ];

    $data = json_encode($mahasiswa);
    echo $data;
?>