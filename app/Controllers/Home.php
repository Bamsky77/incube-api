<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\PortfolioModel;

class Home extends BaseController
{
    public function index()
    {
        $serviceModel   = new ServiceModel();
        $portfolioModel = new PortfolioModel();

        $data['services']   = $serviceModel->findAll();
        $data['portfolios'] = $portfolioModel->findAll();

        return view('home', $data);
    }
}
