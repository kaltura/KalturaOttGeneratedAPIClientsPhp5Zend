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
class Kaltura_Client_Type_IngestProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->assetTypeId))
			$this->assetTypeId = (int)$xml->assetTypeId;
		if(!is_null($jsonObject) && isset($jsonObject->assetTypeId))
			$this->assetTypeId = (int)$jsonObject->assetTypeId;
		if(!is_null($xml) && count($xml->transformationAdapterUrl))
			$this->transformationAdapterUrl = (string)$xml->transformationAdapterUrl;
		if(!is_null($jsonObject) && isset($jsonObject->transformationAdapterUrl))
			$this->transformationAdapterUrl = (string)$jsonObject->transformationAdapterUrl;
		if(!is_null($xml) && count($xml->transformationAdapterSettings))
		{
			if(empty($xml->transformationAdapterSettings))
				$this->transformationAdapterSettings = array();
			else
				$this->transformationAdapterSettings = Kaltura_Client_ParseUtils::unmarshalMap($xml->transformationAdapterSettings, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->transformationAdapterSettings))
		{
			if(empty($jsonObject->transformationAdapterSettings))
				$this->transformationAdapterSettings = array();
			else
				$this->transformationAdapterSettings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->transformationAdapterSettings, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->transformationAdapterSharedSecret))
			$this->transformationAdapterSharedSecret = (string)$xml->transformationAdapterSharedSecret;
		if(!is_null($jsonObject) && isset($jsonObject->transformationAdapterSharedSecret))
			$this->transformationAdapterSharedSecret = (string)$jsonObject->transformationAdapterSharedSecret;
		if(!is_null($xml) && count($xml->defaultAutoFillPolicy))
			$this->defaultAutoFillPolicy = (string)$xml->defaultAutoFillPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->defaultAutoFillPolicy))
			$this->defaultAutoFillPolicy = (string)$jsonObject->defaultAutoFillPolicy;
		if(!is_null($xml) && count($xml->defaultOverlapPolicy))
			$this->defaultOverlapPolicy = (string)$xml->defaultOverlapPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->defaultOverlapPolicy))
			$this->defaultOverlapPolicy = (string)$jsonObject->defaultOverlapPolicy;
		if(!is_null($xml) && count($xml->overlapChannels))
			$this->overlapChannels = (string)$xml->overlapChannels;
		if(!is_null($jsonObject) && isset($jsonObject->overlapChannels))
			$this->overlapChannels = (string)$jsonObject->overlapChannels;
	}
	/**
	 * Ingest profile identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Ingest profile name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Ingest profile externalId
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Type of assets that this profile suppose to ingest: 0 - EPG, 1 - MEDIA
	 *
	 * @var int
	 */
	public $assetTypeId = null;

	/**
	 * Transformation Adapter URL
	 *
	 * @var string
	 */
	public $transformationAdapterUrl = null;

	/**
	 * Transformation Adapter settings
	 *
	 * @var map
	 */
	public $transformationAdapterSettings;

	/**
	 * Transformation Adapter shared secret
	 *
	 * @var string
	 */
	public $transformationAdapterSharedSecret = null;

	/**
	 * Ingest profile default Auto-fill policy
	 *
	 * @var Kaltura_Client_Enum_IngestProfileAutofillPolicy
	 */
	public $defaultAutoFillPolicy = null;

	/**
	 * Ingest profile default Overlap policy
	 *
	 * @var Kaltura_Client_Enum_IngestProfileOverlapPolicy
	 */
	public $defaultOverlapPolicy = null;

	/**
	 * Ingest profile overlap channels
	 *
	 * @var string
	 */
	public $overlapChannels = null;


}

