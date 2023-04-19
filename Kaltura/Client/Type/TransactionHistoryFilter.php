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
class Kaltura_Client_Type_TransactionHistoryFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaTransactionHistoryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->entityReferenceEqual))
			$this->entityReferenceEqual = (string)$xml->entityReferenceEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entityReferenceEqual))
			$this->entityReferenceEqual = (string)$jsonObject->entityReferenceEqual;
		if(!is_null($xml) && count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$xml->startDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$jsonObject->startDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$xml->endDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$jsonObject->endDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->entitlementIdEqual))
			$this->entitlementIdEqual = (string)$xml->entitlementIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entitlementIdEqual))
			$this->entitlementIdEqual = (string)$jsonObject->entitlementIdEqual;
		if(!is_null($xml) && count($xml->externalIdEqual))
			$this->externalIdEqual = (string)$xml->externalIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->externalIdEqual))
			$this->externalIdEqual = (string)$jsonObject->externalIdEqual;
		if(!is_null($xml) && count($xml->billingItemsTypeEqual))
			$this->billingItemsTypeEqual = (string)$xml->billingItemsTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->billingItemsTypeEqual))
			$this->billingItemsTypeEqual = (string)$jsonObject->billingItemsTypeEqual;
		if(!is_null($xml) && count($xml->billingActionEqual))
			$this->billingActionEqual = (string)$xml->billingActionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->billingActionEqual))
			$this->billingActionEqual = (string)$jsonObject->billingActionEqual;
	}
	/**
	 * Reference type to filter by
	 *
	 * @var Kaltura_Client_Enum_EntityReferenceBy
	 */
	public $entityReferenceEqual = null;

	/**
	 * Filter transactions later than specific date
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * Filter transactions earlier than specific date
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqual = null;

	/**
	 * Filter transaction by entitlement id
	 *
	 * @var bigint
	 */
	public $entitlementIdEqual = null;

	/**
	 * Filter transaction by external Id
	 *
	 * @var string
	 */
	public $externalIdEqual = null;

	/**
	 * Filter transaction by billing item type
	 *
	 * @var Kaltura_Client_Enum_BillingItemsType
	 */
	public $billingItemsTypeEqual = null;

	/**
	 * Filter transaction by billing action
	 *
	 * @var Kaltura_Client_Enum_BillingAction
	 */
	public $billingActionEqual = null;


}

