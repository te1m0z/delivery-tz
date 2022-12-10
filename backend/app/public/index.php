<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Modules\Delivery\DeliveryFactory;

date_default_timezone_set( 'Europe/Moscow' );

# Начальные данные
$delivery_type = $_POST['delivery_type'];
$company       = $_POST['company'];
$weight        = $_POST['weight'];
$source        = $_POST['source'];
$target        = $_POST['target'];

# Получение объекта указанного типа доставки
$deliveryFactory = DeliveryFactory::make( $delivery_type );

# Передача данных объекту
$deliveryFactory->setCompany( $company );
$deliveryFactory->setWeight( $weight );
$deliveryFactory->setSourceKladr( $source );
$deliveryFactory->setTargetKladr( $target );

# Запуск рассчета
$result = $deliveryFactory->handle();

# Вывод на клиентскую часть
echo json_encode( $result );