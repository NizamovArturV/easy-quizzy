<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Расписание игр");
$APPLICATION->SetPageProperty('body_class','page-purple');
?>
    <div class="wrap">
        <div class="schedule">
            <div class="schedule__inner">
                <div class="schedule__top">
                    <div class="heading heading--fit">
                        <div class="heading__inner">
                            <h1 class="heading__title">Расписание игр</h1>
                        </div>
                    </div>
                </div>
                <div class="schedule__cards">
                    <div class="schedule__card">
                        <div class="card-game">
                            <div class="card-game__shell">
                                <div class="card-game__inner">
                                    <div class="card-game__content">
                                        <time class="card-game__date" datetime="20.01.19">20 января, Воскресенье
                                        </time>
                                        <p class="card-game__title">Вселенная DC</p>
                                        <div class="card-game__list">
                                            <div class="card-game__item">
                                                <p class="card-game__caption">Дорогая, я перезвоню</p>
                                                <button type="button" class="card-game__location" data-modal="modalMap">
                                                    Это где?
                                                </button>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">19:00</p>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">300 <span>₽</span></p>
                                                <span class="card-game__deny">Мест нет</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-game__line">
                                        <span class="card-game__type">Pop</span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="card-game__button" data-modal="modalReg">Записаться в резерв
                            </button>
                        </div>
                    </div>
                    <div class="schedule__card">
                        <div class="card-game card-game--pop">
                            <div class="card-game__shell">
                                <div class="card-game__inner">
                                    <div class="card-game__content">
                                        <time class="card-game__date" datetime="23.01.19">23 января, Вторник
                                        </time>
                                        <p class="card-game__title">EASY QUIZZY #23</p>
                                        <div class="card-game__list">
                                            <div class="card-game__item">
                                                <p class="card-game__caption">Дорогая, я перезвоню</p>
                                                <button type="button" class="card-game__location" data-modal="modalMap">
                                                    Это где?
                                                </button>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">19:00</p>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">300 <span>₽</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-game__line">
                                        <span class="card-game__type">Classic</span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="card-game__button">Записаться</button>
                        </div>
                    </div>
                    <div class="schedule__card">
                        <div class="card-game">
                            <div class="card-game__shell">
                                <div class="card-game__inner">
                                    <div class="card-game__content">
                                        <time class="card-game__date" datetime="27.01.19">27 января, Суббота
                                        </time>
                                        <p class="card-game__title">Easy Quizzy #24</p>
                                        <div class="card-game__list">
                                            <div class="card-game__item">
                                                <p class="card-game__caption">Music Hall 27</p>
                                                <button type="button" class="card-game__location" data-modal="modalMap">
                                                    Это где?
                                                </button>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">19:00</p>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">300 <span>₽</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-game__line">
                                        <span class="card-game__type">Pop</span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="card-game__button">Записаться</button>
                        </div>
                    </div>
                    <div class="schedule__card">
                        <div class="card-game card-game--pop">
                            <div class="card-game__shell">
                                <div class="card-game__inner">
                                    <div class="card-game__content">
                                        <time class="card-game__date" datetime="30.01.19">30 января, Вторник
                                        </time>
                                        <p class="card-game__title">Гарри поттер и орден феникса</p>
                                        <div class="card-game__list">
                                            <div class="card-game__item">
                                                <p class="card-game__caption">Дорогая, я перезвоню</p>
                                                <button type="button" class="card-game__location" data-modal="modalMap">
                                                    Это где?
                                                </button>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">19:00</p>
                                            </div>
                                            <div class="card-game__item">
                                                <p class="card-game__caption">300 <span>₽</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-game__line">
                                        <span class="card-game__type">Classic</span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="card-game__button">Записаться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>