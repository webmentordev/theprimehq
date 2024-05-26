<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Contact as ContactForm;

class Contact extends Component
{
    public $name, $email, $subject, $message;
    public $first, $last, $result, $answer = 0;

    public function rules()
    {
        return [
            'name' => 'required|min:5|max:255',
            'email' => 'required|max:255|email',
            'subject' => 'required|min:5|max:255',
            'message' => 'required|min:5',
        ];
    }

    public function render()
    {
        $this->first = rand(1, 99);
        $this->last = rand(1, 99);
        $this->result = $this->first + $this->last;
        return view('livewire.contact');
    }

    public function createMessage(){
        if($this->answer == $this->result){
            $this->validate();
            ContactForm::create([
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message
            ]);
            $this->reset(['name', 'email', 'subject', 'message', 'answer']);
            $content = "**Email:** $this->email\n"
            . "**Name:** $this->name\n"
            . "**Subject:** $this->subject\n"
            . "**Message:** $this->message";
            Http::post(config('app.contact'), [
                'content' => $content
            ]);
            session()->flash('success', __('messages.contact.success'));
        }else{
            $this->reset(['answer']);
            $this->addError('answer', __('messages.contact.wrong'));
        }
    }
}