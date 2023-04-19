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
class Kaltura_Client_Type_PlaybackContextOptions extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackContextOptions';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mediaProtocol))
			$this->mediaProtocol = (string)$xml->mediaProtocol;
		if(!is_null($jsonObject) && isset($jsonObject->mediaProtocol))
			$this->mediaProtocol = (string)$jsonObject->mediaProtocol;
		if(!is_null($xml) && count($xml->streamerType))
			$this->streamerType = (string)$xml->streamerType;
		if(!is_null($jsonObject) && isset($jsonObject->streamerType))
			$this->streamerType = (string)$jsonObject->streamerType;
		if(!is_null($xml) && count($xml->assetFileIds))
			$this->assetFileIds = (string)$xml->assetFileIds;
		if(!is_null($jsonObject) && isset($jsonObject->assetFileIds))
			$this->assetFileIds = (string)$jsonObject->assetFileIds;
		if(!is_null($xml) && count($xml->adapterData))
		{
			if(empty($xml->adapterData))
				$this->adapterData = array();
			else
				$this->adapterData = Kaltura_Client_ParseUtils::unmarshalMap($xml->adapterData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->adapterData))
		{
			if(empty($jsonObject->adapterData))
				$this->adapterData = array();
			else
				$this->adapterData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->adapterData, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->context))
			$this->context = (string)$xml->context;
		if(!is_null($jsonObject) && isset($jsonObject->context))
			$this->context = (string)$jsonObject->context;
		if(!is_null($xml) && count($xml->urlType))
			$this->urlType = (string)$xml->urlType;
		if(!is_null($jsonObject) && isset($jsonObject->urlType))
			$this->urlType = (string)$jsonObject->urlType;
	}
	/**
	 * Protocol of the specific media object (http / https).
	 *
	 * @var string
	 */
	public $mediaProtocol = null;

	/**
	 * Playback streamer type: applehttp, mpegdash, url, smothstreaming, multicast, none
	 *
	 * @var string
	 */
	public $streamerType = null;

	/**
	 * List of comma separated media file IDs
	 *
	 * @var string
	 */
	public $assetFileIds = null;

	/**
	 * key/value map field for extra data
	 *
	 * @var map
	 */
	public $adapterData;

	/**
	 * Playback context type
	 *
	 * @var Kaltura_Client_Enum_PlaybackContextType
	 */
	public $context = null;

	/**
	 * Url type
	 *
	 * @var Kaltura_Client_Enum_UrlType
	 */
	public $urlType = null;


}

