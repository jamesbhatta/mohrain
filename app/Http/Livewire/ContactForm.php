<?php

namespace App\Http\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $mobile;
    public $subject;
    public $message;
    public $sent;
    public $messageSendError;

    protected $rules = [
        'name' => 'required',
        'email' => 'nullable|email',
        'mobile' => 'required|digits:10',
        'subject' => 'nullable',
        'message' => 'required'
    ];

    public function send()
    {
        $this->messageSendError = null;
        $this->validate();

        try {
            ContactUs::create([
                'name' => $this->name,
                'email' => $this->email,
                'mobile' => $this->mobile,
                'subject' => $this->subject,
                'message' => $this->message
            ]);
            
            $this->sent = true;
            
            $this->reset(['name', 'email', 'mobile', 'subject', 'message']);
        } catch (\Exception $ex) {
            logger('Error while submitting contact form.', ['Ex' => $ex->getMessage()]);
            $this->messageSendError = 'Error while submiting form. Plese try again.';
        }
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
