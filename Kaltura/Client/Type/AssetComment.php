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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Type_AssetComment extends Kaltura_Client_Type_SocialComment
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetComment';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(count($xml->assetType))
			$this->assetType = (string)$xml->assetType;
		if(count($xml->subHeader))
			$this->subHeader = (string)$xml->subHeader;
	}
	/**
	 * Comment ID
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * Asset identifier
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Asset Type
	 *
	 * @var Kaltura_Client_Enum_AssetType
	 */
	public $assetType = null;

	/**
	 * Sub Header
	 *
	 * @var string
	 */
	public $subHeader = null;


}

