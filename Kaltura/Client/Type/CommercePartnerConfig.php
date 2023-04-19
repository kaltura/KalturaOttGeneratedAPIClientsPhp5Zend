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
class Kaltura_Client_Type_CommercePartnerConfig extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaCommercePartnerConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->bookmarkEventThresholds))
		{
			if(empty($xml->bookmarkEventThresholds))
				$this->bookmarkEventThresholds = array();
			else
				$this->bookmarkEventThresholds = Kaltura_Client_ParseUtils::unmarshalArray($xml->bookmarkEventThresholds, "KalturaBookmarkEventThreshold");
		}
		if(!is_null($jsonObject) && isset($jsonObject->bookmarkEventThresholds))
		{
			if(empty($jsonObject->bookmarkEventThresholds))
				$this->bookmarkEventThresholds = array();
			else
				$this->bookmarkEventThresholds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->bookmarkEventThresholds, "KalturaBookmarkEventThreshold");
		}
		if(!is_null($xml) && count($xml->keepSubscriptionAddOns))
		{
			if(!empty($xml->keepSubscriptionAddOns) && ((int) $xml->keepSubscriptionAddOns === 1 || strtolower((string)$xml->keepSubscriptionAddOns) === 'true'))
				$this->keepSubscriptionAddOns = true;
			else
				$this->keepSubscriptionAddOns = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->keepSubscriptionAddOns))
		{
			if(!empty($jsonObject->keepSubscriptionAddOns) && ((int) $jsonObject->keepSubscriptionAddOns === 1 || strtolower((string)$jsonObject->keepSubscriptionAddOns) === 'true'))
				$this->keepSubscriptionAddOns = true;
			else
				$this->keepSubscriptionAddOns = false;
		}
		if(!is_null($xml) && count($xml->programAssetEntitlementPaddingStart))
			$this->programAssetEntitlementPaddingStart = (int)$xml->programAssetEntitlementPaddingStart;
		if(!is_null($jsonObject) && isset($jsonObject->programAssetEntitlementPaddingStart))
			$this->programAssetEntitlementPaddingStart = (int)$jsonObject->programAssetEntitlementPaddingStart;
		if(!is_null($xml) && count($xml->programAssetEntitlementPaddingEnd))
			$this->programAssetEntitlementPaddingEnd = (int)$xml->programAssetEntitlementPaddingEnd;
		if(!is_null($jsonObject) && isset($jsonObject->programAssetEntitlementPaddingEnd))
			$this->programAssetEntitlementPaddingEnd = (int)$jsonObject->programAssetEntitlementPaddingEnd;
	}
	/**
	 * configuration for bookmark event threshold (when to dispatch the event) in seconds.
	 *
	 * @var array of KalturaBookmarkEventThreshold
	 */
	public $bookmarkEventThresholds;

	/**
	 * configuration for keep add-ons after subscription deletion
	 *
	 * @var bool
	 */
	public $keepSubscriptionAddOns = null;

	/**
	 * configuration for asset start entitlement padding e.g. asset start time - padding still relevant for asset
	 *
	 * @var int
	 */
	public $programAssetEntitlementPaddingStart = null;

	/**
	 * configuration for asset end entitlement padding e.g. asset end time + padding still relevant for asset
	 *
	 * @var int
	 */
	public $programAssetEntitlementPaddingEnd = null;


}

