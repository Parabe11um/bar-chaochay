
<!-- /section -->
<section id="contact">
    <div class="wrapper image-wrapper bg-image bg-overlay bg-fixed bg-no-repeat bg-[center_center] bg-cover relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.5)]" data-image-src="{{ asset('images/9.jpg') }}">
        <div class="container py-[5rem] xl:!py-[7rem] lg:!py-[7rem] md:!py-[7rem]">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="xl:w-9/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                    <div class="card border-0 !bg-[rgba(255,255,255,.9)]">
                        <div class="card-body xl:!py-16 xl:!px-24 lg:!py-16 lg:!px-24 p-[40px]">
                            <h2 class="xl:!text-[1.7rem] !text-[calc(1.295rem_+_0.54vw)] !leading-[1.25] !font-semibold !mb-3 !text-center">Связаться с нами</h2>
                            <p class="lead !text-[1.1rem] !leading-[1.55] font-medium !mb-10">Оставьте ваше сообщение или вопрос и мы обязательно свяжемся с вами:</p>
                            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate="">
                                <div class="messages"></div>
                                <div class="flex flex-wrap mx-[-10px]">
                                    <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                        <div class="form-floating relative !mb-4">
                                            <input id="form_name" type="text" name="name" class="form-control  bg-[rgba(255,255,255,.7)]  border-0 relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-clip-padding shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out   focus:bg-[rgba(255,255,255,.7)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-0 focus-visible:!border-0   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]" placeholder="" required="">
                                            <label for="form_name" class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Имя *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Пожалуйста укажите свое имя </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                        <div class="form-floating relative !mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control  bg-[rgba(255,255,255,.7)]  border-0 relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-clip-padding shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out   focus:bg-[rgba(255,255,255,.7)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-0 focus-visible:!border-0   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]" placeholder="" required="">
                                            <label for="form_email" class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Email *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Пожалуйста укажите свой email. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                        <div class="form-floating relative !mb-4">
                                            <textarea id="form_message" name="message" class="form-control  bg-[rgba(255,255,255,.7)]  border-0 relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-clip-padding shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out   focus:bg-[rgba(255,255,255,.7)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-0 focus-visible:!border-0   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]" placeholder="" style="height: 150px" required=""></textarea>
                                            <label for="form_message" class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Сообщение *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Пожалуйста введите сообщение. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="w-full flex-[0_0_auto] !px-[15px] max-w-full !text-center">
                                        <input type="submit" class="btn btn-yellow !text-white !bg-[#28a745] border-[#28a745] hover:text-white hover:bg-[#28a745] hover:!border-[#28a745]   active:text-white active:bg-[#28a745] active:border-[#28a745] disabled:text-white disabled:bg-[#28a745] disabled:border-[#28a745] !rounded-[50rem] btn-send" value="Отправить">
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
</section>
