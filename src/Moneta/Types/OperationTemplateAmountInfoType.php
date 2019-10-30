<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;
/**
 * Тип суммы в шаблоне операции.
	 * 
 */
class OperationTemplateAmountInfoType
{

	/**
	 * Во время выполнения шаблона будет использоваться указанная сумма.
	 * При использовании данного типа внутри OperationTemplateAmountInfo, необходимо дополнительно указать поле amount.
	 * 
	 *
	 * @var string
	 */
	const AMOUNT = 'AMOUNT';

	/**
	 * Сумма к списанию будет равна всей доступной сумме на Вашем счёте.
	 * The amount to be debited will equal all available funds on your account.
	 * 
	 *
	 * @var string
	 */
	const BALANCE = 'BALANCE';

	/**
	 * Сумма к списанию будет равна платёжному сальдо, в зависимости от периода оплаты.
	 * The amount to be debited will equal the merchant balance, depending on the payment period.
	 * 
	 *
	 * @var string
	 */
	const PAYMENTS = 'PAYMENTS';

	/**
	 * Сумма к списанию будет равна всей доступной сумме на Вашем счёте, если значение этой суммы на момент выполнения операции будет входить в заданный интервал.
	 * При использовании данного типа внутри OperationTemplateAmountInfo, необходимо дополнительно указать поле range.
	 * The amount to be debited will equal all available funds on your account if this amount is in the set range as of the moment of transaction.
	 * 
	 *
	 * @var string
	 */
	const RANGE = 'RANGE';

	/**
	 * Сумма к списанию будет равна всей доступной сумме на Вашем счёте за вычетом указанного остатка.
	 * При использовании данного типа внутри OperationTemplateAmountInfo, необходимо дополнительно указать поле rest.
	 * The amount to be debited will equal all available funds on your account less the specified balance.
	 * 
	 *
	 * @var string
	 */
	const REST = 'REST';

	/**
	 * Сумма к списанию будет равна сумме всех зачислений на счёт, в зависимости от периода оплаты.
	 * The amount to be debited will equal the inflow amount, depending on the payment period.
	 * 
	 *
	 * @var string
	 */
	const CREDIT = 'CREDIT';

	/**
	 * Сумма к списанию будет равна входящему остатку на Вашем счёте.
	 * The amount to be debited will equal the opening balance on your account.
	 * 
	 *
	 * @var string
	 */
	const OPENING = 'OPENING';

}
