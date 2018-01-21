## Описание:  

Дополнение для WordPress плагина [WP-Recall](https://wordpress.org/plugins/wp-recall/) - и входящего в его комплект дополнения PrimeForum  
- формирует xml карту форума.  
Генерация карты происходит раз в день.  
Есть возможность сгенерировать вручную - перейдя по секретному урл  

------------------------------


## Demo:  

Демонстрация работы на моем сайте - [открыть xml-карту](https://otshelnik-fm.ru/primeforum-sitemap.xml).  

------------------------------

## Установка/Обновление  

**Установка:**  
Т.к. это дополнение для WordPress плагина WP-Recall, то оно устанавливается через [менеджер дополнений WP-Recall](https://codeseller.ru/obshhie-svedeniya-o-dopolneniyax-wp-recall/)  

1. В админке вашего сайта перейдите на страницу "WP-Recall" -> "Дополнения" и в самом верху нажмите на кнопку "Обзор", выберите .zip архив дополнения на вашем пк и нажмите кнопку "Установить".  
2. В списке загруженных дополнений, на этой странице, найдите это дополнение, наведите на него курсор мыши и нажмите кнопку "Активировать". Или выберите чекбокс и в выпадающем списке действия выберите "Активировать". Нажмите применить.  


**Обновление:**  
Дополнение поддерживает [автоматическое обновление](https://codeseller.ru/avtomaticheskie-obnovleniya-dopolnenij-plagina-wp-recall/) - два раза в день отправляются вашим сервером запросы на обновление.  
Если в течении суток вы не видите обновления (а на странице дополнения вы видите что версия вышла новая), советую ознакомиться с этой [статьёй](https://codeseller.ru/post-group/rabota-wordpress-krona-cron-prinuditelnoe-vypolnenie-kron-zadach-dlya-wp-recall/) 

------------------------------

## Настройки:  
Настроек нет.  
Всё прописано в коде. И прокомментировано  

После активации допа:  

1. В адресной строке сайта вводите `ваш-сайт/?prime_forum_sitemap_secret_reload` - и в корне вашего сайта создастся файл `primeforum-sitemap.xml`. В дальнейшем, если вы не хотите ждать суточного обновления карты форума, можете от лица админа переходить по этому урл и карта будет обновляться. Но вы можете изменить событие крона на выполняемое раз в час или дважды в день - заменив `rcl_cron_daily_schedule` на `rcl_cron_hourly_schedule` или `rcl_cron_twicedaily_schedule` соответственно.  

2. Открываем файл `robots.txt` и вписываем новую карту, так: `Sitemap: https:/ваш-сайт/primeforum-sitemap.xml` - укажите только ваш домен.  

3. Переходите в гугл: "Search Console" -> "Сканирование" -> "Файлы Sitemap" и справа вверху жмёте "Добавление/проверка файла sitemap". Добавляем туда наш файл (на скриншоте показал)  

4. Переходим в яндекс: "Яндекс Вебмастер" -> "Индексирование" -> "Файлы Sitemap" и в форму "Добавить файл Sitemap" вписываете урл карты форума (на скриншоте показал)  

------------------------------

## FAQ:   
**Где увидеть созданную xml карту?**  
- По адресу: `ваш-сайт/primeforum-sitemap.xml`  


**Когда обновляется карта?**  
- Карта обновляется раз в сутки - по вордпресс крону  


**Как обновить карту вручную?**  
- Вы должны зайти на сайт с правами администратора и перейти по адресу: `ваш-сайт/?prime_forum_sitemap_secret_reload`  

Потом проверьте, открыв карту по адресу: `ваш-сайт/primeforum-sitemap.xml`  

------------------------------

## Changelog:  
**2018-01-22**  
v1.0  
* Release  

------------------------------

## Поддержка и контакты:  

* Поддержка осуществляется в рамках текущего функционала дополнения  
* При возникновении проблемы, создайте соотвествующую тему на форуме поддержки товара  
* Если вам нужна доработка под ваши нужды - вы можете обратиться ко мне в [ЛС](https://codeseller.ru/author/otshelnik-fm/?tab=chat) с техзаданием на платную доработку.  

Полный список моих работ опубликован на [моём сайте](https://otshelnik-fm.ru/all-my-addons-for-wp-recall/) и в каталоге магазина [CodeSeller.ru](https://codeseller.ru/author/otshelnik-fm/?tab=publics&subtab=type-products)  

------------------------------

## Author  

**Wladimir Druzhaev** (Otshelnik-Fm)  
