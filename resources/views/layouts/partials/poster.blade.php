<section id="poster" class="wrapper bg-[rgba(246,247,249,1)]">
    <div class="overflow-hidden">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
                    <i class="icn-flower !text-[#7cb798] xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] opacity-25 before:content-['\e907']"></i>
                    <h2 class="xl:!text-[1.7rem] !text-[calc(1.295rem_+_0.54vw)] !leading-[1.25] font-semibold !tracking-[normal] !text-center !mt-2 !mb-10">
                        Наши чайные мероприятия</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="swiper-container nav-bottom nav-color !mb-[4.5rem] relative z-10 swiper-container-3"
                 data-margin="30" data-dots="false" data-nav="false" data-items-lg="3" data-items-md="2"
                 data-items-xs="1">
                <div
                    class="swiper overflow-visible pb-2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-9f6ccb88dd6d1a5f" aria-live="off"
                         style="cursor: grab; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                        @foreach($events as $event)
                            <div class="swiper-slide">
                                <article class="h-full flex flex-col">
                                    <div class="card flex flex-col h-full">
                                        <figure class="h-[250px] w-full relative group overflow-hidden">
                                            <img
                                                src="{{ Storage::url($event->image) }}"
                                                alt="{{ $event->title }}"
                                                class="w-full h-full object-cover"
                                            >
                                            <figcaption class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 before:absolute before:inset-0 before:bg-black/60 before:content-[''] before:z-0">
                                                <div class="text-white text-sm max-w-md px-4 text-left leading-snug space-y-2 relative z-10">
                                                    {!! $event->description !!}
                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="card-body flex flex-col p-6 grow">
                                            <div class="post-header min-h-[3.5rem]">
                                                <h2 class="text-base font-semibold leading-snug">
                                                    {{ $event->title }}
                                                </h2>
                                            </div>
                                            <div class="mt-auto">
                                                <ul class="text-xs text-[#aab0bc] m-0 p-0 list-none">
                                                    <li class="inline-block">
                                                        <i class="uil uil-calendar-alt pr-1"></i>
                                                        <span>{{ \Carbon\Carbon::parse($event->event_date)->translatedFormat('d F Y') }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <!-- /.swiper -->
                <div class="swiper-controls" id="swiper-controls">
                    <div class="swiper-navigation">
                        <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                             aria-label="Previous slide" aria-controls="swiper-wrapper-9f6ccb88dd6d1a5f"
                             aria-disabled="true"></div>
                        <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                             aria-controls="swiper-wrapper-9f6ccb88dd6d1a5f" aria-disabled="false"></div>
                    </div>
                </div>
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.overflow-hidden -->
</section>
