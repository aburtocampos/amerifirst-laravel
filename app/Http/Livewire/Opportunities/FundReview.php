<?php

namespace App\Http\Livewire\Opportunities;

use Livewire\Component;
use App\Models\Opportunity;

class FundReview extends Component
{
    public $opportunity;
    public $name;
    public $email;
    public $phone;
    public $principal;
    public $interest;

    public function mount($id)
    {
        $this->opportunity = Opportunity::findOrFail($id);

        // Lender pre-filled data
        $user = auth()->user();

        $this->name      = $user->name;
        $this->email     = $user->email;
        $this->phone     = $user->lenderProfile->phone ?? '';
        $this->principal = $this->opportunity->principal;
        $this->interest  = $this->opportunity->interest;
    }

    public function confirm()
    {
        // Placeholder for DocuSign step (next phase)
        session()->flash('success', 'Offer confirmed! Proceed to DocuSign (placeholder).');
    }

    public function render()
    {
        return view('livewire.opportunities.fund-review')
                ->layout('layouts.app');
    }
}
