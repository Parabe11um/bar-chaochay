<section id="tea-slider" class="wrapper bg-[rgba(246,247,249,1)]">
    <div class="overflow-hidden">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
                    <i class="icn-flower !text-[#7cb798] xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] opacity-25 before:content-['\e907']"></i>
                    <h2 class="xl:!text-[1.7rem] !text-[calc(1.295rem_+_0.54vw)] !leading-[1.25] font-semibold !tracking-[normal] !text-center !mt-2 !mb-10">
                        Наш чай</h2>

                    <p>
                        Мы предлагаем премиальный китайский чай напрямую от проверенных поставщиков. В нашей коллекции — белые, зелёные, красные, улун и пуэры.
                    </p>
                </div>
            </div>

            <div class="swiper-container nav-bottom nav-color !mb-[4.5rem] relative z-10 swiper-container-teas"
                 data-margin="30" data-dots="false" data-nav="false" data-items-lg="3" data-items-md="2"
                 data-items-xs="1">
                <div class="swiper overflow-visible pb-2">
                    <div class="swiper-wrapper">
                        @foreach($teas as $tea)
                            <div class="swiper-slide">
                                <article class="h-full">
                                    <div class="card !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)] flex flex-col justify-between min-h-[400px]">
                                        <figure class="relative group overflow-hidden rounded-[0.4rem]">
                                            <img class="w-full h-[250px] object-cover rounded-[0.4rem]" src="{{ Storage::url($tea->image_path) }}" alt="{{ $tea->title }}">

                                            <figcaption class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 before:absolute before:inset-0 before:bg-black/60 before:content-[''] before:z-0">
                                                <div class="text-white text-sm max-w-md px-4 text-left leading-snug space-y-2 relative z-10">
                                                    <p>{{ $tea->title }}</p>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        new Swiper('.swiper-container-teas .swiper', {
            slidesPerView: 1.2,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
            },
            navigation: {
                nextEl: '.swiper-container-teas .swiper-button-next',
                prevEl: '.swiper-container-teas .swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
@endpush
