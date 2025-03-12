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
class Kaltura_Client_Type_Channel extends Kaltura_Client_Type_BaseChannel
{
	public function getKalturaObjectType()
	{
		return 'KalturaChannel';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualName))
		{
			if(empty($jsonObject->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->oldName))
			$this->oldName = (string)$xml->oldName;
		if(!is_null($jsonObject) && isset($jsonObject->oldName))
			$this->oldName = (string)$jsonObject->oldName;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualDescription))
		{
			if(empty($jsonObject->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualDescription, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->oldDescription))
			$this->oldDescription = (string)$xml->oldDescription;
		if(!is_null($jsonObject) && isset($jsonObject->oldDescription))
			$this->oldDescription = (string)$jsonObject->oldDescription;
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->orderBy) && !empty($xml->orderBy))
			$this->orderBy = Kaltura_Client_ParseUtils::unmarshalObject($xml->orderBy, "KalturaChannelOrder");
		if(!is_null($jsonObject) && isset($jsonObject->orderBy) && !empty($jsonObject->orderBy))
			$this->orderBy = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->orderBy, "KalturaChannelOrder");
		if(!is_null($xml) && count($xml->orderingParametersEqual))
		{
			if(empty($xml->orderingParametersEqual))
				$this->orderingParametersEqual = array();
			else
				$this->orderingParametersEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->orderingParametersEqual, "KalturaBaseChannelOrder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->orderingParametersEqual))
		{
			if(empty($jsonObject->orderingParametersEqual))
				$this->orderingParametersEqual = array();
			else
				$this->orderingParametersEqual = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->orderingParametersEqual, "KalturaBaseChannelOrder");
		}
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->supportSegmentBasedOrdering))
		{
			if(!empty($xml->supportSegmentBasedOrdering) && ((int) $xml->supportSegmentBasedOrdering === 1 || strtolower((string)$xml->supportSegmentBasedOrdering) === 'true'))
				$this->supportSegmentBasedOrdering = true;
			else
				$this->supportSegmentBasedOrdering = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->supportSegmentBasedOrdering))
		{
			if(!empty($jsonObject->supportSegmentBasedOrdering) && ((int) $jsonObject->supportSegmentBasedOrdering === 1 || strtolower((string)$jsonObject->supportSegmentBasedOrdering) === 'true'))
				$this->supportSegmentBasedOrdering = true;
			else
				$this->supportSegmentBasedOrdering = false;
		}
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
		if(!is_null($xml) && count($xml->metaData))
		{
			if(empty($xml->metaData))
				$this->metaData = array();
			else
				$this->metaData = Kaltura_Client_ParseUtils::unmarshalMap($xml->metaData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->metaData))
		{
			if(empty($jsonObject->metaData))
				$this->metaData = array();
			else
				$this->metaData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->metaData, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->virtualAssetId))
			$this->virtualAssetId = (string)$jsonObject->virtualAssetId;
	}
	/**
	 * Channel name
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Channel name
	 *
	 * @var Kaltura_Client_Type_TranslationToken[]
	 */
	public $multilingualName;

	/**
	 * Channel name
	 *
	 * @var string
	 */
	public $oldName = null;

	/**
	 * Channel system name
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Cannel description
	 *
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * Cannel description
	 *
	 * @var Kaltura_Client_Type_TranslationToken[]
	 */
	public $multilingualDescription;

	/**
	 * Cannel description
	 *
	 * @var string
	 */
	public $oldDescription = null;

	/**
	 * active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Channel order by
	 *
	 * @var Kaltura_Client_Type_ChannelOrder
	 */
	public $orderBy;

	/**
	 * Parameters for asset list sorting.
	 *
	 * @var Kaltura_Client_Type_BaseChannelOrder[]
	 */
	public $orderingParametersEqual;

	/**
	 * Specifies when was the Channel was created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Channel last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Specifies whether the assets in this channel will be ordered based on their match to the user&#39;s segments (see BEO-5524)
	 *
	 * @var bool
	 */
	public $supportSegmentBasedOrdering = null;

	/**
	 * Asset user rule identifier
	 *
	 * @var bigint
	 */
	public $assetUserRuleId = null;

	/**
	 * key/value map field for extra data
	 *
	 * @var map
	 */
	public $metaData;

	/**
	 * Virtual asset id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $virtualAssetId = null;


}

