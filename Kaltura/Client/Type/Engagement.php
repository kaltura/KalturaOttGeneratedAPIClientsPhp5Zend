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
class Kaltura_Client_Type_Engagement extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEngagement';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->totalNumberOfRecipients))
			$this->totalNumberOfRecipients = (int)$xml->totalNumberOfRecipients;
		if(!is_null($jsonObject) && isset($jsonObject->totalNumberOfRecipients))
			$this->totalNumberOfRecipients = (int)$jsonObject->totalNumberOfRecipients;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->adapterId))
			$this->adapterId = (int)$xml->adapterId;
		if(!is_null($jsonObject) && isset($jsonObject->adapterId))
			$this->adapterId = (int)$jsonObject->adapterId;
		if(!is_null($xml) && count($xml->adapterDynamicData))
			$this->adapterDynamicData = (string)$xml->adapterDynamicData;
		if(!is_null($jsonObject) && isset($jsonObject->adapterDynamicData))
			$this->adapterDynamicData = (string)$jsonObject->adapterDynamicData;
		if(!is_null($xml) && count($xml->intervalSeconds))
			$this->intervalSeconds = (int)$xml->intervalSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->intervalSeconds))
			$this->intervalSeconds = (int)$jsonObject->intervalSeconds;
		if(!is_null($xml) && count($xml->userList))
			$this->userList = (string)$xml->userList;
		if(!is_null($jsonObject) && isset($jsonObject->userList))
			$this->userList = (string)$jsonObject->userList;
		if(!is_null($xml) && count($xml->sendTimeInSeconds))
			$this->sendTimeInSeconds = (string)$xml->sendTimeInSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->sendTimeInSeconds))
			$this->sendTimeInSeconds = (string)$jsonObject->sendTimeInSeconds;
		if(!is_null($xml) && count($xml->couponGroupId))
			$this->couponGroupId = (int)$xml->couponGroupId;
		if(!is_null($jsonObject) && isset($jsonObject->couponGroupId))
			$this->couponGroupId = (int)$jsonObject->couponGroupId;
	}
	/**
	 * Engagement id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Total number of recipients
	 *
	 * @var int
	 * @readonly
	 */
	public $totalNumberOfRecipients = null;

	/**
	 * Engagement type
	 *
	 * @var Kaltura_Client_Enum_EngagementType
	 */
	public $type = null;

	/**
	 * Engagement adapter id
	 *
	 * @var int
	 */
	public $adapterId = null;

	/**
	 * Engagement adapter dynamic data
	 *
	 * @var string
	 */
	public $adapterDynamicData = null;

	/**
	 * Interval (seconds)
	 *
	 * @var int
	 */
	public $intervalSeconds = null;

	/**
	 * Manual User list
	 *
	 * @var string
	 */
	public $userList = null;

	/**
	 * Send time (seconds)
	 *
	 * @var bigint
	 */
	public $sendTimeInSeconds = null;

	/**
	 * Coupon GroupId
	 *
	 * @var int
	 */
	public $couponGroupId = null;


}

