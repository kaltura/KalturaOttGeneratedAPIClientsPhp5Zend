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
class Kaltura_Client_Type_AssetFilter extends Kaltura_Client_Type_PersistedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->dynamicOrderBy) && !empty($xml->dynamicOrderBy))
			$this->dynamicOrderBy = Kaltura_Client_ParseUtils::unmarshalObject($xml->dynamicOrderBy, "KalturaDynamicOrderBy");
		if(!is_null($jsonObject) && isset($jsonObject->dynamicOrderBy) && !empty($jsonObject->dynamicOrderBy))
			$this->dynamicOrderBy = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicOrderBy, "KalturaDynamicOrderBy");
		if(!is_null($xml) && count($xml->orderingParameters))
		{
			if(empty($xml->orderingParameters))
				$this->orderingParameters = array();
			else
				$this->orderingParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->orderingParameters, "KalturaBaseAssetOrder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->orderingParameters))
		{
			if(empty($jsonObject->orderingParameters))
				$this->orderingParameters = array();
			else
				$this->orderingParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->orderingParameters, "KalturaBaseAssetOrder");
		}
		if(!is_null($xml) && count($xml->trendingDaysEqual))
			$this->trendingDaysEqual = (int)$xml->trendingDaysEqual;
		if(!is_null($jsonObject) && isset($jsonObject->trendingDaysEqual))
			$this->trendingDaysEqual = (int)$jsonObject->trendingDaysEqual;
		if(!is_null($xml) && count($xml->shouldApplyPriorityGroupsEqual))
		{
			if(!empty($xml->shouldApplyPriorityGroupsEqual) && ((int) $xml->shouldApplyPriorityGroupsEqual === 1 || strtolower((string)$xml->shouldApplyPriorityGroupsEqual) === 'true'))
				$this->shouldApplyPriorityGroupsEqual = true;
			else
				$this->shouldApplyPriorityGroupsEqual = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldApplyPriorityGroupsEqual))
		{
			if(!empty($jsonObject->shouldApplyPriorityGroupsEqual) && ((int) $jsonObject->shouldApplyPriorityGroupsEqual === 1 || strtolower((string)$jsonObject->shouldApplyPriorityGroupsEqual) === 'true'))
				$this->shouldApplyPriorityGroupsEqual = true;
			else
				$this->shouldApplyPriorityGroupsEqual = false;
		}
	}
	/**
	 * dynamicOrderBy - order by Meta
	 *
	 * @var Kaltura_Client_Type_DynamicOrderBy
	 */
	public $dynamicOrderBy;

	/**
	 * Parameters for asset list sorting.
	 *
	 * @var Kaltura_Client_Type_BaseAssetOrder[]
	 */
	public $orderingParameters;

	/**
	 * Trending Days Equal
	 *
	 * @var int
	 */
	public $trendingDaysEqual = null;

	/**
	 * Should apply priority groups filter or not.
	 *
	 * @var bool
	 */
	public $shouldApplyPriorityGroupsEqual = null;


}

