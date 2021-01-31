<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CJSCore::Init();
?>
<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
    ShowMessage($arResult['ERROR_MESSAGE']);
?>

<? if ($arResult["FORM_TYPE"] == "login"): ?>

    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Авторизация</h2>
                            <form class="form" name="system_auth_form<?= $arResult["RND"] ?>" method="post" target="_top"
                                  action="<?= $arResult["AUTH_URL"] ?>">
                                <? if ($arResult["BACKURL"] <> ''): ?>
                                    <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
                                <?endif ?>
                                <? foreach ($arResult["POST"] as $key => $value): ?>
                                    <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
                                <?endforeach ?>
                                <input type="hidden" name="AUTH_FORM" value="Y"/>
                                <input type="hidden" name="TYPE" value="AUTH"/>

                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption"><?= GetMessage("AUTH_LOGIN") ?></span>
                                        <input type="text" class="input" name="USER_LOGIN" placeholder="Введите логин"
                                               value=""/>
                                        <script>
                                            BX.ready(function () {
                                                var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                                                if (loginCookie) {
                                                    var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                                                    var loginInput = form.elements["USER_LOGIN"];
                                                    loginInput.value = loginCookie;
                                                }
                                            });
                                        </script>
                                    </div>

                                    <div class="form__item">
                                        <span class="form__caption"><?= GetMessage("AUTH_PASSWORD") ?></span>
                                        <div class="password">
                                            <input type="password" class="input input--error"
                                                   placeholder="Введите пароль" name="USER_PASSWORD"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                        <p class="form__error">Пароль должен состоять из 6 символов</p>
                                    </div>


                                    <? if ($arResult["CAPTCHA_CODE"]): ?>
                                        <? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:<br/>
                                        <input type="hidden" name="captcha_sid"
                                               value="<? echo $arResult["CAPTCHA_CODE"] ?>"/>
                                        <img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>"
                                             width="180" height="40" alt="CAPTCHA"/><br/><br/>
                                        <input type="text" name="captcha_word" maxlength="50" value=""/></td>
                                    <?endif ?>

                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit" name="Login"
                                                value="<?= GetMessage("AUTH_LOGIN_BUTTON") ?>">
                                            <span class="button__text">Войти</span>
                                        </button>
                                    </div>

                                    <div class="form__forgot">
                                        <noindex><a href="<?= $arResult["AUTH_FORGOT_PASSWORD_URL"] ?>" target="_blank"
                                           class="form__link" rel="nofollow">Забыли пароль?</a></noindex>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?
else:
    LocalRedirect("/");   ?>

<? endif ?>

