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
class Kaltura_Client_Type_CampaignSearchFilter extends Kaltura_Client_Type_CampaignFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCampaignSearchFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (string)$xml->startDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (string)$jsonObject->startDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (string)$xml->endDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (string)$jsonObject->endDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->stateEqual))
			$this->stateEqual = (string)$xml->stateEqual;
		if(!is_null($jsonObject) && isset($jsonObject->stateEqual))
			$this->stateEqual = (string)$jsonObject->stateEqual;
		if(!is_null($xml) && count($xml->hasPromotion))
		{
			if(!empty($xml->hasPromotion) && ((int) $xml->hasPromotion === 1 || strtolower((string)$xml->hasPromotion) === 'true'))
				$this->hasPromotion = true;
			else
				$this->hasPromotion = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->hasPromotion))
		{
			if(!empty($jsonObject->hasPromotion) && ((int) $jsonObject->hasPromotion === 1 || strtolower((string)$jsonObject->hasPromotion) === 'true'))
				$this->hasPromotion = true;
			else
				$this->hasPromotion = false;
		}
		if(!is_null($xml) && count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->nameEqual))
			$this->nameEqual = (string)$jsonObject->nameEqual;
		if(!is_null($xml) && count($xml->nameContains))
			$this->nameContains = (string)$xml->nameContains;
		if(!is_null($jsonObject) && isset($jsonObject->nameContains))
			$this->nameContains = (string)$jsonObject->nameContains;
		if(!is_null($xml) && count($xml->stateIn))
			$this->stateIn = (string)$xml->stateIn;
		if(!is_null($jsonObject) && isset($jsonObject->stateIn))
			$this->stateIn = (string)$jsonObject->stateIn;
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

