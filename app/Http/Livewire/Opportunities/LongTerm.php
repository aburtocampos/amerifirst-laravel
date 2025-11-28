<?php

namespace App\Http\Livewire\Opportunities;

use Livewire\Component;
use App\Models\Opportunity;
use Carbon\Carbon;

class LongTerm extends Component
{
    public $selected;
    public $schedule = [];

    public function selectOpportunity($id)
    {
        $this->selected = Opportunity::find($id);

        if (!$this->selected) return;

        $this->generateSchedule();
    }

    private function generateSchedule()
    {
        $principal  = $this->selected->principal;
        $interest   = $this->selected->interest;     // total interest
        $months     = $this->selected->turnaround_days / 30;
        $months     = intval(max(1, round($months)));
        $startDate  = Carbon::now();

        $this->schedule = [];

        $monthlyInterest = $interest / $months;
        $monthlyPrincipal = $principal / $months;

        for ($i = 1; $i <= $months; $i++) {

            $date = $startDate->copy()->addMonths($i);

            $this->schedule[] = [
                'period' => $i,
                'due_date' => $date->toDateString(),
                'principal' => round($monthlyPrincipal, 2),
                'interest' => round($monthlyInterest, 2),
                'total' => round($monthlyPrincipal + $monthlyInterest, 2)
            ];
        }
    }

    public function render()
    {
       // return view('livewire.opportunities.long-term');
       $opportunities = Opportunity::where('type', 'long')->get();

        return view('livewire.opportunities.long-term', [
            'opportunities' => $opportunities
        ])->layout('layouts.app');
    }
}
