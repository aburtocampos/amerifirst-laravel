<?php

namespace App\Http\Livewire\Referral;

use Livewire\Component;
use App\Models\Referral;

class Form extends Component
{

    public $name;
    public $email;
    public $phone;
    public $notes;

    public function submit()
    {
        $this->validate([
            'name'  => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|max:50',
            'notes' => 'nullable|max:500',
        ]);

        Referral::create([
            'user_id' => auth()->id(),
            'name'    => $this->name,
            'email'   => $this->email,
            'phone'   => $this->phone,
            'notes'   => $this->notes,
        ]);

        $this->reset(['name', 'email', 'phone', 'notes']);

        session()->flash('success', 'Referral submitted successfully!');
    }


    public function render()
    {
         $referrals = Referral::where('user_id', auth()->id())->latest()->get();

        return view('livewire.referral.form', compact('referrals'))
                ->layout('layouts.app');
       // return view('livewire.referral.form');
    }
}
