<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EventModel;

class EventController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $event = new EventModel();
        $data['event'] = $event->findAll();

        return view('admin/pages/acara/list',$data);
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
        return view('admin/pages/acara/tambah');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $event = new EventModel();
            $query = [
                "judul" => $this->request->getPost('judul')
            ];
            $event->insert($query);
            return redirect('admin/events');
        }
        return view('admin/pages/acara/tambah');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $event = new EventModel();
        $data['event'] = $event->where('id',$id)->first();
        return view('admin/pages/acara/ubah',$data);
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'instansi' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $event = new EventModel();
            $query = [
                "nim" => $this->request->getPost('nim'),
                "name" => $this->request->getPost('name'),
                "email" => $this->request->getPost('email'),
                "phone" => $this->request->getPost('phone'),
                "instansi" => $this->request->getPost('instansi')
            ];
            $event->update($id,$query);
            return redirect('admin/events');
        }
        return redirect()->to('admin/events/'.$id.'/edit');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $event = new EventModel();
        $event->delete($id);
        return redirect('admin/events');
    }
}
