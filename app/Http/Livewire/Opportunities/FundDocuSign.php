<?php

namespace App\Http\Livewire\Opportunities;

use Livewire\Component;
use App\Models\Opportunity;

class FundDocuSign extends Component
{
    public $opportunity;

    public function mount($id)
    {
        $this->opportunity = Opportunity::findOrFail($id);
    }

    public function proceed()
    {
        // Next step: Payment form (placeholder)
        return redirect()->route('opportunities.payment', $this->opportunity->id);
    }

    public function render()
    {
        return view('livewire.opportunities.fund-docu-sign')
                ->layout('layouts.app');
    }
}
