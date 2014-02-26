<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * Запрос на получение данных по делегированному доступу.
	 * Request for delegated access details.
	 * 
 */
class GetAccountRelationRequest
{
	
	/**
	 * Номер счета в системе МОНЕТА.РУ.
	 * Account number.
	 * 
	 *
	 * @var long
	 */
	 public $accountId = null;

	/**
	 * Email пользователя.
	 * User's Email.
	 * 
	 *
	 * @var string
	 */
	 public $principalEmail = null;

}
?>