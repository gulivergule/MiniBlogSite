<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\AuthorModel;

class Admin extends BaseController
{
	protected function show($page, $data)
    {
        $data['controller'] = 'Admin';
        $data['author'] = $this->session->get('author');
        echo view('sablon/header_admin', $data);
        echo view("stranice/$page", $data);
        echo view('sablon/footer');
    }

	public function index()
	{
        $blogModel = new BlogModel();
        $blogs = $blogModel->where('state', 'accepted')->findAll();
		$this->show('blogsadmin', ['blogs'=>$blogs]);
	}

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }

    public function allUsers(){
        $authorModel = new AuthorModel();
        $authors = $authorModel->findAll();
		$this->show('users', ['authors'=>$authors]);
    }

    public function blogsOnHold()
    {
        $blogModel = new BlogModel();
        $blogs = $blogModel->where('state', 'on hold')->findAll();
		$this->show('blogsonhold', ['blogs'=>$blogs]);
    }

    public function blog($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);
        $this->show('blog', ['blog'=>$blog]);
    }

    public function delete($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        $img = $blog->image;
        if(file_exists("uploads/".$img))
        {
            unlink("uploads/".$img);
        }

        $blogModel->where('id', $id)->delete();
        return redirect()->to(site_url("Admin/blogsOnHold"));//promena ovoga
    }

    public function deleteBlogs($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        $img = $blog->image;
        if(file_exists("uploads/".$img))
        {
            unlink("uploads/".$img);
        }

        $blogModel->where('id', $id)->delete();
        return redirect()->to(site_url('Admin'));
    }

    public function accept($id)
    {
        $blogModel = new BlogModel();
        $data = [
            'state'    => 'accepted'
        ];
        $blogModel->update($id, $data);
        return redirect()->to(site_url("Admin/blogsOnHold"));//promena ovoga
    }
}
