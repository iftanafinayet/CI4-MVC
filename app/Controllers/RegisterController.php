<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users; // Added so the model works
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
    // These need to be declared here to be used in methods
    protected $model;
    protected $helpers = ['form', 'url'];

    public function __construct() 
    {
        $this->model = new Users();
    }

    public function index()
    {
        session();
        $data = [
            'title' => 'Register Form',
            'validation' => \Config\Services::validation()
        ];
        return view('users/register', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]'
        ])) {
            return redirect()->to(base_url('register'))->withInput();
        }

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        // Fixed the broken line break below
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        
        $users = [
            'user_name' => $name,
            'user_email' => $email,
            'user_password' => $password
        ];

        $save = $this->model->save($users);

        if ($save) {
            session()->setFlashdata('success', 'Record has been added successfully.');
            return redirect()->to(base_url('register'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
            return redirect()->back();
        }
    }
}