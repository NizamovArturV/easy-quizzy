<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Линый кабинет");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.profile",
    "",
    Array(
        "CHECK_RIGHTS" => "N",
        "SEND_INFO" => "N",
        "SET_TITLE" => "N",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => ""
    )
);?>
    <div class="wrap">
        <div class="profile">
            <div class="profile__top">
                <div class="heading">
                    <div class="heading__inner">
                        <h1 class="heading__title">личный кабинет</h1>
                    </div>
                </div>
            </div>
            <div class="profile__block">
                <div class="profile__side">
                    <div class="profile-side">
                        <div class="profile-side__top">
                            <div class="profile-side__avatar">
                                <img src="<?=SITE_TEMPLATE_PATH?>/build/images/avatar-1.jpg" class="profile-side__img" alt="avatar">
                            </div>
                        </div>
                        <div class="profile-side__body">
                            <div class="profile-side__info">
                                <p class="profile-side__name">Андрей Александров</p>
                                <p class="profile-side__contact">andrey-86@gmail.com</p>
                                <p class="profile-side__contact">+7 (917) 414-55-01</p>
                            </div>
                            <a href="/editing" class="button button--fit">
                                <span class="button__text">Редактировать</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile__base">
                    <div class="profile__board">
                        <div class="board" data-rank="3">
                            <div class="board__inner">
                                <div class="board__heading">
                                    <p class="board__name">Крадущийся тигр, затаившийся дракон</p>
                                    <p class="board__status">Знатоки</p>
                                </div>
                                <div class="board__stats">
                                    <div class="board__stat">
                                        <div class="board__item">
                                            <p class="board__point">14</p>
                                            <p class="board__caption">игр</p>
                                        </div>
                                    </div>
                                    <div class="board__stat">
                                        <div class="board__item">
                                            <p class="board__point">684</p>
                                            <p class="board__caption">баллов</p>
                                        </div>
                                    </div>
                                    <div class="board__stat">
                                        <div class="board__item">
                                            <p class="board__point">1</p>
                                            <p class="board__caption">место</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile__team">
                        <form class="team">
                            <div class="team__heading">
                                <p class="team__title">Состав</p>
                            </div>
                            <button type="button" class="team__collapse">Состав</button>
                            <div class="team__list">
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Андрей Александров</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Евгений Елизарьев</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Алина Габдрахманова</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option">Редактировать</button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Иван Боровых</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Дмитрий Кичев</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Юлия Касьянова</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Игорь Васильев</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Александра Чернова</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item" tabindex="0">
                                    <div class="team__player">
                                        <p class="team__name">Константин Красильников</p>
                                    </div>
                                    <div class="team__buttons">
                                        <button type="button" class="team__button team__button--add"
                                                data-modal="modalAdding"></button>
                                        <button type="submit" class="team__button team__button--remove"></button>
                                    </div>
                                    <div class="team__options">
                                        <button class="team__dots" type="button"></button>
                                        <div class="team__plank">
                                            <button type="button" class="team__option" data-modal="modalAdding">
                                                Редактировать
                                            </button>
                                            <button type="submit" class="team__option">Удалить</button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="team__add" data-modal="modalAdding">Добавить игрока
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="profile__block">
                <div class="profile__base">
                    <div class="profile__games">
                        <div class="team__games">
                            <div class="table-games">
                                <div class="table-games__heading">
                                    <div class="table-games__col">
                                        <p class="table-games__text">Игра</p>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__text">Дата</p>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__text">Место</p>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__text">Баллы</p>
                                    </div>
                                </div>
                                <div class="table-games__collapse">Статистика</div>
                                <div class="table-games__list">
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Вселенная DC</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="29.12.2018">29.12.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">5</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">84</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Easy Quizee Classic #23</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="22.12.2018">22.12.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">1</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">170</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Игромания</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="15.12.2018">15.12.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">4</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">77</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Easy Quizee Classic #21</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="10.12.2018">10.12.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">3</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">125</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Easy Quizee Classic #16</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="01.12.2018">01.12.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">6</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">65</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Marvel</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="25.11.2018">25.11.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">5</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">54</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Сериалы</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="18.11.2018">18.11.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">4</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">87</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Easy Quizee Classic #12</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="12.11.2018">12.11.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">3</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">146</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Игромания</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="07.11.2018">07.11.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">9</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">32</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Easy Quizee Classic #10</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date" datetime="01.11.2018">01.11.2018</time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">8</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">41</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>