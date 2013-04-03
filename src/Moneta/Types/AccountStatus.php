<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;
/**
 * Тип, описывающий статусы счетов в системе МОНЕТА.РУ.
	 * Счет может быть либо активным, либо заблокированным.
	 * Account status in MONETA.RU.
	 * May be either active or inactive.
	 * 
 */
class AccountStatus
{

	/**
	 * Активный счет
	 * Active account
	 * 
	 *
	 * @var int
	 */
	const AccountStatus1 = '1';

	/**
	 * Заблокированный счет
	 * Inactive (blocked) account
	 * 
	 *
	 * @var int
	 */
	const AccountStatus2 = '2';

	/**
	 * Закрытый счет
	 * Closed account
	 * 
	 *
	 * @var int
	 */
	const AccountStatus3 = '3';

}
?>