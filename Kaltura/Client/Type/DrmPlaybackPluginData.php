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
class Kaltura_Client_Type_DrmPlaybackPluginData extends Kaltura_Client_Type_PluginData
{
	public function getKalturaObjectType()
	{
		return 'KalturaDrmPlaybackPluginData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->scheme))
			$this->scheme = (string)$xml->scheme;
		if(!is_null($jsonObject) && isset($jsonObject->scheme))
			$this->scheme = (string)$jsonObject->scheme;
		if(!is_null($xml) && count($xml->licenseURL))
			$this->licenseURL = (string)$xml->licenseURL;
		if(!is_null($jsonObject) && isset($jsonObject->licenseURL))
			$this->licenseURL = (string)$jsonObject->licenseURL;
		if(!is_null($xml) && count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dynamicData))
		{
			if(empty($jsonObject->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicData, "KalturaStringValue");
		}
	}
	/**
	 * Scheme
	 *
	 * @var Kaltura_Client_Enum_DrmSchemeName
	 */
	public $scheme = null;

	/**
	 * License URL
	 *
	 * @var string
	 */
	public $licenseURL = null;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;


}

