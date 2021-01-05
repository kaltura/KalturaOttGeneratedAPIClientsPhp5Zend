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
class Kaltura_Client_Type_CategoryItem extends Kaltura_Client_Type_CrudObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(count($xml->childrenIds))
			$this->childrenIds = (string)$xml->childrenIds;
		if(count($xml->unifiedChannels))
		{
			if(empty($xml->unifiedChannels))
				$this->unifiedChannels = array();
			else
				$this->unifiedChannels = Kaltura_Client_ParseUtils::unmarshalArray($xml->unifiedChannels, "KalturaUnifiedChannel");
		}
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
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
			$this->type = (string)$xml->type;
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


}

