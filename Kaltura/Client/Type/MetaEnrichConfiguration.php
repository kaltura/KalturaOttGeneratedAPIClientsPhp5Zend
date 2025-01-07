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
class Kaltura_Client_Type_MetaEnrichConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetaEnrichConfiguration';
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
		if(!is_null($xml) && count($xml->metaFieldNameMap))
		{
			if(empty($xml->metaFieldNameMap))
				$this->metaFieldNameMap = array();
			else
				$this->metaFieldNameMap = Kaltura_Client_ParseUtils::unmarshalMap($xml->metaFieldNameMap, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->metaFieldNameMap))
		{
			if(empty($jsonObject->metaFieldNameMap))
				$this->metaFieldNameMap = array();
			else
				$this->metaFieldNameMap = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->metaFieldNameMap, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->vectorizedMetaIds))
			$this->vectorizedMetaIds = (string)$xml->vectorizedMetaIds;
		if(!is_null($jsonObject) && isset($jsonObject->vectorizedMetaIds))
			$this->vectorizedMetaIds = (string)$jsonObject->vectorizedMetaIds;
	}
	/**
	 * Specifies if the feature is enabled or disabled.
	 *
	 * @var bool
	 */
	public $isEnabled = null;

	/**
	 * A type of dictionary defined as [KalturaLlmMetadataKeysEnum,Integer]. 
	 *             This property is used to correlate the newly generated metadata to existing metadata IDs which are available in the asset’s struct. 
	 *             That is, per each generated metadata key (name), to which metadata ID on the asset it is mapped and stored.
	 *
	 * @var map
	 */
	public $metaFieldNameMap;

	/**
	 * a String type holding a comma separated list of metadata IDs. 
	 *              It is used to define which metadata fields will be extracted from the asset and sent for embeddings.
	 *
	 * @var string
	 */
	public $vectorizedMetaIds = null;


}

