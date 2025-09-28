@extends('layouts.master')

@section('content')

    <section class="single_event mt-100 mb-100">
        <div class="container">
            <div class="row gy-0 gx-0">
                <div class="col-md-4 single_event_left">
                    <div class="event_sidebar">
                        <img src="https://blog.sheydance.com/wp-content/uploads/2025/03/Your-paragraph-text-3.png"
                             alt="Concurs de dans">
                        <h4 class="fw-bold">Concursul Național de Dans 2025</h4>
                        <p>
                            Îți place să dansezi și vrei să îți arăți talentul?
                            Alătură-te celui mai așteptat eveniment al anului, unde cei mai buni dansatori din țară
                            își demonstrează pasiunea și creativitatea. Fie că ești parte dintr-un club sau participi
                            individual, te așteaptă o experiență plină de energie, muzică și emoție.
                        </p>
                        <a class="btn main_btn" href="#">Participă la concurs</a>
                    </div>

                </div>
                <div class="col-md-8 single_event_right">
                    <h2>Juriul</h2>
                    <div class="member_content">
                        <div class="member_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/jury/AlexandraTsvetkova.jpg"
                                alt="">
                            <a class="btn main_btn" href="#">Află mai multe</a>
                        </div>
                        <div class="member_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/jury/AlexandraTsvetkova.jpg"
                                alt="">
                            <a class="btn main_btn" href="#">Află mai multe</a>
                        </div>
                        <div class="member_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/jury/AlexandraTsvetkova.jpg"
                                alt="">
                            <a class="btn main_btn" href="#">Află mai multe</a>
                        </div>
                        <div class="member_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/jury/AlexandraTsvetkova.jpg"
                                alt="">
                            <a class="btn main_btn" href="#">Află mai multe</a>
                        </div>
                        <div class="member_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/jury/AlexandraTsvetkova.jpg"
                                alt="">
                            <a class="btn main_btn" href="#">Află mai multe</a>
                        </div>
                        <div class="member_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/jury/AlexandraTsvetkova.jpg"
                                alt="">
                            <a class="btn main_btn" href="#">Află mai multe</a>
                        </div>
                    </div>
                    <h2 class="single_h2">Stilizare</h2>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                <span>Ballet</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <p>
                                    The style includes classical ballet, historical dances, neo-classical ballet,
                                    classical ballet dance repertoire, original choreographies (Swan Lake, Baiaderka etc.)
                                    and newly created choreographies.
                                    <a href="https://www.youtube.com/watch?v=e1XITr0B6Es" target="_blank">Video</a>
                                </p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                <span>Bulgarian folkloric dances - divertisment</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <p>Divertisment dances from all folklore regions of Bulgaria…</p>
                            </div>
                        </div>
                    </div>

                    <div class="address_sec">
                        <h2>Open-air Theater Burgas</h2>
                        <div class="location_slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img
                                        src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/hall/OpenAirTheaterBurgas/1.jpg"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/hall/OpenAirTheaterBurgas/1.jpg"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/hall/OpenAirTheaterBurgas/1.jpg"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/hall/OpenAirTheaterBurgas/1.jpg"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/hall/OpenAirTheaterBurgas/1.jpg"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/hall/OpenAirTheaterBurgas/1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="location-pagination position-relative swiper-pagination"></div>
                        </div>
                    </div>
                    <h2>Adresa evenimentului</h2>
                    <div class="map_content">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2717.9062410626516!2d21.927395676675705!3d47.0616895254469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474647763c2442ed%3A0x3a5478a961bacf83!2sCreative%20Marketing%20-%20Agentie%20publicitate!5e0!3m2!1sen!2s!4v1759058287313!5m2!1sen!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="awards_section mt-100">
                    <h2 class="text-center">Premii</h2>
                    <div class="awards_content">
                        <div class="awards_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/prizes/Prize1.jpg"
                                alt="">
                            <h4>2000 BGN cash prizes for the best solo, duo/trio, group and formation</h4>
                        </div>
                        <div class="awards_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/prizes/Prize1.jpg"
                                alt="">
                            <h4>2000 BGN cash prizes for the best solo, duo/trio, group and formation</h4>
                        </div>
                        <div class="awards_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/prizes/Prize1.jpg"
                                alt="">
                            <h4>2000 BGN cash prizes for the best solo, duo/trio, group and formation</h4>
                        </div>
                        <div class="awards_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/prizes/Prize1.jpg"
                                alt="">
                            <h4>2000 BGN cash prizes for the best solo, duo/trio, group and formation</h4>
                        </div>
                        <div class="awards_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/prizes/Prize1.jpg"
                                alt="">
                            <h4>2000 BGN cash prizes for the best solo, duo/trio, group and formation</h4>
                        </div>
                        <div class="awards_item">
                            <img
                                src="https://tournaments.samodivabg.com/Areas/TwentyFifth/images/prizes/Prize1.jpg"
                                alt="">
                            <h4>2000 BGN cash prizes for the best solo, duo/trio, group and formation</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const headers = document.querySelectorAll(".accordion-header");

            headers.forEach(header => {
                header.addEventListener("click", () => {
                    const item = header.parentElement;
                    const body = item.querySelector(".accordion-body");

                    headers.forEach(h => {
                        if (h !== header) {
                            h.classList.remove("active");
                            h.nextElementSibling.style.maxHeight = null;
                        }
                    });

                    header.classList.toggle("active");
                    if (header.classList.contains("active")) {
                        body.style.maxHeight = body.scrollHeight + "px";
                    } else {
                        body.style.maxHeight = null;
                    }
                });
            });
        });
    </script>


@endsection

