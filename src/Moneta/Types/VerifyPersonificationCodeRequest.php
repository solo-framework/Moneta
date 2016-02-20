<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Проверка кода идентификации пользователя.
	 * Request for verification of a user identification code.
	 * 
 */
class VerifyPersonificationCodeRequest extends Entity
{
	
	/**
	 * Код, с помощью которого можно произвести идентификацию пользователя.
	 * User identification code.
	 * 
	 *
	 * @var string
	 */
	 public $personificationCode = null;

}