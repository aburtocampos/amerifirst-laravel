<?php

namespace App\Http\Livewire\Opportunities;

use Livewire\Component;
use App\Models\Opportunity;

class FundNow extends Component
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

        // Pre-filled info from lender
        $user = auth()->user();

        $this->name      = $user->name;
        $this->email     = $user->email;
        $this->phone     = $user->lenderProfile->phone ?? '';
        $this->principal = $this->opportunity->principal;
        $this->interest  = $this->opportunity->interest;
    }

    public function submit()
    {
        // Later: send to DocuSign or next step
        session()->flash('success', 'Information submitted! (Next step placeholder).');
    }

    public function render()
    {
        return view('livewire.opportunities.fund-now')
                ->layout('layouts.app');
    }
}
