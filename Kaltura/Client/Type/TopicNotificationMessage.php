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
class Kaltura_Client_Type_TopicNotificationMessage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTopicNotificationMessage';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->imageUrl))
			$this->imageUrl = (string)$xml->imageUrl;
		if(!is_null($jsonObject) && isset($jsonObject->imageUrl))
			$this->imageUrl = (string)$jsonObject->imageUrl;
		if(!is_null($xml) && count($xml->topicNotificationId))
			$this->topicNotificationId = (string)$xml->topicNotificationId;
		if(!is_null($jsonObject) && isset($jsonObject->topicNotificationId))
			$this->topicNotificationId = (string)$jsonObject->topicNotificationId;
		if(!is_null($xml) && count($xml->trigger) && !empty($xml->trigger))
			$this->trigger = Kaltura_Client_ParseUtils::unmarshalObject($xml->trigger, "KalturaTrigger");
		if(!is_null($jsonObject) && isset($jsonObject->trigger) && !empty($jsonObject->trigger))
			$this->trigger = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->trigger, "KalturaTrigger");
		if(!is_null($xml) && count($xml->dispatchers))
		{
			if(empty($xml->dispatchers))
				$this->dispatchers = array();
			else
				$this->dispatchers = Kaltura_Client_ParseUtils::unmarshalArray($xml->dispatchers, "KalturaDispatcher");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dispatchers))
		{
			if(empty($jsonObject->dispatchers))
				$this->dispatchers = array();
			else
				$this->dispatchers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dispatchers, "KalturaDispatcher");
		}
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
	}
	/**
	 * Topic notification message ID
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Topic notification message
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Topic notification message image URL
	 *
	 * @var string
	 */
	public $imageUrl = null;

	/**
	 * Topic notification ID
	 *
	 * @var bigint
	 */
	public $topicNotificationId = null;

	/**
	 * Topic notification message trigger
	 *
	 * @var Kaltura_Client_Type_Trigger
	 */
	public $trigger;

	/**
	 * Topic notification message dispatchers
	 *
	 * @var Kaltura_Client_Type_Dispatcher[]
	 */
	public $dispatchers;

	/**
	 * Message status
	 *
	 * @var Kaltura_Client_Enum_AnnouncementStatus
	 * @readonly
	 */
	public $status = null;


}

