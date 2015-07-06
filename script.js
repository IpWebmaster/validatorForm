$(function () {
    "use strict";

    (function () {
        var form = $('.js-feedback'),
            btnSubmit = $('.js-ecp-submit'),
            imgCaptcha = $('.js-img-captcha'),
            inputCaptcha = $('.js-input-captcha'),
            errorCaptchaCont = $('.js-error-captcha'),
            hasError = true,

            config = [
                {
                    "name": "email",
                    "validators": {
                        "required": true,
                        "pattern": "^([\\w-]+\\.)*[\\w-]+@[\\w-]+(\\.[\\w-]+)*\\.[a-z]{2,6}$"
                    },
                    "errorMsg": {
                        "required": "Поле обязательное для заполнения",
                        "pattern": "Введенный Email не корректный. Пример: name@sitename.ru."
                    }
                },
                {
                    "name": "fio",
                    "validators": {
                        "required": true
                    },
                    "errorMsg": {
                        "required": "Поле обязательное для заполнения"
                    }
                },
                {
                    "name": "code",
                    "validators": {
                        "required": true,
                        "pattern": "[0-9]+$"
                    },
                    "errorMsg": {
                        "required": "Поле код города обязательное для заполнения",
                        "pattern": "Поле код города должно содержать только цифры"
                    }
                },
                {
                    "name": "phone_number",
                    "validators": {
                        "required": true,
                        "pattern": "^([0-9]|[\\-])+$"
                    },
                    "errorMsg": {
                        "required": "Поле номер телефона обязательное для заполнения",
                        "pattern": "Поле номер телефона должно содержать только цифры или тире"
                    }
                },
                {
                    "name": "phone_add",
                    "validators": {
                        "pattern": "^[0-9]+$"
                    },
                    "errorMsg": {
                        "required": "Поле номер телефона обязательное для заполнения",
                        "pattern": "Поле добавочный номер должно содержать только цифры"
                    }
                },
                {
                    "name": "txt",
                    "validators": {
                        "required": true
                    },
                    "errorMsg": {
                        "required": "Поле обязательное для заполнения"
                    }
                }
            ],

            hasOwn = function (obj, key) {
                return Object.prototype.hasOwnProperty.call(obj, key);
            },

            /**
             * Валидация формы
             */
            validationForm = function () {
                _.each(config, function (configItem) {
                    validationField(configItem);
                })
            },

            /**
             * Валидация поля
             * @param {Object} configItem Конфиг с валидацией поля
             */
            validationField = function (configItem) {
                var errors = {},
                    field = form.find('[name="' + configItem.name + '"]'),
                    blockError = field.siblings('.js-error-' + configItem.name);

                if (!field.length) {
                    return false;
                }

                field.focus(function () {
                    $(this).removeClass('dialog-form__it--invalid');
                    blockError.empty().hide();
                });

                _.each(configItem.validators, function (value, key) {
                    if (hasOwn(methodsValidation, key + 'Validator')) {
                        if (!methodsValidation[key + 'Validator'](field.val(), configItem) && _.isEmpty(errors)) {
                            errors['message'] = configItem.errorMsg[key];
                        }
                    }
                });

                if (!_.isEmpty(errors)) {
                    hasError = true;
                    field.addClass('dialog-form__it--invalid');
                    blockError.text(errors.message).show();
                } else {
                    field.removeClass('dialog-form__it--invalid');
                    blockError.empty().hide();
                }
            },

            /**
             * Добавление дива для ошибки
             * @param {Object} field Dom-объект, поле в форме у которой будет валидация
             * @param {String} configName Имя поля
             */
            addDivError = function (field, configName) {
                var divError = $('<div/>', {
                    'class': 'dialog-form__error-msg alert alert-danger js-error-' + configName
                });

                field.parent().append(divError);
            },

            /**
             * Методы валидации
             */
            methodsValidation = {
                /**
                 * Валидация по обязательности заполнения поля
                 * @param {String} value Значение введенное пользователем
                 */
                requiredValidator: function (value) {
                    return value.length > 0;
                },

                /**
                 * Валидация по паттерну
                 * @param {String} value Значение введенное пользователем
                 * @param {String} configItem Конфиг поля
                 */
                patternValidator: function (value, configItem) {
                    var regexp;
                    regexp = new RegExp(configItem.validators.pattern);

                    return _.isEmpty(value) || regexp.test(value);
                }
            },

            /**
             * Обновление картинки с каптчой
             * @captchaSid {String} captchaSid Индентификатор капчи
             */
            updateCaptcha = function (captchaSid) {
                imgCaptcha
                    .attr('src', '/bitrix/tools/captcha.php?captcha_sid=' + captchaSid)
                    .siblings('input')
                    .val(captchaSid);
            },

            /**
             * Очистка формы
             */
            clearForm = function () {
                form.trigger('reset');
                $('.gfu-remove').trigger('click');
            },

            /**
             * Отправка запроса
             */
            sendFeedback = function () {
                $.ajax({
                    method: "POST",
                    url: "/ecp/ajax.php",
                    data: form.serialize()
                })
                    .done(function( resp ) {
                        if (resp.success) {
                            $.genaBox.close();
                            Modaller.alert({text:resp.data});
                            if (hasOwn(resp, 'code')) {
                                updateCaptcha(resp.code);
                            }
                            clearForm();
                        } else {
                            if (hasOwn(resp, 'code')) {
                                errorCaptchaCont.show();
                                updateCaptcha(resp.code);
                            }
                        }
                    })
                    .fail(function( jqXHR, textStatus ) {
                        console.log( "Request failed: " + textStatus );
                    });
            },

            /**
             * Инициализация формы
             */
            init = function () {
                _.each(config, function (configItem) {
                    var field = form.find('[name="' + configItem.name + '"]');

                    addDivError(field, configItem.name);
                });

                inputCaptcha.on('focus', function () {
                    errorCaptchaCont.hide();
                });

                btnSubmit.on('click', function (e) {
                    e.preventDefault();
                    hasError = false;
                    validationForm();
                    if(!hasError) {
                        sendFeedback();
                    }
                });
            };

        init();

    }());
});
