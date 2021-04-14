<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $allowedFields = ['title', 'content', 'authorName', 'authorEmail', 'state', 'image'];

    public function getBlogsFromAuthor($author)
    {
        return $this->where('authorEmail', $author)->findAll();
    }
}