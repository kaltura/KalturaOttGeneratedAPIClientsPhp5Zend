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
class Kaltura_Client_Type_Image extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaImage';
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
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->imageTypeId))
			$this->imageTypeId = (string)$xml->imageTypeId;
		if(!is_null($jsonObject) && isset($jsonObject->imageTypeId))
			$this->imageTypeId = (string)$jsonObject->imageTypeId;
		if(!is_null($xml) && count($xml->imageTypeName))
			$this->imageTypeName = (string)$xml->imageTypeName;
		if(!is_null($jsonObject) && isset($jsonObject->imageTypeName))
			$this->imageTypeName = (string)$jsonObject->imageTypeName;
		if(!is_null($xml) && count($xml->imageObjectId))
			$this->imageObjectId = (string)$xml->imageObjectId;
		if(!is_null($jsonObject) && isset($jsonObject->imageObjectId))
			$this->imageObjectId = (string)$jsonObject->imageObjectId;
		if(!is_null($xml) && count($xml->imageObjectType))
			$this->imageObjectType = (string)$xml->imageObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->imageObjectType))
			$this->imageObjectType = (string)$jsonObject->imageObjectType;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->contentId))
			$this->contentId = (string)$xml->contentId;
		if(!is_null($jsonObject) && isset($jsonObject->contentId))
			$this->contentId = (string)$jsonObject->contentId;
		if(!is_null($xml) && count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
		{
			if(!empty($jsonObject->isDefault) && ((int) $jsonObject->isDefault === 1 || strtolower((string)$jsonObject->isDefault) === 'true'))
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

