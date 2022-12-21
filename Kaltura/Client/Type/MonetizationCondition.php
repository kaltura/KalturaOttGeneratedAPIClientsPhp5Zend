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
class Kaltura_Client_Type_MonetizationCondition extends Kaltura_Client_Type_BaseSegmentCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaMonetizationCondition';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->minValue))
			$this->minValue = (int)$xml->minValue;
		if(count($xml->maxValue))
			$this->maxValue = (int)$xml->maxValue;
		if(count($xml->days))
			$this->days = (int)$xml->days;
		if(count($xml->type))
		{
			if(isset($xml->type->item) && count($xml->type->item))
				$this->multiLingual_type = Kaltura_Client_ParseUtils::unmarshalArray($xml->type, '');
			else
				$this->type = (string)$xml->type;
		}
		if(count($xml->operator))
		{
			if(isset($xml->operator->item) && count($xml->operator->item))
				$this->multiLingual_operator = Kaltura_Client_ParseUtils::unmarshalArray($xml->operator, '');
			else
				$this->operator = (string)$xml->operator;
		}
		if(count($xml->businessModuleIdIn))
		{
			if(isset($xml->businessModuleIdIn->item) && count($xml->businessModuleIdIn->item))
				$this->multiLingual_businessModuleIdIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->businessModuleIdIn, '');
			else
				$this->businessModuleIdIn = (string)$xml->businessModuleIdIn;
		}
		if(count($xml->currencyCode))
		{
			if(isset($xml->currencyCode->item) && count($xml->currencyCode->item))
				$this->multiLingual_currencyCode = Kaltura_Client_ParseUtils::unmarshalArray($xml->currencyCode, '');
			else
				$this->currencyCode = (string)$xml->currencyCode;
		}
	}
	/**
	 * The minimum value to be met
	 *
	 * @var int
	 */
	public $minValue = null;

	/**
	 * The maximum value to be met
	 *
	 * @var int
	 */
	public $maxValue = null;

	/**
	 * How many days back should the actions be considered
	 *
	 * @var int
	 */
	public $days = null;

	/**
	 * Purchase type
	 *
	 * @var Kaltura_Client_Enum_MonetizationType
	 */
	public $type = null;

	/**
	 * Mathermtical operator to calculate
	 *
	 * @var Kaltura_Client_Enum_MathemticalOperatorType
	 */
	public $operator = null;

	/**
	 * Comma saperated list of business module IDs
	 *
	 * @var string
	 */
	public $businessModuleIdIn = null;

	/**
	 * Which currency code should be taken into consideration
	 *
	 * @var string
	 */
	public $currencyCode = null;


}

