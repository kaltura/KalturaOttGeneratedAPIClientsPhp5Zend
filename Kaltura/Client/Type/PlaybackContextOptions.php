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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->mediaProtocol))
		{
			if(isset($xml->mediaProtocol->item) && count($xml->mediaProtocol->item))
				$this->multiLingual_mediaProtocol = Kaltura_Client_ParseUtils::unmarshalArray($xml->mediaProtocol, '');
			else
				$this->mediaProtocol = (string)$xml->mediaProtocol;
		}
		if(count($xml->streamerType))
		{
			if(isset($xml->streamerType->item) && count($xml->streamerType->item))
				$this->multiLingual_streamerType = Kaltura_Client_ParseUtils::unmarshalArray($xml->streamerType, '');
			else
				$this->streamerType = (string)$xml->streamerType;
		}
		if(count($xml->assetFileIds))
		{
			if(isset($xml->assetFileIds->item) && count($xml->assetFileIds->item))
				$this->multiLingual_assetFileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->assetFileIds, '');
			else
				$this->assetFileIds = (string)$xml->assetFileIds;
		}
		if(count($xml->adapterData))
		{
			if(empty($xml->adapterData))
				$this->adapterData = array();
			else
				$this->adapterData = Kaltura_Client_ParseUtils::unmarshalMap($xml->adapterData, "KalturaStringValue");
		}
		if(count($xml->context))
		{
			if(isset($xml->context->item) && count($xml->context->item))
				$this->multiLingual_context = Kaltura_Client_ParseUtils::unmarshalArray($xml->context, '');
			else
				$this->context = (string)$xml->context;
		}
		if(count($xml->urlType))
		{
			if(isset($xml->urlType->item) && count($xml->urlType->item))
				$this->multiLingual_urlType = Kaltura_Client_ParseUtils::unmarshalArray($xml->urlType, '');
			else
				$this->urlType = (string)$xml->urlType;
		}
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

