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
class Kaltura_Client_Type_CategoryItem extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualName))
		{
			if(empty($jsonObject->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (string)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->childrenIds))
			$this->childrenIds = (string)$xml->childrenIds;
		if(!is_null($jsonObject) && isset($jsonObject->childrenIds))
			$this->childrenIds = (string)$jsonObject->childrenIds;
		if(!is_null($xml) && count($xml->unifiedChannels))
		{
			if(empty($xml->unifiedChannels))
				$this->unifiedChannels = array();
			else
				$this->unifiedChannels = Kaltura_Client_ParseUtils::unmarshalArray($xml->unifiedChannels, "KalturaUnifiedChannel");
		}
		if(!is_null($jsonObject) && isset($jsonObject->unifiedChannels))
		{
			if(empty($jsonObject->unifiedChannels))
				$this->unifiedChannels = array();
			else
				$this->unifiedChannels = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->unifiedChannels, "KalturaUnifiedChannel");
		}
		if(!is_null($xml) && count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dynamicData))
		{
			if(empty($jsonObject->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicData, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->startDateInSeconds))
			$this->startDateInSeconds = (string)$xml->startDateInSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->startDateInSeconds))
			$this->startDateInSeconds = (string)$jsonObject->startDateInSeconds;
		if(!is_null($xml) && count($xml->endDateInSeconds))
			$this->endDateInSeconds = (string)$xml->endDateInSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->endDateInSeconds))
			$this->endDateInSeconds = (string)$jsonObject->endDateInSeconds;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->versionId))
			$this->versionId = (string)$xml->versionId;
		if(!is_null($jsonObject) && isset($jsonObject->versionId))
			$this->versionId = (string)$jsonObject->versionId;
		if(!is_null($xml) && count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->virtualAssetId))
			$this->virtualAssetId = (string)$jsonObject->virtualAssetId;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
	}
	/**
	 * Unique identifier for the category
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
	 * Category parent identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $parentId = null;

	/**
	 * Comma separated list of child categories&#39; Ids.
	 *
	 * @var string
	 */
	public $childrenIds = null;

	/**
	 * List of unified Channels.
	 *
	 * @var array of KalturaUnifiedChannel
	 */
	public $unifiedChannels;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;

	/**
	 * Specifies when was the Category last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

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
	 */
	public $referenceId = null;


}

