<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GoogleCharts extends Component
{

    public $chartData;

    public function mount(){

        $users = User::select(DB::raw("DATE_FORMAT(created_at, '%y-%m') as  month"),DB::raw("COUNT(*) as count"))->groupBy("month")
        ->orderBy("month", "ASC")
        ->get(); 

        $userData = [["Month", "Count"]];

        foreach($users as $key => $user){
            $userData[]  = [$user->month, $user->count];
        }
        $this->chartData = $userData;
    }
    public function render()
    {
        return view('livewire.google-charts');
    }
}
