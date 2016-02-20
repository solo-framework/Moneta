<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на создание/редактирование файла документа.
	 * Request for adding or modifying a file.
	 * 
 */
class UploadProfileDocumentFileRequest
{
	
	/**
	 * Если указано поле fileId - файл редактируется, иначе создается новый файл.
	 * Поле approved в данном запросе не используется.
	 * Если не указан mimeType, но в запросе есть имя файла (поле title), то mimeType будет вычисляться по расширению файла.
	 * Indicates whether to add or modify a file.
	 * Specify the fileId element to modify an existing file. Omit this element to add a new file.
	 * This request does not use the approved is element.
	 * If you omit the mimeType element and specify a file name in the title element, MONETA.RU sets mimeType to match the extension of the file.
	 * 
	 *
	 * @var File
	 */
	 public $file = null;

}
