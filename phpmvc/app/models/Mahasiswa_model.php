<?php

class Mahasiswa_model {
    private $mhs = [
            [
                "nama" => "Qisti Izatussyabani",
                "nrp" => "203040083",
                "email" => "qistiizatussyabani8910@gmail.com",
                "jurusan" => "Teknik Inforatika"
            ],
            [
                "nama" => "Nadia Nur Anissa",
                "nrp" => "203040107",
                "email" => "nadia1230@gmail.com",
                "jurusan" => "Teknik Inforatika"
            ],
            [
                "nama" => "Religi Realista Esthetika",
                "nrp" => "203040069",
                "email" => "religi4321@gmail.com",
                "jurusan" => "Teknik Inforatika"
            ]
        ];

        public function getAllMahasiswa()
        {
            return $this->mhs;
        }

    }