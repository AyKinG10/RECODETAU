@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <h1 class="mb-5">Узнавай первым положение. <br> Обезопась свою жизнь с нами!</h1>

                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Почта" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Нужно ввести почту</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Вы ввели некорректную почту </div>
                                </div>
                                <div class="col-auto"><button class="btn btn-success btn-lg disabled" id="submitButton" type="submit">Отправить</button></div>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Форма успешно отправлена!</div>
                                </div>
                            </div>

                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Произошла ошибка при отправке</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon"><i class="bi bi-globe-central-south-asia"></i></div>
                        <h3>Доступно по всей стране</h3>
                        <p class="lead mb-0">Система мониторинга уровня воды и землетрясения охватывает всю страну для непрерывного наблюдения и оперативного реагирования на изменения .</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon"><i class="bi bi-hourglass-split"></i></div>
                        <h3>Мгновенное оповещение</h3>
                        <p class="lead mb-0">Благодаря системе мониторинга, которая передает автоматические уведомления в реальном времени при обнаружении потенциальных угроз природных бедствий.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon"><i class="bi bi-wrench-adjustable"></i></div>
                        <h3>Легко использовать и внедрять</h3>
                        <p class="lead mb-0">Легкий и удобный интерфейс, а также дешевое установление датчика поможет быть вам в курсе изменений в стране и вносить свои данные</p>
                    </div>
                </div>
                <h1 class="mt-5">Как работает AlertMaster?</h1>
    </section>
    </div>
    </div>
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url({{'assets/css/img/bg-showcase-1.jpg'}})"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <p>Шаг 1</p>
                    <h2>Зарегистрируйтесь</h2>
                    <p class="lead mb-0">Зарегистрируйтесь, заполнив простую форму</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/css/img/bg-showcase-2.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <p>Шаг 2</p>
                    <h2>Узнавайте изменения подьема воды первыми</h2>
                    <p class="lead mb-0" >Благодаря нашему современному датчику вы можете наблюдать за результатом</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/css/img/bg-showcase-3.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <p>Шаг 3</p>
                    <h2>Фиксируйте данные, оповещайте других</h2>
                    <p class="lead mb-0">Станьте ключом в обеспечении безопасности и защите от наводнений, способствуя раннему предупреждению об природных катаклизмов</p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials text-center bg-light">

{{--        <!-- можешь -->--}}
{{--        <div class="container">--}}
{{--            <h2 class="mb-5">Hard-Working Team</h2>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">--}}
{{--                        <img class="img-fluid rounded-circle mb-3" src="{{asset('/assets/css/img/testimonials-1.jpg')}}" alt="..." />--}}
{{--                        <h5>Margaret E.</h5>--}}
{{--                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">--}}
{{--                        <img class="img-fluid rounded-circle mb-3" src="{{'assets/css/img/testimonials-2.jpg'}}" alt="..." />--}}
{{--                        <h5>Fred S.</h5>--}}
{{--                        <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">--}}
{{--                        <img class="img-fluid rounded-circle mb-3" src="{{'assets/css/img/testimonials-3.jpg'}}" alt="..." />--}}
{{--                        <h5>Sarah W.</h5>--}}
{{--                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Зарегистрируйся сейчас!</h2>

                    <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Необходимо заполнить почту</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Вы ввели некорректную почту</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-success btn-lg disabled" id="submitButton" type="submit">Отправить</button></div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Заполнение формы прошло успешно</div>
                            </div>
                        </div>

                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div id="map" style="width: 800px; height: 600px; margin: auto"></div>
    </div>

    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);

        // Функция для получения и отображения погодных данных
        function getWeather(lat, lon) {
            var apiKey = '29d22acdaa90e5c9ca609bf9ac70d18e';
            var url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data); // Данные о погоде
                    // Создаем маркер с погодными данными
                    L.marker([lat, lon])
                        .addTo(map)
                        .bindPopup('Температура: ' + Math.round(data.main.temp - 273.15) + '°C<br>' +
                            'Погода: ' + data.weather[0].description)
                        .openPopup();
                })
                .catch(err => console.error(err));
        }

        // Вызов функции с координатами центра карты
        getWeather(51.505, -0.09);

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgKyr05sq4m3ExH8K0KRYyPj6ieI4JPGU&callback=initMap" async defer></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
