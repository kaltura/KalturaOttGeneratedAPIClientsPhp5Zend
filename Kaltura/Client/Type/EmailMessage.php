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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->templateName))
		{
			if(isset($xml->templateName->item) && count($xml->templateName->item))
				$this->multiLingual_templateName = Kaltura_Client_ParseUtils::unmarshalArray($xml->templateName, '');
			else
				$this->templateName = (string)$xml->templateName;
		}
		if(count($xml->subject))
		{
			if(isset($xml->subject->item) && count($xml->subject->item))
				$this->multiLingual_subject = Kaltura_Client_ParseUtils::unmarshalArray($xml->subject, '');
			else
				$this->subject = (string)$xml->subject;
		}
		if(count($xml->firstName))
		{
			if(isset($xml->firstName->item) && count($xml->firstName->item))
				$this->multiLingual_firstName = Kaltura_Client_ParseUtils::unmarshalArray($xml->firstName, '');
			else
				$this->firstName = (string)$xml->firstName;
		}
		if(count($xml->lastName))
		{
			if(isset($xml->lastName->item) && count($xml->lastName->item))
				$this->multiLingual_lastName = Kaltura_Client_ParseUtils::unmarshalArray($xml->lastName, '');
			else
				$this->lastName = (string)$xml->lastName;
		}
		if(count($xml->senderName))
		{
			if(isset($xml->senderName->item) && count($xml->senderName->item))
				$this->multiLingual_senderName = Kaltura_Client_ParseUtils::unmarshalArray($xml->senderName, '');
			else
				$this->senderName = (string)$xml->senderName;
		}
		if(count($xml->senderFrom))
		{
			if(isset($xml->senderFrom->item) && count($xml->senderFrom->item))
				$this->multiLingual_senderFrom = Kaltura_Client_ParseUtils::unmarshalArray($xml->senderFrom, '');
			else
				$this->senderFrom = (string)$xml->senderFrom;
		}
		if(count($xml->senderTo))
		{
			if(isset($xml->senderTo->item) && count($xml->senderTo->item))
				$this->multiLingual_senderTo = Kaltura_Client_ParseUtils::unmarshalArray($xml->senderTo, '');
			else
				$this->senderTo = (string)$xml->senderTo;
		}
		if(count($xml->bccAddress))
		{
			if(isset($xml->bccAddress->item) && count($xml->bccAddress->item))
				$this->multiLingual_bccAddress = Kaltura_Client_ParseUtils::unmarshalArray($xml->bccAddress, '');
			else
				$this->bccAddress = (string)$xml->bccAddress;
		}
		if(count($xml->extraParameters))
		{
			if(empty($xml->extraParameters))
				$this->extraParameters = array();
			else
				$this->extraParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->extraParameters, "KalturaKeyValue");
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

