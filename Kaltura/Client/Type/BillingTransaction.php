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
class Kaltura_Client_Type_BillingTransaction extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBillingTransaction';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->recieptCode))
			$this->recieptCode = (string)$xml->recieptCode;
		if(!is_null($jsonObject) && isset($jsonObject->recieptCode))
			$this->recieptCode = (string)$jsonObject->recieptCode;
		if(!is_null($xml) && count($xml->purchasedItemName))
			$this->purchasedItemName = (string)$xml->purchasedItemName;
		if(!is_null($jsonObject) && isset($jsonObject->purchasedItemName))
			$this->purchasedItemName = (string)$jsonObject->purchasedItemName;
		if(!is_null($xml) && count($xml->purchasedItemCode))
			$this->purchasedItemCode = (string)$xml->purchasedItemCode;
		if(!is_null($jsonObject) && isset($jsonObject->purchasedItemCode))
			$this->purchasedItemCode = (string)$jsonObject->purchasedItemCode;
		if(!is_null($xml) && count($xml->itemType))
			$this->itemType = (string)$xml->itemType;
		if(!is_null($jsonObject) && isset($jsonObject->itemType))
			$this->itemType = (string)$jsonObject->itemType;
		if(!is_null($xml) && count($xml->billingAction))
			$this->billingAction = (string)$xml->billingAction;
		if(!is_null($jsonObject) && isset($jsonObject->billingAction))
			$this->billingAction = (string)$jsonObject->billingAction;
		if(!is_null($xml) && count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(!is_null($jsonObject) && isset($jsonObject->price) && !empty($jsonObject->price))
			$this->price = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->price, "KalturaPrice");
		if(!is_null($xml) && count($xml->actionDate))
			$this->actionDate = (string)$xml->actionDate;
		if(!is_null($jsonObject) && isset($jsonObject->actionDate))
			$this->actionDate = (string)$jsonObject->actionDate;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->paymentMethod))
			$this->paymentMethod = (string)$xml->paymentMethod;
		if(!is_null($jsonObject) && isset($jsonObject->paymentMethod))
			$this->paymentMethod = (string)$jsonObject->paymentMethod;
		if(!is_null($xml) && count($xml->paymentMethodExtraDetails))
			$this->paymentMethodExtraDetails = (string)$xml->paymentMethodExtraDetails;
		if(!is_null($jsonObject) && isset($jsonObject->paymentMethodExtraDetails))
			$this->paymentMethodExtraDetails = (string)$jsonObject->paymentMethodExtraDetails;
		if(!is_null($xml) && count($xml->isRecurring))
		{
			if(!empty($xml->isRecurring) && ((int) $xml->isRecurring === 1 || strtolower((string)$xml->isRecurring) === 'true'))
				$this->isRecurring = true;
			else
				$this->isRecurring = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isRecurring))
		{
			if(!empty($jsonObject->isRecurring) && ((int) $jsonObject->isRecurring === 1 || strtolower((string)$jsonObject->isRecurring) === 'true'))
				$this->isRecurring = true;
			else
				$this->isRecurring = false;
		}
		if(!is_null($xml) && count($xml->billingProviderRef))
			$this->billingProviderRef = (int)$xml->billingProviderRef;
		if(!is_null($jsonObject) && isset($jsonObject->billingProviderRef))
			$this->billingProviderRef = (int)$jsonObject->billingProviderRef;
		if(!is_null($xml) && count($xml->purchaseId))
			$this->purchaseId = (int)$xml->purchaseId;
		if(!is_null($jsonObject) && isset($jsonObject->purchaseId))
			$this->purchaseId = (int)$jsonObject->purchaseId;
		if(!is_null($xml) && count($xml->remarks))
			$this->remarks = (string)$xml->remarks;
		if(!is_null($jsonObject) && isset($jsonObject->remarks))
			$this->remarks = (string)$jsonObject->remarks;
		if(!is_null($xml) && count($xml->billingPriceType))
			$this->billingPriceType = (string)$xml->billingPriceType;
		if(!is_null($jsonObject) && isset($jsonObject->billingPriceType))
			$this->billingPriceType = (string)$jsonObject->billingPriceType;
		if(!is_null($xml) && count($xml->externalTransactionId))
			$this->externalTransactionId = (string)$xml->externalTransactionId;
		if(!is_null($jsonObject) && isset($jsonObject->externalTransactionId))
			$this->externalTransactionId = (string)$jsonObject->externalTransactionId;
	}
	/**
	 * Reciept Code
	 *
	 * @var string
	 * @readonly
	 */
	public $recieptCode = null;

	/**
	 * Purchased Item Name
	 *
	 * @var string
	 * @readonly
	 */
	public $purchasedItemName = null;

	/**
	 * Purchased Item Code
	 *
	 * @var string
	 * @readonly
	 */
	public $purchasedItemCode = null;

	/**
	 * Item Type
	 *
	 * @var Kaltura_Client_Enum_BillingItemsType
	 * @readonly
	 */
	public $itemType = null;

	/**
	 * Billing Action
	 *
	 * @var Kaltura_Client_Enum_BillingAction
	 * @readonly
	 */
	public $billingAction = null;

	/**
	 * price
	 *
	 * @var Kaltura_Client_Type_Price
	 * @readonly
	 */
	public $price;

	/**
	 * Action Date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $actionDate = null;

	/**
	 * Start Date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $startDate = null;

	/**
	 * End Date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $endDate = null;

	/**
	 * Payment Method
	 *
	 * @var Kaltura_Client_Enum_PaymentMethodType
	 * @readonly
	 */
	public $paymentMethod = null;

	/**
	 * Payment Method Extra Details
	 *
	 * @var string
	 * @readonly
	 */
	public $paymentMethodExtraDetails = null;

	/**
	 * Is Recurring
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRecurring = null;

	/**
	 * Billing Provider Ref
	 *
	 * @var int
	 * @readonly
	 */
	public $billingProviderRef = null;

	/**
	 * Purchase ID
	 *
	 * @var int
	 * @readonly
	 */
	public $purchaseId = null;

	/**
	 * Remarks
	 *
	 * @var string
	 * @readonly
	 */
	public $remarks = null;

	/**
	 * Billing Price Info
	 *
	 * @var Kaltura_Client_Enum_BillingPriceType
	 * @readonly
	 */
	public $billingPriceType = null;

	/**
	 * External Transaction Id
	 *
	 * @var string
	 * @readonly
	 */
	public $externalTransactionId = null;


}

