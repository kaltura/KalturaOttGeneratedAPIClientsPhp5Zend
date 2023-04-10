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
class Kaltura_Client_Type_ImageFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaImageFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->imageObjectIdEqual))
			$this->imageObjectIdEqual = (string)$xml->imageObjectIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->imageObjectIdEqual))
			$this->imageObjectIdEqual = (string)$jsonObject->imageObjectIdEqual;
		if(!is_null($xml) && count($xml->imageObjectTypeEqual))
			$this->imageObjectTypeEqual = (string)$xml->imageObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->imageObjectTypeEqual))
			$this->imageObjectTypeEqual = (string)$jsonObject->imageObjectTypeEqual;
		if(!is_null($xml) && count($xml->isDefaultEqual))
		{
			if(!empty($xml->isDefaultEqual) && ((int) $xml->isDefaultEqual === 1 || strtolower((string)$xml->isDefaultEqual) === 'true'))
				$this->isDefaultEqual = true;
			else
				$this->isDefaultEqual = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefaultEqual))
		{
			if(!empty($jsonObject->isDefaultEqual) && ((int) $jsonObject->isDefaultEqual === 1 || strtolower((string)$jsonObject->isDefaultEqual) === 'true'))
				$this->isDefaultEqual = true;
			else
				$this->isDefaultEqual = false;
		}
		if(!is_null($xml) && count($xml->imageObjectIdIn))
			$this->imageObjectIdIn = (string)$xml->imageObjectIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->imageObjectIdIn))
			$this->imageObjectIdIn = (string)$jsonObject->imageObjectIdIn;
	}
	/**
	 * IDs to filter by
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * ID of the object the is related to, to filter by
	 *
	 * @var bigint
	 */
	public $imageObjectIdEqual = null;

	/**
	 * Type of the object the image is related to, to filter by
	 *
	 * @var Kaltura_Client_Enum_ImageObjectType
	 */
	public $imageObjectTypeEqual = null;

	/**
	 * Filter images that are default on at least on image type or not default at any
	 *
	 * @var bool
	 */
	public $isDefaultEqual = null;

	/**
	 * Comma separated imageObject ids list
	 *
	 * @var string
	 */
	public $imageObjectIdIn = null;


}

