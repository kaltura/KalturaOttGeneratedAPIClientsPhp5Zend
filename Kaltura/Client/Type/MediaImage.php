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
class Kaltura_Client_Type_MediaImage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaImage';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ratio))
			$this->ratio = (string)$xml->ratio;
		if(!is_null($jsonObject) && isset($jsonObject->ratio))
			$this->ratio = (string)$jsonObject->ratio;
		if(!is_null($xml) && count($xml->width))
			$this->width = (int)$xml->width;
		if(!is_null($jsonObject) && isset($jsonObject->width))
			$this->width = (int)$jsonObject->width;
		if(!is_null($xml) && count($xml->height))
			$this->height = (int)$xml->height;
		if(!is_null($jsonObject) && isset($jsonObject->height))
			$this->height = (int)$jsonObject->height;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->version))
			$this->version = (int)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (int)$jsonObject->version;
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
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
		if(!is_null($xml) && count($xml->imageTypeId))
			$this->imageTypeId = (string)$xml->imageTypeId;
		if(!is_null($jsonObject) && isset($jsonObject->imageTypeId))
			$this->imageTypeId = (string)$jsonObject->imageTypeId;
		if(!is_null($xml) && count($xml->imageTypeName))
			$this->imageTypeName = (string)$xml->imageTypeName;
		if(!is_null($jsonObject) && isset($jsonObject->imageTypeName))
			$this->imageTypeName = (string)$jsonObject->imageTypeName;
	}
	/**
	 * Image aspect ratio
	 *
	 * @var string
	 */
	public $ratio = null;

	/**
	 * Image width
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * Image height
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * Image URL
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Image Version
	 *
	 * @var int
	 */
	public $version = null;

	/**
	 * Image ID
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Determined whether image was taken from default configuration or not
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * Image type identifier
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


}

