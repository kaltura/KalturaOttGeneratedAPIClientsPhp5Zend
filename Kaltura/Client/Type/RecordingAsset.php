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
class Kaltura_Client_Type_RecordingAsset extends Kaltura_Client_Type_ProgramAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaRecordingAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->recordingId))
			$this->recordingId = (string)$xml->recordingId;
		if(!is_null($jsonObject) && isset($jsonObject->recordingId))
			$this->recordingId = (string)$jsonObject->recordingId;
		if(!is_null($xml) && count($xml->recordingType))
			$this->recordingType = (string)$xml->recordingType;
		if(!is_null($jsonObject) && isset($jsonObject->recordingType))
			$this->recordingType = (string)$jsonObject->recordingType;
		if(!is_null($xml) && count($xml->viewableUntilDate))
			$this->viewableUntilDate = (string)$xml->viewableUntilDate;
		if(!is_null($jsonObject) && isset($jsonObject->viewableUntilDate))
			$this->viewableUntilDate = (string)$jsonObject->viewableUntilDate;
		if(!is_null($xml) && count($xml->multiRecord))
		{
			if(!empty($xml->multiRecord) && ((int) $xml->multiRecord === 1 || strtolower((string)$xml->multiRecord) === 'true'))
				$this->multiRecord = true;
			else
				$this->multiRecord = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiRecord))
		{
			if(!empty($jsonObject->multiRecord) && ((int) $jsonObject->multiRecord === 1 || strtolower((string)$jsonObject->multiRecord) === 'true'))
				$this->multiRecord = true;
			else
				$this->multiRecord = false;
		}
	}
	/**
	 * Recording identifier
	 *
	 * @var string
	 */
	public $recordingId = null;

	/**
	 * Recording Type: single/season/series
	 *
	 * @var Kaltura_Client_Enum_RecordingType
	 */
	public $recordingType = null;

	/**
	 * Specifies until when the recording is available for viewing. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $viewableUntilDate = null;

	/**
	 * When TRUE indicates that there are multiple KalturaImmediateRecording instances for the event.
	 *
	 * @var bool
	 */
	public $multiRecord = null;


}

