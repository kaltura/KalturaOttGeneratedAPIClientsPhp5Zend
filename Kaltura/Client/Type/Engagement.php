<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->totalNumberOfRecipients))
			$this->totalNumberOfRecipients = (int)$xml->totalNumberOfRecipients;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->adapterId))
			$this->adapterId = (int)$xml->adapterId;
		if(count($xml->adapterDynamicData))
			$this->adapterDynamicData = (string)$xml->adapterDynamicData;
		if(count($xml->intervalSeconds))
			$this->intervalSeconds = (int)$xml->intervalSeconds;
		if(count($xml->userList))
			$this->userList = (string)$xml->userList;
		if(count($xml->sendTimeInSeconds))
			$this->sendTimeInSeconds = (string)$xml->sendTimeInSeconds;
		if(count($xml->couponGroupId))
			$this->couponGroupId = (int)$xml->couponGroupId;
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

