<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageSlidersModel extends Model
{
    protected $table = 'image_sliders';
    protected $useTimestamps = true;
    protected $allowedFields = ['caption', 'image'];

    public function getImageByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
