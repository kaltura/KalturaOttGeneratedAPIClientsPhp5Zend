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
class Kaltura_Client_Type_PricePlan extends Kaltura_Client_Type_UsageModule
{
	public function getKalturaObjectType()
	{
		return 'KalturaPricePlan';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
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
		if(!is_null($xml) && count($xml->renewalsNumber))
			$this->renewalsNumber = (int)$xml->renewalsNumber;
		if(!is_null($jsonObject) && isset($jsonObject->renewalsNumber))
			$this->renewalsNumber = (int)$jsonObject->renewalsNumber;
		if(!is_null($xml) && count($xml->discountId))
			$this->discountId = (string)$xml->discountId;
		if(!is_null($jsonObject) && isset($jsonObject->discountId))
			$this->discountId = (string)$jsonObject->discountId;
		if(!is_null($xml) && count($xml->priceDetailsId))
			$this->priceDetailsId = (string)$xml->priceDetailsId;
		if(!is_null($jsonObject) && isset($jsonObject->priceDetailsId))
			$this->priceDetailsId = (string)$jsonObject->priceDetailsId;
	}
	/**
	 * Denotes whether or not this object can be renewed
	 *
	 * @var bool
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times the module will be renewed (for the life_cycle period)
	 *
	 * @var int
	 */
	public $renewalsNumber = null;

	/**
	 * The discount module identifier of the price plan
	 *
	 * @var bigint
	 */
	public $discountId = null;

	/**
	 * The ID of the price details associated with this price plan
	 *
	 * @var bigint
	 */
	public $priceDetailsId = null;


}

