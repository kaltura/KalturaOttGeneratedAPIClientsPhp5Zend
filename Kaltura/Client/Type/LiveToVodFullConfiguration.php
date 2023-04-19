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
class Kaltura_Client_Type_LiveToVodFullConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveToVodFullConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->isL2vEnabled))
		{
			if(!empty($xml->isL2vEnabled) && ((int) $xml->isL2vEnabled === 1 || strtolower((string)$xml->isL2vEnabled) === 'true'))
				$this->isL2vEnabled = true;
			else
				$this->isL2vEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isL2vEnabled))
		{
			if(!empty($jsonObject->isL2vEnabled) && ((int) $jsonObject->isL2vEnabled === 1 || strtolower((string)$jsonObject->isL2vEnabled) === 'true'))
				$this->isL2vEnabled = true;
			else
				$this->isL2vEnabled = false;
		}
		if(!is_null($xml) && count($xml->retentionPeriodDays))
			$this->retentionPeriodDays = (int)$xml->retentionPeriodDays;
		if(!is_null($jsonObject) && isset($jsonObject->retentionPeriodDays))
			$this->retentionPeriodDays = (int)$jsonObject->retentionPeriodDays;
		if(!is_null($xml) && count($xml->metadataClassifier))
			$this->metadataClassifier = (string)$xml->metadataClassifier;
		if(!is_null($jsonObject) && isset($jsonObject->metadataClassifier))
			$this->metadataClassifier = (string)$jsonObject->metadataClassifier;
		if(!is_null($xml) && count($xml->linearAssets))
		{
			if(empty($xml->linearAssets))
				$this->linearAssets = array();
			else
				$this->linearAssets = Kaltura_Client_ParseUtils::unmarshalArray($xml->linearAssets, "KalturaLiveToVodLinearAssetConfiguration");
		}
		if(!is_null($jsonObject) && isset($jsonObject->linearAssets))
		{
			if(empty($jsonObject->linearAssets))
				$this->linearAssets = array();
			else
				$this->linearAssets = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->linearAssets, "KalturaLiveToVodLinearAssetConfiguration");
		}
	}
	/**
	 * Enable/disable the feature globally. If disabled, then all linear assets are not enabled.
	 *
	 * @var bool
	 */
	public $isL2vEnabled = null;

	/**
	 * Number of days the L2V asset is retained in the system.
	 *
	 * @var int
	 */
	public $retentionPeriodDays = null;

	/**
	 * The name (label) of the metadata field marking the program asset to be duplicated as a L2V asset.
	 *
	 * @var string
	 */
	public $metadataClassifier = null;

	/**
	 * Configuring isL2vEnabled/retentionPeriodDays per each channel, overriding the defaults set in the global isL2vEnabled and retentionPeriodDays parameters.
	 *
	 * @var array of KalturaLiveToVodLinearAssetConfiguration
	 */
	public $linearAssets;


}

