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
class Kaltura_Client_Type_SocialCommentFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaSocialCommentFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetIdEqual))
			$this->assetIdEqual = (string)$xml->assetIdEqual;
		if(count($xml->assetTypeEqual))
		{
			if(isset($xml->assetTypeEqual->item) && count($xml->assetTypeEqual->item))
				$this->multiLingual_assetTypeEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->assetTypeEqual, '');
			else
				$this->assetTypeEqual = (string)$xml->assetTypeEqual;
		}
		if(count($xml->socialPlatformEqual))
		{
			if(isset($xml->socialPlatformEqual->item) && count($xml->socialPlatformEqual->item))
				$this->multiLingual_socialPlatformEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->socialPlatformEqual, '');
			else
				$this->socialPlatformEqual = (string)$xml->socialPlatformEqual;
		}
		if(count($xml->createDateGreaterThan))
			$this->createDateGreaterThan = (string)$xml->createDateGreaterThan;
	}
	/**
	 * Asset ID to filter by
	 *
	 * @var bigint
	 */
	public $assetIdEqual = null;

	/**
	 * Asset type to filter by, currently only VOD (media)
	 *
	 * @var Kaltura_Client_Enum_AssetType
	 */
	public $assetTypeEqual = null;

	/**
	 * Comma separated list of social actions to filter by
	 *
	 * @var Kaltura_Client_Enum_SocialPlatform
	 */
	public $socialPlatformEqual = null;

	/**
	 * The create date from which to get the comments
	 *
	 * @var bigint
	 */
	public $createDateGreaterThan = null;


}

