<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистраця");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.register",
    "",
    Array(
        "AUTH" => "Y",
        "REQUIRED_FIELDS" => array(),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array(),
        "SUCCESS_PAGE" => "",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
);?>
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Регистрация</h2>
                            <form class="form">
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">Имя</span>
                                        <input type="text" class="input" placeholder="Введите ваше имя"/>
                                        <p class="form__error">Пароль должен состоять из 6 символов</p>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">E-mail</span>
                                        <input type="email" class="input" placeholder="Введите свой E-mail"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Пароль</span>
                                        <div class="password">
                                            <input type="password" class="input" placeholder="Введите пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Повтор пароля</span>
                                        <div class="password">
                                            <input type="password" class="input" placeholder="Повторите пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit">
                                            <span class="button__text">Зарегистрироваться</span>
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