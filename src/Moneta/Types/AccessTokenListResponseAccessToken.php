<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * 
 */
class AccessTokenListResponseAccessToken extends AbstractAttributeObject
{
	
	/**
	 * 
	 * 
	 *
	 * @var string
	 */
	 public $token = null;

	/**
	 * 
	 * 
	 *
	 * @var string
	 */
	 public $subscriberId = null;

	/**
	 * 
	 * 
	 *
	 * @var dateTime
	 */
	 public $created = null;

	/**
	 * 
	 * 
	 *
	 * @var string
	 */
	 public $scope = null;

	/**
	 * 
	 * 
	 *
	 * @param string
	 *
	 * @return void
	 */
	public function addScope(string $item)
	{
		$this->scope[] = $item;
	}

}
