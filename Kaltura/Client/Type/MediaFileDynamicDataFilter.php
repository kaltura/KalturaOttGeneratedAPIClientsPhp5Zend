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
class Kaltura_Client_Type_MediaFileDynamicDataFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaFileDynamicDataFilter';
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
		if(!is_null($xml) && count($xml->mediaFileTypeId))
			$this->mediaFileTypeId = (string)$xml->mediaFileTypeId;
		if(!is_null($jsonObject) && isset($jsonObject->mediaFileTypeId))
			$this->mediaFileTypeId = (string)$jsonObject->mediaFileTypeId;
		if(!is_null($xml) && count($xml->mediaFileTypeKeyName))
			$this->mediaFileTypeKeyName = (string)$xml->mediaFileTypeKeyName;
		if(!is_null($jsonObject) && isset($jsonObject->mediaFileTypeKeyName))
			$this->mediaFileTypeKeyName = (string)$jsonObject->mediaFileTypeKeyName;
		if(!is_null($xml) && count($xml->valueEqual))
			$this->valueEqual = (string)$xml->valueEqual;
		if(!is_null($jsonObject) && isset($jsonObject->valueEqual))
			$this->valueEqual = (string)$jsonObject->valueEqual;
		if(!is_null($xml) && count($xml->valueStartsWith))
			$this->valueStartsWith = (string)$xml->valueStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->valueStartsWith))
			$this->valueStartsWith = (string)$jsonObject->valueStartsWith;
	}
	/**
	 * A comma-separated list of KalturaMediaFileDynamicData.Id to be searched.
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * An integer representing the the mediaFileType holding the keys for which the values should be stored.
	 *
	 * @var bigint
	 */
	public $mediaFileTypeId = null;

	/**
	 * A string representing the key name within the mediaFileType that identifies the list corresponding
	 *             to that key name.
	 *
	 * @var string
	 */
	public $mediaFileTypeKeyName = null;

	/**
	 * A string representing a specific value to be searched.
	 *
	 * @var string
	 */
	public $valueEqual = null;

	/**
	 * A string representing the beginning of multiple (zero or more) matching values.
	 *
	 * @var string
	 */
	public $valueStartsWith = null;


}

