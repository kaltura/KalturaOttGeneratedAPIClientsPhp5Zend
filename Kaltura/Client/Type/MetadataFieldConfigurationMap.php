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
class Kaltura_Client_Type_MetadataFieldConfigurationMap extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataFieldConfigurationMap';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->genre) && !empty($xml->genre))
			$this->genre = Kaltura_Client_ParseUtils::unmarshalObject($xml->genre, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->genre) && !empty($jsonObject->genre))
			$this->genre = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->genre, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->subGenre) && !empty($xml->subGenre))
			$this->subGenre = Kaltura_Client_ParseUtils::unmarshalObject($xml->subGenre, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->subGenre) && !empty($jsonObject->subGenre))
			$this->subGenre = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->subGenre, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->sentiment) && !empty($xml->sentiment))
			$this->sentiment = Kaltura_Client_ParseUtils::unmarshalObject($xml->sentiment, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->sentiment) && !empty($jsonObject->sentiment))
			$this->sentiment = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->sentiment, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->suggestedTitle) && !empty($xml->suggestedTitle))
			$this->suggestedTitle = Kaltura_Client_ParseUtils::unmarshalObject($xml->suggestedTitle, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->suggestedTitle) && !empty($jsonObject->suggestedTitle))
			$this->suggestedTitle = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->suggestedTitle, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->description) && !empty($xml->description))
			$this->description = Kaltura_Client_ParseUtils::unmarshalObject($xml->description, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->description) && !empty($jsonObject->description))
			$this->description = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->description, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->oneLiner) && !empty($xml->oneLiner))
			$this->oneLiner = Kaltura_Client_ParseUtils::unmarshalObject($xml->oneLiner, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->oneLiner) && !empty($jsonObject->oneLiner))
			$this->oneLiner = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->oneLiner, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->keywords) && !empty($xml->keywords))
			$this->keywords = Kaltura_Client_ParseUtils::unmarshalObject($xml->keywords, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->keywords) && !empty($jsonObject->keywords))
			$this->keywords = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->keywords, "KalturaMetadataFieldConfig");
		if(!is_null($xml) && count($xml->sensitiveContent) && !empty($xml->sensitiveContent))
			$this->sensitiveContent = Kaltura_Client_ParseUtils::unmarshalObject($xml->sensitiveContent, "KalturaMetadataFieldConfig");
		if(!is_null($jsonObject) && isset($jsonObject->sensitiveContent) && !empty($jsonObject->sensitiveContent))
			$this->sensitiveContent = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->sensitiveContent, "KalturaMetadataFieldConfig");
	}
	/**
	 * Configuration for &#39;genre&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $genre;

	/**
	 * Configuration for &#39;subGenre&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $subGenre;

	/**
	 * Configuration for &#39;sentiment&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $sentiment;

	/**
	 * Configuration for &#39;suggestedTitle&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $suggestedTitle;

	/**
	 * Configuration for &#39;Description&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $description;

	/**
	 * Configuration for &#39;oneLiner&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $oneLiner;

	/**
	 * Configuration for &#39;Keywords&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $keywords;

	/**
	 * Configuration for &#39;sensitiveContent&#39; AI generated metadata field
	 *
	 * @var Kaltura_Client_Type_MetadataFieldConfig
	 */
	public $sensitiveContent;


}

