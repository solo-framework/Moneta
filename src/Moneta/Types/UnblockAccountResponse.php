<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Ответ, который приходит на запрос UnblockAccountRequest. В ответе нет никаких данных.
	 * Если в процессе разблокирования счета произошла ошибка, то возникнет Exception. Если Exception не возник - значит счет гарантированно разблокирован.
	 * Response to the request for unblocking an account. If you unblocked the account successfully, the response contains no data. If MONETA.RU cannot unblock the account, an error occurs.
	 * 
 */
class UnblockAccountResponse extends AbstractAttributeObject
{
	
}