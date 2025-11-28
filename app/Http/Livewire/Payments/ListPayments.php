<?php

namespace App\Http\Livewire\Payments;

use Livewire\Component;
use App\Models\Payment;

class ListPayments extends Component
{
    public function render()
    {
       // return view('livewire.payments.list-payments');
       $payments = Payment::whereHas('loan', function($q) {
            $q->where('user_id', auth()->id());
        })->get();

        return view('livewire.payments.list-payments', [
            'payments' => $payments
        ])->layout('layouts.app');
    }
}
