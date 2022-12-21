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
class Kaltura_Client_Type_CampaignSearchFilter extends Kaltura_Client_Type_CampaignFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCampaignSearchFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (string)$xml->startDateGreaterThanOrEqual;
		if(count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (string)$xml->endDateLessThanOrEqual;
		if(count($xml->stateEqual))
		{
			if(isset($xml->stateEqual->item) && count($xml->stateEqual->item))
				$this->multiLingual_stateEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->stateEqual, '');
			else
				$this->stateEqual = (string)$xml->stateEqual;
		}
		if(count($xml->hasPromotion))
		{
			if(!empty($xml->hasPromotion) && ((int) $xml->hasPromotion === 1 || strtolower((string)$xml->hasPromotion) === 'true'))
				$this->hasPromotion = true;
			else
				$this->hasPromotion = false;
		}
		if(count($xml->nameEqual))
		{
			if(isset($xml->nameEqual->item) && count($xml->nameEqual->item))
				$this->multiLingual_nameEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->nameEqual, '');
			else
				$this->nameEqual = (string)$xml->nameEqual;
		}
		if(count($xml->nameContains))
		{
			if(isset($xml->nameContains->item) && count($xml->nameContains->item))
				$this->multiLingual_nameContains = Kaltura_Client_ParseUtils::unmarshalArray($xml->nameContains, '');
			else
				$this->nameContains = (string)$xml->nameContains;
		}
		if(count($xml->stateIn))
		{
			if(isset($xml->stateIn->item) && count($xml->stateIn->item))
				$this->multiLingual_stateIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->stateIn, '');
			else
				$this->stateIn = (string)$xml->stateIn;
		}
	}
	/**
	 * start Date Greater Than Or Equal
	 *
	 * @var bigint
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * end Date Greater Than Or Equal
	 *
	 * @var bigint
	 */
	public $endDateLessThanOrEqual = null;

	/**
	 * state Equal
	 *
	 * @var Kaltura_Client_Enum_ObjectState
	 */
	public $stateEqual = null;

	/**
	 * has Promotion
	 *
	 * @var bool
	 */
	public $hasPromotion = null;

	/**
	 * Filter the Campaign with this name.
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * A string that is included in the Campaign name
	 *
	 * @var string
	 */
	public $nameContains = null;

	/**
	 * Comma separated Campaign State list
	 *
	 * @var string
	 */
	public $stateIn = null;


}

