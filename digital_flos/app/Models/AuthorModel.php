<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table      = 'author';
    protected $primaryKey = 'email';

    protected $returnType     = 'object';

    protected $allowedFields = ['firstName', 'lastName', 'email', 'password'];
}