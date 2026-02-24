<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model{
 protected $table = 'users';
 protected $primaryKey = 'user_id';
 protected $allowedFields = ['user_name','user_email','user_password'];
 protected $useTimestamps = true;
 protected $createdField = 'created_at';
 protected $updatedField = 'updated_at';
}