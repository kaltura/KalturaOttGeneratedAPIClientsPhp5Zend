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
class Kaltura_Client_Type_SeriesRecording extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSeriesRecording';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->epgId))
			$this->epgId = (string)$xml->epgId;
		if(!is_null($jsonObject) && isset($jsonObject->epgId))
			$this->epgId = (string)$jsonObject->epgId;
		if(!is_null($xml) && count($xml->channelId))
			$this->channelId = (string)$xml->channelId;
		if(!is_null($jsonObject) && isset($jsonObject->channelId))
			$this->channelId = (string)$jsonObject->channelId;
		if(!is_null($xml) && count($xml->seriesId))
			$this->seriesId = (string)$xml->seriesId;
		if(!is_null($jsonObject) && isset($jsonObject->seriesId))
			$this->seriesId = (string)$jsonObject->seriesId;
		if(!is_null($xml) && count($xml->seasonNumber))
			$this->seasonNumber = (int)$xml->seasonNumber;
		if(!is_null($jsonObject) && isset($jsonObject->seasonNumber))
			$this->seasonNumber = (int)$jsonObject->seasonNumber;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->excludedSeasons))
		{
			if(empty($xml->excludedSeasons))
				$this->excludedSeasons = array();
			else
				$this->excludedSeasons = Kaltura_Client_ParseUtils::unmarshalArray($xml->excludedSeasons, "KalturaIntegerValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->excludedSeasons))
		{
			if(empty($jsonObject->excludedSeasons))
				$this->excludedSeasons = array();
			else
				$this->excludedSeasons = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->excludedSeasons, "KalturaIntegerValue");
		}
		if(!is_null($xml) && count($xml->seriesRecordingOption) && !empty($xml->seriesRecordingOption))
			$this->seriesRecordingOption = Kaltura_Client_ParseUtils::unmarshalObject($xml->seriesRecordingOption, "KalturaSeriesRecordingOption");
		if(!is_null($jsonObject) && isset($jsonObject->seriesRecordingOption) && !empty($jsonObject->seriesRecordingOption))
			$this->seriesRecordingOption = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->seriesRecordingOption, "KalturaSeriesRecordingOption");
	}
	/**
	 * Kaltura unique ID representing the series recording identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Kaltura EpgId
	 *
	 * @var bigint
	 */
	public $epgId = null;

	/**
	 * Kaltura ChannelId
	 *
	 * @var bigint
	 */
	public $channelId = null;

	/**
	 * Kaltura SeriesId
	 *
	 * @var string
	 */
	public $seriesId = null;

	/**
	 * Kaltura SeasonNumber
	 *
	 * @var int
	 */
	public $seasonNumber = null;

	/**
	 * Recording Type: single/series/season
	 *
	 * @var Kaltura_Client_Enum_RecordingType
	 */
	public $type = null;

	/**
	 * Specifies when was the series recording created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the series recording last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * List of the season numbers to exclude.
	 *
	 * @var Kaltura_Client_Type_IntegerValue[]
	 * @readonly
	 */
	public $excludedSeasons;

	/**
	 * Series Recording Option
	 *
	 * @var Kaltura_Client_Type_SeriesRecordingOption
	 */
	public $seriesRecordingOption;


}

