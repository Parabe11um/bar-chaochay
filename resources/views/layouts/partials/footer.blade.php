<footer class="bg-[rgba(246,247,249,1)]">
    <div class="container pt-[4rem] pb-7">
        <div class="flex flex-wrap mx-[-15px] xl:mx-0 lg:mx-0 !mt-[-30px]">
            <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:px-0 lg:px-0 !mt-[30px]">
                <div class="widget">
                    <a href="{{ route('home') }}">
                        <x-application-logo/>
                    </a>
                    <p class="lead text-[0.9rem] font-medium !leading-[1.65] !mb-0">Ждём вас каждый день, без выходных, с 14.00 до 22.00.</p>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:!ml-[16.66666667%] lg:!ml-[16.66666667%] xl:px-0 lg:px-0 !mt-[30px]">
                <div class="widget">
                    <div class="flex flex-row">
                        <div>
                            <div class="icon !text-[#28a745] xl:!text-[1.4rem] !text-[calc(1.265rem_+_0.18vw)] !mr-4 !mt-[-0.25rem]"> <i class="uil uil-phone-volume before:content-['\ec50']"></i> </div>
                        </div>
                        <div>
                            <h5 class="!mb-1">Телефон</h5>
                            <p class="!mb-0"><a href="tel:+79258799942">8-925-87-999-42</a></p>
                        </div>
                    </div>
                    <!--/div -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:px-0 lg:px-0 !mt-[30px]">
                <div class="widget">
                    <div class="flex flex-row">
                        <div>
                            <div class="icon !text-[#28a745] xl:!text-[1.4rem] !text-[calc(1.265rem_+_0.18vw)] !mr-4 !mt-[-0.25rem]"> <i class="uil uil-location-pin-alt before:content-['\ebd8']"></i> </div>
                        </div>
                        <div class="!self-start !justify-start">
                            <h5 class="!mb-1">Адрес</h5>
                            <address class=" not-italic !leading-[inherit] !mb-4">г. Москва, Берсеневский пер 5с2, цокольный эт., Ориентир Livestars family</address>
                        </div>
                    </div>
                    <!--/div -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
        <hr class="!mt-[3rem] xl:!mt-[3.5rem] lg:!mt-[3.5rem] md:!mt-[3.5rem] !mb-7">
        <div class="xl:!flex lg:!flex md:!flex items-center justify-between">
            <p class="!mb-2 xl:!mb-0 lg:!mb-0">© 2025 Чаочай.</p>
            <nav class="nav social social-muted  !mb-0  xl:!text-right lg:!text-right md:!text-right">
                <a target="_blank" class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
                   href="https://t.me/barchaochay"><img class="h-[20px] w-[20px]" src="{{ asset('images/telegram-brands-solid.svg') }}" alt=""></a>
                <a target="_blank" class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
                   href="https://wa.me/79258799942"><img class="h-[20px] w-[20px]" src="{{ asset('images/whatsapp-brands.svg') }}" alt=""></a>
            </nav>
            <!-- /.social -->
        </div>
    </div>
    <!-- /.container -->
</footer>
