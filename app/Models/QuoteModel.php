<?php

namespace App\Models;

use CodeIgniter\Model;

class QuoteModel extends Model
{
    protected $table = 'quotes';
    protected $useTimestamps = true;
    protected $allowedFields = ['quote', 'quote_by'];

    public function getQuoteByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
