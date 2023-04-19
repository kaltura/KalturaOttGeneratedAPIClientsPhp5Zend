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
class Kaltura_Client_Type_ScheduledRecordingProgramFilter extends Kaltura_Client_Type_AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduledRecordingProgramFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->recordingTypeEqual))
			$this->recordingTypeEqual = (string)$xml->recordingTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->recordingTypeEqual))
			$this->recordingTypeEqual = (string)$jsonObject->recordingTypeEqual;
		if(!is_null($xml) && count($xml->channelsIn))
			$this->channelsIn = (string)$xml->channelsIn;
		if(!is_null($jsonObject) && isset($jsonObject->channelsIn))
			$this->channelsIn = (string)$jsonObject->channelsIn;
		if(!is_null($xml) && count($xml->startDateGreaterThanOrNull))
			$this->startDateGreaterThanOrNull = (string)$xml->startDateGreaterThanOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThanOrNull))
			$this->startDateGreaterThanOrNull = (string)$jsonObject->startDateGreaterThanOrNull;
		if(!is_null($xml) && count($xml->endDateLessThanOrNull))
			$this->endDateLessThanOrNull = (string)$xml->endDateLessThanOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->endDateLessThanOrNull))
			$this->endDateLessThanOrNull = (string)$jsonObject->endDateLessThanOrNull;
		if(!is_null($xml) && count($xml->seriesIdsIn))
			$this->seriesIdsIn = (string)$xml->seriesIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->seriesIdsIn))
			$this->seriesIdsIn = (string)$jsonObject->seriesIdsIn;
	}
	/**
	 * The type of recordings to return
	 *
	 * @var Kaltura_Client_Enum_ScheduledRecordingAssetType
	 */
	public $recordingTypeEqual = null;

	/**
	 * Channels to filter by
	 *
	 * @var string
	 */
	public $channelsIn = null;

	/**
	 * start date
	 *
	 * @var bigint
	 */
	public $startDateGreaterThanOrNull = null;

	/**
	 * end date
	 *
	 * @var bigint
	 */
	public $endDateLessThanOrNull = null;

	/**
	 * Series to filter by
	 *
	 * @var string
	 */
	public $seriesIdsIn = null;


}

