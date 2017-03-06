var app = angular.module('app');

app.controller('mainController', function($scope) {

    $scope.headerMenu = [{
                        menu: 'Главная',
                        href: 'index.html#home'
                        },
                        {
                        menu: 'Преимущества',
                        href: 'index.html#services'
                        },
                        {
                        menu: 'Процесс работы',
                        href: 'index.html#economia'
                        },
                        {
                        menu: 'Галерея',
                        href: 'index.html#images'
                        },
                        {
                        menu: 'О гипсовой штукатурке',
                        href: 'index.html#portfolio'
                        },
                        {
                        menu: 'Контакты',
                        href: 'index.html#contact'
                        }

                    ];

    $scope.plus = [{
                    title: 'Быстро',
                    text: 'За счет механизации процесса и использования готовой смеси, время высыхания 3-7 дней.'
                    },
                    {
                    title: 'Качественно',
                    text: 'За счет однородности смеси и легкости материала поверхность идеально ровная и дает меньшую усадку.'
                    },
                    {
                    title: 'Выгодно',
                    text: 'Затраты на материалы, доставку, разгрузку ниже. Оплата за рабочие процессы и потери материала минимизированы, что сохраняет Ваши деньги.'
                    }
                ];

    $scope.minus = [{
                    title: 'Долго',
                    text: 'Подготовка материала дольше (просеивание, перенос, замешивание и т.д.). Время высыхания до 1 месяца.'
                    },
                    {
                    title: 'Менее качественно',
                    text: 'Дает большую усадку и требует последующего шпаклевания.'
                    },
                    {
                    title: 'Дорого',
                    text: 'Расходы на материалы, доставку, разгрузку выше. Большие потери материала при работе, оплата за рабочие процессы выше.'
                    },

                ];
    $scope.gallery = [{
                        class: 'example',
                        name: '1287160221.jpg'
                    },
                    {
                        class: 'example',
                        name: 'pr31.jpg'
                    },
                    {
                        class: 'machine',
                        name: 'A-5s.jpg'
                    },
                    {
                        class: 'example',
                        name: '3917542072.jpg'
                    },
                    {
                        class: 'machine',
                        name: 'AGREGAT_TYNKARSK_4ea08a942ac88-500x500.jpg'
                    },
                    {
                        class: 'machine',
                        name: 'DSC01176.jpg'
                    },
                    {
                        class: 'example',
                        name: 'gips.jpg'
                    },
                    {
                        class: 'machine',
                        name: 'kaleta5aa.jpg'
                    },
                ];
});