0 хорошие уроки на https://symfonycasts.com   https://symfonycasts.com/screencast/symfony/console#play
1. Создание проекта
symfony new SymphonyTestTask
2. перейти в созданную папку  SymphonyTestTask
3. Проверить git
git status
4. добавить файлы git add .
5. просмотреть файлы 
git show --name-only
6. проверить требования 
symfony check:req
7. запустить сервер
symfony server:start
8. Проверить сайт, после запуска сервера в консоли будет указан порт куда нужно подключатся.
http://localhost:8000/
9 установить аннотацию чтоб можно было роуты прописывать непосредственно к комментариях 
composer require annotations
10. добавить новые файлы которые проявились в гит и закомитить
git add .
11.
git commit -m "Sympony commit"
12. посмотреть какие модули установлены в симфонии
php bin/console
13. проверить какие маршруты существуют
php bin/console debug:router
14. установить пакет безопасной проверки
composer require sec-checker                                                                                                                                          
15 проверка безопасности пакетов
php bin/console security:check
16. установка модуля темлейтов
composer require template
17 убрать из git bundles.php
git status
git add .
git diff config/bundles.php
18. установка профилировщика для dev
composer require profiler --dev
19. установить установщики контролера и прочие для разработки
composer require symfony/maker-bundle --dev
20. проверить установщики наличие
php bin/console list make
21. создание контроллера
php bin/console make:controller
22. запуск и установка в режиме дебага, но что то не сработало. посмотрю позже 
composer require debug
php bin/console server:dump
Смотреть  логи  в \var\log\
23. установщик профалера
 composer require profiler --dev
24. подключится к Бд исправить файл .env , локальная бд без пароля , чтоб были доступны субд. необходимо подлечить в php.ini модули БД.
.env
DATABASE_URL=mysql://root@127.0.0.1:3306/stesttask  выбрал новую БД несуществующую, для создания.
25.  добавить orm pack для БД
composer require symfony/orm-pack
26. создать БД.
php bin/console doctrine:database:create

27. создание сущности
для примера возьмём
persons (fio,email,phone,remark)
php bin/console make:entity
28. создать файл для миграции
php bin/console make:migration
29. перенести в БД mssql , проверить БД в MSSQL
php bin/console doctrine:migrations:migrate

30. проверить созданный класс 
31. создать тестовый пример, установить fixtures
	composer require --dev orm-fixtures
32. исправить файл AppFixtures добавить заполенение
33. запустить загрузку.
php bin/console doctrine:fixtures:load
34.  Установить для crud
composer require form validator security-csrf
35. создать 
	php bin/console make:crud
для сущности Person
> Person
 created: src/Controller/PersonController.php
 created: src/Form/PersonType.php
 created: templates/person/_delete_form.html.twig
 created: templates/person/_form.html.twig
 created: templates/person/edit.html.twig
 created: templates/person/index.html.twig
 created: templates/person/new.html.twig
 created: templates/person/show.html.twig

36. создать файл api PersonControllerApi.php

