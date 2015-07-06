<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Электроная подпись");
$APPLICATION->SetAdditionalCSS($APPLICATION->GetCurDir().'style.css', true);
$APPLICATION->AddHeadScript($APPLICATION->GetCurDir().'script.js');
CJSCore::Init(Array("genaUpload"));
?>
<section class="ecp">
    <h1 class="h4 text-uppercase">Электронная подпись</h1>
    <?/* Блок приветствия */?>
    <div class="ecp__welcome welcome">
        <div class="welcome__img-wrap">
            <img src="img/flash.png" alt=""/>
        </div>
        <div class="welcome__tx">
            <div class="welcome__header">УВАЖАЕМЫЕ УЧАСТНИКИ!</div>
            <div class="welcome__descr">
                Для работы на нашей площадке Вы можете использовать любую квалифицированную электронную подпись (ЭП) с криптопровайдером КриптоПро.
            </div>
            <a href="#js-ecp-form" class="ecp__btn-load btn btn--blue" data-gb-show="" data-gb-type="inline" data-gb-theme="blank">Заказать ЭП</a>
        </div>
    </div>
    <?/* /Блок приветствия */?>
    <h4 class="text-uppercase">
        Для работы на площадке ЕСТП СРО наличие электронной подписи (ЭП) <span class="ecp__important">обязательно!</span>
    </h4>
    <hr class="ecp__dm"/>
    <div class="ecp__big-tx">Если у Вас нет электронной подписи, мы поможем получить ее в кратчайшие сроки.</div>

    <?/* Блок что не обходимо для ЭП */?>
    <div class="ecp__box box">
        <div class="box__header">Для этого необходимо:</div>
        <ul class="box__lst">
            <li class="box__lst-i">
                <span class="box__step">1.</span> <b class="box__important">Отправить заявку на получение ЭП</b> (в свободной форме с указанием реквизитов и выбранного тарифа, а также приложив отсканированные копии необходимых <a href="/upload/content_materials/get_eds/paket_dokumentov_ep.zip" class="ecp__lk">документов</a>) на электронную почту <a href="mailto:support@estp.ru" class="ecp__lk">support@estp.ru</a> или позвонить по телефону <b class="box__important">8 (800) 555-20-83</b>.
            </li>
            <li class="box__lst-i">
                <span class="box__step">2.</span> <b class="box__important">Оплатить счет</b>, который специалист вышлет Вам на электронную почту в ответ на заявку.<br/> Срок изготовления ЭП как правило составляет 1-2 рабочих дня с момента доставки оригиналов документов и получения оплаты по <br/> счету.
            </li>
        </ul>
    </div>
    <?/* Блок что не обходимо для ЭП */?>

    <?/* Документы */?>
    <div class="ecp__docs">
        <ul class="tabs-docs">
            <li class="tabs-docs__i active">
                <a href="#tb-doc1" role="tab" data-toggle="tab" class="tabs-docs__lk">
                    ДОКУМЕНТЫ ДЛЯ КВАЛИФИЦИРОВАННОЙ <br/>
                    ЭЛЕКТРОННОЙ ПОДПИСИ
                </a>
            </li>
            <li class="tabs-docs__i">
                <a href="#tb-doc2" role="tab" data-toggle="tab" class="tabs-docs__lk">
                    ДОКУМЕНТЫ ДЛЯ ЭЛЕКТРОННОЙ ПОДПИСИ <br/>
                    ДЛЯ 5 ФЕДЕРАЛЬНЫХ ПЛОЩАДОК
                </a>
            </li>
        </ul>
        <div class="tabs-docs-cnt tab-content">
            <div class="tab-pane active" id="tb-doc1">
                <div class="docs">
                    <div class="docs__header">СПИСОК ДОКУМЕНТОВ:</div>
                    <ul class="docs__lst">
                        <li class="docs__lst-i">
                            <span class="docs__important">Договор</span> с ООО «ЕСТП-СРО», подписанный с Вашей
                            стороны - 2 экз. В случае если Договор подписан не руководителем, а уполномоченным лицом
                            организации, то необходима доверенность на уполномоченное лицо;
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Заявление на изготовление квалифицированного СКПЭП</span>,
                            подписанное руководителем, владельцем сертификата ключа проверки электронной подписи и
                            заверенное печатью организации. <span class="ecp__important"><b>ВНИМАНИЕ!</b> В заявлении
                        необходимо указать такое же название, как и в Уставе;</span>
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Доверенность (форма 2)</span> от имени каждого сотрудника
                            организации, кому необходимо изготовить сертификат ключа подписи по специальной форме
                            (если получает доверенное лицо);
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Копия паспорта</span> (листы с фотографией и пропиской)
                            гражданина Российской Федерации, на чье имя изготавливается сертификат ключа проверки
                            электронной подписи (владелец квалифицированного сертификата). Если владелец лично прибыл за получением
                            сертификата ключа ЭП, то с предъявлением оригинала указанного документа;
                        </li>
                        <li class="docs__lst-i">
                            Если документы для изготовления сертификата ключа ЭП получает уполномоченный представитель: паспорт представителя,
                            уполномоченного на предоставление документов для изготовления сертификата ключа проверки электронной подписи;
                        </li>
                        <li class="docs__lst-i">
                        <span class="docs__important">Копия страхового свидетельства государственного пенсионного
                            страхования (СНИЛС)</span> заявителя-физического лица (уполномоченного представителя
                            ЮЛ), заверенную руководителем и печатью организации;
                        </li>
                        <li class="docs__lst-i">
                        <span class="docs__important">Оригинал или нотариально заверенную копию выписки из
                            ЕГРЮЛ</span>, полученную не позднее, чем за 6 месяцев до представления* ;
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Копия документа о назначении руководителя</span>,
                            заверенная подписью руководителя и печатью организации ;
                        </li>
                        <li class="docs__lst-i">
                            Платежное поручение с отметкой банка, если на момент выполнения работы нет подтверждения факта оплаты счета;
                        </li>
                    </ul>
                    <a href="/upload/content_materials/get_eds/paket_dokumentov_ep.zip" class="docs__btn btn btn-lg btn--upload-light">Скачать документы</a>
                    <hr class="ecp__dm"/>
                    <div class="ecp__important"><b>ВНИМАНИЕ!</b> Факсимильные подписи в документах не принимаются!</div>
                    <ul class="docs__lst">
                        <li class="docs__lst-i">
                            При отсутствии выписки из ЕГРЮЛ необходимо представить:
                            <ol class="docs__lst docs__lst--italic">
                                <li>
                                    <u>Копия свидетельства о постановке на учет в налоговом органе юр.лица</u>
                                    (заверенная руководителем и печатью организации,
                                    либо нотариусом);</li>
                                <li>
                                    <u>Копия свидетельства о внесении записи в ЕГРЮЛ</u>
                                    (заверенная руководителем и печатью организации, либо нотариусом);</li>
                                <li>
                                    <u>Копию документа о назначении руководителя,
                                        заверенную подписью руководителя и печатью организации</u>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane" id="tb-doc2">
                <div class="docs">
                    <div class="docs__header">СПИСОК ДОКУМЕНТОВ:</div>
                    <ul class="docs__lst">
                        <li class="docs__lst-i">
                            <span class="docs__important">Договор</span>  с ООО «ЕСТП-СРО», подписанный с Вашей стороны - 2 экз.
                            В случае если Договор подписан не руководителем, а уполномоченным лицом организации, то
                            необходима доверенность на уполномоченное лицо;
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Заявление на изготовление квалифицированного СКПЭП</span>,
                            подписанное руководителем, владельцем сертификата ключа проверки электронной подписи и
                            заверенное печатью организации. <span class="ecp__important"><b>ВНИМАНИЕ!</b> В заявлении
                        необходимо указать такое же название, как и в Уставе;</span> (для Федеральных электронных
                            площадок дополнительно в заявлении необходимо указать
                            действующий электронный адрес, с которого впоследствии будет
                            отправляться заявка на аккредитацию, и через который будет
                            производиться обмен информацией с ЭП)
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Доверенность (форма 2)</span> от имени каждого сотрудника организации,
                            кому необходимо изготовить сертификат ключа подписи по
                            специальной форме (если получает доверенное лицо);
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Копия паспорта</span> (листы с фотографией и пропиской) гражданина
                            Российской Федерации, на чье имя изготавливается сертификат ключа проверки электронной
                            подписи (владелец квалифицированного сертификата). Если владелец лично прибыл за
                            получением сертификата ключа ЭП, то с предъявлением оригинала указанного документа;
                        </li>
                        <li class="docs__lst-i">
                            если документы для изготовления сертификата ключа ЭП получает
                            уполномоченный
                            представитель: паспорт
                            представителя,
                            уполномоченного на предоставление документов для изготовления
                            сертификата ключа проверки электронной подписи;
                        </li>
                        <li class="docs__lst-i">
                        <span class="docs__important">Копия страхового свидетельства государственного пенсионного
                            страхования (СНИЛС)</span> заявителя-физического лица (уполномоченного представителя
                            ЮЛ), заверенную руководителем и печатью организации;
                        </li>
                        <li class="docs__lst-i">
                        <span class="docs__important">Оригинал или нотариально заверенную копию выписки из
                            ЕГРЮЛ</span>, полученную не позднее, чем за 1 месяц до представления*;
                        </li>
                        <li class="docs__lst-i">
                            <span class="docs__important">Копия документа о назначении руководителя</span>,
                            заверенная подписью руководителя и печатью организации;
                        </li>
                        <li class="docs__lst-i">
                            Платежное поручение с отметкой банка, если на момент выполнения работы нет подтверждения факта оплаты счета;
                        </li>
                    </ul>
                    <a href="/upload/content_materials/get_eds/paket_dokumentov_ep.zip" class="docs__btn btn btn-lg btn--upload-light">Скачать документы</a>
                </div>
            </div>
        </div>
    </div>
    <?/* /Документы */?>

    <?/* Тарифы ЭЦП */?>
    <div class="ecp__tariffs tariffs">
        <h4 class="tariffs__header">ТАРИФЫ ЭЦП</h4>
        <div class="row tariffs__row">
            <div class="col-xs-3">
                <div class="tariff">
                    <div class="tariff__header">ЭП</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            <b>Квалифицированная</b><br/>
                            <b>+</b><br/>
                            USB носитель
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                    <div class="tariff__footer">
                        <div class="lbl-price tariff__lbl">
                            <span>1 800,00</span>
                            <span class="lbl-price__currency">руб </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="tariff">
                    <div class="tariff__header">ЭП</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            <b>
                                Для 5 федеральных<br/>
                                площадок
                            </b><br/>
                            <b>+</b><br/>
                            USB носитель
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                    <div class="tariff__footer">
                        <div class="lbl-price tariff__lbl">
                            <span>4 300,00</span>
                            <span class="lbl-price__currency">руб </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="tariff">
                    <div class="tariff__header">ЭП</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            <b>Квалифицированная</b><br/>
                            <b>+</b><br/>
                            Рутокен Lite
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                    <div class="tariff__footer">
                        <div class="lbl-price tariff__lbl">
                            <span>2 472,00</span>
                            <span class="lbl-price__currency">руб </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="tariff">
                    <div class="tariff__header">ЭП</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            <b>
                                Для 5 федеральных<br/>
                                площадок
                            </b><br/>
                            <b>+</b><br/>
                            Рутокен Lite
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                    <div class="tariff__footer">
                        <div class="lbl-price tariff__lbl">
                            <span>4 972,00</span>
                            <span class="lbl-price__currency">руб </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <div class="tariff">
                    <div class="tariff__header tariff__header--size">Годовая лицензия</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            Годовая лицензия<br/>
                            <b>
                                СКЗИ <br/>
                                «КриптоПро CSP»
                            </b>
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                    <div class="tariff__footer">
                        <div class="lbl-price tariff__lbl">
                            <span>550,00</span>
                            <span class="lbl-price__currency">руб </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="tariff">
                    <div class="tariff__header tariff__header--size">Бессрочная лицензия</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            Годовая лицензия<br/>
                            <b>
                                СКЗИ <br/>
                                «КриптоПро CSP»
                            </b>
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                    <div class="tariff__footer">
                        <div class="lbl-price tariff__lbl">
                            <span>1 800,00</span>
                            <span class="lbl-price__currency">руб </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="tariff tariff--delivery">
                    <div class="tariff__header tariff__header--size">ДОСТАВКА:</div>
                    <div class="tariff__cnt">
                        <div class="ib-child">
                            <div class="text-uppercase">Стоимость доставки составляет</div>
                            <span class="price">600</span> <span class="currency">рублей</span>
                            <hr class="ecp__dm"/>
                            <div class="text-uppercase">
                                Срок доставки — в течение <span class="day">3-х рабочих дней.</span>
                            </div>
                        </div>
                        <div class="ib-helper"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?/* /Тарифы ЭЦП */?>

    <hr class="ecp__dm"/>
    <div class="ecp__footer ecp-footer">
        <a href="#js-ecp-form" class="ecp-footer__lk ecp__btn-load btn btn--blue" data-gb-show=""
           data-gb-type="inline" data-gb-theme="blank">Заказать ЭП</a>
        <a href="/upload/content_materials/get_eds/paket_dokumentov_ep.zip" class="ecp-footer__lk btn btn-lg btn--upload-light">Скачать документы</a>
        <a href="/get_eds/lists/" class="ecp-footer__lk ecp-footer__lk--size ecp__lk">Другие удостоверяющие
            центры</a>
    </div>

    <?/* всплывающая форма */?>
    <section id="js-ecp-form" class="ecp-form dialog-form hidden">
        <header class="dialog-form__h">
            <div class="dialog-form__t">Заказать ЭП</div>
            <span class="dialog-form__ic-close js-gena_close"></span>
        </header>
        <form action="/ecp/ajax.php" target="_top" method="POST" class="js-feedback">
            <input type="hidden" name="action" value="submit"/>
            <div class="dialog-form__cnt">
                <div class="form-group">
                    <label for="name" class="dialog-form__lbl">Фамилия Имя Отчество<span class="dialog-form__star-required">*</span></label>
                    <input type="text" placeholder="Пример: Михаил Сергеевич" id="name" class="dialog-form__it form-control" value="" name="fio">
                </div>

                <div class="form-group">
                    <label for="mail" class="dialog-form__lbl">Ваш e-mail<span class="dialog-form__star-required">*</span></label>
                    <input type="email" placeholder="Пример: mail_name@sitename.com" id="mail" class="dialog-form__it form-control" value="" name="email">
                </div>

                <div class="form-group">
                    <label for="phone" class="dialog-form__lbl">Телефон<span
                            class="dialog-form__star-required">*</span></label>
                    <span> +7( </span>
                    <input id="phone" type="text" placeholder="код города" value="" class="ecp-form__code
                dialog-form__it
                form-control" name="code">
                    <span> ) </span> <input type="text" placeholder="номер телефона" value="" class="ecp-form__phone
                dialog-form__it
                form-control" name="phone_number">
                    <span> добавочный </span>
                    <input type="text" placeholder="доб. номер" value="" class="ecp-form__phone-add dialog-form__it
                form-control" name="phone_add">
                </div>

                <div class="form-group">
                    <label for="topic" class="dialog-form__lbl">Комментарии<span
                            class="dialog-form__star-required">*</span></label>
                <textarea class="form-control dialog-form__itx faq__form__itx" name="txt" rows="4"
                          placeholder="Текст сообщения..."></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Загрузить документы</label>
                    <input type="file" id="exampleInputFile" data-gu-init data-gu-url="/ecp/ajax.php?action=upload" data-gu-max-size="15" data-gu-multiple="true" data-gu-removed="/ecp/ajax.php?action=delete">
                </div>

                <hr/>
                <div class="row">
                    <div class="col-xs-5">
                        <?$captchaSid =  $APPLICATION->CaptchaGetCode()?>
                        <input type="hidden" name="captchaSid" value="<?=$captchaSid?>"/>
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$captchaSid?>" class="dialog-form__captcha js-img-captcha" alt="CAPTCHA"/>
                    </div>
                    <div class="col-xs-7">
                        <input class="form-control dialog-form__it js-input-captcha" name="captcha" type="text" placeholder="Введите символы"/>
                    </div>
                </div>
                <div class="dialog-form__error-msg alert alert-danger js-error-captcha">Не правильно введена капча</div>
                <hr/>
                <div class="dialog-form__buttons text-right">
                    <button type="submit" class="btn btn-success dialog-form__btn--control js-ecp-submit"
                            name="go">Отправить заявку</button>
                    <button type="reset" class="btn btn--gray-light dialog-form__btn--control">Очистить поля</button>
                </div>
                <p><span class="dialog-form__star-required">*</span> Поля обозначенные звездочкой являются обязательными для заполнения</p>
            </div>
        </form>
    </section>
    <?/* /всплывающая форма */?>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>