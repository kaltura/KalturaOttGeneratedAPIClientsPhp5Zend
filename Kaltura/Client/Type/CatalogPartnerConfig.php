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
class Kaltura_Client_Type_CatalogPartnerConfig extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaCatalogPartnerConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->singleMultilingualMode))
		{
			if(!empty($xml->singleMultilingualMode) && ((int) $xml->singleMultilingualMode === 1 || strtolower((string)$xml->singleMultilingualMode) === 'true'))
				$this->singleMultilingualMode = true;
			else
				$this->singleMultilingualMode = false;
		}
		if(count($xml->categoryManagement) && !empty($xml->categoryManagement))
			$this->categoryManagement = Kaltura_Client_ParseUtils::unmarshalObject($xml->categoryManagement, "KalturaCategoryManagement");
		if(count($xml->epgMultilingualFallbackSupport))
		{
			if(!empty($xml->epgMultilingualFallbackSupport) && ((int) $xml->epgMultilingualFallbackSupport === 1 || strtolower((string)$xml->epgMultilingualFallbackSupport) === 'true'))
				$this->epgMultilingualFallbackSupport = true;
			else
				$this->epgMultilingualFallbackSupport = false;
		}
		if(count($xml->uploadExportDatalake))
		{
			if(!empty($xml->uploadExportDatalake) && ((int) $xml->uploadExportDatalake === 1 || strtolower((string)$xml->uploadExportDatalake) === 'true'))
				$this->uploadExportDatalake = true;
			else
				$this->uploadExportDatalake = false;
		}
		if(count($xml->shopMarkerMetaId))
			$this->shopMarkerMetaId = (string)$xml->shopMarkerMetaId;
	}
	/**
	 * Single multilingual mode
	 *
	 * @var bool
	 */
	public $singleMultilingualMode = null;

	/**
	 * Category management
	 *
	 * @var Kaltura_Client_Type_CategoryManagement
	 */
	public $categoryManagement;

	/**
	 * EPG Multilingual Fallback Support
	 *
	 * @var bool
	 */
	public $epgMultilingualFallbackSupport = null;

	/**
	 * Upload Export Datalake
	 *
	 * @var bool
	 */
	public $uploadExportDatalake = null;

	/**
	 * Shop Marker&#39;s identifier
	 *
	 * @var bigint
	 */
	public $shopMarkerMetaId = null;


}

