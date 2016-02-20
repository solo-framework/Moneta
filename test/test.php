<?php


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
