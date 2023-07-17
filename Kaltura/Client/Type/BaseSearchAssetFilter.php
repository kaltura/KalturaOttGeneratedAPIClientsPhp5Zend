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
abstract class Kaltura_Client_Type_BaseSearchAssetFilter extends Kaltura_Client_Type_AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseSearchAssetFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(!is_null($jsonObject) && isset($jsonObject->kSql))
			$this->kSql = (string)$jsonObject->kSql;
		if(!is_null($xml) && count($xml->groupBy))
		{
			if(empty($xml->groupBy))
				$this->groupBy = array();
			else
				$this->groupBy = Kaltura_Client_ParseUtils::unmarshalArray($xml->groupBy, "KalturaAssetGroupBy");
		}
		if(!is_null($jsonObject) && isset($jsonObject->groupBy))
		{
			if(empty($jsonObject->groupBy))
				$this->groupBy = array();
			else
				$this->groupBy = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->groupBy, "KalturaAssetGroupBy");
		}
		if(!is_null($xml) && count($xml->groupOrderBy))
			$this->groupOrderBy = (string)$xml->groupOrderBy;
		if(!is_null($jsonObject) && isset($jsonObject->groupOrderBy))
			$this->groupOrderBy = (string)$jsonObject->groupOrderBy;
		if(!is_null($xml) && count($xml->groupingOptionEqual))
			$this->groupingOptionEqual = (string)$xml->groupingOptionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->groupingOptionEqual))
			$this->groupingOptionEqual = (string)$jsonObject->groupingOptionEqual;
	}
	/**
	 * Search assets using dynamic criteria. Provided collection of nested expressions with key, comparison operators, value, and logical conjunction.
	 *             Possible keys: any Tag or Meta defined in the system and the following reserved keys: start_date, end_date. 
	 *             epg_id, media_id - for specific asset IDs.
	 *             geo_block - only valid value is &quot;true&quot;: When enabled, only assets that are not restricted to the user by geo-block rules will return.
	 *             parental_rules - only valid value is &quot;true&quot;: When enabled, only assets that the user doesn&#39;t need to provide PIN code will return.
	 *             user_interests - only valid value is &quot;true&quot;. When enabled, only assets that the user defined as his interests (by tags and metas) will return.
	 *             epg_channel_id - the channel identifier of the EPG program.
	 *             entitled_assets - valid values: &quot;free&quot;, &quot;entitled&quot;, &quot;not_entitled&quot;, &quot;both&quot;. free - gets only free to watch assets. entitled - only those that the user is implicitly entitled to watch.
	 *             asset_type - valid values: &quot;media&quot;, &quot;epg&quot;, &quot;recording&quot; or any number that represents media type in group.
	 *             Comparison operators: for numerical fields =, &gt;, &gt;=, &lt;, &lt;=, : (in). 
	 *             For alpha-numerical fields =, != (not), ~ (like), !~, ^ (any word starts with), ^= (phrase starts with), + (exists), !+ (not exists).
	 *             Logical conjunction: and, or. 
	 *             Search values are limited to 20 characters each for the next operators: ~, !~, ^, ^=
	 *             (maximum length of entire filter is 4096 characters)
	 *
	 * @var string
	 */
	public $kSql = null;

	/**
	 * groupBy
	 *
	 * @var array of KalturaAssetGroupBy
	 */
	public $groupBy;

	/**
	 * order by of grouping
	 *
	 * @var Kaltura_Client_Enum_GroupByOrder
	 */
	public $groupOrderBy = null;

	/**
	 * Grouping Option, Omit if not specified otherwise
	 *
	 * @var Kaltura_Client_Enum_GroupingOption
	 */
	public $groupingOptionEqual = null;


}

