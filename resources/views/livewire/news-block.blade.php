<section id="news" class="wrapper bg-[rgba(246,247,249,1)] py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold text-center mb-10">Новости бара</h2>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($items as $item)
                <article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <button type="button"
                            class="js-news-card block text-left relative z-10 w-full"
                            data-news-id="{{ $item->id }}"
                            data-title="{{ e($item->title) }}"
                            data-teaser="{{ e($item->teaser) }}"
                            data-img="{{ $item->image ? asset('storage/'.$item->image) : '' }}">
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

                    <template id="news-body-{{ $item->id }}">{!! $item->body !!}</template>
                </article>
            @endforeach
        </div>

        <div id="news-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-8">
            <div class="absolute inset-0 bg-black/60 pointer-events-none"></div>

            <div class="relative bg-white rounded-2xl w-full max-w-3xl max-h-[85vh] overflow-y-auto pointer-events-auto">
                <img id="news-modal-img"
                     class="w-full object-cover max-h-[360px] rounded-t-2xl hidden"
                     alt="">

                <div class="flex items-start justify-between p-5 border-b">
                    <h3 id="news-modal-title" class="text-xl font-semibold"></h3>
                    <button class="p-2" data-close aria-label="Закрыть">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="p-6 prose max-w-none">
                    <p id="news-modal-teaser" class="text-gray-600"></p>
                    <div id="news-modal-body" class="mt-4"></div>
                </div>
            </div>
        </div>

        <script>
            (function () {
                const modal    = document.getElementById('news-modal');
                const titleEl  = document.getElementById('news-modal-title');
                const imgEl    = document.getElementById('news-modal-img');
                const teaserEl = document.getElementById('news-modal-teaser');
                const bodyEl   = document.getElementById('news-modal-body');

                function openModal(p) {
                    titleEl.textContent  = p.title || '';
                    teaserEl.textContent = p.teaser || '';

                    if (p.img) {
                        imgEl.src = p.img;
                        imgEl.classList.remove('hidden');
                    } else {
                        imgEl.classList.add('hidden');
                        imgEl.removeAttribute('src');
                    }

                    const tpl = document.getElementById('news-body-' + p.id);
                    bodyEl.innerHTML = tpl ? tpl.innerHTML : '';

                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    // не трогаем overflow документа — фон можно скроллить
                }

                function closeModal() {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }

                // открыть по клику на карточку
                document.addEventListener('click', (e) => {
                    const card = e.target.closest('.js-news-card');
                    if (!card) return;
                    openModal({
                        id:     card.dataset.newsId,
                        title:  card.dataset.title || '',
                        teaser: card.dataset.teaser || '',
                        img:    card.dataset.img || ''
                    });
                });

                // закрыть: по кнопке, по Esc
                modal.querySelector('[data-close]').addEventListener('click', closeModal);
                document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeModal(); });

                // закрыть кликом за пределами окна:
                // клики в «тёмную подложку» проходят на контейнер modal (у подложки pointer-events:none)
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) closeModal();
                });
            })();
        </script>


    </div>
</section>
