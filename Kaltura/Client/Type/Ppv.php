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
class Kaltura_Client_Type_Ppv extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPpv';
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
		if(!is_null($xml) && count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(!is_null($jsonObject) && isset($jsonObject->price) && !empty($jsonObject->price))
			$this->price = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->price, "KalturaPriceDetails");
		if(!is_null($xml) && count($xml->priceDetailsId))
			$this->priceDetailsId = (int)$xml->priceDetailsId;
		if(!is_null($jsonObject) && isset($jsonObject->priceDetailsId))
			$this->priceDetailsId = (int)$jsonObject->priceDetailsId;
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
		if(!is_null($xml) && count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(!is_null($jsonObject) && isset($jsonObject->discountModule) && !empty($jsonObject->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->discountModule, "KalturaDiscountModule");
		if(!is_null($xml) && count($xml->discountId))
			$this->discountId = (string)$xml->discountId;
		if(!is_null($jsonObject) && isset($jsonObject->discountId))
			$this->discountId = (string)$jsonObject->discountId;
		if(!is_null($xml) && count($xml->couponsGroup) && !empty($xml->couponsGroup))
			$this->couponsGroup = Kaltura_Client_ParseUtils::unmarshalObject($xml->couponsGroup, "KalturaCouponsGroup");
		if(!is_null($jsonObject) && isset($jsonObject->couponsGroup) && !empty($jsonObject->couponsGroup))
			$this->couponsGroup = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->couponsGroup, "KalturaCouponsGroup");
		if(!is_null($xml) && count($xml->couponsGroupId))
			$this->couponsGroupId = (string)$xml->couponsGroupId;
		if(!is_null($jsonObject) && isset($jsonObject->couponsGroupId))
			$this->couponsGroupId = (string)$jsonObject->couponsGroupId;
		if(!is_null($xml) && count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->descriptions))
		{
			if(empty($jsonObject->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->descriptions, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->productCode))
			$this->productCode = (string)$xml->productCode;
		if(!is_null($jsonObject) && isset($jsonObject->productCode))
			$this->productCode = (string)$jsonObject->productCode;
		if(!is_null($xml) && count($xml->isSubscriptionOnly))
		{
			if(!empty($xml->isSubscriptionOnly) && ((int) $xml->isSubscriptionOnly === 1 || strtolower((string)$xml->isSubscriptionOnly) === 'true'))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSubscriptionOnly))
		{
			if(!empty($jsonObject->isSubscriptionOnly) && ((int) $jsonObject->isSubscriptionOnly === 1 || strtolower((string)$jsonObject->isSubscriptionOnly) === 'true'))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(!is_null($xml) && count($xml->firstDeviceLimitation))
		{
			if(!empty($xml->firstDeviceLimitation) && ((int) $xml->firstDeviceLimitation === 1 || strtolower((string)$xml->firstDeviceLimitation) === 'true'))
				$this->firstDeviceLimitation = true;
			else
				$this->firstDeviceLimitation = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->firstDeviceLimitation))
		{
			if(!empty($jsonObject->firstDeviceLimitation) && ((int) $jsonObject->firstDeviceLimitation === 1 || strtolower((string)$jsonObject->firstDeviceLimitation) === 'true'))
				$this->firstDeviceLimitation = true;
			else
				$this->firstDeviceLimitation = false;
		}
		if(!is_null($xml) && count($xml->usageModule) && !empty($xml->usageModule))
			$this->usageModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->usageModule, "KalturaUsageModule");
		if(!is_null($jsonObject) && isset($jsonObject->usageModule) && !empty($jsonObject->usageModule))
			$this->usageModule = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->usageModule, "KalturaUsageModule");
		if(!is_null($xml) && count($xml->usageModuleId))
			$this->usageModuleId = (string)$xml->usageModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->usageModuleId))
			$this->usageModuleId = (string)$jsonObject->usageModuleId;
		if(!is_null($xml) && count($xml->adsPolicy))
			$this->adsPolicy = (string)$xml->adsPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->adsPolicy))
			$this->adsPolicy = (string)$jsonObject->adsPolicy;
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
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->virtualAssetId))
			$this->virtualAssetId = (string)$jsonObject->virtualAssetId;
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
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
	 * @var Kaltura_Client_Type_IntegerValue[]
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
	 * @var Kaltura_Client_Type_TranslationToken[]
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
	 * @insertonly
	 */
	public $assetUserRuleId = null;


}

