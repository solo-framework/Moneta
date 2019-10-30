<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Данные пользователя в системе MONETA.RU.
	 * Данные представляются в виде "ключ-значение" и признака подтвержденности.
	 * Можно получить доступ либо к собственным, либо к публично доступным данным
	 * (то есть к тем данным, которые пользователь сам разрешил для просмотра).
	 * Возможные ключи для пользователей с типом "client":
	 * unitid. ID пользователя в системе MONETA.RU.
	 * last_name. Фамилия.
	 * first_name. Имя.
	 * middle_initial_name. Отчество.
	 * alias. Псевдоним.
	 * country. Страна.
	 * state. Область, республика, штат.
	 * city. Город.
	 * zip. Индекс.
	 * address. Адрес.
	 * email_for_notifications. Адрес электронной почты.
	 * phone. Номер телефона.
	 * cell_phone. Номер сотового телефона.
	 * url. Url сайта.
	 * sex. Пол. MALE - мужской, FEMALE - женский.
	 * date_of_birth. Дата рождения (формат: yyyy-mm-dd).
	 * inn. Номер ИНН.
	 * snils. СНИЛС.
	 * timezone. Часовой пояс пользователя.
	 * Список идентификаторов временных зон, которые используются в системе, доступен на странице wikipedia.org.
	 * ui_language. Язык интерфейса пользователя. RU - русский, EN - английский.
	 * customfield:*. Произвольный набор значений.
	 * В данных пользователя их может быть несколько.
	 * Полный ключ атрибута состоит из префикса ("customfield:") и тэга (32 символа).
	 * Например, "customfield:name".
	 * Возможные ключи для пользователей с типом "organization":
	 * unitid. ID пользователя в системе MONETA.RU.
	 * rf_resident. Тип партнера [резидент/нерезидент], если нет значения - партнер старого формата (записывается при регистрации партнера).
	 * goal_and_business_relationships. Цель установления и предполагаемый характер деловых отношений с НКО (устанавливаются при создании юнита).
	 * planned_turnovers. Планируемые ежемесячные обороты.
	 * planned_payers. Планируемые плательщики (устанавливаются при создании юнита).
	 * tariff. Тарифный план, задается при регистрации партнера только для офертных партнеров [PAY_MYSELF, ZKH].
	 * incorporation_form_ru. Вид партнера [организация или ИП], явно задается при регистрации партнера-нерезидента, для резидента устанавливается по ИНН.
	 * international_name. Название на иностранном языке.
	 * alias. Псевдоним.
	 * organization_name. Полное название организации или ФИО индивидуального предпринимателя, задается при регистрации партнера.
	 * organization_name_short. Сокращенное название организации, задается при регистрации партнера.
	 * position_director. Должность руководителя (для организации) [DIRECTOR, GENERAL_DIRECTOR, EXECUTIVE_DIRECTOR, OTHER].
	 * position_director_details. Детали для должности директора (для организации), только для OTHER.
	 * acting_document. Документ, на основании которого действует директор (для организации) [POWER_OF_ATTORNEY, ARTICLES_OF_ASSOCIATION, OTHER].
	 * acting_document_details. Подробности по документу, на основании которого действует директор (для организации), только для OTHER.
	 * attorney_number_ru. Номер (доверенность, для организации), только для POWER_OF_ATTORNEY.
	 * attorney_date_from_ru. Дата от (доверенность, для организации), только для POWER_OF_ATTORNEY.
	 * attorney_date_to_ru. Дата срок действия до (доверенность, для организации), только для POWER_OF_ATTORNEY.
	 * agreement_signer_fio. ФИО для подписи в договоре (для организации).
	 * registration_date_ru. Дата (свидетельство о регистрации).
	 * registration_series_ru. Серия (свидетельство о регистрации).
	 * registration_number_ru. Номер (свидетельство о регистрации).
	 * registration_authority_ru. Наименование регистрирующего органа (свидетельство о регистрации).
	 * registration_state_place_ru. Место государственной регистрации (свидетельство о регистрации).
	 * agreement_signer_fio_ie. ФИО для подписи в договоре (для ИП).
	 * fio_accountant. ФИО контакта по финансовым вопросам.
	 * position_accountant. Должность контакта по финансовым вопросам.
	 * fio_contact. ФИО контакта по техническим вопросам.
	 * position_contact. Должность контакта по техническим вопросам.
	 * joint_governing_body. Коллегиальный орган управления (исполнительный орган).
	 * joint_body_members. ФИО и должность членов коллегиального органа, только при наличии значения joint_governing_body.
	 * business_activity. Вид деятельности для категории "Другое".
	 * url. Url сайта, задается при регистрации партнера.
	 * where_from_do_you_know. Откуда Вы узнали.
	 * where_from_do_you_know_details. Подробности, откуда Вы узнали.
	 * promocode. Промо-код, задается при регистрации партнера.
	 * inn. Номер ИНН, задается при регистрации партнера-резидента.
	 * fio_director. ФИО руководителя.
	 * phone_director. Контактный телефон директора.
	 * countryСтрана. Использовать isocode [RUS], isocode2L [RU] или имя [Россия]
	 * legal_address. Адрес местонахождения (юридический адрес).
	 * management_address. Адрес постоянно действующего органа управления.
	 * post_address. Почтовый адрес.
	 * phone_contact. Контактный телефон.
	 * phone_accountant. Телефон по финансовым вопросам.
	 * phone_support. Телефон по техническим вопросам.
	 * fax. Факс.
	 * cell_phone. Сотовый телефон.
	 * contact_email. Контактный e-mail, задается при регистрации партнера.
	 * finance_email. E-mail финансовой службы.
	 * technical_email. E-mail технической поддержки.
	 * contact_info. Контактная информация.
	 * timezone. Часовой пояс пользователя.
	 * Список идентификаторов временных зон, которые используются в системе, доступен на странице wikipedia.org.
	 * ui_language. язык интерфейса пользователя. RU - русский, EN - английский.
	 * email_for_notifications. Адрес электронной почты.
	 * capital_type. Вид капитала.
	 * registered_capital_size. Размер зарегистрированного капитала.
	 * paid_capital_size. Размер оплаченного капитала.
	 * budget_arrears_absence. Сведения о наличии задолженности перед бюджетом по налогам и сборам.
	 * founder_share_percentage. Доля учредителя в процентах. Значения от 0 до 100. Если значение процентов больше 0, то числитель и знаменатель дроби должны быть равны 0.
	 * founder_share_numerator. Числитель дроби для доли учредителя. Значения от 0 и больше. Если числитель дроби больше 0, то знаменатель дроби должен быть больше 0 и доля учредителя в процентах должна быть равна 0.
	 * founder_share_denominator. Знаменатель дроби для доли учредителя. Значения от 0 и больше. Если знаменатель дроби больше 0, то числитель дроби должен быть больше 0 и доля учредителя в процентах должна быть равна 0.
	 * conditions_payee. Статус "На сайте присутствует информация о получателе платежей, доступная без регистрации плательщика".
	 * conditions_payer. Статус "На сайте присутствует контактная информация для плательщиков, доступная без регистрации".
	 * conditions_site. Статус "Сайт полностью функционален и заполнен контентом".
	 * conditions_payment_info. Статус "Описание порядка и процесса оплаты, а также информация о временном промежутке между оплатой и отгрузкой (доставкой) товара или предоставлением услуги доступны без регистрации".
	 * conditions_correct_data. Статус "Все необходимые данные внесены и являются актуальными".
	 * agreement_sent_date. Дата отправки Заявления для площадок.
	 * agreement_sent_method. Способ отправки Заявления для площадок.
	 * customfield:*. Произвольный набор значений.
	 * В данных пользователя их может быть несколько.
	 * Полный ключ атрибута состоит из префикса ("customfield:") и тэга (32 символа).
	 * Например, "customfield:name".
	 * User profile information.
	 * Information about a user profile contains a list of key-value pairs.
	 * MONETA.RU returns only information about a user profile that you own or publicly available information.
	 * Valid keys for client profiles are:
	 * unitid. The unique identifier of a MONETA.RU user.
	 * last_name. The last name of the user.
	 * first_name. The first name of the user.
	 * middle_initial_name. The middle name of the user.
	 * alias. User alias.
	 * country. Country of residence.
	 * state. State.
	 * city. City.
	 * zip. ZIP code.
	 * address. Address of the user.
	 * email_for_notifications. Email address of the user.
	 * phone. Phone number of the user.
	 * cell_phone. Mobile phone number.
	 * url. URL of the user's web site.
	 * sex. Sex of the user. Valid values are:
	 * MALE
	 * FEMALE
	 * date_of_birth. Date of birth of the user in the following format: yyyy-mm-dd.
	 * inn. Tax identification number (TIN).
	 * snils. Personal insurance policy number (SNILS).
	 * timezone. The time zone of the user.
	 * For the list of time zone names (TZ names) that MONETA.ru supports, see wikipedia.org.
	 * ui_language. Valid values are:
	 * EN
	 * RU
	 * customfield:field_name
	 * . Custom attribute. The field_name part of the custom key might include up to 32 characters.
	 * User profiles may contain multiple custom attributes.
	 * Valid keys for organization profiles:
	 * unitid. The unique identifier of an organization in MONETA.RU.
	 * rf_resident. Partner type [resident/not resident].
	 * goal_and_business_relationships. Purpose and suggested character of establishing business relations with NCO.
	 * planned_turnovers. Planned monthly cash flow.
	 * planned_payers. planned payers.
	 * tariff. Tariff, used in partner registration, only for oferta partners [PAY_MYSELF, ZKH].
	 * incorporation_form_ru. Entity kind [organization or private entrepreneur], explicitly specified when registering a non-resident partner, for a resident, it is established by INN.
	 * international_name. Merchant name in the native language.
	 * alias. Partner alias.
	 * organization_name. Merchant full name or private entrepreneur full name.
	 * organization_name_short. Merchant contracted name.
	 * position_director. Managing director title (for organization) [DIRECTOR, GENERAL_DIRECTOR, EXECUTIVE_DIRECTOR, OTHER].
	 * position_director_details. Details for managing director title (for organization), only for OTHER.
	 * acting_document. Document on basis of which Managing director acts (for organization)[POWER_OF_ATTORNEY, ARTICLES_OF_ASSOCIATION, OTHER].
	 * acting_document_details. Details for document on basis of which Managing director acts (for organization), only for OTHER.
	 * attorney_number_ru. Number (attorney, for organization), only for POWER_OF_ATTORNEY.
	 * attorney_date_from_ru. Date (from) (attorney, for organization), only for POWER_OF_ATTORNEY.
	 * attorney_date_to_ru. Date (validity period - till) (attorney, for organization), only for POWER_OF_ATTORNEY.
	 * agreement_signer_fio. Signatory's full name (for organization).
	 * registration_date_ru. Date (certificate).
	 * registration_series_ru. Series (certificate).
	 * registration_number_ru. Number (certificate).
	 * registration_authority_ru. Registering authority name (certificate).
	 * registration_state_place_ru. State registration place (certificate).
	 * agreement_signer_fio_ie. Signator's full name (for private entrepreneur).
	 * fio_accountant. Financial support contact full name.
	 * position_accountant. Financial support contact title.
	 * fio_contact. Technical support contact full name.
	 * position_contact. Technical support contact title.
	 * joint_governing_body. Joint governing body (executive body).
	 * joint_body_members. Full name and title of collective body members, only if there is a value of joint_governing_body.
	 * business_activity. Business activity for "Other" category.
	 * url. Website (URL), used in partner registration.
	 * where_from_do_you_know. How you learnt about us.
	 * where_from_do_you_know_details. Details for how you learnt about us.
	 * promocode. Promo code.
	 * inn. Tax identification number (TIN).
	 * fio_director. Managing director full name.
	 * phone_director. Managing director office phone.
	 * countryCountry. Use isocode [RUS], isocode2L [RU] or name[Russia]
	 * legal_address. Legal address.
	 * management_address. Address of the permanent management body.
	 * post_address. Postal address.
	 * phone_contact. Contact phone number.
	 * phone_accountant. Financial support phone number.
	 * phone_support. Technical support phone number.
	 * fax. Fax.
	 * cell_phone. Cell phone.
	 * contact_email. Contact E-mail address, used in partner registration.
	 * finance_email. Financial support E-mail address.
	 * technical_email. Technical support E-mail address.
	 * contact_info. Contact info.
	 * timezone. Time zone of the organization.
	 * For the list of time zone names (TZ names) that MONETA.ru supports, see wikipedia.org.
	 * ui_language. User interface langugage. Valid values are:
	 * EN
	 * RU
	 * email_for_notifications. Email address of the organization that is used for notifications.
	 * capital_type. Capital type.
	 * registered_capital_size. Register capital ammount.
	 * paid_capital_size. Paid-in capital ammount.
	 * budget_arrears_absence. Information on taxes and dues tax liabilities.
	 * founder_share_percentage. Founder share in percentage. Value from 0 to 100. If percentage is more then 0, then numerator and denominator of fraction should be equal 0.
	 * founder_share_numerator. Fraction numerator for founder share. Value from 0. If numerator is more then 0, then denominator of fraction should be more then 0 and percentage should be equal 0.
	 * founder_share_denominator. Fraction denominator for founder share. Value from 0. If denominator is more then 0, then numerator of fraction should be more then 0 and percentage should be equal 0.
	 * conditions_payee. State for "There is information on beneficiary of payment available for unauthorized payers on the website".
	 * conditions_payer. State for "There's contact information available for unauthorized payers on the website".
	 * conditions_site. State for "Website is fully functional and filled in with content".
	 * conditions_payment_info. State for "Payment order and process description, as well as information on temporary interval between payment and dispatch (delivery) of wares or provision of service are available for unauthorized users.".
	 * conditions_correct_data. State for "All essential data are inserted and are supposed to be up-to-date".
	 * agreement_sent_date. Date of sending the document.
	 * agreement_sent_method. Method of dispatch the document.
	 * customfield:field_name
	 * . Custom attribute. The field_name part of the custom key might include up to 32 characters. Organization profiles may contain multiple custom attributes.
	 * 
 */
class Profile
{
	
	/**
	 * 
	 *
	 * @var KeyValueAttribute
	 */
	 public $attribute = null;

	/**
	 * 
	 *
	 * @param KeyValueAttribute
	 *
	 * @return void
	 */
	public function addAttribute(KeyValueAttribute $item)
	{
		$this->attribute[] = $item;
	}

}
