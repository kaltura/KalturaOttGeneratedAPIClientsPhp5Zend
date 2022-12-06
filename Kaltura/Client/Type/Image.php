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
class Kaltura_Client_Type_Image extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaImage';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->version))
		{
			if(isset($xml->version->item) && count($xml->version->item))
				$this->multiLingual_version = Kaltura_Client_ParseUtils::unmarshalArray($xml->version, '');
			else
				$this->version = (string)$xml->version;
		}
		if(count($xml->imageTypeId))
			$this->imageTypeId = (string)$xml->imageTypeId;
		if(count($xml->imageTypeName))
		{
			if(isset($xml->imageTypeName->item) && count($xml->imageTypeName->item))
				$this->multiLingual_imageTypeName = Kaltura_Client_ParseUtils::unmarshalArray($xml->imageTypeName, '');
			else
				$this->imageTypeName = (string)$xml->imageTypeName;
		}
		if(count($xml->imageObjectId))
			$this->imageObjectId = (string)$xml->imageObjectId;
		if(count($xml->imageObjectType))
		{
			if(isset($xml->imageObjectType->item) && count($xml->imageObjectType->item))
				$this->multiLingual_imageObjectType = Kaltura_Client_ParseUtils::unmarshalArray($xml->imageObjectType, '');
			else
				$this->imageObjectType = (string)$xml->imageObjectType;
		}
		if(count($xml->status))
		{
			if(isset($xml->status->item) && count($xml->status->item))
				$this->multiLingual_status = Kaltura_Client_ParseUtils::unmarshalArray($xml->status, '');
			else
				$this->status = (string)$xml->status;
		}
		if(count($xml->url))
		{
			if(isset($xml->url->item) && count($xml->url->item))
				$this->multiLingual_url = Kaltura_Client_ParseUtils::unmarshalArray($xml->url, '');
			else
				$this->url = (string)$xml->url;
		}
		if(count($xml->contentId))
		{
			if(isset($xml->contentId->item) && count($xml->contentId->item))
				$this->multiLingual_contentId = Kaltura_Client_ParseUtils::unmarshalArray($xml->contentId, '');
			else
				$this->contentId = (string)$xml->contentId;
		}
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
	}
	/**
	 * Image ID
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Image version
	 *
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * Image type ID
	 *
	 * @var bigint
	 */
	public $imageTypeId = null;

	/**
	 * Image type Name
	 *
	 * @var string
	 */
	public $imageTypeName = null;

	/**
	 * ID of the object the image is related to
	 *
	 * @var bigint
	 */
	public $imageObjectId = null;

	/**
	 * Type of the object the image is related to
	 *
	 * @var Kaltura_Client_Enum_ImageObjectType
	 */
	public $imageObjectType = null;

	/**
	 * Image content status
	 *
	 * @var Kaltura_Client_Enum_ImageStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Image URL
	 *
	 * @var string
	 * @readonly
	 */
	public $url = null;

	/**
	 * Image content ID
	 *
	 * @var string
	 * @readonly
	 */
	public $contentId = null;

	/**
	 * Specifies if the image is default for atleast one image type.
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefault = null;


}

