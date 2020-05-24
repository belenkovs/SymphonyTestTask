0  хорошие уроки на  https://symfonycasts.com   https://symfonycasts.com/screencast/symfony/console#play
1. Создание проекта
symfony new SymphonyTestTask
2. переейти в созданную папку  SymphonyTestTask
3. Проверить git
git status
4. добавить файлы git add .
5. просмотреть файлы 
git show --name-only
6. проверить требования 
symfony check:req
7. запустить сервер
symfony server:start
8. Проверить сайт , после запуска сервера в консоле будет укзазан порт куда нужно подключатся.
http://localhost:8000/
9 установить анатотацию чтоб можно было роуты прописывать непосредсвеннов к мопнентах 
composer require annotations
10. добавить новые файлы которые проявились в гит и закомтитить
git add .
11.
git commit -m "Sympony commit"
12. посмотреть какие модули установлены в симпофонии
php bin/console
13. проверить какие маршруты существуют
php bin/console debug:router
14. установиьт пакет безопаной проверки
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
19. установить установщики  контролера и прочие 
composer require symfony/maker-bundle --dev
20. проверить установщики наличие