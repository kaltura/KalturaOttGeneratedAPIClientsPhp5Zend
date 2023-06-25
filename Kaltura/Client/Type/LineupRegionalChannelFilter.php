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
class Kaltura_Client_Type_LineupRegionalChannelFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaLineupRegionalChannelFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->regionIdEqual))
			$this->regionIdEqual = (string)$xml->regionIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->regionIdEqual))
			$this->regionIdEqual = (string)$jsonObject->regionIdEqual;
		if(!is_null($xml) && count($xml->parentRegionIncluded))
		{
			if(!empty($xml->parentRegionIncluded) && ((int) $xml->parentRegionIncluded === 1 || strtolower((string)$xml->parentRegionIncluded) === 'true'))
				$this->parentRegionIncluded = true;
			else
				$this->parentRegionIncluded = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->parentRegionIncluded))
		{
			if(!empty($jsonObject->parentRegionIncluded) && ((int) $jsonObject->parentRegionIncluded === 1 || strtolower((string)$jsonObject->parentRegionIncluded) === 'true'))
				$this->parentRegionIncluded = true;
			else
				$this->parentRegionIncluded = false;
		}
		if(!is_null($xml) && count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(!is_null($jsonObject) && isset($jsonObject->kSql))
			$this->kSql = (string)$jsonObject->kSql;
		if(!is_null($xml) && count($xml->lcnGreaterThanOrEqual))
			$this->lcnGreaterThanOrEqual = (int)$xml->lcnGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->lcnGreaterThanOrEqual))
			$this->lcnGreaterThanOrEqual = (int)$jsonObject->lcnGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->lcnLessThanOrEqual))
			$this->lcnLessThanOrEqual = (int)$xml->lcnLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->lcnLessThanOrEqual))
			$this->lcnLessThanOrEqual = (int)$jsonObject->lcnLessThanOrEqual;
	}
	/**
	 * Region ID filter
	 *
	 * @var bigint
	 */
	public $regionIdEqual = null;

	/**
	 * Should include lineup from parent region into response
	 *
	 * @var bool
	 */
	public $parentRegionIncluded = null;

	/**
	 * A valid KSQL statement - Only linear channels that satisfies the KSQL statement will be included in the results
	 *
	 * @var string
	 */
	public $kSql = null;

	/**
	 * Filter only LCNs that greater or equals to the provided number
	 *
	 * @var int
	 */
	public $lcnGreaterThanOrEqual = null;

	/**
	 * Filter only LCNs that less or equals to the provided number
	 *
	 * @var int
	 */
	public $lcnLessThanOrEqual = null;


}

