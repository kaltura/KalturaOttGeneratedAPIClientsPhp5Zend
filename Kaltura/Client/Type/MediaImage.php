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
class Kaltura_Client_Type_MediaImage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaImage';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ratio))
		{
			if(isset($xml->ratio->item) && count($xml->ratio->item))
				$this->multiLingual_ratio = Kaltura_Client_ParseUtils::unmarshalArray($xml->ratio, '');
			else
				$this->ratio = (string)$xml->ratio;
		}
		if(count($xml->width))
			$this->width = (int)$xml->width;
		if(count($xml->height))
			$this->height = (int)$xml->height;
		if(count($xml->url))
		{
			if(isset($xml->url->item) && count($xml->url->item))
				$this->multiLingual_url = Kaltura_Client_ParseUtils::unmarshalArray($xml->url, '');
			else
				$this->url = (string)$xml->url;
		}
		if(count($xml->version))
			$this->version = (int)$xml->version;
		if(count($xml->id))
		{
			if(isset($xml->id->item) && count($xml->id->item))
				$this->multiLingual_id = Kaltura_Client_ParseUtils::unmarshalArray($xml->id, '');
			else
				$this->id = (string)$xml->id;
		}
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
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

