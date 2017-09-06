Moneta Web Service
======

PHP библиотека для доступа к методам веб-сервиса MONETA.MerchantAPI (http://moneta.ru)

Версии
====

Последняя версия

composer.json
```

{
	"require": {
		"moneta/webservice": "dev-master"
	}
}

```

Версия 25900 от 21 октября 2014 г.

composer.json
```

{
	"require": {
		"moneta/webservice": "v25900"
	}
}



Версия 20054 от 24 сентября 2014 г.

composer.json
```

{
	"require": {
		"moneta/webservice": "v20054"
	}
}

```

Версия 24076 от 16 февраля 2016 г.

composer.json
```

{
	"require": {
		"moneta/webservice": "v24076"
	}
}

```

Версия 25539 от 19 августа 2016 г.

composer.json
```

{
	"require": {
		"moneta/webservice": "v25539"
	}
}

```

Версия 28247 от 6 сентября 2017 г.

composer.json
```

{
	"require": {
		"moneta/webservice": "v28247"
	}
}

```


Пример использования
====

```php
require_once "../vendor/autoload.php";

$service = new Moneta\MonetaWebService("https://demo.moneta.ru/services.wsdl", "username", "password");
// получить данные счета
$response = $service->FindAccountById(25182459);

echo "Current balance:\n";
echo "balance: {$response->account->availableBalance}\n";
echo "currency: {$response->account->currency}\n\n";

try
{
	// перевод

	$mtr = new Moneta\Types\TransferRequest();
	$mtr->amount = 1;
	$mtr->isPayerAmount = true;
	$mtr->payee = 10659151;
	$mtr->payer = 25182459;
	$mtr->paymentPassword = "2347585";

	echo "I'm going to transfer 1 RUR to another account:\n";
	$trt = $service->Transfer($mtr);

	// данные транзакции
	echo "Transfer's info:\n";
	echo "status: {$trt->status}\n";
	echo "date: {$trt->dateTime}\n";
	echo "trxId: {$trt->transaction}\n\n";


	// проверить данные счета
	$response = $service->FindAccountById(25182459);
	echo "Balance after the transfer:\n";
	echo "balance: {$response->account->availableBalance}\n";
	echo "currency: {$response->account->currency}\n";
}
catch (Exception $e)
{
	echo $e->getMessage();
	echo $e->getTraceAsString();
}
```
