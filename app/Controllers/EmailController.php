<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class EmailController extends BaseController
{
    protected $customerModel;
    public function __construct()
    {
        helper(['url', 'form']);

        $this->customerModel = new customerModel();
    }

    public function index()
    {
        return view('contact');
    }

    public function send()
    {

        
        
        // ini_set('SMTP', "ssl://smtp.gmail.com");
        // ini_set('smtp_port', "587");
        // ini_set('sendmail_from', "email@domain.com");
        // validation email
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if (!$validation) {
            return view('contact', ['validation' => $this->validator]);
        } else {
            //     if($this->isOnline()){
            //         echo 'connected to the internet';
            //     }else{
            //         echo 'not connected';
            //     }
            // }
            if ($this->isOnline()) {
                $to = 'muhamadhelmi6688@gmail.com';
                // $subject = $this->request->getVar('subject');
                // $message = $this->request->getVar('message');
                $name = $this->request->getPost('name');
                $emailFrom = $this->request->getPost('email');
                $subject = (string) $this->request->getPost('subject');
                $message = (string) $this->request->getPost('message');


                $email = \Config\Services::email();

                $email->setTo($to);
                $email->setFrom($emailFrom, $name);
                $email->setSubject($subject);
                $email->setMessage($message);




                if ($email->send()) {

                    return redirect()->to('/contact')->with('success', 'Email sent succesfully!' . $email->printDebugger());
                } else {
                    return redirect()->to('/contact')->with('error', 'Failed to send mail' .  $email->printDebugger())->withInput();
                }
            } else {
                return redirect()->to('/contact')->with('error', 'Check your internet connection')->withInput();
            }
        }
    }

    public function isOnline($site = "https://youtube.com")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
