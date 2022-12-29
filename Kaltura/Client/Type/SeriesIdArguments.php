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
class Kaltura_Client_Type_SeriesIdArguments extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSeriesIdArguments';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetTypeIdIn))
			$this->assetTypeIdIn = (string)$xml->assetTypeIdIn;
		if(count($xml->seriesId))
			$this->seriesId = (string)$xml->seriesId;
		if(count($xml->seriesIdMetaName))
			$this->seriesIdMetaName = (string)$xml->seriesIdMetaName;
		if(count($xml->seasonNumberMetaName))
			$this->seasonNumberMetaName = (string)$xml->seasonNumberMetaName;
		if(count($xml->episodeNumberMetaName))
			$this->episodeNumberMetaName = (string)$xml->episodeNumberMetaName;
	}
	/**
	 * Comma separated asset type IDs
	 *
	 * @var string
	 */
	public $assetTypeIdIn = null;

	/**
	 * Series ID
	 *
	 * @var string
	 */
	public $seriesId = null;

	/**
	 * Series ID meta name.
	 *
	 * @var string
	 */
	public $seriesIdMetaName = null;

	/**
	 * Season number meta name
	 *
	 * @var string
	 */
	public $seasonNumberMetaName = null;

	/**
	 * Episode number meta name
	 *
	 * @var string
	 */
	public $episodeNumberMetaName = null;


}

