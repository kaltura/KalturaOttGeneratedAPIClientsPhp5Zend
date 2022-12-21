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
class Kaltura_Client_Type_Ppv extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPpv';
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
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(count($xml->priceDetailsId))
			$this->priceDetailsId = (int)$xml->priceDetailsId;
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
		if(count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(count($xml->discountId))
			$this->discountId = (string)$xml->discountId;
		if(count($xml->couponsGroup) && !empty($xml->couponsGroup))
			$this->couponsGroup = Kaltura_Client_ParseUtils::unmarshalObject($xml->couponsGroup, "KalturaCouponsGroup");
		if(count($xml->couponsGroupId))
			$this->couponsGroupId = (string)$xml->couponsGroupId;
		if(count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
		if(count($xml->productCode))
		{
			if(isset($xml->productCode->item) && count($xml->productCode->item))
				$this->multiLingual_productCode = Kaltura_Client_ParseUtils::unmarshalArray($xml->productCode, '');
			else
				$this->productCode = (string)$xml->productCode;
		}
		if(count($xml->isSubscriptionOnly))
		{
			if(!empty($xml->isSubscriptionOnly) && ((int) $xml->isSubscriptionOnly === 1 || strtolower((string)$xml->isSubscriptionOnly) === 'true'))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(count($xml->firstDeviceLimitation))
		{
			if(!empty($xml->firstDeviceLimitation) && ((int) $xml->firstDeviceLimitation === 1 || strtolower((string)$xml->firstDeviceLimitation) === 'true'))
				$this->firstDeviceLimitation = true;
			else
				$this->firstDeviceLimitation = false;
		}
		if(count($xml->usageModule) && !empty($xml->usageModule))
			$this->usageModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->usageModule, "KalturaUsageModule");
		if(count($xml->usageModuleId))
			$this->usageModuleId = (string)$xml->usageModuleId;
		if(count($xml->adsPolicy))
		{
			if(isset($xml->adsPolicy->item) && count($xml->adsPolicy->item))
				$this->multiLingual_adsPolicy = Kaltura_Client_ParseUtils::unmarshalArray($xml->adsPolicy, '');
			else
				$this->adsPolicy = (string)$xml->adsPolicy;
		}
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
	}
	/**
	 * PPV identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * the name for the ppv
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * This property will deprecated soon. Please use PriceId instead of it.
	 *
	 * @var Kaltura_Client_Type_PriceDetails
	 * @readonly
	 */
	public $price;

	/**
	 * The price if of the ppv
	 *
	 * @var int
	 */
	public $priceDetailsId = null;

	/**
	 * This property will deprecated soon. Please use fileTypesIds instead of it.
	 *
	 * @var array of KalturaIntegerValue
	 * @readonly
	 */
	public $fileTypes;

	/**
	 * Comma separated file types identifiers that are supported in this subscription
	 *
	 * @var string
	 */
	public $fileTypesIds = null;

	/**
	 * This property will deprecated soon. Please use DiscountId instead of it.
	 *
	 * @var Kaltura_Client_Type_DiscountModule
	 * @readonly
	 */
	public $discountModule;

	/**
	 * The discount id for the ppv
	 *
	 * @var bigint
	 */
	public $discountId = null;

	/**
	 * This property will deprecated soon. Please use CouponsGroupId instead of it.
	 *
	 * @var Kaltura_Client_Type_CouponsGroup
	 * @readonly
	 */
	public $couponsGroup;

	/**
	 * Coupons group id for the ppv
	 *
	 * @var bigint
	 */
	public $couponsGroupId = null;

	/**
	 * A list of the descriptions of the ppv on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;

	/**
	 * Product code for the ppv
	 *
	 * @var string
	 */
	public $productCode = null;

	/**
	 * Indicates whether or not this ppv can be purchased standalone or only as part of a subscription
	 *
	 * @var bool
	 */
	public $isSubscriptionOnly = null;

	/**
	 * Indicates whether or not this ppv can be consumed only on the first device
	 *
	 * @var bool
	 */
	public $firstDeviceLimitation = null;

	/**
	 * This property will deprecated soon. Please use UsageModuleId instead of it.
	 *
	 * @var Kaltura_Client_Type_UsageModule
	 * @readonly
	 */
	public $usageModule;

	/**
	 * PPV usage module Id
	 *
	 * @var bigint
	 */
	public $usageModuleId = null;

	/**
	 * adsPolicy
	 *
	 * @var Kaltura_Client_Enum_AdsPolicy
	 */
	public $adsPolicy = null;

	/**
	 * Is active ppv
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Specifies when was the ppv last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Specifies when was the ppv created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Virtual asset id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $virtualAssetId = null;

	/**
	 * Asset user rule identifier
	 *
	 * @var bigint
	 */
	public $assetUserRuleId = null;


}

