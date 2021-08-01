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
class Kaltura_Client_Type_CouponEntitlementDiscountDetails extends Kaltura_Client_Type_EntitlementDiscountDetails
{
	public function getKalturaObjectType()
	{
		return 'KalturaCouponEntitlementDiscountDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->couponCode))
			$this->couponCode = (string)$xml->couponCode;
		if(count($xml->endlessCoupon))
		{
			if(!empty($xml->endlessCoupon) && ((int) $xml->endlessCoupon === 1 || strtolower((string)$xml->endlessCoupon) === 'true'))
				$this->endlessCoupon = true;
			else
				$this->endlessCoupon = false;
		}
	}
	/**
	 * Coupon Code
	 *
	 * @var string
	 * @readonly
	 */
	public $couponCode = null;

	/**
	 * Endless coupon
	 *
	 * @var bool
	 * @readonly
	 */
	public $endlessCoupon = null;


}

