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
class Kaltura_Client_Type_ContentTypeSelector extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaContentTypeSelector';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->includeRecordings))
		{
			if(!empty($xml->includeRecordings) && ((int) $xml->includeRecordings === 1 || strtolower((string)$xml->includeRecordings) === 'true'))
				$this->includeRecordings = true;
			else
				$this->includeRecordings = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includeRecordings))
		{
			if(!empty($jsonObject->includeRecordings) && ((int) $jsonObject->includeRecordings === 1 || strtolower((string)$jsonObject->includeRecordings) === 'true'))
				$this->includeRecordings = true;
			else
				$this->includeRecordings = false;
		}
		if(!is_null($xml) && count($xml->includePrograms))
		{
			if(!empty($xml->includePrograms) && ((int) $xml->includePrograms === 1 || strtolower((string)$xml->includePrograms) === 'true'))
				$this->includePrograms = true;
			else
				$this->includePrograms = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includePrograms))
		{
			if(!empty($jsonObject->includePrograms) && ((int) $jsonObject->includePrograms === 1 || strtolower((string)$jsonObject->includePrograms) === 'true'))
				$this->includePrograms = true;
			else
				$this->includePrograms = false;
		}
		if(!is_null($xml) && count($xml->mediaTypeIdIn))
			$this->mediaTypeIdIn = (string)$xml->mediaTypeIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->mediaTypeIdIn))
			$this->mediaTypeIdIn = (string)$jsonObject->mediaTypeIdIn;
	}
	/**
	 * Determines if Recording assets are counted.
	 *             Omitted or true: Recordings are included.
	 *             false: Recordings are excluded.
	 *
	 * @var bool
	 */
	public $includeRecordings = null;

	/**
	 * Determines if EPG Program assets (Live, Catch-up, Start-over) are counted.
	 *             Omitted or true: Programs are included.
	 *             false: Programs are excluded.
	 *
	 * @var bool
	 */
	public $includePrograms = null;

	/**
	 * Filter for specific playable media types (e.g., Movie, Episode).
	 *             Omitted: ALL playable media types are included.
	 *             Provided (List of IDs): ONLY the media types matching the listed IDs are included.
	 *             Provided (Empty String): NO media types are included.
	 *             Constraint: IDs must correspond to valid playable media types. Providing an invalid ID will result in an error.
	 *
	 * @var string
	 */
	public $mediaTypeIdIn = null;


}

