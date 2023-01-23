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
class Kaltura_Client_Type_DiscountDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDiscountDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multiCurrencyDiscount))
		{
			if(empty($xml->multiCurrencyDiscount))
				$this->multiCurrencyDiscount = array();
			else
				$this->multiCurrencyDiscount = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiCurrencyDiscount, "KalturaDiscount");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->whenAlgoTimes))
			$this->whenAlgoTimes = (int)$xml->whenAlgoTimes;
		if(count($xml->whenAlgoType))
			$this->whenAlgoType = (int)$xml->whenAlgoType;
	}
	/**
	 * The discount ID
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The price code name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Multi currency discounts for all countries and currencies
	 *
	 * @var array of KalturaDiscount
	 */
	public $multiCurrencyDiscount;

	/**
	 * Start date represented as epoch
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * End date represented as epoch
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * End date represented as epoch
	 *
	 * @var int
	 */
	public $whenAlgoTimes = null;

	/**
	 * End date represented as epoch
	 *
	 * @var int
	 */
	public $whenAlgoType = null;


}

