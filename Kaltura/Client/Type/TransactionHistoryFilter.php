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
class Kaltura_Client_Type_TransactionHistoryFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaTransactionHistoryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->entityReferenceEqual))
		{
			if(isset($xml->entityReferenceEqual->item) && count($xml->entityReferenceEqual->item))
				$this->multiLingual_entityReferenceEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->entityReferenceEqual, '');
			else
				$this->entityReferenceEqual = (string)$xml->entityReferenceEqual;
		}
		if(count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$xml->startDateGreaterThanOrEqual;
		if(count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$xml->endDateLessThanOrEqual;
		if(count($xml->entitlementIdEqual))
			$this->entitlementIdEqual = (string)$xml->entitlementIdEqual;
		if(count($xml->externalIdEqual))
		{
			if(isset($xml->externalIdEqual->item) && count($xml->externalIdEqual->item))
				$this->multiLingual_externalIdEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalIdEqual, '');
			else
				$this->externalIdEqual = (string)$xml->externalIdEqual;
		}
		if(count($xml->billingItemsTypeEqual))
		{
			if(isset($xml->billingItemsTypeEqual->item) && count($xml->billingItemsTypeEqual->item))
				$this->multiLingual_billingItemsTypeEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->billingItemsTypeEqual, '');
			else
				$this->billingItemsTypeEqual = (string)$xml->billingItemsTypeEqual;
		}
		if(count($xml->billingActionEqual))
		{
			if(isset($xml->billingActionEqual->item) && count($xml->billingActionEqual->item))
				$this->multiLingual_billingActionEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->billingActionEqual, '');
			else
				$this->billingActionEqual = (string)$xml->billingActionEqual;
		}
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

