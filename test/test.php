<?php

//require_once "./vendor/autoload.php";

require_once "/../src/Moneta/MonetaDataTypes.php";
require_once "/../src/Moneta/MonetaWebServiceConnector.php";
require_once "/../src/Moneta/MonetaWebService.php";


try
{
	// подключение к сервису
	$service = new Moneta\MonetaWebService("https://demo.moneta.ru/services.wsdl", "buyzilla.demo@gmail.com", "buy245fdh");
	// получить данные счета
	$response = $service->FindAccountById(25182459);

	echo "Current balance:\n";
	echo "balance: {$response->account->availableBalance}\n";
	echo "currency: {$response->account->currency}\n\n";

	echo "I'm going to transfer some money to another account:\n";
	// перевод
	$mtr = new Moneta\Types\TransferRequest();
	$mtr->amount = 1;
	$mtr->isPayerAmount = true;
	$mtr->payee = 10659151;
	$mtr->payer = 25182459;
	$mtr->paymentPassword = "2347585";

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
?>
