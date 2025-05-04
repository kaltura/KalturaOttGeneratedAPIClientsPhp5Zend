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
class Kaltura_Client_Type_UnifiedPaymentRenewal extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUnifiedPaymentRenewal';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(!is_null($jsonObject) && isset($jsonObject->price) && !empty($jsonObject->price))
			$this->price = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->price, "KalturaPrice");
		if(!is_null($xml) && count($xml->date))
			$this->date = (string)$xml->date;
		if(!is_null($jsonObject) && isset($jsonObject->date))
			$this->date = (string)$jsonObject->date;
		if(!is_null($xml) && count($xml->unifiedPaymentId))
			$this->unifiedPaymentId = (string)$xml->unifiedPaymentId;
		if(!is_null($jsonObject) && isset($jsonObject->unifiedPaymentId))
			$this->unifiedPaymentId = (string)$jsonObject->unifiedPaymentId;
		if(!is_null($xml) && count($xml->entitlements))
		{
			if(empty($xml->entitlements))
				$this->entitlements = array();
			else
				$this->entitlements = Kaltura_Client_ParseUtils::unmarshalArray($xml->entitlements, "KalturaEntitlementRenewalBase");
		}
		if(!is_null($jsonObject) && isset($jsonObject->entitlements))
		{
			if(empty($jsonObject->entitlements))
				$this->entitlements = array();
			else
				$this->entitlements = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->entitlements, "KalturaEntitlementRenewalBase");
		}
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
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
	 * Unified payment ID
	 *
	 * @var bigint
	 */
	public $unifiedPaymentId = null;

	/**
	 * List of entitlements in this unified payment renewal
	 *
	 * @var Kaltura_Client_Type_EntitlementRenewalBase[]
	 */
	public $entitlements;

	/**
	 * User ID
	 *
	 * @var bigint
	 */
	public $userId = null;


}

