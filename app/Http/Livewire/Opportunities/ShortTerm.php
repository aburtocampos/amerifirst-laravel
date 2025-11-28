<?php

namespace App\Http\Livewire\Opportunities;

use Livewire\Component;
use App\Models\Opportunity;

class ShortTerm extends Component
{
    public function render()
    {
       // return view('livewire.opportunities.short-term');
        $opportunities = Opportunity::where('type', 'short')->get();

        return view('livewire.opportunities.short-term', [
            'opportunities' => $opportunities
        ])->layout('layouts.app');
    }
}
