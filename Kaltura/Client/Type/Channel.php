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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->oldName))
			$this->oldName = (string)$xml->oldName;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(count($xml->oldDescription))
			$this->oldDescription = (string)$xml->oldDescription;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->orderBy) && !empty($xml->orderBy))
			$this->orderBy = Kaltura_Client_ParseUtils::unmarshalObject($xml->orderBy, "KalturaChannelOrder");
		if(count($xml->orderingParametersEqual))
		{
			if(empty($xml->orderingParametersEqual))
				$this->orderingParametersEqual = array();
			else
				$this->orderingParametersEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->orderingParametersEqual, "KalturaBaseChannelOrder");
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->supportSegmentBasedOrdering))
		{
			if(!empty($xml->supportSegmentBasedOrdering) && ((int) $xml->supportSegmentBasedOrdering === 1 || strtolower((string)$xml->supportSegmentBasedOrdering) === 'true'))
				$this->supportSegmentBasedOrdering = true;
			else
				$this->supportSegmentBasedOrdering = false;
		}
		if(count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(count($xml->metaData))
		{
			if(empty($xml->metaData))
				$this->metaData = array();
			else
				$this->metaData = Kaltura_Client_ParseUtils::unmarshalMap($xml->metaData, "KalturaStringValue");
		}
		if(count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
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
	 * @var array of KalturaTranslationToken
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
	 * @var array of KalturaTranslationToken
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
	 * @var array of KalturaBaseChannelOrder
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

