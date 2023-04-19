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
class Kaltura_Client_Type_TagFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaTagFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->tagEqual))
			$this->tagEqual = (string)$xml->tagEqual;
		if(!is_null($jsonObject) && isset($jsonObject->tagEqual))
			$this->tagEqual = (string)$jsonObject->tagEqual;
		if(!is_null($xml) && count($xml->tagStartsWith))
			$this->tagStartsWith = (string)$xml->tagStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->tagStartsWith))
			$this->tagStartsWith = (string)$jsonObject->tagStartsWith;
		if(!is_null($xml) && count($xml->typeEqual))
			$this->typeEqual = (int)$xml->typeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->typeEqual))
			$this->typeEqual = (int)$jsonObject->typeEqual;
		if(!is_null($xml) && count($xml->languageEqual))
			$this->languageEqual = (string)$xml->languageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->languageEqual))
			$this->languageEqual = (string)$jsonObject->languageEqual;
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
	}
	/**
	 * Tag to filter by
	 *
	 * @var string
	 */
	public $tagEqual = null;

	/**
	 * Tag to filter by
	 *
	 * @var string
	 */
	public $tagStartsWith = null;

	/**
	 * Type identifier
	 *
	 * @var int
	 */
	public $typeEqual = null;

	/**
	 * Language to filter by
	 *
	 * @var string
	 */
	public $languageEqual = null;

	/**
	 * Comma separated identifiers
	 *
	 * @var string
	 */
	public $idIn = null;


}

