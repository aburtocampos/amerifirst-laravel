<?php

namespace App\Http\Livewire\Loans;

use Livewire\Component;
use App\Models\Loan;

class ListLoans extends Component
{
    public function render()
    {
       // return view('livewire.loans.list-loans');
       $loans = Loan::where('user_id', auth()->id())->get();

        return view('livewire.loans.list-loans', [
            'loans' => $loans
        ])->layout('layouts.app');
    }
}
