<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\AuthorModel;

class Guest extends BaseController
{
    protected function show($page, $data)
    {
        $data['controller'] = 'Guest';
        echo view('sablon/header_guest');
        echo view("stranice/$page", $data);
        echo view('sablon/footer');
    }

	public function index()
	{
        $blogModel = new BlogModel();
        $blogs = $blogModel->where('state', 'accepted')->findAll();
		$this->show('blogs', ['blogs'=>$blogs]);
	}

    public function login(){
        $this->show('login', []);
    }

    public function loginSubmit()
    {
        if(!$this->validate(['email'=>'required', 'password'=>'required']))
        {
            return $this->show('login', ['errors'=>$this->validator->getErrors()]);
        }

        $authorModel = new AuthorModel();
        $author = $authorModel->find($this->request->getVar('email'));
        if($author == null)
            return $this->show('login', ['message'=>'User with this email do not exists!']);
        if($author->password != $this->request->getVar('password'))
            return $this->show('login', ['message'=>'User with this password do not exists!']);
        
        
        $this->session->set('author', $author);

        if($author->email == "admin@gmail.com")
            return redirect()->to(site_url('Admin'));
        else
            return redirect()->to(site_url('User'));
    }

    public function register(){
        $this->show('register', []);
    }

    public function registerSubmit()
    {
        if(!$this->validate(['email'=>'required', 'password'=>'required', 'firstName'=>'required', 'lastName'=>'required']))
        {
            return $this->show('register', ['errors'=>$this->validator->getErrors()]);
        }

        $authorModel = new AuthorModel();
        $author = $authorModel->find($this->request->getVar('email'));
        if($author != null)
            return $this->show('register', ['message'=>'User with this email already exists!']);
        
        $data = [
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'firstName'=>$this->request->getVar('firstName'),
            'lastName'=>$this->request->getVar('lastName')
        ];
        
        $authorModel->insert($data);

        $author = $authorModel->find($this->request->getVar('email'));
        $this->session->set('author', $author);
        return redirect()->to(site_url('User'));
    }

    public function blog($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);
        $this->show('blog', ['blog'=>$blog]);
    }
}
