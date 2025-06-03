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
class Kaltura_Client_Type_MetaFieldNameMap extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetaFieldNameMap';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->genre))
			$this->genre = (string)$xml->genre;
		if(!is_null($jsonObject) && isset($jsonObject->genre))
			$this->genre = (string)$jsonObject->genre;
		if(!is_null($xml) && count($xml->subGenre))
			$this->subGenre = (string)$xml->subGenre;
		if(!is_null($jsonObject) && isset($jsonObject->subGenre))
			$this->subGenre = (string)$jsonObject->subGenre;
		if(!is_null($xml) && count($xml->sentiment))
			$this->sentiment = (string)$xml->sentiment;
		if(!is_null($jsonObject) && isset($jsonObject->sentiment))
			$this->sentiment = (string)$jsonObject->sentiment;
		if(!is_null($xml) && count($xml->suggestedTitle))
			$this->suggestedTitle = (string)$xml->suggestedTitle;
		if(!is_null($jsonObject) && isset($jsonObject->suggestedTitle))
			$this->suggestedTitle = (string)$jsonObject->suggestedTitle;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->oneLiner))
			$this->oneLiner = (string)$xml->oneLiner;
		if(!is_null($jsonObject) && isset($jsonObject->oneLiner))
			$this->oneLiner = (string)$jsonObject->oneLiner;
		if(!is_null($xml) && count($xml->keywords))
			$this->keywords = (string)$xml->keywords;
		if(!is_null($jsonObject) && isset($jsonObject->keywords))
			$this->keywords = (string)$jsonObject->keywords;
		if(!is_null($xml) && count($xml->sensitiveContent))
			$this->sensitiveContent = (string)$xml->sensitiveContent;
		if(!is_null($jsonObject) && isset($jsonObject->sensitiveContent))
			$this->sensitiveContent = (string)$jsonObject->sensitiveContent;
	}
	/**
	 * map &#39;genre&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $genre = null;

	/**
	 * map &#39;subGenre&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $subGenre = null;

	/**
	 * map &#39;sentiment&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $sentiment = null;

	/**
	 * map &#39;suggestedTitle&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $suggestedTitle = null;

	/**
	 * map &#39;Description&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * map &#39;oneLiner&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $oneLiner = null;

	/**
	 * map &#39;Keywords&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $keywords = null;

	/**
	 * map &#39;sensitiveContent&#39; AI generated metadata name to assetStruct&#39;s meta systemName
	 *
	 * @var string
	 */
	public $sensitiveContent = null;


}

