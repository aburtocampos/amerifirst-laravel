<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Carbon\Carbon;

class Main extends Component
{
    public function render()
    {
       // return view('livewire.dashboard.main');

       $user = auth()->user();
 // LOANS

        $loans = $user->loans;

        // STATUS COUNTS
        $paidClosed      = $loans->whereIn('status', ['paid', 'closed'])->count();
        $inTransit       = $loans->where('status', 'in_transit')->count();
        $invoiced        = $loans->where('status', 'invoiced')->count();
        $inProduction    = $loans->where('status', 'in_production')->count();

        // FINANCIALS
        $totalPrincipal       = $loans->sum('principal');
        $totalInterest        = $loans->sum('interest');
        $totalLoanAmount      = $loans->sum('total');

        // PAYMENTS
        $payments = $loans->flatMap->payments;

        $totalPaidPrincipal   = $payments->sum('amortization');
        $totalPaidInterest    = $payments->sum('interest');
        $totalPaid            = $payments->sum('amount');

        // OUTSTANDING
        $outstandingPrincipal = $totalPrincipal - $totalPaidPrincipal;
        $outstandingInterest  = $totalInterest - $totalPaidInterest;

        // PROMISSORY NOTE COUNT
        $promissoryCount = $loans->count();

        // SCHEDULED PAYMENTS (from schedule in long term logic)
        $scheduledPayments = $payments->where('status', 'scheduled')->count();

        return view('livewire.dashboard.main', compact(
            'paidClosed',
            'inTransit',
            'invoiced',
            'inProduction',
            'totalPrincipal',
            'totalInterest',
            'totalLoanAmount',
            'totalPaidPrincipal',
            'totalPaidInterest',
            'totalPaid',
            'outstandingPrincipal',
            'outstandingInterest',
            'promissoryCount',
            'scheduledPayments'
        ))->layout('layouts.app');

    }
}
