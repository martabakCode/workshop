<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class MasterUserController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $masterUser = new UserModel();
        $data['masterUser'] = $masterUser->findAll();

        return view('admin/pages/masterusers/list',$data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('admin/pages/masterusers/tambah');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'email' => 'required|is_unique[users.email]',
            'nomorTelefon' => 'required',
            'password'=>'required|min_length[6]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $masterUser = new UserModel();
            $query = [
                "name" => $this->request->getPost('nama'),
                "email" => $this->request->getPost('email'),
                "phone" => $this->request->getPost('nomorTelefon'),
                "password" => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ];
            $masterUser->insert($query);
            return redirect('admin/masterusers');
        }
        return view('admin/pages/masterusers/tambah');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $masterUser = new UserModel();
        $data['masterUser'] = $masterUser->where('id',$id)->first();
        return view('admin/pages/masterusers/ubah',$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'email' => 'required',
            'nomorTelefon' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $masterUser = new UserModel();
            $query = [
                "name" => $this->request->getPost('nama'),
                "email" => $this->request->getPost('email'),
                "phone" => $this->request->getPost('nomorTelefon')
            ];
            $masterUser->update($id,$query);
            return redirect('admin/masterusers');
        }
        return redirect()->to('admin/masterusers/'.$id.'/edit');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $masterUser = new UserModel();
        $masterUser->delete($id);
        return redirect('admin/masterusers');
    }
}
