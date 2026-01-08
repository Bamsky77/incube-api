<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\PortfolioModel;

class Admin extends BaseController
{

    public function __construct()
    {
        // Cek apakah sudah login
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }
    
    public function index()
    {
        return redirect()->to('/admin/services');
    }

    // LIST DATA LAYANAN
    public function services()
    {
        $model = new ServiceModel();

        $data['services'] = $model->orderBy('id', 'DESC')->findAll();

        return view('admin/services_list', $data);
    }

    // TAMPIL FORM TAMBAH
    public function createService()
    {
        return view('admin/services_form');
    }

    // PROSES SIMPAN DATA BARU
    public function storeService()
    {
        $model = new ServiceModel();

        $data = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $model->insert($data);

        return redirect()->to('/admin/services');
    }

    // TAMPIL FORM EDIT
    public function editService($id)
    {
        $model = new ServiceModel();

        $data['service'] = $model->find($id);

        return view('admin/services_form', $data);
    }

    // PROSES UPDATE DATA
    public function updateService($id)
    {
        $model = new ServiceModel();

        $data = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $model->update($id, $data);

        return redirect()->to('/admin/services');
    }

    // HAPUS DATA
    public function deleteService($id)
    {
        $model = new ServiceModel();
        $model->delete($id);

        return redirect()->to('/admin/services');
    }

    public function portfolio()
    {
        $model = new PortfolioModel();

        $data['portfolios'] = $model->orderBy('id', 'DESC')->findAll();

        return view('admin/portfolio_list', $data);
    }

    // FORM TAMBAH PORTFOLIO
    public function createPortfolio()
    {
        return view('admin/portfolio_form');
    }

    // SIMPAN DATA BARU
    public function storePortfolio()
    {
        $model = new PortfolioModel();

        $data = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $model->insert($data);

        return redirect()->to('/admin/portfolio');
    }

    // FORM EDIT
    public function editPortfolio($id)
    {
        $model = new PortfolioModel();

        $data['portfolio'] = $model->find($id);

        return view('admin/portfolio_form', $data);
    }

    // UPDATE DATA
    public function updatePortfolio($id)
    {
        $model = new PortfolioModel();

        $data = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $model->update($id, $data);

        return redirect()->to('/admin/portfolio');
    }

    // HAPUS DATA
    public function deletePortfolio($id)
    {
        $model = new PortfolioModel();
        $model->delete($id);

        return redirect()->to('/admin/portfolio');
    }
}
