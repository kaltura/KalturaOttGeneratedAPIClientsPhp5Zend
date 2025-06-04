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
class Kaltura_Client_Type_OTTCategory extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaOTTCategory';
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
		if(!is_null($xml) && count($xml->parentCategoryId))
			$this->parentCategoryId = (string)$xml->parentCategoryId;
		if(!is_null($jsonObject) && isset($jsonObject->parentCategoryId))
			$this->parentCategoryId = (string)$jsonObject->parentCategoryId;
		if(!is_null($xml) && count($xml->childCategories))
		{
			if(empty($xml->childCategories))
				$this->childCategories = array();
			else
				$this->childCategories = Kaltura_Client_ParseUtils::unmarshalArray($xml->childCategories, "KalturaOTTCategory");
		}
		if(!is_null($jsonObject) && isset($jsonObject->childCategories))
		{
			if(empty($jsonObject->childCategories))
				$this->childCategories = array();
			else
				$this->childCategories = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->childCategories, "KalturaOTTCategory");
		}
		if(!is_null($xml) && count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = Kaltura_Client_ParseUtils::unmarshalArray($xml->channels, "KalturaChannel");
		}
		if(!is_null($jsonObject) && isset($jsonObject->channels))
		{
			if(empty($jsonObject->channels))
				$this->channels = array();
			else
				$this->channels = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->channels, "KalturaChannel");
		}
		if(!is_null($xml) && count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = Kaltura_Client_ParseUtils::unmarshalArray($xml->images, "KalturaMediaImage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->images))
		{
			if(empty($jsonObject->images))
				$this->images = array();
			else
				$this->images = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->images, "KalturaMediaImage");
		}
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
	 */
	public $name = null;

	/**
	 * Category parent identifier
	 *
	 * @var bigint
	 */
	public $parentCategoryId = null;

	/**
	 * Child categories
	 *
	 * @var Kaltura_Client_Type_OTTCategory[]
	 */
	public $childCategories;

	/**
	 * Category channels
	 *
	 * @var Kaltura_Client_Type_Channel[]
	 */
	public $channels;

	/**
	 * Category images
	 *
	 * @var Kaltura_Client_Type_MediaImage[]
	 */
	public $images;


}

