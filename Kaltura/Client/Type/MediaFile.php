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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->type))
		{
			if(isset($xml->type->item) && count($xml->type->item))
				$this->multiLingual_type = Kaltura_Client_ParseUtils::unmarshalArray($xml->type, '');
			else
				$this->type = (string)$xml->type;
		}
		if(count($xml->typeId))
			$this->typeId = (int)$xml->typeId;
		if(count($xml->altUrl))
		{
			if(isset($xml->altUrl->item) && count($xml->altUrl->item))
				$this->multiLingual_altUrl = Kaltura_Client_ParseUtils::unmarshalArray($xml->altUrl, '');
			else
				$this->altUrl = (string)$xml->altUrl;
		}
		if(count($xml->duration))
			$this->duration = (string)$xml->duration;
		if(count($xml->externalId))
		{
			if(isset($xml->externalId->item) && count($xml->externalId->item))
				$this->multiLingual_externalId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalId, '');
			else
				$this->externalId = (string)$xml->externalId;
		}
		if(count($xml->altExternalId))
		{
			if(isset($xml->altExternalId->item) && count($xml->altExternalId->item))
				$this->multiLingual_altExternalId = Kaltura_Client_ParseUtils::unmarshalArray($xml->altExternalId, '');
			else
				$this->altExternalId = (string)$xml->altExternalId;
		}
		if(count($xml->fileSize))
			$this->fileSize = (string)$xml->fileSize;
		if(count($xml->additionalData))
		{
			if(isset($xml->additionalData->item) && count($xml->additionalData->item))
				$this->multiLingual_additionalData = Kaltura_Client_ParseUtils::unmarshalArray($xml->additionalData, '');
			else
				$this->additionalData = (string)$xml->additionalData;
		}
		if(count($xml->altStreamingCode))
		{
			if(isset($xml->altStreamingCode->item) && count($xml->altStreamingCode->item))
				$this->multiLingual_altStreamingCode = Kaltura_Client_ParseUtils::unmarshalArray($xml->altStreamingCode, '');
			else
				$this->altStreamingCode = (string)$xml->altStreamingCode;
		}
		if(count($xml->alternativeCdnAdapaterProfileId))
			$this->alternativeCdnAdapaterProfileId = (string)$xml->alternativeCdnAdapaterProfileId;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->externalStoreId))
		{
			if(isset($xml->externalStoreId->item) && count($xml->externalStoreId->item))
				$this->multiLingual_externalStoreId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalStoreId, '');
			else
				$this->externalStoreId = (string)$xml->externalStoreId;
		}
		if(count($xml->isDefaultLanguage))
		{
			if(!empty($xml->isDefaultLanguage) && ((int) $xml->isDefaultLanguage === 1 || strtolower((string)$xml->isDefaultLanguage) === 'true'))
				$this->isDefaultLanguage = true;
			else
				$this->isDefaultLanguage = false;
		}
		if(count($xml->language))
		{
			if(isset($xml->language->item) && count($xml->language->item))
				$this->multiLingual_language = Kaltura_Client_ParseUtils::unmarshalArray($xml->language, '');
			else
				$this->language = (string)$xml->language;
		}
		if(count($xml->orderNum))
			$this->orderNum = (int)$xml->orderNum;
		if(count($xml->outputProtecationLevel))
		{
			if(isset($xml->outputProtecationLevel->item) && count($xml->outputProtecationLevel->item))
				$this->multiLingual_outputProtecationLevel = Kaltura_Client_ParseUtils::unmarshalArray($xml->outputProtecationLevel, '');
			else
				$this->outputProtecationLevel = (string)$xml->outputProtecationLevel;
		}
		if(count($xml->cdnAdapaterProfileId))
			$this->cdnAdapaterProfileId = (string)$xml->cdnAdapaterProfileId;
		if(count($xml->status))
		{
			if(!empty($xml->status) && ((int) $xml->status === 1 || strtolower((string)$xml->status) === 'true'))
				$this->status = true;
			else
				$this->status = false;
		}
		if(count($xml->catalogEndDate))
			$this->catalogEndDate = (string)$xml->catalogEndDate;
		if(count($xml->opl))
		{
			if(isset($xml->opl->item) && count($xml->opl->item))
				$this->multiLingual_opl = Kaltura_Client_ParseUtils::unmarshalArray($xml->opl, '');
			else
				$this->opl = (string)$xml->opl;
		}
		if(count($xml->businessModuleDetails) && !empty($xml->businessModuleDetails))
			$this->businessModuleDetails = Kaltura_Client_ParseUtils::unmarshalObject($xml->businessModuleDetails, "KalturaBusinessModuleDetails");
		if(count($xml->labels))
		{
			if(isset($xml->labels->item) && count($xml->labels->item))
				$this->multiLingual_labels = Kaltura_Client_ParseUtils::unmarshalArray($xml->labels, '');
			else
				$this->labels = (string)$xml->labels;
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


}

