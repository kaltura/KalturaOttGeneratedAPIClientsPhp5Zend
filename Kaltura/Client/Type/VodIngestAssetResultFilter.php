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
class Kaltura_Client_Type_VodIngestAssetResultFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaVodIngestAssetResultFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fileNameContains))
			$this->fileNameContains = (string)$xml->fileNameContains;
		if(!is_null($jsonObject) && isset($jsonObject->fileNameContains))
			$this->fileNameContains = (string)$jsonObject->fileNameContains;
		if(!is_null($xml) && count($xml->assetNameContains))
			$this->assetNameContains = (string)$xml->assetNameContains;
		if(!is_null($jsonObject) && isset($jsonObject->assetNameContains))
			$this->assetNameContains = (string)$jsonObject->assetNameContains;
		if(!is_null($xml) && count($xml->ingestStatusIn))
			$this->ingestStatusIn = (string)$xml->ingestStatusIn;
		if(!is_null($jsonObject) && isset($jsonObject->ingestStatusIn))
			$this->ingestStatusIn = (string)$jsonObject->ingestStatusIn;
		if(!is_null($xml) && count($xml->ingestDateGreaterThan))
			$this->ingestDateGreaterThan = (string)$xml->ingestDateGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->ingestDateGreaterThan))
			$this->ingestDateGreaterThan = (string)$jsonObject->ingestDateGreaterThan;
		if(!is_null($xml) && count($xml->ingestDateSmallerThan))
			$this->ingestDateSmallerThan = (string)$xml->ingestDateSmallerThan;
		if(!is_null($jsonObject) && isset($jsonObject->ingestDateSmallerThan))
			$this->ingestDateSmallerThan = (string)$jsonObject->ingestDateSmallerThan;
		if(!is_null($xml) && count($xml->vodTypeSystemNameIn))
			$this->vodTypeSystemNameIn = (string)$xml->vodTypeSystemNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->vodTypeSystemNameIn))
			$this->vodTypeSystemNameIn = (string)$jsonObject->vodTypeSystemNameIn;
		if(!is_null($xml) && count($xml->shopAssetUserRuleIdIn))
			$this->shopAssetUserRuleIdIn = (string)$xml->shopAssetUserRuleIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->shopAssetUserRuleIdIn))
			$this->shopAssetUserRuleIdIn = (string)$jsonObject->shopAssetUserRuleIdIn;
	}
	/**
	 * Filter KalturaVodIngestAssetResult elements based on the ingest XML file name or partial name.
	 *
	 * @var string
	 */
	public $fileNameContains = null;

	/**
	 * Filter KalturaVodIngestAssetResult elements based on the asset name or partial name.
	 *
	 * @var string
	 */
	public $assetNameContains = null;

	/**
	 * Comma separated values, representing multiple selection of ingest status state (\&quot;SUCCESS\&quot;,\&quot;FAIL\&quot;,\&quot;SUCCESS_WARNING\&quot;EXTERNAL_FAIL\&quot;).
	 *
	 * @var string
	 */
	public $ingestStatusIn = null;

	/**
	 * Filter assets ingested after the greater than value. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $ingestDateGreaterThan = null;

	/**
	 * Filter assets ingested before the smaller than value. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $ingestDateSmallerThan = null;

	/**
	 * Comma separated asset types, representing multiple selection of VOD asset types (e.g. \&quot;MOVIE\&quot;,\&quot;SERIES\&quot;,\&quot;SEASON\&quot;,\&quot;EPISODE\&quot;...).
	 *
	 * @var string
	 */
	public $vodTypeSystemNameIn = null;

	/**
	 * Comma separated Ids, pointing to AssetUserRules which hold the shop markers (shop provider values)
	 *
	 * @var string
	 */
	public $shopAssetUserRuleIdIn = null;


}

