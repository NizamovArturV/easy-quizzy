<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>
<div class="wrap">
    <div class="editing">
        <div class="editing__container">
            <div class="editing__inner">
                <div class="editing__block">
                    <div class="editing__form">
                        <h2 class="editing__title">Восстановление проля</h2>
                        <form class="form" name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                            <input type="hidden" name="AUTH_FORM" value="Y">
                            <input type="hidden" name="TYPE" value="SEND_PWD">
                            <div class="form__inner">
                                <div class="form__item">
                                    <span class="form__caption">Ваш E-mail</span>
                                    <input type="email" name="USER_LOGIN" class="input" placeholder="Введите ваш E-mail" value="<?=$arResult["USER_LOGIN"]?>"/>
                                    <input type="hidden" name="USER_EMAIL" />
                                </div>
                                <div class="form__submit">
                                    <button type="submit" class="button button--fit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>">
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

<script type="text/javascript">
    document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
    document.bform.USER_LOGIN.focus();
</script>
