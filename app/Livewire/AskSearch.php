<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ask;
use Illuminate\Support\Facades\Log;

class AskSearch extends Component
{
    public $search;

    public function render()
    {
        $single = Ask::selectRaw('asks.id, users.name, asks.title, asks.created_at')->leftJoin('users', 'asks.user_id', '=', 'users.id')->where('asks.title', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.ask-search', ['single' => $single]);
    }

    public function submitSearch() {
        $single = Ask::where('title', 'like', '%' . $this->search . '%')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('livewire.ask-search', ['single' => $single]);
    }
}