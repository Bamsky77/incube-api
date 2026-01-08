<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class ApiKeyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $headerKey = $request->getHeaderLine('X-API-KEY');
        $validKey  = getenv('API_KEY');

        if ($headerKey !== $validKey) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['error' => 'Invalid API Key']);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // nothing
    }
}
