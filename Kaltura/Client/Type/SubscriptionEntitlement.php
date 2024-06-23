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
class Kaltura_Client_Type_SubscriptionEntitlement extends Kaltura_Client_Type_Entitlement
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscriptionEntitlement';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->nextRenewalDate))
			$this->nextRenewalDate = (string)$xml->nextRenewalDate;
		if(!is_null($jsonObject) && isset($jsonObject->nextRenewalDate))
			$this->nextRenewalDate = (string)$jsonObject->nextRenewalDate;
		if(!is_null($xml) && count($xml->isRenewableForPurchase))
		{
			if(!empty($xml->isRenewableForPurchase) && ((int) $xml->isRenewableForPurchase === 1 || strtolower((string)$xml->isRenewableForPurchase) === 'true'))
				$this->isRenewableForPurchase = true;
			else
				$this->isRenewableForPurchase = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isRenewableForPurchase))
		{
			if(!empty($jsonObject->isRenewableForPurchase) && ((int) $jsonObject->isRenewableForPurchase === 1 || strtolower((string)$jsonObject->isRenewableForPurchase) === 'true'))
				$this->isRenewableForPurchase = true;
			else
				$this->isRenewableForPurchase = false;
		}
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
		if(!is_null($xml) && count($xml->isInGracePeriod))
		{
			if(!empty($xml->isInGracePeriod) && ((int) $xml->isInGracePeriod === 1 || strtolower((string)$xml->isInGracePeriod) === 'true'))
				$this->isInGracePeriod = true;
			else
				$this->isInGracePeriod = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isInGracePeriod))
		{
			if(!empty($jsonObject->isInGracePeriod) && ((int) $jsonObject->isInGracePeriod === 1 || strtolower((string)$jsonObject->isInGracePeriod) === 'true'))
				$this->isInGracePeriod = true;
			else
				$this->isInGracePeriod = false;
		}
		if(!is_null($xml) && count($xml->paymentGatewayId))
			$this->paymentGatewayId = (int)$xml->paymentGatewayId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentGatewayId))
			$this->paymentGatewayId = (int)$jsonObject->paymentGatewayId;
		if(!is_null($xml) && count($xml->paymentMethodId))
			$this->paymentMethodId = (int)$xml->paymentMethodId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentMethodId))
			$this->paymentMethodId = (int)$jsonObject->paymentMethodId;
		if(!is_null($xml) && count($xml->scheduledSubscriptionId))
			$this->scheduledSubscriptionId = (string)$xml->scheduledSubscriptionId;
		if(!is_null($jsonObject) && isset($jsonObject->scheduledSubscriptionId))
			$this->scheduledSubscriptionId = (string)$jsonObject->scheduledSubscriptionId;
		if(!is_null($xml) && count($xml->unifiedPaymentId))
			$this->unifiedPaymentId = (string)$xml->unifiedPaymentId;
		if(!is_null($jsonObject) && isset($jsonObject->unifiedPaymentId))
			$this->unifiedPaymentId = (string)$jsonObject->unifiedPaymentId;
		if(!is_null($xml) && count($xml->isSuspended))
		{
			if(!empty($xml->isSuspended) && ((int) $xml->isSuspended === 1 || strtolower((string)$xml->isSuspended) === 'true'))
				$this->isSuspended = true;
			else
				$this->isSuspended = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSuspended))
		{
			if(!empty($jsonObject->isSuspended) && ((int) $jsonObject->isSuspended === 1 || strtolower((string)$jsonObject->isSuspended) === 'true'))
				$this->isSuspended = true;
			else
				$this->isSuspended = false;
		}
		if(!is_null($xml) && count($xml->priceDetails) && !empty($xml->priceDetails))
			$this->priceDetails = Kaltura_Client_ParseUtils::unmarshalObject($xml->priceDetails, "KalturaEntitlementPriceDetails");
		if(!is_null($jsonObject) && isset($jsonObject->priceDetails) && !empty($jsonObject->priceDetails))
			$this->priceDetails = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->priceDetails, "KalturaEntitlementPriceDetails");
		if(!is_null($xml) && count($xml->isFlexiblePricePlan))
		{
			if(!empty($xml->isFlexiblePricePlan) && ((int) $xml->isFlexiblePricePlan === 1 || strtolower((string)$xml->isFlexiblePricePlan) === 'true'))
				$this->isFlexiblePricePlan = true;
			else
				$this->isFlexiblePricePlan = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isFlexiblePricePlan))
		{
			if(!empty($jsonObject->isFlexiblePricePlan) && ((int) $jsonObject->isFlexiblePricePlan === 1 || strtolower((string)$jsonObject->isFlexiblePricePlan) === 'true'))
				$this->isFlexiblePricePlan = true;
			else
				$this->isFlexiblePricePlan = false;
		}
	}
	/**
	 * The date of the next renewal (only for subscription)
	 *
	 * @var bigint
	 * @readonly
	 */
	public $nextRenewalDate = null;

	/**
	 * Indicates whether the subscription is renewable in this purchase (only for subscription)
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRenewableForPurchase = null;

	/**
	 * Indicates whether a subscription is renewable (only for subscription)
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRenewable = null;

	/**
	 * Indicates whether the user is currently in his grace period entitlement
	 *
	 * @var bool
	 * @readonly
	 */
	public $isInGracePeriod = null;

	/**
	 * Payment Gateway identifier
	 *
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Payment Method identifier
	 *
	 * @var int
	 */
	public $paymentMethodId = null;

	/**
	 * Scheduled Subscription Identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $scheduledSubscriptionId = null;

	/**
	 * Unified payment identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $unifiedPaymentId = null;

	/**
	 * Indicates if the subscription suspended
	 *
	 * @var bool
	 * @readonly
	 */
	public $isSuspended = null;

	/**
	 * Price details
	 *
	 * @var Kaltura_Client_Type_EntitlementPriceDetails
	 * @readonly
	 */
	public $priceDetails;

	/**
	 * Indicates whether the subscription is now within the flexible price plan lifecycle or not
	 *
	 * @var bool
	 * @readonly
	 */
	public $isFlexiblePricePlan = null;


}

