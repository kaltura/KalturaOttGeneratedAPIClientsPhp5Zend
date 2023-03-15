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
class Kaltura_Client_Type_MediaFile extends Kaltura_Client_Type_AssetFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaFile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (int)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->typeId))
			$this->typeId = (int)$xml->typeId;
		if(!is_null($jsonObject) && isset($jsonObject->typeId))
			$this->typeId = (int)$jsonObject->typeId;
		if(!is_null($xml) && count($xml->altUrl))
			$this->altUrl = (string)$xml->altUrl;
		if(!is_null($jsonObject) && isset($jsonObject->altUrl))
			$this->altUrl = (string)$jsonObject->altUrl;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (string)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (string)$jsonObject->duration;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->altExternalId))
			$this->altExternalId = (string)$xml->altExternalId;
		if(!is_null($jsonObject) && isset($jsonObject->altExternalId))
			$this->altExternalId = (string)$jsonObject->altExternalId;
		if(!is_null($xml) && count($xml->fileSize))
			$this->fileSize = (string)$xml->fileSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileSize))
			$this->fileSize = (string)$jsonObject->fileSize;
		if(!is_null($xml) && count($xml->additionalData))
			$this->additionalData = (string)$xml->additionalData;
		if(!is_null($jsonObject) && isset($jsonObject->additionalData))
			$this->additionalData = (string)$jsonObject->additionalData;
		if(!is_null($xml) && count($xml->altStreamingCode))
			$this->altStreamingCode = (string)$xml->altStreamingCode;
		if(!is_null($jsonObject) && isset($jsonObject->altStreamingCode))
			$this->altStreamingCode = (string)$jsonObject->altStreamingCode;
		if(!is_null($xml) && count($xml->alternativeCdnAdapaterProfileId))
			$this->alternativeCdnAdapaterProfileId = (string)$xml->alternativeCdnAdapaterProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->alternativeCdnAdapaterProfileId))
			$this->alternativeCdnAdapaterProfileId = (string)$jsonObject->alternativeCdnAdapaterProfileId;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->externalStoreId))
			$this->externalStoreId = (string)$xml->externalStoreId;
		if(!is_null($jsonObject) && isset($jsonObject->externalStoreId))
			$this->externalStoreId = (string)$jsonObject->externalStoreId;
		if(!is_null($xml) && count($xml->isDefaultLanguage))
		{
			if(!empty($xml->isDefaultLanguage) && ((int) $xml->isDefaultLanguage === 1 || strtolower((string)$xml->isDefaultLanguage) === 'true'))
				$this->isDefaultLanguage = true;
			else
				$this->isDefaultLanguage = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefaultLanguage))
		{
			if(!empty($jsonObject->isDefaultLanguage) && ((int) $jsonObject->isDefaultLanguage === 1 || strtolower((string)$jsonObject->isDefaultLanguage) === 'true'))
				$this->isDefaultLanguage = true;
			else
				$this->isDefaultLanguage = false;
		}
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->orderNum))
			$this->orderNum = (int)$xml->orderNum;
		if(!is_null($jsonObject) && isset($jsonObject->orderNum))
			$this->orderNum = (int)$jsonObject->orderNum;
		if(!is_null($xml) && count($xml->outputProtecationLevel))
			$this->outputProtecationLevel = (string)$xml->outputProtecationLevel;
		if(!is_null($jsonObject) && isset($jsonObject->outputProtecationLevel))
			$this->outputProtecationLevel = (string)$jsonObject->outputProtecationLevel;
		if(!is_null($xml) && count($xml->cdnAdapaterProfileId))
			$this->cdnAdapaterProfileId = (string)$xml->cdnAdapaterProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->cdnAdapaterProfileId))
			$this->cdnAdapaterProfileId = (string)$jsonObject->cdnAdapaterProfileId;
		if(!is_null($xml) && count($xml->status))
		{
			if(!empty($xml->status) && ((int) $xml->status === 1 || strtolower((string)$xml->status) === 'true'))
				$this->status = true;
			else
				$this->status = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->status))
		{
			if(!empty($jsonObject->status) && ((int) $jsonObject->status === 1 || strtolower((string)$jsonObject->status) === 'true'))
				$this->status = true;
			else
				$this->status = false;
		}
		if(!is_null($xml) && count($xml->catalogEndDate))
			$this->catalogEndDate = (string)$xml->catalogEndDate;
		if(!is_null($jsonObject) && isset($jsonObject->catalogEndDate))
			$this->catalogEndDate = (string)$jsonObject->catalogEndDate;
		if(!is_null($xml) && count($xml->opl))
			$this->opl = (string)$xml->opl;
		if(!is_null($jsonObject) && isset($jsonObject->opl))
			$this->opl = (string)$jsonObject->opl;
		if(!is_null($xml) && count($xml->businessModuleDetails) && !empty($xml->businessModuleDetails))
			$this->businessModuleDetails = Kaltura_Client_ParseUtils::unmarshalObject($xml->businessModuleDetails, "KalturaBusinessModuleDetails");
		if(!is_null($jsonObject) && isset($jsonObject->businessModuleDetails) && !empty($jsonObject->businessModuleDetails))
			$this->businessModuleDetails = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->businessModuleDetails, "KalturaBusinessModuleDetails");
		if(!is_null($xml) && count($xml->labels))
			$this->labels = (string)$xml->labels;
		if(!is_null($jsonObject) && isset($jsonObject->labels))
			$this->labels = (string)$jsonObject->labels;
		if(!is_null($xml) && count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValueArray");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dynamicData))
		{
			if(empty($jsonObject->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicData, "KalturaStringValueArray");
		}
	}
	/**
	 * Unique identifier for the asset
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * File unique identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Deprecated - Device types as defined in the system
	 *
	 * @var string
	 * @readonly
	 */
	public $type = null;

	/**
	 * Device types identifier as defined in the system
	 *
	 * @var int
	 */
	public $typeId = null;

	/**
	 * URL of the media file to be played
	 *
	 * @var string
	 */
	public $altUrl = null;

	/**
	 * Duration of the media file
	 *
	 * @var bigint
	 */
	public $duration = null;

	/**
	 * External identifier for the media file
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Alternative external identifier for the media file
	 *
	 * @var string
	 */
	public $altExternalId = null;

	/**
	 * File size
	 *
	 * @var bigint
	 */
	public $fileSize = null;

	/**
	 * Additional Data
	 *
	 * @var string
	 */
	public $additionalData = null;

	/**
	 * Alternative streaming code
	 *
	 * @var string
	 */
	public $altStreamingCode = null;

	/**
	 * Alternative cdn adapter profile identifier
	 *
	 * @var bigint
	 */
	public $alternativeCdnAdapaterProfileId = null;

	/**
	 * EndDate
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * StartDate
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * ExternalStoreId
	 *
	 * @var string
	 */
	public $externalStoreId = null;

	/**
	 * IsDefaultLanguage
	 *
	 * @var bool
	 */
	public $isDefaultLanguage = null;

	/**
	 * Language
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * OrderNum
	 *
	 * @var int
	 */
	public $orderNum = null;

	/**
	 * OutputProtecationLevel
	 *
	 * @var string
	 */
	public $outputProtecationLevel = null;

	/**
	 * cdn adapter profile identifier
	 *
	 * @var bigint
	 */
	public $cdnAdapaterProfileId = null;

	/**
	 * The media file status
	 *
	 * @var bool
	 */
	public $status = null;

	/**
	 * Catalog end date
	 *
	 * @var bigint
	 */
	public $catalogEndDate = null;

	/**
	 * OPL
	 *
	 * @var string
	 */
	public $opl = null;

	/**
	 * businessModuleDetails
	 *
	 * @var Kaltura_Client_Type_BusinessModuleDetails
	 */
	public $businessModuleDetails;

	/**
	 * Labels associated with the media file
	 *
	 * @var string
	 */
	public $labels = null;

	/**
	 * List of KalturaMediaFile&#39;s dynamic data keys
	 *
	 * @var map
	 */
	public $dynamicData;


}

