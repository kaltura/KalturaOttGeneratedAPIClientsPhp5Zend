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
class Kaltura_Client_Type_AiMetadataGeneratorConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAiMetadataGeneratorConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->isEnabled))
		{
			if(!empty($xml->isEnabled) && ((int) $xml->isEnabled === 1 || strtolower((string)$xml->isEnabled) === 'true'))
				$this->isEnabled = true;
			else
				$this->isEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isEnabled))
		{
			if(!empty($jsonObject->isEnabled) && ((int) $jsonObject->isEnabled === 1 || strtolower((string)$jsonObject->isEnabled) === 'true'))
				$this->isEnabled = true;
			else
				$this->isEnabled = false;
		}
		if(!is_null($xml) && count($xml->assetStructMetaNameMap))
		{
			if(empty($xml->assetStructMetaNameMap))
				$this->assetStructMetaNameMap = array();
			else
				$this->assetStructMetaNameMap = Kaltura_Client_ParseUtils::unmarshalMap($xml->assetStructMetaNameMap, "KalturaMetaFieldNameMap");
		}
		if(!is_null($jsonObject) && isset($jsonObject->assetStructMetaNameMap))
		{
			if(empty($jsonObject->assetStructMetaNameMap))
				$this->assetStructMetaNameMap = array();
			else
				$this->assetStructMetaNameMap = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->assetStructMetaNameMap, "KalturaMetaFieldNameMap");
		}
		if(!is_null($xml) && count($xml->supportedLanguages))
		{
			if(empty($xml->supportedLanguages))
				$this->supportedLanguages = array();
			else
				$this->supportedLanguages = Kaltura_Client_ParseUtils::unmarshalArray($xml->supportedLanguages, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->supportedLanguages))
		{
			if(empty($jsonObject->supportedLanguages))
				$this->supportedLanguages = array();
			else
				$this->supportedLanguages = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->supportedLanguages, "KalturaStringValue");
		}
	}
	/**
	 * Specifies if the feature is enabled or disabled.
	 *
	 * @var bool
	 */
	public $isEnabled = null;

	/**
	 * A type of dictionary defined as [long,KalturaMetaFieldNameMap]. 
	 *             This property is used to correlate the newly generated metadata to
	 *             existing metadata IDs which are available in the asset’s struct.
	 *
	 * @var map
	 */
	public $assetStructMetaNameMap;

	/**
	 * A read only array to list the set of languages which can be used with the service.
	 *             In practice it is populated with the values set in KalturaMetadataGeneratorLanguages ENUM.
	 *
	 * @var array of KalturaStringValue
	 * @readonly
	 */
	public $supportedLanguages;


}

