<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на получение выписки по лицевому счету.
	 * Запрос может быть сформирован либо по "интервалу" либо по "периоду".
	 * Если по "интервалу", то указываем dateFrom и dateTo.
	 * Если по "периоду", то заполняем поле selectPeriod
	 * указанными ниже значениями.
	 * Request for getting an account statement.
	 * 
 */
class AccountStatementRequest
{
	
	/**
	 * Номер счета в системе MONETA.RU.
	 * Account number in MONETA.RU.
	 * 
	 *
	 * @var long
	 */
	 public $accountId = null;

	/**
	 * 20-значный внутрибанковский счет. Необязательный параметр.
	 * Account number (20 digits).
	 * 
	 *
	 * @var string
	 */
	 public $accountRS = null;

	/**
	 * Поиск операций в архиве.
	 * Indicates whether to search for archived transactions.
	 * 
	 *
	 * @var boolean
	 */
	 public $searchInArchive = null;

	/**
	 * Список свойств операции, разделённый запятыми, которые будут возвращены в ответе.
	 * Например: WIREKPP, WIRETRANSFERORDERNUMBER, WIRETRANSFERORDERDATE, WIREOKTMO
	 * List of comma separated transaction properties which will be returned in a response.
	 * For example, WIREKPP, WIRETRANSFERORDERNUMBER, WIRETRANSFERORDERDATE, WIREOKTMO
	 * 
	 *
	 * @var string
	 */
	 public $operationPropertyNames = null;

	/**
	 * Количество элементов, возвращаемых в результате запроса.
	 * The number of elements to return per page.
	 * 
	 *
	 * @var int
	 */
	 public $pageSize = null;

}
