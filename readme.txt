== Установка/Обновление ==

<h3 style="text-align: center;">Установка:</h3>
Т.к. это дополнение для WordPress плагина <a href="https://codeseller.ru/groups/plagin-wp-recall-lichnyj-kabinet-na-wordpress/" target="_blank">WP-Recall</a>, то оно устанавливается через <a href="https://codeseller.ru/obshhie-svedeniya-o-dopolneniyax-wp-recall/" target="_blank"><strong>менеджер дополнений WP-Recall</strong></a>.

1. В админке вашего сайта перейдите на страницу "WP-Recall" -> "Дополнения" и в самом верху нажмите на кнопку "Обзор", выберите .zip архив дополнения на вашем пк и нажмите кнопку "Установить".
2. В списке загруженных дополнений, на этой странице, найдите это дополнение, наведите на него курсор мыши и нажмите кнопку "Активировать". Или выберите чекбокс и в выпадающем списке действия выберите "Активировать". Нажмите применить.


<h3 style="text-align: center;">Обновление:</h3>
Дополнение поддерживает <a href="https://codeseller.ru/avtomaticheskie-obnovleniya-dopolnenij-plagina-wp-recall/" target="_blank">автоматическое обновление</a> - два раза в день отправляются вашим сервером запросы на обновление.
Если в течении суток вы не видите обновления (а на странице дополнения вы видите что версия вышла новая), советую ознакомиться с этой <a href="https://codeseller.ru/post-group/rabota-wordpress-krona-cron-prinuditelnoe-vypolnenie-kron-zadach-dlya-wp-recall/" target="_blank">статьёй</a>




== Настройки ==
Настроек нет.
Всё прописано в коде. И прокомментировано

<strong>После активации допа:</strong>

<strong>1.</strong> В адресной строке сайта вводите: 
<code>ваш-сайт/?prime_forum_sitemap_secret_reload</code>
 - и в корне вашего сайта создастся файл <code>primeforum-sitemap.xml</code>. Эту операцию выполнять под логином администратора!
В дальнейшем, если вы не хотите ждать суточного обновления карты форума, можете от лица админа переходить по этому урл и карта будет обновляться. 
Но вы можете изменить событие крона на выполняемое раз в час или дважды в день - заменив: 
<code>rcl_cron_daily_schedule</code> 
на 
<code>rcl_cron_hourly_schedule</code> 
или 
<code>rcl_cron_twicedaily_schedule</code>
- соответственно.

<strong>2.</strong> Открываем файл <code>robots.txt</code> и вписываем новую карту, так: <code>Sitemap: https://ваш-сайт/primeforum-sitemap.xml</code> - укажите только ваш домен и его протокол (http или https).

<strong>3.</strong> Переходите в гугл: "Search Console" -> "Сканирование" -> "Файлы Sitemap" и справа вверху жмёте "Добавление/проверка файла sitemap". Добавляем туда наш файл (на скриншоте показал)

<strong>4.</strong> Переходим в яндекс: "Яндекс Вебмастер" -> "Индексирование" -> "Файлы Sitemap" и в форму "Добавить файл Sitemap" вписываете урл карты форума (на скриншоте показал)


== FAQ ==
<h3>Где увидеть созданную xml карту?</h3>
- По адресу: <code>ваш-сайт/primeforum-sitemap.xml</code>


<h3>Когда обновляется карта?</h3>
- Карта обновляется раз в сутки - по вордпресс крону


<h3>Как обновить карту вручную?</h3>
- Вы должны зайти на сайт с правами администратора и перейти по адресу: 
<code>ваш-сайт/?prime_forum_sitemap_secret_reload</code>

Потом проверьте, открыв карту по адресу: <code>ваш-сайт/primeforum-sitemap.xml</code>



== Changelog ==
= 2018-01-22 =
v1.0
* Release



== Прочее ==

* Поддержка осуществляется в рамках текущего функционала дополнения
* При возникновении проблемы, создайте соотвествующую тему на форуме поддержки товара
* Если вам нужна доработка под ваши нужды - вы можете обратиться ко мне в <a href="https://codeseller.ru/author/otshelnik-fm/?tab=chat" target="_blank">ЛС</a> с техзаданием на платную доработку.

Все мои работы опубликованы <a href="https://otshelnik-fm.ru/?p=2562" target="_blank">на моём сайте</a> и в каталоге магазина <a href="https://codeseller.ru/author/otshelnik-fm/?tab=publics&subtab=type-products" target="_blank">CodeSeller.ru</a>
