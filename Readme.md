//установить все кроме библиотек для разработки require-dev
composer install --no-dev 

//Установить для разработки
composer require --dev имя библиотеки
//команда для запуска тестов -- флаг для цветов
"scripts" : {
        "test": "phpunit --colors=always"
    }