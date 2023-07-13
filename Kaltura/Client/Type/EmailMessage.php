<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_EmailMessage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailMessage';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->templateName))
			$this->templateName = (string)$xml->templateName;
		if(!is_null($jsonObject) && isset($jsonObject->templateName))
			$this->templateName = (string)$jsonObject->templateName;
		if(!is_null($xml) && count($xml->subject))
			$this->subject = (string)$xml->subject;
		if(!is_null($jsonObject) && isset($jsonObject->subject))
			$this->subject = (string)$jsonObject->subject;
		if(!is_null($xml) && count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(!is_null($jsonObject) && isset($jsonObject->firstName))
			$this->firstName = (string)$jsonObject->firstName;
		if(!is_null($xml) && count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(!is_null($jsonObject) && isset($jsonObject->lastName))
			$this->lastName = (string)$jsonObject->lastName;
		if(!is_null($xml) && count($xml->senderName))
			$this->senderName = (string)$xml->senderName;
		if(!is_null($jsonObject) && isset($jsonObject->senderName))
			$this->senderName = (string)$jsonObject->senderName;
		if(!is_null($xml) && count($xml->senderFrom))
			$this->senderFrom = (string)$xml->senderFrom;
		if(!is_null($jsonObject) && isset($jsonObject->senderFrom))
			$this->senderFrom = (string)$jsonObject->senderFrom;
		if(!is_null($xml) && count($xml->senderTo))
			$this->senderTo = (string)$xml->senderTo;
		if(!is_null($jsonObject) && isset($jsonObject->senderTo))
			$this->senderTo = (string)$jsonObject->senderTo;
		if(!is_null($xml) && count($xml->bccAddress))
			$this->bccAddress = (string)$xml->bccAddress;
		if(!is_null($jsonObject) && isset($jsonObject->bccAddress))
			$this->bccAddress = (string)$jsonObject->bccAddress;
		if(!is_null($xml) && count($xml->extraParameters))
		{
			if(empty($xml->extraParameters))
				$this->extraParameters = array();
			else
				$this->extraParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->extraParameters, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->extraParameters))
		{
			if(empty($jsonObject->extraParameters))
				$this->extraParameters = array();
			else
				$this->extraParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->extraParameters, "KalturaKeyValue");
		}
	}
	/**
	 * email template name
	 *
	 * @var string
	 */
	public $templateName = null;

	/**
	 * email subject
	 *
	 * @var string
	 */
	public $subject = null;

	/**
	 * first name
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * last name
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * sender name
	 *
	 * @var string
	 */
	public $senderName = null;

	/**
	 * sender from
	 *
	 * @var string
	 */
	public $senderFrom = null;

	/**
	 * sender to
	 *
	 * @var string
	 */
	public $senderTo = null;

	/**
	 * bcc address - seperated by comma
	 *
	 * @var string
	 */
	public $bccAddress = null;

	/**
	 * extra parameters
	 *
	 * @var array of KalturaKeyValue
	 */
	public $extraParameters;


}

