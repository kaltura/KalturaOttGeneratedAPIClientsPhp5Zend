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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_EntitlementRenewal extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntitlementRenewal';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(count($xml->date))
			$this->date = (string)$xml->date;
		if(count($xml->purchaseId))
			$this->purchaseId = (string)$xml->purchaseId;
		if(count($xml->subscriptionId))
			$this->subscriptionId = (string)$xml->subscriptionId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
	}
	/**
	 * Price that is going to be paid on the renewal
	 *
	 * @var Kaltura_Client_Type_Price
	 */
	public $price;

	/**
	 * Next renewal date
	 *
	 * @var bigint
	 */
	public $date = null;

	/**
	 * Puchase ID
	 *
	 * @var bigint
	 */
	public $purchaseId = null;

	/**
	 * Subscription ID
	 *
	 * @var bigint
	 */
	public $subscriptionId = null;

	/**
	 * User ID
	 *
	 * @var bigint
	 */
	public $userId = null;


}

