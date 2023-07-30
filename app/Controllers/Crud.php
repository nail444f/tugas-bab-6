<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{

    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }

    public function index(){

        $all = $this->db->findAll();

        $data = [
            'mahasiswa' => $all
        ];
        return view('crud/view', $data);
    }

    public function tambah(){
        if (isset($_POST['nim'])) {

            // Menampung data input yang dikirim upload.php
            // ke variabel $nim
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $universitas = $_POST['universitas'];
            $nomor_handphone = $_POST['nomor_handphone'];

            $upload = [
                'nim' => $nim,
                'nama' => $nama,
                'prodi' => $prodi,
                'universitas' => $universitas,
                'nomor_handphone' => $nomor_handphone
            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('/crud'));
        }else{
            return view('crud/upload');
        }
    }

    public function edit($id){
        $nim = $id;
        $a = $this->db->find($nim);
        $data = [
            'edit' => $a
        ];
        return view('crud/edit', $data);
    }

    public function editan(){
        $nim = $_POST['nim'];
        $newNim = $_POST['newNim'];
        $nama = $_POST['nama'];
        $newNama = $_POST['newNama'];
        $prodi = $_POST['prodi'];
        $newProdi = $_POST['newProdi'];
        $universitas = $_POST['universitas'];
        $newUniversitas = $_POST['newUniversitas'];
        $nomor_handphone = $_POST['nomor_handphone'];
        $newNomor_handphone =$_POST['nomor_handphone'];

        $this->db->where('nim', $nim)
        ->set('nim', $newNim)
        ->set('nama', $newNama)
        ->set('prodi', $newProdi)
        ->set('universitas', $newUniversitas)
        ->set('nomor_handphone', $newNomor_handphone)
        ->update();
        return redirect()->to(base_url('/crud'));
    }

    public function hapus($id){
        $nim = $id;
        $this->db->delete($nim);
        return redirect()->to("/crud");
    }
}