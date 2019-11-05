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
// Copyright (C) 2006-2019  Kaltura Inc.
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
abstract class Kaltura_Client_Type_Asset extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->type))
			$this->type = (int)$xml->type;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = Kaltura_Client_ParseUtils::unmarshalArray($xml->images, "KalturaMediaImage");
		}
		if(count($xml->mediaFiles))
		{
			if(empty($xml->mediaFiles))
				$this->mediaFiles = array();
			else
				$this->mediaFiles = Kaltura_Client_ParseUtils::unmarshalArray($xml->mediaFiles, "KalturaMediaFile");
		}
		if(count($xml->metas))
		{
			if(empty($xml->metas))
				$this->metas = array();
			else
				$this->metas = Kaltura_Client_ParseUtils::unmarshalMap($xml->metas, "KalturaValue");
		}
		if(count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::unmarshalMap($xml->tags, "KalturaMultilingualStringValueArray");
		}
		if(count($xml->relatedEntities))
		{
			if(empty($xml->relatedEntities))
				$this->relatedEntities = array();
			else
				$this->relatedEntities = Kaltura_Client_ParseUtils::unmarshalMap($xml->relatedEntities, "KalturaRelatedEntityArray");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->indexStatus))
			$this->indexStatus = (string)$xml->indexStatus;
	}
	/**
	 * Unique identifier for the asset
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Identifies the asset type (EPG, Recording, Movie, TV Series, etc). 
	 *             Possible values: 0 – EPG linear programs, 1 - Recording; or any asset type ID according to the asset types IDs defined in the system.
	 *
	 * @var int
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Asset name
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Asset name
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualName;

	/**
	 * Asset description
	 *
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * Asset description
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualDescription;

	/**
	 * Collection of images details that can be used to represent this asset
	 *
	 * @var array of KalturaMediaImage
	 * @readonly
	 */
	public $images;

	/**
	 * Files
	 *
	 * @var array of KalturaMediaFile
	 * @readonly
	 */
	public $mediaFiles;

	/**
	 * Dynamic collection of key-value pairs according to the String Meta defined in the system
	 *
	 * @var map
	 */
	public $metas;

	/**
	 * Dynamic collection of key-value pairs according to the Tag Types defined in the system
	 *
	 * @var map
	 */
	public $tags;

	/**
	 * Dynamic collection of key-value pairs according to the related entity defined in the system
	 *
	 * @var map
	 */
	public $relatedEntities;

	/**
	 * Date and time represented as epoch. For VOD – since when the asset is available in the catalog. For EPG/Linear – when the program is aired (can be in the future).
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * Date and time represented as epoch. For VOD – till when the asset be available in the catalog. For EPG/Linear – program end time and date
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * Specifies when was the Asset was created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Asset last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * External identifier for the asset
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * The media asset index status
	 *
	 * @var Kaltura_Client_Enum_AssetIndexStatus
	 * @readonly
	 */
	public $indexStatus = null;


}

