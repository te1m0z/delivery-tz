<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Modules\Delivery\Delivery;

date_default_timezone_set( 'Europe/Moscow' );


/*
 * Получение данных с клиентской части
 */
$delivery_data = [
    'type'    => $_POST['delivery_type'],
    'company' => $_POST['company'],
    'source'  => $_POST['source'],
    'target'  => $_POST['target'],
    'weight'  => $_POST['weight']
];

$type = $delivery_data['type'];


/*
 * Запуск модуля доставки
 */
$delivery = new Delivery();

/*
 * Создание класса
 */
$class    = $delivery->make( $type, $delivery_data );

/*
 * Получение результата
 */
$result   = $delivery->run();

/*
 * Вывод на клиентскую часть
 */
echo json_encode( $result );



