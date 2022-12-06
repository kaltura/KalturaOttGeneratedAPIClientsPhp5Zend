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
class Kaltura_Client_Type_MessageTemplate extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMessageTemplate';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->message))
		{
			if(isset($xml->message->item) && count($xml->message->item))
				$this->multiLingual_message = Kaltura_Client_ParseUtils::unmarshalArray($xml->message, '');
			else
				$this->message = (string)$xml->message;
		}
		if(count($xml->dateFormat))
		{
			if(isset($xml->dateFormat->item) && count($xml->dateFormat->item))
				$this->multiLingual_dateFormat = Kaltura_Client_ParseUtils::unmarshalArray($xml->dateFormat, '');
			else
				$this->dateFormat = (string)$xml->dateFormat;
		}
		if(count($xml->messageType))
		{
			if(isset($xml->messageType->item) && count($xml->messageType->item))
				$this->multiLingual_messageType = Kaltura_Client_ParseUtils::unmarshalArray($xml->messageType, '');
			else
				$this->messageType = (string)$xml->messageType;
		}
		if(count($xml->sound))
		{
			if(isset($xml->sound->item) && count($xml->sound->item))
				$this->multiLingual_sound = Kaltura_Client_ParseUtils::unmarshalArray($xml->sound, '');
			else
				$this->sound = (string)$xml->sound;
		}
		if(count($xml->action))
		{
			if(isset($xml->action->item) && count($xml->action->item))
				$this->multiLingual_action = Kaltura_Client_ParseUtils::unmarshalArray($xml->action, '');
			else
				$this->action = (string)$xml->action;
		}
		if(count($xml->url))
		{
			if(isset($xml->url->item) && count($xml->url->item))
				$this->multiLingual_url = Kaltura_Client_ParseUtils::unmarshalArray($xml->url, '');
			else
				$this->url = (string)$xml->url;
		}
		if(count($xml->mailTemplate))
		{
			if(isset($xml->mailTemplate->item) && count($xml->mailTemplate->item))
				$this->multiLingual_mailTemplate = Kaltura_Client_ParseUtils::unmarshalArray($xml->mailTemplate, '');
			else
				$this->mailTemplate = (string)$xml->mailTemplate;
		}
		if(count($xml->mailSubject))
		{
			if(isset($xml->mailSubject->item) && count($xml->mailSubject->item))
				$this->multiLingual_mailSubject = Kaltura_Client_ParseUtils::unmarshalArray($xml->mailSubject, '');
			else
				$this->mailSubject = (string)$xml->mailSubject;
		}
		if(count($xml->ratioId))
		{
			if(isset($xml->ratioId->item) && count($xml->ratioId->item))
				$this->multiLingual_ratioId = Kaltura_Client_ParseUtils::unmarshalArray($xml->ratioId, '');
			else
				$this->ratioId = (string)$xml->ratioId;
		}
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

