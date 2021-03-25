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
// Copyright (C) 2006-2021  Kaltura Inc.
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
			$this->type = (string)$xml->type;
		if(count($xml->typeId))
			$this->typeId = (int)$xml->typeId;
		if(count($xml->duration))
			$this->duration = (string)$xml->duration;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->altExternalId))
			$this->altExternalId = (string)$xml->altExternalId;
		if(count($xml->fileSize))
			$this->fileSize = (string)$xml->fileSize;
		if(count($xml->additionalData))
			$this->additionalData = (string)$xml->additionalData;
		if(count($xml->altStreamingCode))
			$this->altStreamingCode = (string)$xml->altStreamingCode;
		if(count($xml->alternativeCdnAdapaterProfileId))
			$this->alternativeCdnAdapaterProfileId = (string)$xml->alternativeCdnAdapaterProfileId;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->externalStoreId))
			$this->externalStoreId = (string)$xml->externalStoreId;
		if(count($xml->isDefaultLanguage))
		{
			if(!empty($xml->isDefaultLanguage) && ((int) $xml->isDefaultLanguage === 1 || strtolower((string)$xml->isDefaultLanguage) === 'true'))
				$this->isDefaultLanguage = true;
			else
				$this->isDefaultLanguage = false;
		}
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->orderNum))
			$this->orderNum = (int)$xml->orderNum;
		if(count($xml->outputProtecationLevel))
			$this->outputProtecationLevel = (string)$xml->outputProtecationLevel;
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


}

