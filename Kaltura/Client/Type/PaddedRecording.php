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
class Kaltura_Client_Type_PaddedRecording extends Kaltura_Client_Type_Recording
{
	public function getKalturaObjectType()
	{
		return 'KalturaPaddedRecording';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->startPadding))
			$this->startPadding = (int)$xml->startPadding;
		if(!is_null($jsonObject) && isset($jsonObject->startPadding))
			$this->startPadding = (int)$jsonObject->startPadding;
		if(!is_null($xml) && count($xml->endPadding))
			$this->endPadding = (int)$xml->endPadding;
		if(!is_null($jsonObject) && isset($jsonObject->endPadding))
			$this->endPadding = (int)$jsonObject->endPadding;
		if(!is_null($xml) && count($xml->startPaddingIsPersonal))
		{
			if(!empty($xml->startPaddingIsPersonal) && ((int) $xml->startPaddingIsPersonal === 1 || strtolower((string)$xml->startPaddingIsPersonal) === 'true'))
				$this->startPaddingIsPersonal = true;
			else
				$this->startPaddingIsPersonal = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->startPaddingIsPersonal))
		{
			if(!empty($jsonObject->startPaddingIsPersonal) && ((int) $jsonObject->startPaddingIsPersonal === 1 || strtolower((string)$jsonObject->startPaddingIsPersonal) === 'true'))
				$this->startPaddingIsPersonal = true;
			else
				$this->startPaddingIsPersonal = false;
		}
		if(!is_null($xml) && count($xml->endPaddingIsPersonal))
		{
			if(!empty($xml->endPaddingIsPersonal) && ((int) $xml->endPaddingIsPersonal === 1 || strtolower((string)$xml->endPaddingIsPersonal) === 'true'))
				$this->endPaddingIsPersonal = true;
			else
				$this->endPaddingIsPersonal = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->endPaddingIsPersonal))
		{
			if(!empty($jsonObject->endPaddingIsPersonal) && ((int) $jsonObject->endPaddingIsPersonal === 1 || strtolower((string)$jsonObject->endPaddingIsPersonal) === 'true'))
				$this->endPaddingIsPersonal = true;
			else
				$this->endPaddingIsPersonal = false;
		}
	}
	/**
	 * Household specific start padding of the recording
	 *
	 * @var int
	 */
	public $startPadding = null;

	/**
	 * Household specific end padding of the recording
	 *
	 * @var int
	 */
	public $endPadding = null;

	/**
	 * Indicates whether startPadding value is personal padding (counts towards HH quota) or system padding (does not count towards HH quota).
	 *
	 * @var bool
	 * @readonly
	 */
	public $startPaddingIsPersonal = null;

	/**
	 * Indicates whether endPadding value is personal padding (counts towards HH quota) or system padding (does not count towards HH quota).
	 *
	 * @var bool
	 * @readonly
	 */
	public $endPaddingIsPersonal = null;


}

