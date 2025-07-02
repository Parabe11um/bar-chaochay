<!-- /.flex -->
<div class="navbar-collapse-wrapper bg-[rgba(255,255,255)] opacity-100 flex flex-row items-center justify-between">
    <div class="navbar-other w-full hidden lg:block xl:block">
        <nav class="nav social social-muted">
            <a target="_blank" class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
               href="https://t.me/barchaochay"><img class="h-[20px] w-[20px]" src="{{ asset('images/telegram-brands-solid.svg') }}" alt=""></a>
            <a target="_blank" class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
               href="https://wa.me/79258799942"><img class="h-[20px] w-[20px]" src="{{ asset('images/whatsapp-brands.svg') }}" alt=""></a>
        </nav>
        <!-- /.social --></div>
    <!-- /.navbar-other -->
    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
        <div class="offcanvas-header xl:!hidden lg:!hidden flex items-center justify-between flex-row p-6">
            <a href="/">
                <x-application-logo/>
            </a>
            <button type="button"
                    class="btn-close btn-close-white !mr-[-0.75rem] m-0 p-0 leading-none !text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:text-white before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)]  "
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex  flex-col !h-full">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link scroll hover:!text-[#28a745] active" href="#about">О нас</a>
                </li>
                <li class="nav-item"><a class="nav-link scroll hover:!text-[#28a745]" href="#poster">Афиша</a></li>
                <li class="nav-item"><a class="nav-link scroll hover:!text-[#28a745]" href="#tea-items">Наш чай</a></li>
                <li class="nav-item"><a class="nav-link hover:!text-[#28a745]" href="{{ asset('menu.pdf') }}" target="_blank">Наше меню</a></li>
                <li class="nav-item"><a class="nav-link scroll hover:!text-[#28a745]" href="#contact">Контакты</a></li>
            </ul>
            <!-- /.navbar-nav -->
            <div class="offcanvas-footer xl:!hidden lg:!hidden">
                <div>
                    <a href="mailto:first.last@email.com" class="link-inverse">bar@chaochay.ru</a>
                    <br> <a href="tel:+79258799942">8-925-87-999-42</a>  <br>
                    <nav class="nav social social-white !mt-4">
                        <a target="_blank" class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
                           href="https://t.me/barchaochay"><img class="h-[20px] w-[20px]" src="{{ asset('images/telegram-brands-solid.svg') }}" alt=""></a>
                        <a target="_blank" class="m-[0_.7rem_0_0] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]"
                           href="https://wa.me/79258799942"><img class="h-[20px] w-[20px]" src="{{ asset('images/whatsapp-brands.svg') }}" alt=""></a>
                    </nav>
                    <!-- /.social -->
                </div>
            </div>
            <!-- /.offcanvas-footer -->
        </div>
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other w-full flex">
        <ul class="navbar-nav !flex-row !items-center !ml-auto">
            <li class="nav-item xl:!hidden lg:!hidden">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
            </li>
        </ul>
        <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-other -->
</div>
<!-- /.navbar-collapse-wrapper -->
