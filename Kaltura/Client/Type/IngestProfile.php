<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->assetTypeId))
			$this->assetTypeId = (int)$xml->assetTypeId;
		if(count($xml->transformationAdapterUrl))
			$this->transformationAdapterUrl = (string)$xml->transformationAdapterUrl;
		if(count($xml->transformationAdapterSettings))
		{
			if(empty($xml->transformationAdapterSettings))
				$this->transformationAdapterSettings = array();
			else
				$this->transformationAdapterSettings = Kaltura_Client_ParseUtils::unmarshalMap($xml->transformationAdapterSettings, "KalturaStringValue");
		}
		if(count($xml->transformationAdapterSharedSecret))
			$this->transformationAdapterSharedSecret = (string)$xml->transformationAdapterSharedSecret;
		if(count($xml->defaultAutoFillPolicy))
			$this->defaultAutoFillPolicy = (string)$xml->defaultAutoFillPolicy;
		if(count($xml->defaultOverlapPolicy))
			$this->defaultOverlapPolicy = (string)$xml->defaultOverlapPolicy;
		if(count($xml->overlapChannels))
			$this->overlapChannels = (string)$xml->overlapChannels;
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

