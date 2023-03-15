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
class Kaltura_Client_Type_PlaybackContext extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackContext';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->sources))
		{
			if(empty($xml->sources))
				$this->sources = array();
			else
				$this->sources = Kaltura_Client_ParseUtils::unmarshalArray($xml->sources, "KalturaPlaybackSource");
		}
		if(!is_null($jsonObject) && isset($jsonObject->sources))
		{
			if(empty($jsonObject->sources))
				$this->sources = array();
			else
				$this->sources = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->sources, "KalturaPlaybackSource");
		}
		if(!is_null($xml) && count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaRuleAction");
		}
		if(!is_null($jsonObject) && isset($jsonObject->actions))
		{
			if(empty($jsonObject->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->actions, "KalturaRuleAction");
		}
		if(!is_null($xml) && count($xml->messages))
		{
			if(empty($xml->messages))
				$this->messages = array();
			else
				$this->messages = Kaltura_Client_ParseUtils::unmarshalArray($xml->messages, "KalturaAccessControlMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->messages))
		{
			if(empty($jsonObject->messages))
				$this->messages = array();
			else
				$this->messages = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->messages, "KalturaAccessControlMessage");
		}
		if(!is_null($xml) && count($xml->playbackCaptions))
		{
			if(empty($xml->playbackCaptions))
				$this->playbackCaptions = array();
			else
				$this->playbackCaptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->playbackCaptions, "KalturaCaptionPlaybackPluginData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->playbackCaptions))
		{
			if(empty($jsonObject->playbackCaptions))
				$this->playbackCaptions = array();
			else
				$this->playbackCaptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->playbackCaptions, "KalturaCaptionPlaybackPluginData");
		}
		if(!is_null($xml) && count($xml->plugins))
		{
			if(empty($xml->plugins))
				$this->plugins = array();
			else
				$this->plugins = Kaltura_Client_ParseUtils::unmarshalArray($xml->plugins, "KalturaPlaybackPluginData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->plugins))
		{
			if(empty($jsonObject->plugins))
				$this->plugins = array();
			else
				$this->plugins = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->plugins, "KalturaPlaybackPluginData");
		}
	}
	/**
	 * Sources
	 *
	 * @var array of KalturaPlaybackSource
	 */
	public $sources;

	/**
	 * Actions
	 *
	 * @var array of KalturaRuleAction
	 */
	public $actions;

	/**
	 * Messages
	 *
	 * @var array of KalturaAccessControlMessage
	 */
	public $messages;

	/**
	 * Playback captions
	 *
	 * @var array of KalturaCaptionPlaybackPluginData
	 */
	public $playbackCaptions;

	/**
	 * Plugins
	 *
	 * @var array of KalturaPlaybackPluginData
	 */
	public $plugins;


}

