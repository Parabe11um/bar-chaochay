<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class NewsBlock extends Component
{
    public int $perPage = 9;

    public bool $modalOpen = false;
    public array $current = [];

    public function open(int $id): void
    {
        $item = News::active()->find($id);
        if (! $item) return;

        $this->current = [
            'title' => $item->title,
            'teaser' => $item->teaser,
            'image' => $item->image ? Storage::url($item->image) : null,
            'body'  => $item->body,
        ];
        $this->modalOpen = true;
    }

    public function close(): void
    {
        $this->modalOpen = false;
        $this->current = [];
    }

    public function render()
    {
        return view('livewire.news-block', [
            'items' => News::active()->orderByDesc('published_at')->limit($this->perPage)->get(),
        ]);
    }
}
