<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Фильтр, по которому ищем данные.
	 * Search criteria.
	 * 
 */
class FindProfileInfoRequestFilter
{
	
	/**
	 * ID пользователя в системе MONETA.RU. ID пользователя "от которого" начинается поиск.
	 * Если это поле не задано, то ищем пользователей, начиная от идентифицированного пользователя.
	 * Unique identifier of the parent MONETA.RU account that acts as a starting point of the search.
	 * If you omit this element, MONETA.RU uses the ID of the user who sends the reuqest.
	 * 
	 *
	 * @var long
	 */
	 public $unitId = null;

	/**
	 * Имя, по которому происходит поиск.
	 * Если поле задано, то оно должно быть не меньше 2-х символов.
	 * Поиск происходит по прямому совпадению. Для задания маски можно указать спец-символы - "*" или "?".
	 * Для пользователей с типом "organization" поиск происходит по полю "organization_name". Для пользователей с типом "client" -
	 * по общему полю "last_name first_name middle_initial_name". То есть, если нужно найти пользователя "Иванов Андрей Сергеевич",
	 * то следует ввести имя для поиска именно так. Если нужно найти всех пользователей с фамилией "Иванов", то запрос должен быть "Иванов*".
	 * Если нужно найти всех пользователей с именем "Андрей", то запрос должен быть "*Андрей*".
	 * The name of the user or organization.
	 * Minimum length is two characters.
	 * You can use the following wildcards to specify masks: asterisk (*) and question mark (?).
	 * For organization profiles, MONETA.RU searches the organization_name element. For client profiles, MONETA.RU searches the last_name, first_name, and middle_initial_name elements.
	 * 
	 *
	 * @var string
	 */
	 public $name = null;

	/**
	 * Email, по которому происходит поиск.
	 * Если поле задано, то оно должно быть не меньше 2-х символов.
	 * Поиск происходит по прямому совпадению. Для задания маски можно указать спец-символы - "*" или "?".
	 * The email of the user profile that you want to find.
	 * Minimum length is two characters.
	 * You can use the following wildcards to specify masks: asterisk (*) and question mark (?).
	 * 
	 *
	 * @var string
	 */
	 public $email = null;

	/**
	 * Номер телефона, по которому происходит поиск.
	 * Если поле задано, то оно должно быть не меньше 2-х символов.
	 * Поиск происходит по прямому совпадению. Для задания маски можно указать спец-символы - "*" или "?".
	 * The phone number of the user profile that you want to find.
	 * Minimum length is two characters.
	 * You can use the following wildcards to specify masks: asterisk (*) and question mark (?).
	 * 
	 *
	 * @var string
	 */
	 public $phone = null;

	/**
	 * Имя пользователя (логин), по которому происходит поиск.
	 * Если поле задано, то оно должно быть не меньше 2-х символов.
	 * Поиск происходит по прямому совпадению. Для задания маски можно указать спец-символы - "*" или "?".
	 * The username (login) that you want to find.
	 * Minimum length is two characters.
	 * You can use the following wildcards to specify masks: asterisk (*) and question mark (?).
	 * 
	 *
	 * @var string
	 */
	 public $login = null;

	/**
	 * Возвращаются пользователи у которых есть счета с балансом большим или равным указанному значению.
	 * Specifies the minimum balance of the account that you want to find.
	 * 
	 *
	 * @var decimal
	 */
	 public $accountBalanceFrom = null;

	/**
	 * Возвращаются пользователи у которых есть счета с балансом меньшим или равным указанному значению.
	 * Specifies the maximum balance of the account that you want to find.
	 * 
	 *
	 * @var decimal
	 */
	 public $accountBalanceTo = null;

	/**
	 * При указании границ баланса в поиске можно уточнить валюту счета.
	 * If you include the maximum or minimum balance in the request, specifies the account currency.
	 * 
	 *
	 * @var string
	 */
	 public $accountCurrencyCode = null;

	/**
	 * 
	 * 
	 *
	 * @var long
	 */
	 public $profileId = null;

}
