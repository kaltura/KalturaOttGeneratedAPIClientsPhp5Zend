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
class Kaltura_Client_Type_Entitlement extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntitlement';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->productId))
			$this->productId = (string)$xml->productId;
		if(!is_null($jsonObject) && isset($jsonObject->productId))
			$this->productId = (string)$jsonObject->productId;
		if(!is_null($xml) && count($xml->currentUses))
			$this->currentUses = (int)$xml->currentUses;
		if(!is_null($jsonObject) && isset($jsonObject->currentUses))
			$this->currentUses = (int)$jsonObject->currentUses;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->currentDate))
			$this->currentDate = (string)$xml->currentDate;
		if(!is_null($jsonObject) && isset($jsonObject->currentDate))
			$this->currentDate = (string)$jsonObject->currentDate;
		if(!is_null($xml) && count($xml->lastViewDate))
			$this->lastViewDate = (string)$xml->lastViewDate;
		if(!is_null($jsonObject) && isset($jsonObject->lastViewDate))
			$this->lastViewDate = (string)$jsonObject->lastViewDate;
		if(!is_null($xml) && count($xml->purchaseDate))
			$this->purchaseDate = (string)$xml->purchaseDate;
		if(!is_null($jsonObject) && isset($jsonObject->purchaseDate))
			$this->purchaseDate = (string)$jsonObject->purchaseDate;
		if(!is_null($xml) && count($xml->paymentMethod))
			$this->paymentMethod = (string)$xml->paymentMethod;
		if(!is_null($jsonObject) && isset($jsonObject->paymentMethod))
			$this->paymentMethod = (string)$jsonObject->paymentMethod;
		if(!is_null($xml) && count($xml->deviceUdid))
			$this->deviceUdid = (string)$xml->deviceUdid;
		if(!is_null($jsonObject) && isset($jsonObject->deviceUdid))
			$this->deviceUdid = (string)$jsonObject->deviceUdid;
		if(!is_null($xml) && count($xml->deviceName))
			$this->deviceName = (string)$xml->deviceName;
		if(!is_null($jsonObject) && isset($jsonObject->deviceName))
			$this->deviceName = (string)$jsonObject->deviceName;
		if(!is_null($xml) && count($xml->isCancelationWindowEnabled))
		{
			if(!empty($xml->isCancelationWindowEnabled) && ((int) $xml->isCancelationWindowEnabled === 1 || strtolower((string)$xml->isCancelationWindowEnabled) === 'true'))
				$this->isCancelationWindowEnabled = true;
			else
				$this->isCancelationWindowEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isCancelationWindowEnabled))
		{
			if(!empty($jsonObject->isCancelationWindowEnabled) && ((int) $jsonObject->isCancelationWindowEnabled === 1 || strtolower((string)$jsonObject->isCancelationWindowEnabled) === 'true'))
				$this->isCancelationWindowEnabled = true;
			else
				$this->isCancelationWindowEnabled = false;
		}
		if(!is_null($xml) && count($xml->maxUses))
			$this->maxUses = (int)$xml->maxUses;
		if(!is_null($jsonObject) && isset($jsonObject->maxUses))
			$this->maxUses = (int)$jsonObject->maxUses;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->householdId))
			$this->householdId = (string)$xml->householdId;
		if(!is_null($jsonObject) && isset($jsonObject->householdId))
			$this->householdId = (string)$jsonObject->householdId;
		if(!is_null($xml) && count($xml->isPending))
		{
			if(!empty($xml->isPending) && ((int) $xml->isPending === 1 || strtolower((string)$xml->isPending) === 'true'))
				$this->isPending = true;
			else
				$this->isPending = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isPending))
		{
			if(!empty($jsonObject->isPending) && ((int) $jsonObject->isPending === 1 || strtolower((string)$jsonObject->isPending) === 'true'))
				$this->isPending = true;
			else
				$this->isPending = false;
		}
	}
	/**
	 * Purchase identifier (for subscriptions and collections only)
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Product identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $productId = null;

	/**
	 * The current number of uses
	 *
	 * @var int
	 * @readonly
	 */
	public $currentUses = null;

	/**
	 * The end date of the entitlement
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * Current date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $currentDate = null;

	/**
	 * The last date the item was viewed
	 *
	 * @var bigint
	 * @readonly
	 */
	public $lastViewDate = null;

	/**
	 * Purchase date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $purchaseDate = null;

	/**
	 * Payment Method
	 *
	 * @var Kaltura_Client_Enum_PaymentMethodType
	 * @readonly
	 */
	public $paymentMethod = null;

	/**
	 * The UDID of the device from which the purchase was made
	 *
	 * @var string
	 * @readonly
	 */
	public $deviceUdid = null;

	/**
	 * The name of the device from which the purchase was made
	 *
	 * @var string
	 * @readonly
	 */
	public $deviceName = null;

	/**
	 * Indicates whether a cancelation window period is enabled
	 *
	 * @var bool
	 * @readonly
	 */
	public $isCancelationWindowEnabled = null;

	/**
	 * The maximum number of uses available for this item (only for subscription and PPV)
	 *
	 * @var int
	 * @readonly
	 */
	public $maxUses = null;

	/**
	 * The Identifier of the purchasing user
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The Identifier of the purchasing household
	 *
	 * @var bigint
	 * @readonly
	 */
	public $householdId = null;

	/**
	 * Indicates whether the asynchronous purchase is pending
	 *
	 * @var bool
	 */
	public $isPending = null;


}

