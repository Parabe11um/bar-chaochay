<section class="w-screen h-screen" id="yandex-map"></section>

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map("yandex-map", {
                center: [55.751244, 37.618423],
                zoom: 16,
                controls: ['zoomControl']
            });

            var myPlacemark = new ymaps.Placemark([55.751244, 37.618423], {
                hintContent: 'ЧаоЧай',
                balloonContent: 'Мы здесь!'
            }, {
                preset: 'islands#icon',
                iconColor: '#ff6600'
            });

            myMap.geoObjects.add(myPlacemark);
        });
    </script>
@endpush
