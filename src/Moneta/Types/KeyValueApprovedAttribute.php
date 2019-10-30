<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Тип, расширяющий KeyValueAttribute.
	 * Specifies extended attributes.
	 * 
 */
class KeyValueApprovedAttribute extends KeyValueAttribute
{
	
	/**
	 * Поле approved показывает проверено или нет данное свойство. Поле approved - не обязательное.
	 * Indicates whether the attribute is confirmed.
	 * For example, users can confirm their email addresses or mobile phone numbers on their own. To confirm their passports, users must contact the MONETA.RU support team.
	 * 
	 *
	 * @var boolean
	 */
	 public $approved = null;

	/**
	 * Поле published показывает доступно или нет чтение свойства для всех пользователей. Поле published - не обязательное.
	 * Для чтения этого атрибута в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Для записи version можно не указывать.
	 * Indicates whether all users can read this attribute.
	 * This element is optional. MONETA.RU returns and accepts this
	 * element only if you set the version attribute of your request toVERSION_2.
	 * Use it if you need to specify attributes in a request that creates or updates
	 * MONETA.RU objects.
	 * 
	 *
	 * @var boolean
	 */
	 public $published = null;

	/**
	 * Поле fromPrototype показывает, что свойство прочитано из "объекта-прототипа".
	 * Поле только для чтения.
	 * Для чтения этого свойства в запросе необходимо выставлять атрибут version равный или больше VERSION_3.
	 * Indicates that property was read form "prototype object".
	 * MONETA.RU returns this element only if you set the version attribute of your request to VERSION_3.
	 * 
	 *
	 * @var boolean
	 */
	 public $fromPrototype = null;

}
