<header class="relative wrapper  bg-[rgba(246,247,249,1)] ">
    <nav class="navbar navbar-expand-lg extended extended-alt navbar-light !bg-[#ffffff]">
        <div class="container xl:!flex-col lg:!flex-col">
            <div class="topbar flex flex-row lg:!justify-center xl:!justify-center items-center">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}">
                        <x-application-logo/>
                    </a>
                </div>
            </div>
            <livewire:navigation-menu/>
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <!--/.modal -->
    <div class="offcanvas offcanvas-end text-inverse !text-[#cacaca] opacity-100" id="offcanvas-info"
         data-bs-scroll="true">
        <div class="offcanvas-header flex flex-row items-center justify-between p-[1.5rem]">
            <h3 class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !leading-[1.4] !mb-0">Sandbox</h3>
            <button type="button" class="btn-close btn-close-white !mr-[-0.5rem] m-0 p-0" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body !pb-[1.5rem]">
            <div class="widget !mb-8">
                <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your
                    business.</p>
            </div>
            <!-- /.widget -->
            <div class="widget !mb-8">
                <h4 class="widget-title !text-white !mb-[0.75rem] !text-[1rem] !tracking-[normal] font-semibold !leading-[1.45]">
                    Контакты</h4>
                <address class=" not-italic !leading-[inherit] !mb-[1rem]">г. Москва, Берсеневский пер 5с2</address>
                <a class="!text-[#cacaca] hover:!text-[#28a745]"
                   href="mailto:bar@chaochay.ru">bar@chaochay.ru</a><br><a href="tel:+79258799942">8-925-87-999-42</a>
            </div>
            <!-- /.widget -->
            <div class="widget !mb-8">
                <h4 class="widget-title !text-white !mb-[0.75rem] !text-[1rem] !tracking-[normal] font-semibold !leading-[1.45]">
                    Learn More</h4>
                <ul class="list-unstyled !pl-0">
                    <li><a class="!text-[#cacaca] hover:!text-[#28a745]" href="#">Our Story</a></li>
                    <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#28a745]" href="#">Terms of Use</a>
                    </li>
                    <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#28a745]" href="#">Privacy
                            Policy</a></li>
                    <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#28a745]" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title !text-white !mb-[0.75rem] !text-[1rem] !tracking-[normal] font-semibold !leading-[1.45]">
                    Follow Us</h4>
                <nav class="nav social social-white">
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil telegram-alt before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top !bg-[#ffffff] " id="offcanvas-search" data-bs-scroll="true">
        <div class="container flex flex-row py-6">
            <form
                class=" search-form relative before:content-['\eca5'] before:block before:absolute before:-translate-y-2/4 before:text-[1rem] before:!text-[#343f52] before:z-[1] before:right-auto before:top-2/4 before:font-Unicons w-full before:left-0 focus:!outline-offset-0  ">
                <input id="search-form1" type="text"
                       class="form-control text-[0.8rem] !shadow-none !pl-[1.75rem] !pr-[.75rem] border-0 bg-inherit m-0 block w-full font-medium !leading-[1.7] !text-[#60697b] px-4 py-[0.6rem] rounded-[0.4rem] focus:!outline-offset-0  "
                       placeholder="Type keyword and hit enter">
            </form>
            <button type="button"
                    class="btn-close leading-none !text-[#343f52] transition-all duration-[0.2s] ease-in-out p-0 border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(0,0,0,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)]  "
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>
<!-- /header -->
