<?php

/*

╔═╗╔╦╗╔═╗╔╦╗
║ ║ ║ ╠╣ ║║║ https://otshelnik-fm.ru
╚═╝ ╩ ╚  ╩ ╩

*/


// получаем из бд
function otfm_get_all_forum_topics(){
    global $wpdb;

    $data = $wpdb->get_results(
        "SELECT topics.topic_id, MAX(posts.post_date) AS lastmod
         FROM ".RCL_PREF."pforum_topics AS topics
         LEFT JOIN ".RCL_PREF."pforum_posts AS posts
         ON topics.topic_id = posts.topic_id
         WHERE posts.post_date IS NOT NULL
         GROUP BY topics.topic_id
         ORDER BY lastmod DESC
         LIMIT 0,50000"         // не более 50000 результатов выберем
    , ARRAY_A);

/* Array(
    [0] => Array(
            [topic_id] => 6
            [lastmod] => 2018-01-13 16:45:23
        ) */

    return $data;
}


// формируем карту сайта форума
function otfm_create_prime_forum_sitemap(){
    $i = 0;

    $datas = otfm_get_all_forum_topics();

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'; // https://www.sitemaps.org/protocol.html
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach($datas as $data) {
        $i++;
        $changefreq = 'monthly';    //always, hourly, daily, weekly, monthly, yearly, never

        if($i >= 1 && $i < 11){
            $changefreq = 'daily';  // первые 10 пунктов установим частоту обновления роботу: раз в день
        }

        $date = mysql2date( 'Y-m-d\TH:i:s+00:00', $data['lastmod'] ); // дата в нужном формате

        $xml .= '<url>';
            $xml .= '<loc>' . pfm_get_topic_permalink( $data['topic_id'] ) . '</loc>';
            $xml .= '<lastmod>' . $date . '</lastmod>';
            $xml .= '<changefreq>' . $changefreq . '</changefreq>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    $handle = fopen(ABSPATH . 'primeforum-sitemap.xml', 'w');   // имя файла карты

    fwrite($handle, $xml);
    fclose($handle);
}
add_action('rcl_cron_daily_schedule','otfm_create_prime_forum_sitemap',10); // раз в сутки карта формируется
//rcl_cron_daily_schedule           // событие крона срабатывает раз в сутки
//rcl_cron_hourly_schedule          // раз в час
//rcl_cron_twicedaily_schedule      // дважды в день


// по гет запросу, если админ, обновим карту (ваш-сайт/?prime_forum_sitemap_secret_reload)
function otfm_prime_forum_sitemap_catcher(){
    if(isset($_GET['prime_forum_sitemap_secret_reload']) && current_user_can('manage_options') ){
        otfm_create_prime_forum_sitemap();
    }
}
add_action('init', 'otfm_prime_forum_sitemap_catcher');

