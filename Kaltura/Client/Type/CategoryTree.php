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
class Kaltura_Client_Type_CategoryTree extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryTree';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->children))
		{
			if(empty($xml->children))
				$this->children = array();
			else
				$this->children = Kaltura_Client_ParseUtils::unmarshalArray($xml->children, "KalturaCategoryTree");
		}
		if(count($xml->unifiedChannels))
		{
			if(empty($xml->unifiedChannels))
				$this->unifiedChannels = array();
			else
				$this->unifiedChannels = Kaltura_Client_ParseUtils::unmarshalArray($xml->unifiedChannels, "KalturaUnifiedChannelInfo");
		}
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = Kaltura_Client_ParseUtils::unmarshalArray($xml->images, "KalturaImage");
		}
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->startDateInSeconds))
			$this->startDateInSeconds = (string)$xml->startDateInSeconds;
		if(count($xml->endDateInSeconds))
			$this->endDateInSeconds = (string)$xml->endDateInSeconds;
		if(count($xml->type))
		{
			if(isset($xml->type->item) && count($xml->type->item))
				$this->multiLingual_type = Kaltura_Client_ParseUtils::unmarshalArray($xml->type, '');
			else
				$this->type = (string)$xml->type;
		}
		if(count($xml->versionId))
			$this->versionId = (string)$xml->versionId;
		if(count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(count($xml->referenceId))
		{
			if(isset($xml->referenceId->item) && count($xml->referenceId->item))
				$this->multiLingual_referenceId = Kaltura_Client_ParseUtils::unmarshalArray($xml->referenceId, '');
			else
				$this->referenceId = (string)$xml->referenceId;
		}
	}
	/**
	 * Unique identifier for the category item
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Category name
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Category name
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualName;

	/**
	 * List of category tree
	 *
	 * @var array of KalturaCategoryTree
	 * @readonly
	 */
	public $children;

	/**
	 * List of unified Channels.
	 *
	 * @var array of KalturaUnifiedChannelInfo
	 */
	public $unifiedChannels;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;

	/**
	 * Category images
	 *
	 * @var array of KalturaImage
	 */
	public $images;

	/**
	 * Category active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Start date in seconds
	 *
	 * @var bigint
	 */
	public $startDateInSeconds = null;

	/**
	 * End date in seconds
	 *
	 * @var bigint
	 */
	public $endDateInSeconds = null;

	/**
	 * Category type
	 *
	 * @var string
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Unique identifier for the category version
	 *
	 * @var bigint
	 * @readonly
	 */
	public $versionId = null;

	/**
	 * Virtual asset id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $virtualAssetId = null;

	/**
	 * Category reference identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $referenceId = null;


}

