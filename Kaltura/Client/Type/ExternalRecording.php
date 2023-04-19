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
class Kaltura_Client_Type_ExternalRecording extends Kaltura_Client_Type_Recording
{
	public function getKalturaObjectType()
	{
		return 'KalturaExternalRecording';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
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
		if(!is_null($xml) && count($xml->expiryDate))
			$this->expiryDate = (string)$xml->expiryDate;
		if(!is_null($jsonObject) && isset($jsonObject->expiryDate))
			$this->expiryDate = (string)$jsonObject->expiryDate;
	}
	/**
	 * External identifier for the recording
	 *
	 * @var string
	 * @insertonly
	 */
	public $externalId = null;

	/**
	 * key/value map field for extra data
	 *
	 * @var map
	 */
	public $metaData;

	/**
	 * Specifies until when the recording is available. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $expiryDate = null;


}

