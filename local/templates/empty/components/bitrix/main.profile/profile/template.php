<?

    /**
     * @global CMain $APPLICATION
     * @var array $arParams
     * @var array $arResult
     */
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
        die();
    }


    if ($arResult["SHOW_SMS_FIELD"] == true) {
        CJSCore::Init('phone_auth');
    }
//    echo '<pre>';
//    var_dump($arResult);
//    echo '</pre>';
?>
<div class="wrap">
    <div class="editing">
        <div class="editing__container">
            <div class="editing__inner">
                <div class="editing__top">
                    <a href="/profile" class="editing__back">Назад</a>
                </div>
                <div class="editing__block">
                    <div class="editing__form">
                        <h2 class="editing__title">Личная информация</h2>

                        <?
                            ShowError($arResult["strProfileError"]); ?>

                        <form method="post" name="form1" action="<?= $arResult["FORM_TARGET"] ?>"
                              enctype="multipart/form-data" class="form">
                            <?= $arResult["BX_SESSION_CHECK"] ?>
                            <div class="form__inner">
                                <div class="form__user">

                                    <div class="form__avatar">
                                        <img class="form__img"
                                             alt="avatar" src="<?=$arResult["arUser"]['PERSONAL_PHOTO'] > 0 ? CFile::GetPath($arResult["arUser"]['PERSONAL_PHOTO']) : SITE_TEMPLATE_PATH . '/img/profile-stand.png'?>" >
                                        <input type="file" class="form__file" name="PERSONAL_PHOTO"/>
                                    </div>
                                    <button type="button" class="form__cross"></button>
                                </div>

                                <input type="hidden" name="lang" value="<?= LANG ?>"/>
                                <input type="hidden" name="ID" value=<?= $arResult["ID"] ?>/>

                                <div class="form__item">
                                    <span class="form__caption"><?= GetMessage('NAME') ?></span>
                                    <input type="text" name="NAME" class="input" placeholder="Ваше имя"
                                           value="<?= $arResult["arUser"]["NAME"] ?>"/>
                                </div>

                                <div class="form__item">
                                    <span class="form__caption"><?= GetMessage('LAST_NAME') ?></span>
                                    <input type="text" name="LAST_NAME" class="input" placeholder="Ваша фамилия"
                                           value="<?= $arResult["arUser"]["LAST_NAME"] ?>"/>
                                </div>

                                <div class="form__item">
                                    <span class="form__caption">Дата рождения</span>
                                    <input type="text" name="PERSONAL_BIRTHDAY" placeholder="дд.мм.гггг"
                                           class="input input--date"
                                           value="<?= $arResult["arUser"]["PERSONAL_BIRTHDAY"] ?>"/>
                                </div>

                                <div class="form__item">
                                    <span class="form__caption"><?= GetMessage('EMAIL') ?></span>
                                    <input type="email" name="EMAIL" class="input" placeholder="Ваше E-mail"
                                           value="<?= $arResult["arUser"]["EMAIL"] ?>"/>
                                </div>

                                <div class="form__item">
                                    <span class="form__caption">Номер телефона</span>
                                    <input type="tel" name="PHONE_NUMBER" class="input input--phone"
                                           placeholder="Ваш номер"
                                           value="<?= $arResult["arUser"]["PERSONAL_PHONE"] ?>"/>
                                </div>

                                <div class="form__submit">
                                    <button type="submit" class="button button--fit" name="save"
                                            value="<?= (($arResult["ID"] > 0) ? GetMessage("MAIN_SAVE") : GetMessage(
                                                "MAIN_ADD"
                                            )) ?>">
                                        <span class="button__text">Сохранить</span>
                                    </button>
                                </div>
                            </div>

                    </div>
                </div>

                <?
                    if ($arResult['CAN_EDIT_PASSWORD']): ?>
                        <div class="editing__block">
                            <div class="editing__form">
                                <h2 class="editing__title">Смена пароля</h2>
                                <form method="post" name="form1" action="<?= $arResult["FORM_TARGET"] ?>"
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">Новый пароль</span>
                                        <div class="password">
                                            <input type="password" name="NEW_PASSWORD" class="input" autocomplete="off"
                                                   placeholder="Придумайте новый пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Повтор нового пароля</span>
                                        <div class="password">
                                            <input type="password" name="NEW_PASSWORD_CONFIRM" autocomplete="off"
                                                   class="input" placeholder="Повторите новый пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit" name="save"
                                                value="<?= (($arResult["ID"] > 0) ? GetMessage(
                                                    "MAIN_SAVE"
                                                ) : GetMessage("MAIN_ADD")) ?>">
                                            <span class="button__text">Сохранить</span>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                    <?
                    endif ?>


                </form>
            </div>
        </div>
    </div>
</div>



