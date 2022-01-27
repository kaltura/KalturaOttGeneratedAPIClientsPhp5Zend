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
// Copyright (C) 2006-2021  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->sound))
			$this->sound = (string)$xml->sound;
		if(count($xml->action))
			$this->action = (string)$xml->action;
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(count($xml->pushChannels))
			$this->pushChannels = (string)$xml->pushChannels;
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

