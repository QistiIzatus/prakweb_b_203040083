<?php

class About {
    public function page($nama = 'Qisti Izatussyabani', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama, saya adalah $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}