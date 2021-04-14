<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\AuthorModel;

class User extends BaseController
{
    protected function show($page, $data)
    {
        $data['controller'] = 'User';
        $data['author'] = $this->session->get('author');
        echo view('sablon/header_user', $data);
        echo view("stranice/$page", $data);
        echo view('sablon/footer');
    }

	public function index()
	{
        $blogModel = new BlogModel();
        $blogs = $blogModel->where('state', 'accepted')->findAll();
		$this->show('blogs', ['blogs'=>$blogs]);
	}

    public function myBlogs()
	{
        $blogModel = new BlogModel();
        $blogs = $blogModel->getBlogsFromAuthor($this->session->get('author')->email);
		$this->show('myblogs', ['blogs'=>$blogs]);
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
        $blogs = $blogModel->getBlogsFromAuthor($this->session->get('author')->email);
        return redirect()->to(site_url("User/myBlogs"));//promena ovoga
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }

    public function addBlog()
    {
        $this->show('addblogs', []);
    }

    public function newBlog()
    {
        if(!$this->validate(['title'=>'required|min_length[5]|max_length[30]','content'=>'required|min_length[10]|max_length[500]']))
            return $this->show('addblogs', ['errors'=>$this->validator->getErrors()]);
        
        $img = $this->request->getFile('image');
        if ($img->isValid() && ! $img->hasMoved())
        {
            $newName = $img->getRandomName();
            $img->move('uploads/', $newName);
        }
    
        $blogModel = new BlogModel();
        $blogModel->save([
            'title'=>$this->request->getVar('title'),
            'content'=>$this->request->getVar('content'),
            'authorName'=>$this->session->get('author')->firstName,
            'authorEmail'=>$this->session->get('author')->email,
            'state'=>"on hold",
            'image'=>$newName
        ]);
        return redirect()->to(site_url("User/blog/{$blogModel->getInsertId()}"));
    }

    public function edit($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);
        $this->show('editblog', ['blog'=>$blog]);
    }

    public function editBlog($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        if(!$this->validate(['title'=>'required|min_length[5]|max_length[30]',
            'content'=>'required|min_length[10]|max_length[500]']))
            return $this->show('editblog', ['errors'=>$this->validator->getErrors(), 'blog'=>$blog]);
        
        $img = $this->request->getFile('image');
        if ($img->isValid() && ! $img->hasMoved())
        {
            $oldName = $blog->image;
            if(file_exists("uploads/".$oldName))
            {
                unlink("uploads/".$oldName);
            }
            $newName = $img->getRandomName();
            $img->move('uploads/', $newName);
        }
        else 
            $newName = $blog->image;
        

        $data = [
            'title'=>$this->request->getVar('title'),
            'content'=>$this->request->getVar('content'),
            'authorName'=>$this->session->get('author')->firstName,
            'authorEmail'=>$this->session->get('author')->email,
            'image'=>$newName
        ];
        $blogModel->update($id, $data);

        return redirect()->to(site_url("User/blog/{$id}"));
    }
}
