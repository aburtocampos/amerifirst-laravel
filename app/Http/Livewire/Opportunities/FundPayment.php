<?php

namespace App\Http\Livewire\Opportunities;

use Livewire\Component;
use App\Models\Opportunity;

class FundPayment extends Component
{
    public $opportunity;
    public $payment_method = null;

    public function mount($id)
    {
        $this->opportunity = Opportunity::findOrFail($id);
    }

    public function selectMethod($method)
    {
        $this->payment_method = $method;
    }

    public function submit()
    {
        // Placeholder for actual payment integration
        session()->flash('success', 'Payment submitted successfully! (Placeholder)');
    }

    public function render()
    {
        return view('livewire.opportunities.fund-payment')
                ->layout('layouts.app');
    }
}
