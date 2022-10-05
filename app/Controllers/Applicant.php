<?php

class Applicant extends BaseController
{
    private ApplicantModel $applicantModel;

    public function __construct()
    {
        $this->applicantModel = $this->model('ApplicantModel');
    }


    public function index()
    {

        $data = [
            'applicants' => $this->applicantModel->getApplicants()
        ];

        $this->view('Applicant/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'applicant' => $this->applicantModel->getApplicantById($id)
        ];

        $this->view('Applicant/show', $data);
    }

    public function update($id)
    {
        if ($this->applicantModel->updateApplicant($id)) {
            header('Location: /applicant');
        }
    }


    public function create()
    {

        $this->view('Applicant/create');
    }

    public function store()
    {

        $this->applicantModel->createApplicant();
    }

    public function destroy($id)
    {
        
        if ($this->applicantModel->deleteApplicant($id)) {
        header('Location: /applicant');
        }
    }
}
