0  ������� ����� ��  https://symfonycasts.com   https://symfonycasts.com/screencast/symfony/console#play
1. �������� �������
symfony new SymphonyTestTask
2. �������� � ��������� �����  SymphonyTestTask
3. ��������� git
git status
4. �������� ����� git add .
5. ����������� ����� 
git show --name-only
6. ��������� ���������� 
symfony check:req
7. ��������� ������
symfony server:start
8. ��������� ���� , ����� ������� ������� � ������� ����� ������� ���� ���� ����� �����������.
http://localhost:8000/
9 ���������� ���������� ���� ����� ���� ����� ����������� ��������������� � ��������� 
composer require annotations
10. �������� ����� ����� ������� ���������� � ��� � �����������
git add .
11.
git commit -m "Sympony commit"
12. ���������� ����� ������ ����������� � ����������
php bin/console
13. ��������� ����� �������� ����������
php bin/console debug:router
14. ���������� ����� ��������� ��������
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
19. ���������� �����������  ���������� � ������ 
composer require symfony/maker-bundle --dev
20. ��������� ����������� �������