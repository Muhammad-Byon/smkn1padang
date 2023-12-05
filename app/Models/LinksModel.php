<?php

namespace App\Models;

use CodeIgniter\Model;

class LinksModel extends Model
{
    protected $table = 'links';
    protected $useTimestamps = true;
    protected $allowedFields = ['link_title', 'link_url', 'link_target', 'link_image', 'menu_type'];

    public function getLinksByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
