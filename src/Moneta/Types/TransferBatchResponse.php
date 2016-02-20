<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Ответ на запрос перевода денежных средств в пакетном режиме.
	 * Response to a request for multiple money transfer operations in batch mode.
	 * 
 */
class TransferBatchResponse
{
	
	/**
	 * Детали проведенных операций, либо описание ошибок, если операция не проведена. Порядок соответствует набору операций, переданных в TransferBatchRequest.
	 * Either information about completed transactions or error descriptions in the same order as in the TransferBatch request.
	 * 
	 *
	 * @var TransactionBatchResponseType
	 */
	 public $transaction = null;

	/**
	 * Детали проведенных операций, либо описание ошибок, если операция не проведена. Порядок соответствует набору операций, переданных в TransferBatchRequest.
	 * Either information about completed transactions or error descriptions in the same order as in the TransferBatch request.
	 * 
	 *
	 * @param TransactionBatchResponseType
	 *
	 * @return void
	 */
	public function addTransaction(TransactionBatchResponseType $item)
	{
		$this->transaction[] = $item;
	}

}
