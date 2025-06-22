
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
                            <div id="form-status" class="hidden mb-4 px-4 py-2 rounded"></div>

                            <form id="contactForm" class="space-y-4 max-w-2xl mx-auto">
                                @csrf
                                <input type="text" name="name" required placeholder="Имя *" class="w-full border rounded p-3" />
                                <input type="email" name="email" required placeholder="Email *" class="w-full border rounded p-3" />
                                <textarea name="message" required placeholder="Сообщение *" class="w-full border rounded p-3 h-40"></textarea>
                                <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded hover:bg-green-700">Отправить</button>
                            </form>

                            <script>
                                document.getElementById('contactForm').addEventListener('submit', function (e) {
                                    e.preventDefault();

                                    const form = e.target;
                                    const formData = new FormData(form);
                                    const statusDiv = document.getElementById('form-status');

                                    fetch("{{ route('contact.submit') }}", {
                                        method: "POST",
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                                        },
                                        body: formData
                                    })
                                        .then(res => res.json())
                                        .then(data => {
                                            statusDiv.classList.remove('hidden');
                                            statusDiv.className = 'mb-4 px-4 py-2 rounded bg-green-100 text-green-800';
                                            statusDiv.textContent = data.message;
                                            form.reset();
                                        })
                                        .catch(() => {
                                            statusDiv.classList.remove('hidden');
                                            statusDiv.className = 'mb-4 px-4 py-2 rounded bg-red-100 text-red-800';
                                            statusDiv.textContent = 'Произошла ошибка при отправке формы.';
                                        });
                                });
                            </script>
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
