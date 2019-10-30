<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Ответ на запрос accountStatementRequest. Содержит выписку по счету.
	 * Response to accountStatementRequest. The response contains account statement.
	 * 
 */
class AccountStatementResponse
{
	
	/**
	 * Внутрибанковский счет.
	 * Owner account.
	 * 
	 *
	 * @var string
	 */
	 public $ownerAccount = null;

	/**
	 * Дата договора.
	 * Contract date.
	 * 
	 *
	 * @var dateTime
	 */
	 public $contractDate = null;

	/**
	 * Валюта счета.
	 * Account currency.
	 * 
	 *
	 * @var string
	 */
	 public $ownerAccountCurrency = null;

	/**
	 * Владелец счета.
	 * Account owner.
	 * 
	 *
	 * @var string
	 */
	 public $ownerName = null;

	/**
	 * Дата начала выборки.
	 * Date from.
	 * 
	 *
	 * @var dateTime
	 */
	 public $dateFrom = null;

	/**
	 * Дата окончания выборки.
	 * Date to.
	 * 
	 *
	 * @var dateTime
	 */
	 public $dateTo = null;

	/**
	 * Дата последней операции.
	 * Date of last operation.
	 * 
	 *
	 * @var dateTime
	 */
	 public $lastOperationDate = null;

	/**
	 * Дата актуальности.
	 * Relevance date.
	 * 
	 *
	 * @var dateTime
	 */
	 public $now = null;

	/**
	 * Входящий остаток.
	 * Opening balance.
	 * 
	 *
	 * @var decimal
	 */
	 public $inSaldo = null;

	/**
	 * Исходящий остаток.
	 * Closing balance.
	 * 
	 *
	 * @var decimal
	 */
	 public $outSaldo = null;

	/**
	 * Заблокированная входящая сумма.
	 * Blocked opening balance.
	 * 
	 *
	 * @var decimal
	 */
	 public $inSaldoBlocked = null;

	/**
	 * Заблокированная исходящая сумма.
	 * Blocked closing balance.
	 * 
	 *
	 * @var decimal
	 */
	 public $outSaldoBlocked = null;

	/**
	 * Итоговые обороты по дебету.
	 * Total turnover on the debit.
	 * 
	 *
	 * @var decimal
	 */
	 public $debitAmountTotal = null;

	/**
	 * Итоговые обороты по кредиту.
	 * Total turnover on the debit.
	 * 
	 *
	 * @var decimal
	 */
	 public $creditAmountTotal = null;

	/**
	 * Общее количество записей, которое можно получить в данной выборке.
	 * The total number of records in the response.
	 * 
	 *
	 * @var long
	 */
	 public $totalSize = null;

	/**
	 * Информация об операциях.
	 * Information about operations.
	 * 
	 *
	 * @var AccountStatementRecordType
	 */
	 public $orders = null;

	/**
	 * Информация об операциях.
	 * Information about operations.
	 * 
	 *
	 * @param AccountStatementRecordType
	 *
	 * @return void
	 */
	public function addOrders(AccountStatementRecordType $item)
	{
		$this->orders[] = $item;
	}

}
