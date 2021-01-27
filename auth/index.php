<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Авторизация</h2>
                            <form class="form">
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">Логин</span>
                                        <input type="text" class="input" placeholder="Введите логин"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Пароль</span>
                                        <div class="password">
                                            <input type="password" class="input input--error" placeholder="Введите пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                        <p class="form__error">Пароль должен состоять из 6 символов</p>
                                    </div>
                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit">
                                            <span class="button__text">Войти</span>
                                        </button>
                                    </div>
                                    <div class="form__forgot">
                                        <a href="#!" target="_blank" class="form__link">Забыли пароль?</a>
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