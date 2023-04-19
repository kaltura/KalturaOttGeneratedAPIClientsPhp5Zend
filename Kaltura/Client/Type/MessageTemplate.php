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
class Kaltura_Client_Type_MessageTemplate extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMessageTemplate';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->dateFormat))
			$this->dateFormat = (string)$xml->dateFormat;
		if(!is_null($jsonObject) && isset($jsonObject->dateFormat))
			$this->dateFormat = (string)$jsonObject->dateFormat;
		if(!is_null($xml) && count($xml->messageType))
			$this->messageType = (string)$xml->messageType;
		if(!is_null($jsonObject) && isset($jsonObject->messageType))
			$this->messageType = (string)$jsonObject->messageType;
		if(!is_null($xml) && count($xml->sound))
			$this->sound = (string)$xml->sound;
		if(!is_null($jsonObject) && isset($jsonObject->sound))
			$this->sound = (string)$jsonObject->sound;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->mailTemplate))
			$this->mailTemplate = (string)$xml->mailTemplate;
		if(!is_null($jsonObject) && isset($jsonObject->mailTemplate))
			$this->mailTemplate = (string)$jsonObject->mailTemplate;
		if(!is_null($xml) && count($xml->mailSubject))
			$this->mailSubject = (string)$xml->mailSubject;
		if(!is_null($jsonObject) && isset($jsonObject->mailSubject))
			$this->mailSubject = (string)$jsonObject->mailSubject;
		if(!is_null($xml) && count($xml->ratioId))
			$this->ratioId = (string)$xml->ratioId;
		if(!is_null($jsonObject) && isset($jsonObject->ratioId))
			$this->ratioId = (string)$jsonObject->ratioId;
	}
	/**
	 * The message template with placeholders
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Default date format for the date &amp; time entries used in the template
	 *
	 * @var string
	 */
	public $dateFormat = null;

	/**
	 * Template type. Possible values: Series, Reminder,Churn, SeriesReminder
	 *
	 * @var Kaltura_Client_Enum_MessageTemplateType
	 */
	public $messageType = null;

	/**
	 * Sound file name to play upon message arrival to the device (if supported by target device)
	 *
	 * @var string
	 */
	public $sound = null;

	/**
	 * an optional action
	 *
	 * @var string
	 */
	public $action = null;

	/**
	 * URL template for deep linking. Example - /app/location/{mediaId}
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Mail template name
	 *
	 * @var string
	 */
	public $mailTemplate = null;

	/**
	 * Mail subject
	 *
	 * @var string
	 */
	public $mailSubject = null;

	/**
	 * Ratio identifier
	 *
	 * @var string
	 */
	public $ratioId = null;


}

