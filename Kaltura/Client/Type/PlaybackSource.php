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
class Kaltura_Client_Type_PlaybackSource extends Kaltura_Client_Type_MediaFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackSource';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->format))
			$this->format = (string)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (string)$jsonObject->format;
		if(!is_null($xml) && count($xml->protocols))
			$this->protocols = (string)$xml->protocols;
		if(!is_null($jsonObject) && isset($jsonObject->protocols))
			$this->protocols = (string)$jsonObject->protocols;
		if(!is_null($xml) && count($xml->drm))
		{
			if(empty($xml->drm))
				$this->drm = array();
			else
				$this->drm = Kaltura_Client_ParseUtils::unmarshalArray($xml->drm, "KalturaDrmPlaybackPluginData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->drm))
		{
			if(empty($jsonObject->drm))
				$this->drm = array();
			else
				$this->drm = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->drm, "KalturaDrmPlaybackPluginData");
		}
		if(!is_null($xml) && count($xml->isTokenized))
		{
			if(!empty($xml->isTokenized) && ((int) $xml->isTokenized === 1 || strtolower((string)$xml->isTokenized) === 'true'))
				$this->isTokenized = true;
			else
				$this->isTokenized = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isTokenized))
		{
			if(!empty($jsonObject->isTokenized) && ((int) $jsonObject->isTokenized === 1 || strtolower((string)$jsonObject->isTokenized) === 'true'))
				$this->isTokenized = true;
			else
				$this->isTokenized = false;
		}
		if(!is_null($xml) && count($xml->businessModuleId))
			$this->businessModuleId = (int)$xml->businessModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->businessModuleId))
			$this->businessModuleId = (int)$jsonObject->businessModuleId;
		if(!is_null($xml) && count($xml->businessModuleType))
			$this->businessModuleType = (string)$xml->businessModuleType;
		if(!is_null($jsonObject) && isset($jsonObject->businessModuleType))
			$this->businessModuleType = (string)$jsonObject->businessModuleType;
	}
	/**
	 * Source format according to delivery profile streamer type (applehttp, mpegdash etc.)
	 *
	 * @var string
	 */
	public $format = null;

	/**
	 * Comma separated string according to deliveryProfile media protocols (&#39;http,https&#39; etc.)
	 *
	 * @var string
	 */
	public $protocols = null;

	/**
	 * DRM data object containing relevant license URL ,scheme name and certificate
	 *
	 * @var Kaltura_Client_Type_DrmPlaybackPluginData[]
	 */
	public $drm;

	/**
	 * Is Tokenized
	 *
	 * @var bool
	 */
	public $isTokenized = null;

	/**
	 * Business Module Id
	 *
	 * @var int
	 * @readonly
	 */
	public $businessModuleId = null;

	/**
	 * Business Module Type
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 * @readonly
	 */
	public $businessModuleType = null;


}

