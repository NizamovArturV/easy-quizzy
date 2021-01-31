<?
    /**
     * Bitrix Framework
     * @package bitrix
     * @subpackage main
     * @copyright 2001-2014 Bitrix
     */

    /**
     * Bitrix vars
     *
     * @param array $arParams
     * @param array $arResult
     * @param CBitrixComponentTemplate $this
     *
     * @global CUser $USER
     * @global CMain $APPLICATION
     */

    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
        die();
    }


    if ($arResult["SHOW_SMS_FIELD"] == true) {
        CJSCore::Init('phone_auth');
    }
?>

<?
    if ($USER->IsAuthorized()): ?>

        <?
        LocalRedirect("/"); ?>

    <?
    else: ?>
        <?
        if (count($arResult["ERRORS"]) > 0):
            foreach ($arResult["ERRORS"] as $key => $error) {
                if (intval($key) == 0 && $key !== 0) {
                    $arResult["ERRORS"][$key] = str_replace(
                        "#FIELD_NAME#",
                        "&quot;" . GetMessage("REGISTER_FIELD_" . $key) . "&quot;",
                        $error
                    );
                }
            }

            ShowError(implode("<br />", $arResult["ERRORS"]));

        else: ?>
            <div class="wrap">
                <div class="editing">
                    <div class="editing__container">
                        <div class="editing__inner">
                            <div class="editing__block">
                                <div class="editing__form">
                                    <h2 class="editing__title">Регистрация</h2>
                                    <form class="form" method="post" action="<?= POST_FORM_ACTION_URI ?>" name="regform"
                                          id="regform"
                                          enctype="multipart/form-data">
                                        <?php
                                            if ($arResult["BACKURL"] <> ''):
                                                ?>
                                                <input type="hidden" name="backurl"
                                                       value="<?= $arResult["BACKURL"] ?>"/>
                                            <?
                                            endif;
                                        ?>
                                        <div class="form__inner">
                                            <div class="form__item">
                                                <span class="form__caption">Имя</span>
                                                <input type="text" name="REGISTER[NAME]" class="input"
                                                       placeholder="Введите ваше имя" value=""/>

                                                <p class="form__error">Пароль должен состоять из 6 символов</p>
                                            </div>
                                            <div class="form__item">
                                                <input type="hidden" name="REGISTER[LOGIN]" id="loginInput">
                                                <span class="form__caption">E-mail</span>
                                                <input type="email" name="REGISTER[EMAIL]" class="input"
                                                       placeholder="Введите свой E-mail" value="" id="emailInput"/>
                                            </div>
                                            <div class="form__item">
                                                <span class="form__caption">Пароль</span>
                                                <div class="password">
                                                    <input type="password" name="REGISTER[PASSWORD]" class="input"
                                                           autocomplete="off"
                                                           placeholder="Введите пароль"/>
                                                    <button type="button" class="password__button"></button>
                                                </div>
                                            </div>
                                            <div class="form__item">
                                                <span class="form__caption">Повтор пароля</span>
                                                <div class="password">
                                                    <input type="password" name="REGISTER[CONFIRM_PASSWORD]"
                                                           class="input"
                                                           autocomplete="off" placeholder="Повторите пароль"/>
                                                    <button type="button" class="password__button"></button>
                                                </div>
                                            </div>

                                            <div class="form__submit">
                                                <input type="hidden" name="register_submit_button" value="Регистрация">
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

        <?php
        endif; ?>
    <?php
    endif; ?>