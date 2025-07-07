@php
    $images = App\Models\AboutSlider::first()?->images ?? [];
@endphp

<section id="home">
    <div class="wrapper  bg-[rgba(246,247,249,1)]  overflow-hidden">
        <div class="container-fluid xl:!px-0 pt-6 pb-10">
            <div class="swiper-container swiper-auto relative z-10" data-margin="30" data-dots="false" data-nav="true" data-centered="false" data-loop="true" data-items-auto="true">
                <div class="swiper overflow-visible">
                    <div class="swiper-wrapper">

                        @foreach($images as $image)
                            <div class="swiper-slide group">
                                <figure class="rounded-[0.4rem]">
                                    <img class="rounded-[0.4rem]" src="{{ Storage::url($image) }}" alt="image">
                                </figure>
                            </div>
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.cotnainer -->
    </div>
    <!-- /.overflow-hidden -->
</section>
