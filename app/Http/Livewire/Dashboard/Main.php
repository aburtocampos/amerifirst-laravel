<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
       // return view('livewire.dashboard.main');

       $user = auth()->user();

        // KPIs
        $totalLoans     = $user->loans()->count();
        $totalPrincipal = $user->loans()->sum('principal');
        $totalInterest  = $user->loans()->sum('interest');
        $totalPaid      = $user->loans()->sum('total'); // total loan amount
        $totalPayments  = $user->loans()->with('payments')
                                ->get()
                                ->flatMap->payments
                                ->sum('amount');

        // pending = loan total - payments made
        $outstanding = $totalPaid - $totalPayments;

        return view('livewire.dashboard.main', compact(
            'totalLoans',
            'totalPrincipal',
            'totalInterest',
            'totalPaid',
            'totalPayments',
            'outstanding'
        ))->layout('layouts.app');

    }
}
