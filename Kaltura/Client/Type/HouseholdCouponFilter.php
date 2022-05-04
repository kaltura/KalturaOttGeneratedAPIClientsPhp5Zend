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
class Kaltura_Client_Type_HouseholdCouponFilter extends Kaltura_Client_Type_CrudFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdCouponFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->businessModuleTypeEqual))
			$this->businessModuleTypeEqual = (string)$xml->businessModuleTypeEqual;
		if(count($xml->businessModuleIdEqual))
			$this->businessModuleIdEqual = (string)$xml->businessModuleIdEqual;
		if(count($xml->couponCode))
			$this->couponCode = (string)$xml->couponCode;
		if(count($xml->status))
			$this->status = (string)$xml->status;
	}
	/**
	 * Indicates which household coupons list to return by their business module type.
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 */
	public $businessModuleTypeEqual = null;

	/**
	 * Indicates which household coupons list to return by their business module ID.
	 *
	 * @var bigint
	 */
	public $businessModuleIdEqual = null;

	/**
	 * Allow clients to inquiry if a specific coupon is part of an HH’s wallet or not
	 *
	 * @var string
	 */
	public $couponCode = null;

	/**
	 * Allow clients to filter out coupons which are valid/invalid
	 *
	 * @var Kaltura_Client_Enum_CouponStatus
	 */
	public $status = null;


}

