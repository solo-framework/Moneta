<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на создание пользователя в системе MONETA.RU.
	 * Request for creating a MONETA.RU account.
	 * 
 */
class CreateProfileRequest
{
	
	/**
	 * ID родительского пользователя в системе MONETA.RU, к которому будет принадлежать создаваемый пользователь.
	 * Если поле не задано, то пользователь будет принадлежать тому пользователю, от имени которого работает web service.
	 * Unique identifier of the parent MONETA.RU account that will own the new account.
	 * If you ommit this element, the new account will belong to the the user who sends this request.
	 * 
	 *
	 * @var long
	 */
	 public $unitId = null;

	/**
	 * 
	 * 
	 *
	 * @var long
	 */
	 public $profileId = null;

	/**
	 * Тип пользователя. Возможные значения:
	 * client
	 * organization
	 * Profile type. Valid values are:
	 * client
	 * organization
	 * 
	 *
	 * @var string
	 */
	 public $profileType = null;

	/**
	 * Данные создаваемого пользователя. Данные представлены в виде "ключ-значение".
	 * Ключи данных зависят от типа пользователя (ProfileType).
	 * User profile information in the list of key-value pairs.
	 * The list of supported keys depends on ProfileType.
	 * 
	 *
	 * @var Profile
	 */
	 public $profile = null;

}
