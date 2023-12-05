<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class OperatorFilter implements FilterInterface
{
   public function before(RequestInterface $request, $arguments = null)
   {
      $authentication = Services::authentication();
      $userRole = $authentication->user()->role ?? null;

      // Jika peran bukan admin, redirect ke halaman dashboard
      if ($userRole !== 'admin' && $userRole !== 'operator') {
         return redirect()->to('admin'); // Sesuaikan dengan rute dashboard Anda
      }
   }

   public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
   {
      // Do something after execution
   }
}
