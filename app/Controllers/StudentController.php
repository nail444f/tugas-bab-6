<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->findAll();

        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $model = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];
        $model->insert($data);

        return redirect()->to('/students');
    }

    public function edit($id)
    {
        $model = new StudentModel();
        $data['student'] = $model->find($id);

        return view('students/edit', $data);
    }

    public function update()
    {
        $model = new StudentModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];
        $model->update($id, $data);

        return redirect()->to('/students');
    }

    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);

        return redirect()->to('/students');
    }
}
