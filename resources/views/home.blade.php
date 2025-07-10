<x-app-layout>

    @section('hero')
        <div class="w-full text-center main-top-bg py-32 bg-gray-100 overlay-3">

            <div class="container">
                <div class="flex flex-col items-center text-white text-center px-6 py-20 sm:min-h-[60vh] md:min-h-[50vh] md:h-[60vh] lg:min-h-[20vh] lg:h-[20vh] xl:min-h-[20vh] xl:h-[20vh]">
                    <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4 opacity-0 transition-opacity duration-1000 delay-200"
                        x-data x-init="$el.classList.remove('opacity-0')">
                        Андеграунд чай`на бар
                    </h1>

                    <p x-data="typeEffect('Чай в ритме города', 60)"
                       x-init="$nextTick(() => startTyping())"
                       x-text="output"
                       x-show="output.length > 0"
                       x-transition.opacity
                       class="text-xl text-white md:text-2xl lg:text-3xl font-light mt-2 min-h-[1.5rem]">
                    </p>
                </div>
                <div class="flex flex-col items-center md:flex-row md:justify-between">
                <div
                        class="text-left text-white font-medium hidden md:block opacity-0 translate-x-[-40px] transition-all duration-1000 delay-200"
                        x-data x-init="$el.classList.remove('opacity-0', 'translate-x-[-40px]')">
                        <p>✔️ Эксклюзивный китайский чай</p>
                        <p>✔️ Локация на Красном Октябре</p>
                        <p>✔️ Интересные соседи</p>
                        <p>✔️ Мастерские и мероприятия</p>
                        <p>✔️ Чайные перформансы</p>
                        <p>✔️ Дружелюбное пространство</p>
                        <p>✔️ Знакомство с чаем для новичков</p>
                    </div>
                    <div
                        class="main-top-cta opacity-0 justify-center translate-y-6 transition-all duration-1000 delay-500"
                        x-data x-init="$el.classList.remove('opacity-0', 'translate-y-6')">
                        <a href="#contact"
                           class="btn btn-yellow scroll  !text-white !bg-[#28a745] border-[#28a745] hover:text-white hover:bg-[#28a745] hover:!border-[#28a745]   active:text-white active:bg-[#28a745] active:border-[#28a745] disabled:text-white disabled:bg-[#28a745] disabled:border-[#28a745] !rounded-[50rem] !mt-2 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">Хочу
                            приехать</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <div class="grow shrink-0">
        @include('layouts.partials.about')
        @include('layouts.partials.slider')
        @include('layouts.partials.poster', ['events' => $events])
        <!-- /section -->
        <div
            class="wrapper image-wrapper bg-image bg-overlay !text-white !bg-fixed bg-no-repeat bg-[center_center] bg-cover relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.5)]"
            data-image-src="{{ asset('images/7.jpg') }}">
            <div class="container py-[6rem] xl:!py-[9rem] lg:!py-[9rem] md:!py-[9rem] !text-center">
                <h2 class="xl:!text-[2.5rem] !text-[calc(1.375rem_+_1.5vw)] !leading-[1.15] font-semibold !text-white  !mb-0">
                    Прекрасная атмосфера и место,<br class="hidden xl:block lg:block md:block">где можно выпить чай</h2>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->

        @include('layouts.partials.tea-items')
        {{--        @include('layouts.partials.our-team')--}}
        {{--        @include('layouts.partials.services')--}}
        @include('layouts.partials.contact')
        @include('layouts.partials.map')

        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->

    <!-- progress wrapper -->
    <div
        class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:!text-[#28a745] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path
                class="fill-none stroke-[#28a745] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
                d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
</x-app-layout>
