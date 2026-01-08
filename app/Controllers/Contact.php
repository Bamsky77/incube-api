<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class Contact extends Controller
{
    public function send()
    {
        // ambil data dari form
        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        // koneksi ke database
        $db      = Database::connect();
        $builder = $db->table('contacts');

        try {
            // simpan ke tabel contacts
            $builder->insert($data);

            // kalau berhasil
            session()->setFlashdata('success', 'Pesan kamu sudah tersimpan di database.');
        } catch (\Throwable $e) {
            // buat debugging: sementara tampilkan error-nya di atas form
            session()->setFlashdata('success', 'Gagal menyimpan ke database: ' . $e->getMessage());
        }

        return redirect()->to('/#contact');
    }
}
