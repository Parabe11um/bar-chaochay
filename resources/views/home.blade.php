<x-app-layout>
    <div class="grow shrink-0">
        @include('layouts.partials.slider')
        @include('layouts.partials.about')

        <!-- /section -->
        <div class="wrapper image-wrapper bg-image bg-overlay !text-white !bg-fixed bg-no-repeat bg-[center_center] bg-cover relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.5)]" data-image-src="{{ asset('images/7.jpg') }}">
            <div class="container py-[6rem] xl:!py-[9rem] lg:!py-[9rem] md:!py-[9rem] !text-center">
                <h2 class="xl:!text-[2.5rem] !text-[calc(1.375rem_+_1.5vw)] !leading-[1.15] font-semibold !text-white  !mb-0">Лучшее пространство,<br class="hidden xl:block lg:block md:block">где можйно выпить чай</h2>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->

        @include('layouts.partials.poster')
        @include('layouts.partials.tea-items')
{{--        @include('layouts.partials.our-team')--}}
{{--        @include('layouts.partials.services')--}}
        @include('layouts.partials.contact')

        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->

    <!-- progress wrapper -->
    <div class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:!text-[#28a745] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path class="fill-none stroke-[#28a745] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
</x-app-layout>
