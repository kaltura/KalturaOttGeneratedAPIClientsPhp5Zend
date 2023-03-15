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
class Kaltura_Client_Type_MediaAsset extends Kaltura_Client_Type_Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->externalIds))
			$this->externalIds = (string)$xml->externalIds;
		if(!is_null($jsonObject) && isset($jsonObject->externalIds))
			$this->externalIds = (string)$jsonObject->externalIds;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->deviceRuleId))
			$this->deviceRuleId = (int)$xml->deviceRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->deviceRuleId))
			$this->deviceRuleId = (int)$jsonObject->deviceRuleId;
		if(!is_null($xml) && count($xml->geoBlockRuleId))
			$this->geoBlockRuleId = (int)$xml->geoBlockRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->geoBlockRuleId))
			$this->geoBlockRuleId = (int)$jsonObject->geoBlockRuleId;
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
		if(!is_null($xml) && count($xml->inheritancePolicy))
			$this->inheritancePolicy = (string)$xml->inheritancePolicy;
		if(!is_null($jsonObject) && isset($jsonObject->inheritancePolicy))
			$this->inheritancePolicy = (string)$jsonObject->inheritancePolicy;
		if(!is_null($xml) && count($xml->liveToVod) && !empty($xml->liveToVod))
			$this->liveToVod = Kaltura_Client_ParseUtils::unmarshalObject($xml->liveToVod, "KalturaLiveToVodInfoAsset");
		if(!is_null($jsonObject) && isset($jsonObject->liveToVod) && !empty($jsonObject->liveToVod))
			$this->liveToVod = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->liveToVod, "KalturaLiveToVodInfoAsset");
	}
	/**
	 * External identifiers
	 *
	 * @var string
	 */
	public $externalIds = null;

	/**
	 * Entry Identifier
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Device rule identifier
	 *
	 * @var int
	 */
	public $deviceRuleId = null;

	/**
	 * Geo block rule identifier
	 *
	 * @var int
	 */
	public $geoBlockRuleId = null;

	/**
	 * The media asset status
	 *
	 * @var bool
	 */
	public $status = null;

	/**
	 * The media asset inheritance policy
	 *
	 * @var Kaltura_Client_Enum_AssetInheritancePolicy
	 */
	public $inheritancePolicy = null;

	/**
	 * Live to VOD (if present)
	 *
	 * @var Kaltura_Client_Type_LiveToVodInfoAsset
	 */
	public $liveToVod;


}

