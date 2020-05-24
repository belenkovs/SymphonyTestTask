0 ������� ����� �� https://symfonycasts.com   https://symfonycasts.com/screencast/symfony/console#play
1. �������� �������
symfony new SymphonyTestTask
2. ������� � ��������� �����  SymphonyTestTask
3. ��������� git
git status
4. �������� ����� git add .
5. ����������� ����� 
git show --name-only
6. ��������� ���������� 
symfony check:req
7. ��������� ������
symfony server:start
8. ��������� ����, ����� ������� ������� � ������� ����� ������ ���� ���� ����� �����������.
http://localhost:8000/
9 ���������� ��������� ���� ����� ���� ����� ����������� ��������������� � ������������ 
composer require annotations
10. �������� ����� ����� ������� ���������� � ��� � ����������
git add .
11.
git commit -m "Sympony commit"
12. ���������� ����� ������ ����������� � ��������
php bin/console
13. ��������� ����� �������� ����������
php bin/console debug:router
14. ���������� ����� ���������� ��������
composer require sec-checker                                                                                                                                          
15 �������� ������������ �������
php bin/console security:check
16. ��������� ������ ���������
composer require template
17 ������ �� git bundles.php
git status
git add .
git diff config/bundles.php
18. ��������� �������������� ��� dev
composer require profiler --dev
19. ���������� ����������� ���������� � ������ ��� ����������
composer require symfony/maker-bundle --dev
20. ��������� ����������� �������
php bin/console list make
21. �������� �����������
php bin/console make:controller
22. ������ � ��������� � ������ ������, �� ��� �� �� ���������. �������� ����� 
composer require debug
php bin/console server:dump
��������  ����  � \var\log\
23. ���������� ���������
 composer require profiler --dev
24. ����������� � �� ��������� ���� .env , ��������� �� ��� ������ , ���� ���� �������� ����. ���������� ��������� � php.ini ������ ��.
.env
DATABASE_URL=mysql://root@127.0.0.1:3306/stesttask  ������ ����� �� ��������������, ��� ��������.
25.  �������� orm pack ��� ��
composer require symfony/orm-pack
26. ������� ��.
php bin/console doctrine:database:create

27. �������� ��������
��� ������� ������
persons (fio,email,phone,remark)
php bin/console make:entity
28. ������� ���� ��� ��������
php bin/console make:migration
29. ��������� � �� mssql , ��������� �� � MSSQL
php bin/console doctrine:migrations:migrate

30. ��������� ��������� ����� 
31. ������� �������� ������, ���������� fixtures
	composer require --dev orm-fixtures
32. ��������� ���� AppFixtures �������� �����������
33. ��������� ��������.
php bin/console doctrine:fixtures:load
34.  ���������� ��� crud
composer require form validator security-csrf
35. ������� 
	php bin/console make:crud
��� �������� Person
> Person
 created: src/Controller/PersonController.php
 created: src/Form/PersonType.php
 created: templates/person/_delete_form.html.twig
 created: templates/person/_form.html.twig
 created: templates/person/edit.html.twig
 created: templates/person/index.html.twig
 created: templates/person/new.html.twig
 created: templates/person/show.html.twig

36. ������� ���� api PersonControllerApi.php

