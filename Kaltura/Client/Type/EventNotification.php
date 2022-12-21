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
class Kaltura_Client_Type_EventNotification extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaEventNotification';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
		{
			if(isset($xml->id->item) && count($xml->id->item))
				$this->multiLingual_id = Kaltura_Client_ParseUtils::unmarshalArray($xml->id, '');
			else
				$this->id = (string)$xml->id;
		}
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->eventObjectType))
		{
			if(isset($xml->eventObjectType->item) && count($xml->eventObjectType->item))
				$this->multiLingual_eventObjectType = Kaltura_Client_ParseUtils::unmarshalArray($xml->eventObjectType, '');
			else
				$this->eventObjectType = (string)$xml->eventObjectType;
		}
		if(count($xml->message))
		{
			if(isset($xml->message->item) && count($xml->message->item))
				$this->multiLingual_message = Kaltura_Client_ParseUtils::unmarshalArray($xml->message, '');
			else
				$this->message = (string)$xml->message;
		}
		if(count($xml->status))
		{
			if(isset($xml->status->item) && count($xml->status->item))
				$this->multiLingual_status = Kaltura_Client_ParseUtils::unmarshalArray($xml->status, '');
			else
				$this->status = (string)$xml->status;
		}
		if(count($xml->actionType))
		{
			if(isset($xml->actionType->item) && count($xml->actionType->item))
				$this->multiLingual_actionType = Kaltura_Client_ParseUtils::unmarshalArray($xml->actionType, '');
			else
				$this->actionType = (string)$xml->actionType;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * Identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * Object identifier
	 *
	 * @var bigint
	 */
	public $objectId = null;

	/**
	 * Event object type
	 *
	 * @var string
	 */
	public $eventObjectType = null;

	/**
	 * Message
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Status
	 *
	 * @var Kaltura_Client_Enum_EventNotificationStatus
	 */
	public $status = null;

	/**
	 * Action type
	 *
	 * @var string
	 */
	public $actionType = null;

	/**
	 * Create date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Update date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

