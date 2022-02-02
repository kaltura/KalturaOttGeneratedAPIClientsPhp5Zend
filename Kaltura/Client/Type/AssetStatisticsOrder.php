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
class Kaltura_Client_Type_AssetStatisticsOrder extends Kaltura_Client_Type_BaseAssetOrder
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStatisticsOrder';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->trendingDaysEqual))
			$this->trendingDaysEqual = (int)$xml->trendingDaysEqual;
		if(count($xml->orderBy))
			$this->orderBy = (string)$xml->orderBy;
	}
	/**
	 * Trending Days Equal
	 *
	 * @var int
	 */
	public $trendingDaysEqual = null;

	/**
	 * order by meta asc/desc
	 *
	 * @var Kaltura_Client_Enum_AssetOrderByStatistics
	 */
	public $orderBy = null;


}

