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
class Kaltura_Client_Type_EpgNotificationSettings extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEpgNotificationSettings';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->enabled))
		{
			if(!empty($xml->enabled) && ((int) $xml->enabled === 1 || strtolower((string)$xml->enabled) === 'true'))
				$this->enabled = true;
			else
				$this->enabled = false;
		}
		if(count($xml->deviceFamilyIds))
			$this->deviceFamilyIds = (string)$xml->deviceFamilyIds;
		if(count($xml->liveAssetIds))
			$this->liveAssetIds = (string)$xml->liveAssetIds;
		if(count($xml->timeRange))
			$this->timeRange = (int)$xml->timeRange;
	}
	/**
	 * EPG notification capability is enabled for the account
	 *
	 * @var bool
	 */
	public $enabled = null;

	/**
	 * Specify which devices should receive notifications
	 *
	 * @var string
	 */
	public $deviceFamilyIds = null;

	/**
	 * Specify which live assets should fire notifications
	 *
	 * @var string
	 */
	public $liveAssetIds = null;

	/**
	 * The range (in hours), in which, EPG updates triggers a notification,
	 *             every program that is updated and it’s starts time falls within this range shall trigger a notification
	 *
	 * @var int
	 */
	public $timeRange = null;


}

