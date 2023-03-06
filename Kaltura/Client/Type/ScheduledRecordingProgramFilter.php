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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->recordingTypeEqual))
			$this->recordingTypeEqual = (string)$xml->recordingTypeEqual;
		if(count($xml->channelsIn))
			$this->channelsIn = (string)$xml->channelsIn;
		if(count($xml->startDateGreaterThanOrNull))
			$this->startDateGreaterThanOrNull = (string)$xml->startDateGreaterThanOrNull;
		if(count($xml->endDateLessThanOrNull))
			$this->endDateLessThanOrNull = (string)$xml->endDateLessThanOrNull;
		if(count($xml->seriesIdsIn))
			$this->seriesIdsIn = (string)$xml->seriesIdsIn;
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

