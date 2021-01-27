<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рейтинг команд");
$APPLICATION->SetPageProperty('body_class','page-purple');
?>
    <div class="wrap">
        <div class="rating">
            <div class="rating__top">
                <div class="rating__shapes">
                    <div class="shapes shapes--rating">
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                        <div class="shapes__shape"></div>
                    </div>
                </div>
                <div class="heading">
                    <div class="heading__inner">
                        <h1 class="heading__title">Рейтинг команд</h1>
                        <p class="heading__text">Рейтинг - это степень крутости конкретной отдельно взятой команды в
                            сравнении с остальными командами Клуба.
                            Он измеряется в рангах, которые присваиваются командам в зависимости от количества
                            баллов,
                            заработанных на играх.</p>
                        <button type="button" class="heading__button" data-modal="modalRules">Как рассчитывается рейтинг?</button>
                    </div>
                </div>
            </div>
            <div class="rating__block">
                <div class="rating__container">
                    <div class="rating__table">
                        <div class="table-rating">
                            <div class="table-rating__heading">
                                <div class="table-rating__col">
                                    <p class="table-rating__text">Название</p>
                                </div>
                                <div class="table-rating__col">
                                    <button type="button" class="table-rating__sort">Игры</button>
                                </div>
                                <div class="table-rating__col">
                                    <button type="button" class="table-rating__sort table-rating__sort--reverse table-rating__sort--active">
                                        Баллы
                                    </button>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text">Ранг</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">01</span>
                                    <p class="table-rating__text">Стиляги</p>
                                    <span class="table-rating__caption">Знатоки</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">10</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">642</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="3">Знатоки</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">02</span>
                                    <p class="table-rating__text">Крадущийся тигр, затаившийся дракон</p>
                                    <span class="table-rating__caption">Знатоки</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">10</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">584</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="3">Знатоки</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">03</span>
                                    <p class="table-rating__text">Лемонтри</p>
                                    <span class="table-rating__caption">Знатоки</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">5</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">362</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="3">Знатоки</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">04</span>
                                    <p class="table-rating__text">Братство крыльца</p>
                                    <span class="table-rating__caption">Эксперты</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">7</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">281</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="2">Эксперты</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">05</span>
                                    <p class="table-rating__text">Общество с ограниченными посредственностями</p>
                                    <span class="table-rating__caption">Эксперты</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">4</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">218</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="2">Эксперты</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">06</span>
                                    <p class="table-rating__text">Лига несправедливости</p>
                                    <span class="table-rating__caption">Студенты</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">2</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">109</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="1">Студенты</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">07</span>
                                    <p class="table-rating__text">Фарго</p>
                                    <span class="table-rating__caption">Студенты</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">3</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">101</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text" data-rank="1">Студенты</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">07</span>
                                    <p class="table-rating__text">Эй, Свинтура!</p>
                                    <span class="table-rating__caption">Новички</span>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">2</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">88</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text">Новички</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">08</span>
                                    <p class="table-rating__text">Режина Феланджи</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">2</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">76</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text">—</p>
                                </div>
                            </div>
                            <div class="table-rating__row">
                                <div class="table-rating__col">
                                    <span class="table-rating__pos">09</span>
                                    <p class="table-rating__text">Ежики</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Игр</span>
                                    <p class="table-rating__number">2</p>
                                </div>
                                <div class="table-rating__col">
                                    <span class="table-rating__caption">Баллы</span>
                                    <p class="table-rating__number">51</p>
                                </div>
                                <div class="table-rating__col">
                                    <p class="table-rating__text">—</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>