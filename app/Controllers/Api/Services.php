<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ServicesModel;

class Services extends ResourceController
{
    // kasih tahu CI4 model apa yang dipakai
    protected $modelName = ServicesModel::class;
    protected $format    = 'json';

    // GET /api/services
    public function index()
    {
        $services = $this->model->findAll();  // <- findAll, bukan findALL
        return $this->respond($services);
    }

    // GET /api/services/{id}
    public function show($id = null)
    {
        $service = $this->model->find($id);

        if (! $service) {
            return $this->failNotFound('Service not found');
        }

        return $this->respond($service);
    }

    // POST /api/services
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (! $this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        $data['id'] = $this->model->getInsertID();

        return $this->respondCreated($data);
    }

    // PUT /api/services/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        if (! $this->model->find($id)) {
            return $this->failNotFound('Service not found');
        }

        $this->model->update($id, $data);

        return $this->respond(['message' => 'Service updated']);
    }

    // DELETE /api/services/{id}
    public function delete($id = null)
    {
        if (! $this->model->find($id)) {
            return $this->failNotFound('Service not found');
        }

        $this->model->delete($id);

        return $this->respondDeleted(['message' => 'Service deleted']);
    }
}
