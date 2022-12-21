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
class Kaltura_Client_Type_Collection extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaCollection';
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
		if(count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = Kaltura_Client_ParseUtils::unmarshalArray($xml->channels, "KalturaBaseChannel");
		}
		if(count($xml->channelsIds))
		{
			if(isset($xml->channelsIds->item) && count($xml->channelsIds->item))
				$this->multiLingual_channelsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->channelsIds, '');
			else
				$this->channelsIds = (string)$xml->channelsIds;
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(count($xml->discountModuleId))
			$this->discountModuleId = (string)$xml->discountModuleId;
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->description))
		{
			if(isset($xml->description->item) && count($xml->description->item))
				$this->multiLingual_description = Kaltura_Client_ParseUtils::unmarshalArray($xml->description, '');
			else
				$this->description = (string)$xml->description;
		}
		if(count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(count($xml->usageModule) && !empty($xml->usageModule))
			$this->usageModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->usageModule, "KalturaUsageModule");
		if(count($xml->usageModuleId))
			$this->usageModuleId = (string)$xml->usageModuleId;
		if(count($xml->couponsGroups))
		{
			if(empty($xml->couponsGroups))
				$this->couponsGroups = array();
			else
				$this->couponsGroups = Kaltura_Client_ParseUtils::unmarshalArray($xml->couponsGroups, "KalturaCouponsGroup");
		}
		if(count($xml->collectionCouponGroup))
		{
			if(empty($xml->collectionCouponGroup))
				$this->collectionCouponGroup = array();
			else
				$this->collectionCouponGroup = Kaltura_Client_ParseUtils::unmarshalArray($xml->collectionCouponGroup, "KalturaCollectionCouponGroup");
		}
		if(count($xml->externalId))
		{
			if(isset($xml->externalId->item) && count($xml->externalId->item))
				$this->multiLingual_externalId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalId, '');
			else
				$this->externalId = (string)$xml->externalId;
		}
		if(count($xml->productCodes))
		{
			if(empty($xml->productCodes))
				$this->productCodes = array();
			else
				$this->productCodes = Kaltura_Client_ParseUtils::unmarshalArray($xml->productCodes, "KalturaProductCode");
		}
		if(count($xml->priceDetailsId))
			$this->priceDetailsId = (string)$xml->priceDetailsId;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(count($xml->fileTypes))
		{
			if(empty($xml->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->fileTypes, "KalturaIntegerValue");
		}
		if(count($xml->fileTypesIds))
		{
			if(isset($xml->fileTypesIds->item) && count($xml->fileTypesIds->item))
				$this->multiLingual_fileTypesIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->fileTypesIds, '');
			else
				$this->fileTypesIds = (string)$xml->fileTypesIds;
		}
		if(count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
	}
	/**
	 * Collection identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * A list of channels associated with this collection 
	 *             This property will deprecated soon. Please use ChannelsIds instead of it.
	 *
	 * @var array of KalturaBaseChannel
	 * @readonly
	 */
	public $channels;

	/**
	 * Comma separated channels Ids associated with this collection
	 *
	 * @var string
	 */
	public $channelsIds = null;

	/**
	 * The first date the collection is available for purchasing
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * The last date the collection is available for purchasing
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * The internal discount module for the collection
	 *             This property will deprecated soon. Please use DiscountModuleId instead of it.
	 *
	 * @var Kaltura_Client_Type_DiscountModule
	 * @readonly
	 */
	public $discountModule;

	/**
	 * The internal discount module identifier for the collection
	 *
	 * @var bigint
	 */
	public $discountModuleId = null;

	/**
	 * Name of the collection
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Name of the collection
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualName;

	/**
	 * description of the collection
	 *
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * description of the collection
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualDescription;

	/**
	 * Collection usage module
	 *             This property will deprecated soon. Please use usageModuleId instead of it.
	 *
	 * @var Kaltura_Client_Type_UsageModule
	 * @readonly
	 */
	public $usageModule;

	/**
	 * The internal usage module identifier for the collection
	 *
	 * @var bigint
	 */
	public $usageModuleId = null;

	/**
	 * List of Coupons group
	 *             This property will deprecated soon. Please use CollectionCouponGroup instead of it.
	 *
	 * @var array of KalturaCouponsGroup
	 * @readonly
	 */
	public $couponsGroups;

	/**
	 * List of collection Coupons group
	 *
	 * @var array of KalturaCollectionCouponGroup
	 */
	public $collectionCouponGroup;

	/**
	 * External ID
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * List of Collection product codes
	 *
	 * @var array of KalturaProductCode
	 */
	public $productCodes;

	/**
	 * The ID of the price details associated with this collection
	 *
	 * @var bigint
	 */
	public $priceDetailsId = null;

	/**
	 * Is active collection
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Specifies when was the collection created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the collection last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Virtual asset id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $virtualAssetId = null;

	/**
	 * A list of file types identifiers that are supported in this collection
	 *
	 * @var array of KalturaIntegerValue
	 * @readonly
	 */
	public $fileTypes;

	/**
	 * Comma separated file types identifiers that are supported in this collection
	 *
	 * @var string
	 */
	public $fileTypesIds = null;

	/**
	 * Asset user rule identifier
	 *
	 * @var bigint
	 */
	public $assetUserRuleId = null;


}

