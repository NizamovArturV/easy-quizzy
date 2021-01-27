<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?>
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Восстановление проля</h2>
                            <form class="form">
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">Ваш E-mail</span>
                                        <input type="email" class="input" placeholder="Введите ваш E-mail"/>
                                    </div>
                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit">
                                            <span class="button__text">Отправить</span>
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