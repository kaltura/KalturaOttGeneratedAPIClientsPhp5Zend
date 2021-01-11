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
			$this->stateEqual = (string)$xml->stateEqual;
		if(count($xml->hasPromotion))
		{
			if(!empty($xml->hasPromotion) && ((int) $xml->hasPromotion === 1 || strtolower((string)$xml->hasPromotion) === 'true'))
				$this->hasPromotion = true;
			else
				$this->hasPromotion = false;
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


}

