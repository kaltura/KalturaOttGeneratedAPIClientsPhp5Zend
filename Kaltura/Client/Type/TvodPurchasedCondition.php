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
class Kaltura_Client_Type_TvodPurchasedCondition extends Kaltura_Client_Type_BaseSegmentCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvodPurchasedCondition';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->level))
			$this->level = (string)$xml->level;
		if(!is_null($jsonObject) && isset($jsonObject->level))
			$this->level = (string)$jsonObject->level;
		if(!is_null($xml) && count($xml->ppvIdEquals))
			$this->ppvIdEquals = (string)$xml->ppvIdEquals;
		if(!is_null($jsonObject) && isset($jsonObject->ppvIdEquals))
			$this->ppvIdEquals = (string)$jsonObject->ppvIdEquals;
		if(!is_null($xml) && count($xml->mediaIdEquals))
			$this->mediaIdEquals = (string)$xml->mediaIdEquals;
		if(!is_null($jsonObject) && isset($jsonObject->mediaIdEquals))
			$this->mediaIdEquals = (string)$jsonObject->mediaIdEquals;
		if(!is_null($xml) && count($xml->days))
			$this->days = (int)$xml->days;
		if(!is_null($jsonObject) && isset($jsonObject->days))
			$this->days = (int)$jsonObject->days;
	}
	/**
	 * TVOD purchase conditions are always evaluated at the Household level.
	 *
	 * @var Kaltura_Client_Enum_ConditionLevel
	 */
	public $level = null;

	/**
	 * The specific purchased ppv product identifier to check.
	 *
	 * @var bigint
	 */
	public $ppvIdEquals = null;

	/**
	 * The specific purchased media entry identifier to check.
	 *
	 * @var bigint
	 */
	public $mediaIdEquals = null;

	/**
	 * The number of days to look back for the purchase.
	 *
	 * @var int
	 */
	public $days = null;


}

