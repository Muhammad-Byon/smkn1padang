<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menus';
    protected $useTimestamps = true;
    protected $allowedFields = ['menu_title', 'menu_url', 'menu_target', 'menu_type', 'menu_parent_id', 'menu_position'];

    public function getMenuByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
