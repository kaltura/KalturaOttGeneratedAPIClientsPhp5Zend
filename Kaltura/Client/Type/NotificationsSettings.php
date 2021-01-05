<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
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
class Kaltura_Client_Type_NotificationsSettings extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaNotificationsSettings';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->pushNotificationEnabled))
		{
			if(!empty($xml->pushNotificationEnabled) && ((int) $xml->pushNotificationEnabled === 1 || strtolower((string)$xml->pushNotificationEnabled) === 'true'))
				$this->pushNotificationEnabled = true;
			else
				$this->pushNotificationEnabled = false;
		}
		if(count($xml->pushFollowEnabled))
		{
			if(!empty($xml->pushFollowEnabled) && ((int) $xml->pushFollowEnabled === 1 || strtolower((string)$xml->pushFollowEnabled) === 'true'))
				$this->pushFollowEnabled = true;
			else
				$this->pushFollowEnabled = false;
		}
		if(count($xml->mailEnabled))
		{
			if(!empty($xml->mailEnabled) && ((int) $xml->mailEnabled === 1 || strtolower((string)$xml->mailEnabled) === 'true'))
				$this->mailEnabled = true;
			else
				$this->mailEnabled = false;
		}
		if(count($xml->smsEnabled))
		{
			if(!empty($xml->smsEnabled) && ((int) $xml->smsEnabled === 1 || strtolower((string)$xml->smsEnabled) === 'true'))
				$this->smsEnabled = true;
			else
				$this->smsEnabled = false;
		}
	}
	/**
	 * Specify if the user want to receive push notifications or not
	 *
	 * @var bool
	 */
	public $pushNotificationEnabled = null;

	/**
	 * Specify if the user will be notified for followed content via push. (requires push_notification_enabled to be enabled)
	 *
	 * @var bool
	 */
	public $pushFollowEnabled = null;

	/**
	 * Specify if the user wants to receive mail notifications or not
	 *
	 * @var bool
	 */
	public $mailEnabled = null;

	/**
	 * Specify if the user wants to receive SMS notifications or not
	 *
	 * @var bool
	 */
	public $smsEnabled = null;


}

