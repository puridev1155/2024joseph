<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class NoticeSearch extends Component
{
    public $search;

    public function render()
    {

        $single = Post::where('title', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.notice-search', ['single' => $single]);
    }

    public function submitSearch() {
        $single = Post::where('title', 'like', '%' . $this->search . '%')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('livewire.notice-search', ['single' => $single]);
    }
}