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
class Kaltura_Client_Type_Subscription extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscription';
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
		if(!is_null($xml) && count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable) && ((int) $xml->isRenewable === 1 || strtolower((string)$xml->isRenewable) === 'true'))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isRenewable))
		{
			if(!empty($jsonObject->isRenewable) && ((int) $jsonObject->isRenewable === 1 || strtolower((string)$jsonObject->isRenewable) === 'true'))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(!is_null($xml) && count($xml->renewalsNumber))
			$this->renewalsNumber = (int)$xml->renewalsNumber;
		if(!is_null($jsonObject) && isset($jsonObject->renewalsNumber))
			$this->renewalsNumber = (int)$jsonObject->renewalsNumber;
		if(!is_null($xml) && count($xml->isInfiniteRenewal))
		{
			if(!empty($xml->isInfiniteRenewal) && ((int) $xml->isInfiniteRenewal === 1 || strtolower((string)$xml->isInfiniteRenewal) === 'true'))
				$this->isInfiniteRenewal = true;
			else
				$this->isInfiniteRenewal = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isInfiniteRenewal))
		{
			if(!empty($jsonObject->isInfiniteRenewal) && ((int) $jsonObject->isInfiniteRenewal === 1 || strtolower((string)$jsonObject->isInfiniteRenewal) === 'true'))
				$this->isInfiniteRenewal = true;
			else
				$this->isInfiniteRenewal = false;
		}
		if(!is_null($xml) && count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(!is_null($jsonObject) && isset($jsonObject->price) && !empty($jsonObject->price))
			$this->price = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->price, "KalturaPriceDetails");
		if(!is_null($xml) && count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(!is_null($jsonObject) && isset($jsonObject->discountModule) && !empty($jsonObject->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->discountModule, "KalturaDiscountModule");
		if(!is_null($xml) && count($xml->internalDiscountModuleId))
			$this->internalDiscountModuleId = (string)$xml->internalDiscountModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->internalDiscountModuleId))
			$this->internalDiscountModuleId = (string)$jsonObject->internalDiscountModuleId;
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
		if(!is_null($xml) && count($xml->mediaId))
			$this->mediaId = (int)$xml->mediaId;
		if(!is_null($jsonObject) && isset($jsonObject->mediaId))
			$this->mediaId = (int)$jsonObject->mediaId;
		if(!is_null($xml) && count($xml->prorityInOrder))
			$this->prorityInOrder = (string)$xml->prorityInOrder;
		if(!is_null($jsonObject) && isset($jsonObject->prorityInOrder))
			$this->prorityInOrder = (string)$jsonObject->prorityInOrder;
		if(!is_null($xml) && count($xml->pricePlanIds))
			$this->pricePlanIds = (string)$xml->pricePlanIds;
		if(!is_null($jsonObject) && isset($jsonObject->pricePlanIds))
			$this->pricePlanIds = (string)$jsonObject->pricePlanIds;
		if(!is_null($xml) && count($xml->previewModule) && !empty($xml->previewModule))
			$this->previewModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->previewModule, "KalturaPreviewModule");
		if(!is_null($jsonObject) && isset($jsonObject->previewModule) && !empty($jsonObject->previewModule))
			$this->previewModule = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->previewModule, "KalturaPreviewModule");
		if(!is_null($xml) && count($xml->previewModuleId))
			$this->previewModuleId = (string)$xml->previewModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->previewModuleId))
			$this->previewModuleId = (string)$jsonObject->previewModuleId;
		if(!is_null($xml) && count($xml->householdLimitationsId))
			$this->householdLimitationsId = (int)$xml->householdLimitationsId;
		if(!is_null($jsonObject) && isset($jsonObject->householdLimitationsId))
			$this->householdLimitationsId = (int)$jsonObject->householdLimitationsId;
		if(!is_null($xml) && count($xml->gracePeriodMinutes))
			$this->gracePeriodMinutes = (int)$xml->gracePeriodMinutes;
		if(!is_null($jsonObject) && isset($jsonObject->gracePeriodMinutes))
			$this->gracePeriodMinutes = (int)$jsonObject->gracePeriodMinutes;
		if(!is_null($xml) && count($xml->premiumServices))
		{
			if(empty($xml->premiumServices))
				$this->premiumServices = array();
			else
				$this->premiumServices = Kaltura_Client_ParseUtils::unmarshalArray($xml->premiumServices, "KalturaPremiumService");
		}
		if(!is_null($jsonObject) && isset($jsonObject->premiumServices))
		{
			if(empty($jsonObject->premiumServices))
				$this->premiumServices = array();
			else
				$this->premiumServices = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->premiumServices, "KalturaPremiumService");
		}
		if(!is_null($xml) && count($xml->maxViewsNumber))
			$this->maxViewsNumber = (int)$xml->maxViewsNumber;
		if(!is_null($jsonObject) && isset($jsonObject->maxViewsNumber))
			$this->maxViewsNumber = (int)$jsonObject->maxViewsNumber;
		if(!is_null($xml) && count($xml->viewLifeCycle))
			$this->viewLifeCycle = (int)$xml->viewLifeCycle;
		if(!is_null($jsonObject) && isset($jsonObject->viewLifeCycle))
			$this->viewLifeCycle = (int)$jsonObject->viewLifeCycle;
		if(!is_null($xml) && count($xml->waiverPeriod))
			$this->waiverPeriod = (int)$xml->waiverPeriod;
		if(!is_null($jsonObject) && isset($jsonObject->waiverPeriod))
			$this->waiverPeriod = (int)$jsonObject->waiverPeriod;
		if(!is_null($xml) && count($xml->isWaiverEnabled))
		{
			if(!empty($xml->isWaiverEnabled) && ((int) $xml->isWaiverEnabled === 1 || strtolower((string)$xml->isWaiverEnabled) === 'true'))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isWaiverEnabled))
		{
			if(!empty($jsonObject->isWaiverEnabled) && ((int) $jsonObject->isWaiverEnabled === 1 || strtolower((string)$jsonObject->isWaiverEnabled) === 'true'))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(!is_null($xml) && count($xml->userTypes))
		{
			if(empty($xml->userTypes))
				$this->userTypes = array();
			else
				$this->userTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->userTypes, "KalturaOTTUserType");
		}
		if(!is_null($jsonObject) && isset($jsonObject->userTypes))
		{
			if(empty($jsonObject->userTypes))
				$this->userTypes = array();
			else
				$this->userTypes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->userTypes, "KalturaOTTUserType");
		}
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
		if(!is_null($xml) && count($xml->subscriptionCouponGroup))
		{
			if(empty($xml->subscriptionCouponGroup))
				$this->subscriptionCouponGroup = array();
			else
				$this->subscriptionCouponGroup = Kaltura_Client_ParseUtils::unmarshalArray($xml->subscriptionCouponGroup, "KalturaSubscriptionCouponGroup");
		}
		if(!is_null($jsonObject) && isset($jsonObject->subscriptionCouponGroup))
		{
			if(empty($jsonObject->subscriptionCouponGroup))
				$this->subscriptionCouponGroup = array();
			else
				$this->subscriptionCouponGroup = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->subscriptionCouponGroup, "KalturaSubscriptionCouponGroup");
		}
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
		if(!is_null($xml) && count($xml->dependencyType))
			$this->dependencyType = (string)$xml->dependencyType;
		if(!is_null($jsonObject) && isset($jsonObject->dependencyType))
			$this->dependencyType = (string)$jsonObject->dependencyType;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->isCancellationBlocked))
		{
			if(!empty($xml->isCancellationBlocked) && ((int) $xml->isCancellationBlocked === 1 || strtolower((string)$xml->isCancellationBlocked) === 'true'))
				$this->isCancellationBlocked = true;
			else
				$this->isCancellationBlocked = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isCancellationBlocked))
		{
			if(!empty($jsonObject->isCancellationBlocked) && ((int) $jsonObject->isCancellationBlocked === 1 || strtolower((string)$jsonObject->isCancellationBlocked) === 'true'))
				$this->isCancellationBlocked = true;
			else
				$this->isCancellationBlocked = false;
		}
		if(!is_null($xml) && count($xml->preSaleDate))
			$this->preSaleDate = (string)$xml->preSaleDate;
		if(!is_null($jsonObject) && isset($jsonObject->preSaleDate))
			$this->preSaleDate = (string)$jsonObject->preSaleDate;
		if(!is_null($xml) && count($xml->adsPolicy))
			$this->adsPolicy = (string)$xml->adsPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->adsPolicy))
			$this->adsPolicy = (string)$jsonObject->adsPolicy;
		if(!is_null($xml) && count($xml->adsParam))
			$this->adsParam = (string)$xml->adsParam;
		if(!is_null($jsonObject) && isset($jsonObject->adsParam))
			$this->adsParam = (string)$jsonObject->adsParam;
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
	}
	/**
	 * Subscription identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * A list of channels associated with this subscription
	 *
	 * @var array of KalturaBaseChannel
	 * @readonly
	 */
	public $channels;

	/**
	 * Comma separated channels Ids associated with this subscription
	 *
	 * @var string
	 */
	public $channelsIds = null;

	/**
	 * The first date the subscription is available for purchasing
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * The last date the subscription is available for purchasing
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * A list of file types identifiers that are supported in this subscription
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
	 * Denotes whether or not this subscription can be renewed
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times this subscription will be renewed
	 *
	 * @var int
	 * @readonly
	 */
	public $renewalsNumber = null;

	/**
	 * Indicates whether the subscription will renew forever
	 *
	 * @var bool
	 * @readonly
	 */
	public $isInfiniteRenewal = null;

	/**
	 * The price of the subscription
	 *
	 * @var Kaltura_Client_Type_PriceDetails
	 * @readonly
	 */
	public $price;

	/**
	 * The internal discount module for the subscription
	 *
	 * @var Kaltura_Client_Type_DiscountModule
	 * @readonly
	 */
	public $discountModule;

	/**
	 * The internal discount module identifier for the subscription
	 *
	 * @var bigint
	 */
	public $internalDiscountModuleId = null;

	/**
	 * Name of the subscription
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Name of the subscription
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualName;

	/**
	 * description of the subscription
	 *
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * description of the subscription
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualDescription;

	/**
	 * Identifier of the media associated with the subscription
	 *
	 * @var int
	 * @readonly
	 */
	public $mediaId = null;

	/**
	 * Subscription order (when returned in methods that retrieve subscriptions)
	 *
	 * @var bigint
	 */
	public $prorityInOrder = null;

	/**
	 * Comma separated subscription price plan IDs
	 *
	 * @var string
	 */
	public $pricePlanIds = null;

	/**
	 * Subscription preview module
	 *
	 * @var Kaltura_Client_Type_PreviewModule
	 * @readonly
	 */
	public $previewModule;

	/**
	 * Subscription preview module identifier
	 *
	 * @var bigint
	 */
	public $previewModuleId = null;

	/**
	 * The household limitation module identifier associated with this subscription
	 *
	 * @var int
	 */
	public $householdLimitationsId = null;

	/**
	 * The subscription grace period in minutes
	 *
	 * @var int
	 */
	public $gracePeriodMinutes = null;

	/**
	 * List of premium services included in the subscription
	 *
	 * @var array of KalturaPremiumService
	 */
	public $premiumServices;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 *
	 * @var int
	 * @readonly
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 *
	 * @var int
	 * @readonly
	 */
	public $viewLifeCycle = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 *
	 * @var int
	 * @readonly
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 *
	 * @var bool
	 * @readonly
	 */
	public $isWaiverEnabled = null;

	/**
	 * List of permitted user types for the subscription
	 *
	 * @var array of KalturaOTTUserType
	 * @readonly
	 */
	public $userTypes;

	/**
	 * List of Coupons group
	 *
	 * @var array of KalturaCouponsGroup
	 * @readonly
	 */
	public $couponsGroups;

	/**
	 * List of subscription Coupons group
	 *
	 * @var array of KalturaSubscriptionCouponGroup
	 */
	public $subscriptionCouponGroup;

	/**
	 * List of Subscription product codes
	 *
	 * @var array of KalturaProductCode
	 */
	public $productCodes;

	/**
	 * Dependency Type
	 *
	 * @var Kaltura_Client_Enum_SubscriptionDependencyType
	 */
	public $dependencyType = null;

	/**
	 * External ID
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Is cancellation blocked for the subscription
	 *
	 * @var bool
	 */
	public $isCancellationBlocked = null;

	/**
	 * The Pre-Sale date the subscription is available for purchasing
	 *
	 * @var bigint
	 */
	public $preSaleDate = null;

	/**
	 * Ads policy
	 *
	 * @var Kaltura_Client_Enum_AdsPolicy
	 */
	public $adsPolicy = null;

	/**
	 * The parameters to pass to the ads server
	 *
	 * @var string
	 */
	public $adsParam = null;

	/**
	 * Is active subscription
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Specifies when was the Subscription created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Subscription last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

