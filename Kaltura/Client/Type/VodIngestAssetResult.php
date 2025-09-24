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
class Kaltura_Client_Type_VodIngestAssetResult extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVodIngestAssetResult';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetName))
			$this->assetName = (string)$xml->assetName;
		if(!is_null($jsonObject) && isset($jsonObject->assetName))
			$this->assetName = (string)$jsonObject->assetName;
		if(!is_null($xml) && count($xml->shopAssetUserRuleId))
			$this->shopAssetUserRuleId = (string)$xml->shopAssetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->shopAssetUserRuleId))
			$this->shopAssetUserRuleId = (string)$jsonObject->shopAssetUserRuleId;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->ingestDate))
			$this->ingestDate = (string)$xml->ingestDate;
		if(!is_null($jsonObject) && isset($jsonObject->ingestDate))
			$this->ingestDate = (string)$jsonObject->ingestDate;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->vodTypeSystemName))
			$this->vodTypeSystemName = (string)$xml->vodTypeSystemName;
		if(!is_null($jsonObject) && isset($jsonObject->vodTypeSystemName))
			$this->vodTypeSystemName = (string)$jsonObject->vodTypeSystemName;
		if(!is_null($xml) && count($xml->errors))
		{
			if(empty($xml->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::unmarshalArray($xml->errors, "KalturaVodIngestAssetResultErrorMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->errors))
		{
			if(empty($jsonObject->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->errors, "KalturaVodIngestAssetResultErrorMessage");
		}
		if(!is_null($xml) && count($xml->warnings))
		{
			if(empty($xml->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::unmarshalArray($xml->warnings, "KalturaVodIngestAssetResultErrorMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->warnings))
		{
			if(empty($jsonObject->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->warnings, "KalturaVodIngestAssetResultErrorMessage");
		}
	}
	/**
	 * Ingested asset name. Absent only in case of NameRequired error
	 *
	 * @var string
	 */
	public $assetName = null;

	/**
	 * The shop ID the asset is assigned to. Omitted if the asset is not associated to any shop.
	 *
	 * @var bigint
	 */
	public $shopAssetUserRuleId = null;

	/**
	 * The XML file name used at the ingest gateway. Referred to as process name
	 *
	 * @var string
	 */
	public $fileName = null;

	/**
	 * Date and time the asset was ingested. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $ingestDate = null;

	/**
	 * The status result for the asset ingest.
	 *             FAILURE - the asset ingest was failed after the ingest process started, specify the error for it.
	 *             SUCCESS - the asset was succeeded to be ingested.
	 *             SUCCESS_WARNING - the asset was succeeded to be ingested with warnings that do not prevent the ingest.
	 *             EXTERNAL_FAILURE - the asset ingest was failed before the ingest process started, specify the error for it.
	 *
	 * @var Kaltura_Client_Enum_VodIngestAssetResultStatus
	 */
	public $status = null;

	/**
	 * VOD asset type (assetStruct.systemName).
	 *
	 * @var string
	 */
	public $vodTypeSystemName = null;

	/**
	 * Errors which prevent the asset from being ingested
	 *
	 * @var Kaltura_Client_Type_VodIngestAssetResultErrorMessage[]
	 */
	public $errors;

	/**
	 * Errors which do not prevent the asset from being ingested
	 *
	 * @var Kaltura_Client_Type_VodIngestAssetResultErrorMessage[]
	 */
	public $warnings;


}

