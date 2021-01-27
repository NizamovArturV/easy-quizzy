<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Редактирование профиля");
?>
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__top">
                        <a href="#!" class="editing__back">Назад</a>
                    </div>
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Личная информация</h2>
                            <form class="form">
                                <div class="form__inner">
                                    <div class="form__user">
                                        <div class="form__avatar">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/build/images/form-avatar.jpg" class="form__img"
                                                 alt="avatar"/>
                                            <input type="file" class="form__file"/>
                                        </div>
                                        <button type="button" class="form__cross"></button>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Имя</span>
                                        <input type="text" class="input" placeholder="Ваше имя"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Фамилия</span>
                                        <input type="text" class="input" placeholder="Ваша фамилия"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Дата рождения</span>
                                        <input type="text" placeholder="дд.мм.гггг" class="input input--date"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Дата рождения</span>
                                        <input type="text" placeholder="дд.мм.гггг" class="input input--date"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">E-mail</span>
                                        <input type="email" class="input" placeholder="Ваше E-mail"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Номер телефона</span>
                                        <input type="tel" class="input input--phone" placeholder="Ваш номер"/>
                                    </div>
                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit">
                                            <span class="button__text">Сохранить</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Смена пароля</h2>
                            <form class="form">
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">Старый пароль</span>
                                        <div class="password">
                                            <input type="password" class="input" placeholder="Введите старый пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Новый пароль</span>
                                        <div class="password">
                                            <input type="password" class="input" placeholder="Придумайте новый пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Повтор нового пароля</span>
                                        <div class="password">
                                            <input type="password" class="input" placeholder="Повторите новый пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit">
                                            <span class="button__text">Сохранить</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>