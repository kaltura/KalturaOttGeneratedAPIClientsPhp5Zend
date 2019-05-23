<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->productId))
			$this->productId = (string)$xml->productId;
		if(count($xml->currentUses))
			$this->currentUses = (int)$xml->currentUses;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->currentDate))
			$this->currentDate = (string)$xml->currentDate;
		if(count($xml->lastViewDate))
			$this->lastViewDate = (string)$xml->lastViewDate;
		if(count($xml->purchaseDate))
			$this->purchaseDate = (string)$xml->purchaseDate;
		if(count($xml->paymentMethod))
			$this->paymentMethod = (string)$xml->paymentMethod;
		if(count($xml->deviceUdid))
			$this->deviceUdid = (string)$xml->deviceUdid;
		if(count($xml->deviceName))
			$this->deviceName = (string)$xml->deviceName;
		if(count($xml->isCancelationWindowEnabled))
		{
			if(!empty($xml->isCancelationWindowEnabled) && ((int) $xml->isCancelationWindowEnabled === 1 || strtolower((string)$xml->isCancelationWindowEnabled) === 'true'))
				$this->isCancelationWindowEnabled = true;
			else
				$this->isCancelationWindowEnabled = false;
		}
		if(count($xml->maxUses))
			$this->maxUses = (int)$xml->maxUses;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->householdId))
			$this->householdId = (string)$xml->householdId;
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
	 * @readonly
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


}

