<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile1()
    {
        return view('profile1')
            ->with('full_name', 'Faiz Atha Radhitya')
            ->with('short_name', 'Faiz')
            ->with('nim', '2141720229')
            ->with('absen', '11')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', '2141720229@polinema.ac.id')
            ->with('nohp', 'ga boleh kata mamah')
            ->with('ig', 'turuu');
    }

    public function profile2()
    {
        return view('profile2')
            ->with('full_name', 'Ibnu Hajar Ashkolani')
            ->with('short_name', 'Ibnu')
            ->with('nim', '2141720170')
            ->with('absen', '13')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'polinema.askholani@gmail.com')
            ->with('nohp', 'gak boleh kata orangnya')
            ->with('ig', 'skipp');
    }
}
