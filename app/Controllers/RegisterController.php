<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
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
            return redirect()->to(base_url('Register'))->withInput();
        }

        $users = [
            'user_name' => $this->request->getPost('name'),
            'user_email' => $this->request->getPost('email'),
            'user_password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        if ($this->model->save($users)) {
            session()->setFlashdata('success', 'Record has been added successfully.');
            return redirect()->to(base_url('Register'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
            return redirect()->back();
        }
    }
}