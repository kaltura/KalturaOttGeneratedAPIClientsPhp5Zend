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
class Kaltura_Client_Type_Coupon extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCoupon';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->couponsGroup) && !empty($xml->couponsGroup))
			$this->couponsGroup = Kaltura_Client_ParseUtils::unmarshalObject($xml->couponsGroup, "KalturaCouponsGroup");
		if(!is_null($jsonObject) && isset($jsonObject->couponsGroup) && !empty($jsonObject->couponsGroup))
			$this->couponsGroup = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->couponsGroup, "KalturaCouponsGroup");
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->totalUses))
			$this->totalUses = (int)$xml->totalUses;
		if(!is_null($jsonObject) && isset($jsonObject->totalUses))
			$this->totalUses = (int)$jsonObject->totalUses;
		if(!is_null($xml) && count($xml->leftUses))
			$this->leftUses = (int)$xml->leftUses;
		if(!is_null($jsonObject) && isset($jsonObject->leftUses))
			$this->leftUses = (int)$jsonObject->leftUses;
		if(!is_null($xml) && count($xml->couponCode))
			$this->couponCode = (string)$xml->couponCode;
		if(!is_null($jsonObject) && isset($jsonObject->couponCode))
			$this->couponCode = (string)$jsonObject->couponCode;
	}
	/**
	 * Coupons group details
	 *
	 * @var Kaltura_Client_Type_CouponsGroup
	 * @readonly
	 */
	public $couponsGroup;

	/**
	 * Coupon status
	 *
	 * @var Kaltura_Client_Enum_CouponStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Total available coupon uses
	 *
	 * @var int
	 * @readonly
	 */
	public $totalUses = null;

	/**
	 * Left coupon uses
	 *
	 * @var int
	 * @readonly
	 */
	public $leftUses = null;

	/**
	 * Coupon code
	 *
	 * @var string
	 * @readonly
	 */
	public $couponCode = null;


}

