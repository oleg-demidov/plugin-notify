<?php
/**
 * Таблица БД
 */
$config['$root$']['db']['table']['subscribe_subscribe_event'] = '___db.table.prefix___subscribe_event';
$config['$root$']['db']['table']['subscribe_subscribe'] = '___db.table.prefix___subscribe';

/**
 * Роутинг
 */
$config['$root$']['router']['page']['subscribe'] = 'PluginSubscribe_ActionSubscribe';

$config['$root$']['block']['subscribe'] = array(
    'action' => array(
        'subscribe' => [
            '{subscribes}'
        ]
    ),
    'blocks' => array(
        'left' => array(
            'menuSettings'     => array('priority' => 100)
        ),
        'header' => [
            'menuSubscribe'     => array('priority' => 100, 'params' => ['plugin' => 'subscribe'])
        ]
    )
);

$config['subscribes'] = [
    'paging' => [
        'count_on_page' => 10,
        'count_page' => 5
    ]
];

return $config;