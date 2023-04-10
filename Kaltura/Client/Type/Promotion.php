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
class Kaltura_Client_Type_Promotion extends Kaltura_Client_Type_BasePromotion
{
	public function getKalturaObjectType()
	{
		return 'KalturaPromotion';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->discountModuleId))
			$this->discountModuleId = (string)$xml->discountModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->discountModuleId))
			$this->discountModuleId = (string)$jsonObject->discountModuleId;
		if(!is_null($xml) && count($xml->numberOfRecurring))
			$this->numberOfRecurring = (int)$xml->numberOfRecurring;
		if(!is_null($jsonObject) && isset($jsonObject->numberOfRecurring))
			$this->numberOfRecurring = (int)$jsonObject->numberOfRecurring;
		if(!is_null($xml) && count($xml->maxDiscountUsages))
			$this->maxDiscountUsages = (int)$xml->maxDiscountUsages;
		if(!is_null($jsonObject) && isset($jsonObject->maxDiscountUsages))
			$this->maxDiscountUsages = (int)$jsonObject->maxDiscountUsages;
	}
	/**
	 * The discount module id that is promoted to the user
	 *
	 * @var bigint
	 */
	public $discountModuleId = null;

	/**
	 * the numer of recurring for this promotion
	 *
	 * @var int
	 */
	public $numberOfRecurring = null;

	/**
	 * The number of times a household can use the discount module in this campaign.
	 *             If omitted than no limitation is enforced on the number of usages.
	 *
	 * @var int
	 */
	public $maxDiscountUsages = null;


}

