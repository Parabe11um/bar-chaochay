<section id="news" class="wrapper bg-[rgba(246,247,249,1)] py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold text-center mb-10">Новости</h2>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($items as $item)
                <article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <button type="button" class="text-left w-full"
                            wire:click="open({{ $item->id }})">
                        @if($item->image)
                            <img class="w-full aspect-[4/3] object-cover"
                                 src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}">
                        @endif
                        <div class="p-5">
                            <h3 class="text-lg font-semibold mb-2 line-clamp-2">{{ $item->title }}</h3>
                            @if($item->teaser)
                                <p class="text-sm text-gray-600 line-clamp-3">{{ $item->teaser }}</p>
                            @endif
                            <span class="inline-flex items-center gap-2 text-primary mt-4">
                <span class="underline underline-offset-4">Подробнее</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"/></svg>
              </span>
                        </div>
                    </button>
                </article>
            @endforeach
        </div>

        {{-- Модалка --}}
        @if($modalOpen)
            <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-8 bg-black/60"
                 wire:keydown.escape="close" wire:click.self="close" wire:ignore.self>
                <div class="bg-white rounded-2xl w-full max-w-3xl max-h-[85vh] overflow-y-auto">
                    <div class="flex items-start justify-between p-5 border-b">
                        <h3 class="text-xl font-semibold">{{ $current['title'] ?? '' }}</h3>
                        <button class="p-2" wire:click="close" aria-label="Закрыть">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    @if(!empty($current['image']))
                        <img src="{{ $current['image'] }}" alt="" class="w-full object-cover max-h-[360px]">
                    @endif

                    <div class="p-6 prose max-w-none">
                        @if(!empty($current['teaser']))
                            <p class="text-gray-600">{{ $current['teaser'] }}</p>
                        @endif
                        <div class="mt-4">{!! $current['body'] ?? '' !!}</div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
