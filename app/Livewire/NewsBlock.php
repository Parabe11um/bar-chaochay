<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsBlock extends Component
{
    public int $perPage = 9;

    public function render()
    {
        return view('livewire.news-block', [
            'items' => News::active()->orderByDesc('published_at')->limit($this->perPage)->get(),
        ]);
    }
}
