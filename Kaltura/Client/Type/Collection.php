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
class Kaltura_Client_Type_Collection extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaCollection';
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
		if(!is_null($xml) && count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = Kaltura_Client_ParseUtils::unmarshalArray($xml->channels, "KalturaBaseChannel");
		}
		if(!is_null($jsonObject) && isset($jsonObject->channels))
		{
			if(empty($jsonObject->channels))
				$this->channels = array();
			else
				$this->channels = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->channels, "KalturaBaseChannel");
		}
		if(!is_null($xml) && count($xml->channelsIds))
			$this->channelsIds = (string)$xml->channelsIds;
		if(!is_null($jsonObject) && isset($jsonObject->channelsIds))
			$this->channelsIds = (string)$jsonObject->channelsIds;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(!is_null($jsonObject) && isset($jsonObject->discountModule) && !empty($jsonObject->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->discountModule, "KalturaDiscountModule");
		if(!is_null($xml) && count($xml->discountModuleId))
			$this->discountModuleId = (string)$xml->discountModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->discountModuleId))
			$this->discountModuleId = (string)$jsonObject->discountModuleId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualName))
		{
			if(empty($jsonObject->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualDescription))
		{
			if(empty($jsonObject->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualDescription, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->usageModule) && !empty($xml->usageModule))
			$this->usageModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->usageModule, "KalturaUsageModule");
		if(!is_null($jsonObject) && isset($jsonObject->usageModule) && !empty($jsonObject->usageModule))
			$this->usageModule = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->usageModule, "KalturaUsageModule");
		if(!is_null($xml) && count($xml->usageModuleId))
			$this->usageModuleId = (string)$xml->usageModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->usageModuleId))
			$this->usageModuleId = (string)$jsonObject->usageModuleId;
		if(!is_null($xml) && count($xml->couponsGroups))
		{
			if(empty($xml->couponsGroups))
				$this->couponsGroups = array();
			else
				$this->couponsGroups = Kaltura_Client_ParseUtils::unmarshalArray($xml->couponsGroups, "KalturaCouponsGroup");
		}
		if(!is_null($jsonObject) && isset($jsonObject->couponsGroups))
		{
			if(empty($jsonObject->couponsGroups))
				$this->couponsGroups = array();
			else
				$this->couponsGroups = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->couponsGroups, "KalturaCouponsGroup");
		}
		if(!is_null($xml) && count($xml->collectionCouponGroup))
		{
			if(empty($xml->collectionCouponGroup))
				$this->collectionCouponGroup = array();
			else
				$this->collectionCouponGroup = Kaltura_Client_ParseUtils::unmarshalArray($xml->collectionCouponGroup, "KalturaCollectionCouponGroup");
		}
		if(!is_null($jsonObject) && isset($jsonObject->collectionCouponGroup))
		{
			if(empty($jsonObject->collectionCouponGroup))
				$this->collectionCouponGroup = array();
			else
				$this->collectionCouponGroup = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->collectionCouponGroup, "KalturaCollectionCouponGroup");
		}
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->productCodes))
		{
			if(empty($xml->productCodes))
				$this->productCodes = array();
			else
				$this->productCodes = Kaltura_Client_ParseUtils::unmarshalArray($xml->productCodes, "KalturaProductCode");
		}
		if(!is_null($jsonObject) && isset($jsonObject->productCodes))
		{
			if(empty($jsonObject->productCodes))
				$this->productCodes = array();
			else
				$this->productCodes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->productCodes, "KalturaProductCode");
		}
		if(!is_null($xml) && count($xml->priceDetailsId))
			$this->priceDetailsId = (string)$xml->priceDetailsId;
		if(!is_null($jsonObject) && isset($jsonObject->priceDetailsId))
			$this->priceDetailsId = (string)$jsonObject->priceDetailsId;
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->virtualAssetId))
			$this->virtualAssetId = (string)$jsonObject->virtualAssetId;
		if(!is_null($xml) && count($xml->fileTypes))
		{
			if(empty($xml->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->fileTypes, "KalturaIntegerValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->fileTypes))
		{
			if(empty($jsonObject->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->fileTypes, "KalturaIntegerValue");
		}
		if(!is_null($xml) && count($xml->fileTypesIds))
			$this->fileTypesIds = (string)$xml->fileTypesIds;
		if(!is_null($jsonObject) && isset($jsonObject->fileTypesIds))
			$this->fileTypesIds = (string)$jsonObject->fileTypesIds;
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
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
	 * @insertonly
	 */
	public $assetUserRuleId = null;


}

