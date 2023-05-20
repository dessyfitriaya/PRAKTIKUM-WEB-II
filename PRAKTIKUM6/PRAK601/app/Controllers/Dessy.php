<?php

namespace App\Controllers;

use App\Models\profilModel;

class Dessy extends BaseController
{
    protected $profilModel;
    protected $profil;
    public function __construct()
    {
        $this->profilModel = new profilModel();
    }

    public function beranda()
    {
        $profil = $this->profilModel->findAll();
        $data = [
            'title' => 'Beranda | Dessy',
            'profil' => $profil
        ];
        return view('pages/Beranda', $data);
    }
    public function profil()
    {
        $profil = $this->profilModel->findAll();
        $data = [
            'title' => 'Profil | Dessy',
            'profil' => $profil
        ];

        // dd($profil);

        echo view('pages/Profil', $data);
    }
}
