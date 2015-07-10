var hasOwn = function (obj, key) {
    return Object.prototype.hasOwnProperty.call(obj, key);
};

var FormValidator = function (config) {
    this.config = config || {};
    // TODO проверку на существование
    this.form = this.getForm();
};

/**
 * Получение формы по id
 */
FormValidator.prototype.getForm = function () {
    return document.getElementById(this.config.setting.formId);
};

/**
 * Инициализация формы
 */
FormValidator.prototype.init = function () {
    var formName = this.form;

    this.config.rules.forEach(function (item) {
        var field = formName.elements[item.name];
    });
};

var formValid = new FormValidator(
    {
        setting: {
            formId: 'js-form-name'
        },
        rules: [
            {
                name: 'email',
                validators: {
                    required: true,
                    pattern: '^([\\w-]+\\.)*[\\w-]+@[\\w-]+(\\.[\\w-]+)*\\.[a-z]{2,6}$'
                },
                errorMsg: {
                    required: 'Поле обязательное для заполнения',
                    pattern: 'Введенный Email не корректный. Пример: name@sitename.ru.'
                }
            },
            {
                name: 'fio',
                validators: {
                    required: true
                },
                errorMsg: {
                    required: 'Поле обязательное для заполнения'
                }
            },
            {
                name: 'txt',
                validators: {
                    required: true
                },
                errorMsg: {
                    required: 'Поле обязательное для заполнения'
                }
            }
        ]
    }
);

formValid.init();
