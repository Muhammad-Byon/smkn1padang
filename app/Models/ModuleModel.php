<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    protected $table = 'modules';
    protected $useTimestamps = true;
    protected $allowedFields = ['module_name', 'module_description', 'module_url'];

    public function getModuleByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
