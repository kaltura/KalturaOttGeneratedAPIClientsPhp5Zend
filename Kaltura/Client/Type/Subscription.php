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
class Kaltura_Client_Type_Subscription extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscription';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = Kaltura_Client_ParseUtils::unmarshalArray($xml->channels, "KalturaBaseChannel");
		}
		if(count($xml->channelsIds))
			$this->channelsIds = (string)$xml->channelsIds;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->fileTypes))
		{
			if(empty($xml->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->fileTypes, "KalturaIntegerValue");
		}
		if(count($xml->fileTypesIds))
			$this->fileTypesIds = (string)$xml->fileTypesIds;
		if(count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable) && ((int) $xml->isRenewable === 1 || strtolower((string)$xml->isRenewable) === 'true'))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(count($xml->renewalsNumber))
			$this->renewalsNumber = (int)$xml->renewalsNumber;
		if(count($xml->isInfiniteRenewal))
		{
			if(!empty($xml->isInfiniteRenewal) && ((int) $xml->isInfiniteRenewal === 1 || strtolower((string)$xml->isInfiniteRenewal) === 'true'))
				$this->isInfiniteRenewal = true;
			else
				$this->isInfiniteRenewal = false;
		}
		if(count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(count($xml->internalDiscountModuleId))
			$this->internalDiscountModuleId = (string)$xml->internalDiscountModuleId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(count($xml->mediaId))
			$this->mediaId = (int)$xml->mediaId;
		if(count($xml->prorityInOrder))
			$this->prorityInOrder = (string)$xml->prorityInOrder;
		if(count($xml->pricePlanIds))
			$this->pricePlanIds = (string)$xml->pricePlanIds;
		if(count($xml->previewModule) && !empty($xml->previewModule))
			$this->previewModule = Kaltura_Client_ParseUtils::unmarshalObject($xml->previewModule, "KalturaPreviewModule");
		if(count($xml->previewModuleId))
			$this->previewModuleId = (string)$xml->previewModuleId;
		if(count($xml->householdLimitationsId))
			$this->householdLimitationsId = (int)$xml->householdLimitationsId;
		if(count($xml->gracePeriodMinutes))
			$this->gracePeriodMinutes = (int)$xml->gracePeriodMinutes;
		if(count($xml->premiumServices))
		{
			if(empty($xml->premiumServices))
				$this->premiumServices = array();
			else
				$this->premiumServices = Kaltura_Client_ParseUtils::unmarshalArray($xml->premiumServices, "KalturaPremiumService");
		}
		if(count($xml->maxViewsNumber))
			$this->maxViewsNumber = (int)$xml->maxViewsNumber;
		if(count($xml->viewLifeCycle))
			$this->viewLifeCycle = (int)$xml->viewLifeCycle;
		if(count($xml->waiverPeriod))
			$this->waiverPeriod = (int)$xml->waiverPeriod;
		if(count($xml->isWaiverEnabled))
		{
			if(!empty($xml->isWaiverEnabled) && ((int) $xml->isWaiverEnabled === 1 || strtolower((string)$xml->isWaiverEnabled) === 'true'))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(count($xml->userTypes))
		{
			if(empty($xml->userTypes))
				$this->userTypes = array();
			else
				$this->userTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->userTypes, "KalturaOTTUserType");
		}
		if(count($xml->couponsGroups))
		{
			if(empty($xml->couponsGroups))
				$this->couponsGroups = array();
			else
				$this->couponsGroups = Kaltura_Client_ParseUtils::unmarshalArray($xml->couponsGroups, "KalturaCouponsGroup");
		}
		if(count($xml->subscriptionCouponGroup))
		{
			if(empty($xml->subscriptionCouponGroup))
				$this->subscriptionCouponGroup = array();
			else
				$this->subscriptionCouponGroup = Kaltura_Client_ParseUtils::unmarshalArray($xml->subscriptionCouponGroup, "KalturaSubscriptionCouponGroup");
		}
		if(count($xml->productCodes))
		{
			if(empty($xml->productCodes))
				$this->productCodes = array();
			else
				$this->productCodes = Kaltura_Client_ParseUtils::unmarshalArray($xml->productCodes, "KalturaProductCode");
		}
		if(count($xml->dependencyType))
			$this->dependencyType = (string)$xml->dependencyType;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->isCancellationBlocked))
		{
			if(!empty($xml->isCancellationBlocked) && ((int) $xml->isCancellationBlocked === 1 || strtolower((string)$xml->isCancellationBlocked) === 'true'))
				$this->isCancellationBlocked = true;
			else
				$this->isCancellationBlocked = false;
		}
		if(count($xml->preSaleDate))
			$this->preSaleDate = (string)$xml->preSaleDate;
		if(count($xml->adsPolicy))
			$this->adsPolicy = (string)$xml->adsPolicy;
		if(count($xml->adsParam))
			$this->adsParam = (string)$xml->adsParam;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
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


}

