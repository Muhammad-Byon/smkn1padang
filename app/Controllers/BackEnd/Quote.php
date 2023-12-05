<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;

use App\Models\QuoteModel;

class Quote extends BaseController
{

    protected $quoteModel;

    public function __construct()
    {
        $this->quoteModel = new QuoteModel();
    }

    public function index()
    {
        $quote = $this->quoteModel->findAll();

        $data = [
            'title' => 'Quotes',
            'quote' => $quote
        ];

        return view('BackEnd/Quotes/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Quote',
            'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/Quotes/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'quote' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} quote harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('BackEnd/Quote/create')->withInput()->with('validation', $validation);
        }


        $this->quoteModel->save([
            'quote' => $this->request->getVar('quote'),
            'quote_by' => $this->request->getVar('quote_by')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/quote');
    }

    public function delete($id)
    {
        $this->quoteModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/quote');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit quote',
            // 'validation' => \Config\Services::validation(),
            'quote' => $this->quoteModel->getQuoteByID($id)
        ];

        return view('BackEnd/Quotes/edit', $data);
    }

    public function update($id)
    {
        $this->quoteModel->save([
            'id' => $id,
            'quote' => $this->request->getVar('quote'),
            'quote_by' => $this->request->getVar('quote_by')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/quote');
    }
}
