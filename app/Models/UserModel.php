<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email', 'password'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'name' => 'required|alpha_numeric|min_length[3]|is_unique[users.name]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]',
    ];
    protected $validationMessages = [
        'email' => [
            'is_unique' =>
                'Lo sentimos. Tu correo ya esta siendo usado por otro usuario',
        ],
        'name' => [
            'is_unique' => 'Lo sentimos. El nombre de usuario ya esta en uso',
        ],
    ];

    protected $skipValidation = false;
}
