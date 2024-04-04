<?php

namespace App\Livewire;

use App\Models\Executed; 
use Livewire\Component;

class LastExecuted extends Component
{
    public function render()
    {
        $executed = Executed::latest()->first();
        
        return view('livewire.last-executed', compact('executed'));
    }

}
