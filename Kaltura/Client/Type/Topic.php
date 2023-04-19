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
class Kaltura_Client_Type_Topic extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTopic';
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
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->subscribersAmount))
			$this->subscribersAmount = (string)$xml->subscribersAmount;
		if(!is_null($jsonObject) && isset($jsonObject->subscribersAmount))
			$this->subscribersAmount = (string)$jsonObject->subscribersAmount;
		if(!is_null($xml) && count($xml->automaticIssueNotification))
			$this->automaticIssueNotification = (string)$xml->automaticIssueNotification;
		if(!is_null($jsonObject) && isset($jsonObject->automaticIssueNotification))
			$this->automaticIssueNotification = (string)$jsonObject->automaticIssueNotification;
		if(!is_null($xml) && count($xml->lastMessageSentDateSec))
			$this->lastMessageSentDateSec = (string)$xml->lastMessageSentDateSec;
		if(!is_null($jsonObject) && isset($jsonObject->lastMessageSentDateSec))
			$this->lastMessageSentDateSec = (string)$jsonObject->lastMessageSentDateSec;
	}
	/**
	 * message id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $subscribersAmount = null;

	/**
	 * automaticIssueNotification
	 *
	 * @var Kaltura_Client_Enum_TopicAutomaticIssueNotification
	 */
	public $automaticIssueNotification = null;

	/**
	 * lastMessageSentDateSec
	 *
	 * @var bigint
	 */
	public $lastMessageSentDateSec = null;


}

