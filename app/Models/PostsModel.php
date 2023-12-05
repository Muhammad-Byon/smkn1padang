<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = 'posts';
    protected $useTimestamps = true;
    protected $allowedFields = ['post_title', 'post_content', 'post_image', 'post_author', 'post_categories', 'post_type', 'post_status', 'post_visibility', 'post_comment_status', 'post_slug', 'post_tags', 'post_counter'];

    public function getPostsByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
