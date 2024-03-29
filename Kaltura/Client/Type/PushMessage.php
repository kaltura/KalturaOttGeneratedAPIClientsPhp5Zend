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
class Kaltura_Client_Type_PushMessage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPushMessage';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->sound))
			$this->sound = (string)$xml->sound;
		if(!is_null($jsonObject) && isset($jsonObject->sound))
			$this->sound = (string)$jsonObject->sound;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(!is_null($jsonObject) && isset($jsonObject->udid))
			$this->udid = (string)$jsonObject->udid;
		if(!is_null($xml) && count($xml->pushChannels))
			$this->pushChannels = (string)$xml->pushChannels;
		if(!is_null($jsonObject) && isset($jsonObject->pushChannels))
			$this->pushChannels = (string)$jsonObject->pushChannels;
	}
	/**
	 * The message that will be presented to the user.
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Optional. Can be used to change the default push sound on the user device.
	 *
	 * @var string
	 */
	public $sound = null;

	/**
	 * Optional. Used to change the default action of the application when a push is received.
	 *
	 * @var string
	 */
	public $action = null;

	/**
	 * Optional. Used to direct the application to the relevant page.
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Device unique identifier
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * PushChannels - separated with comma
	 *
	 * @var string
	 */
	public $pushChannels = null;


}

