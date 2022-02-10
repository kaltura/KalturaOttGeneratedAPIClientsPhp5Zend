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
class Kaltura_Client_Type_BookmarkPlayerData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBookmarkPlayerData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->action))
			$this->action = (string)$xml->action;
		if(count($xml->averageBitrate))
			$this->averageBitrate = (int)$xml->averageBitrate;
		if(count($xml->totalBitrate))
			$this->totalBitrate = (int)$xml->totalBitrate;
		if(count($xml->currentBitrate))
			$this->currentBitrate = (int)$xml->currentBitrate;
		if(count($xml->fileId))
			$this->fileId = (string)$xml->fileId;
	}
	/**
	 * Action
	 *
	 * @var Kaltura_Client_Enum_BookmarkActionType
	 */
	public $action = null;

	/**
	 * Average Bitrate
	 *
	 * @var int
	 */
	public $averageBitrate = null;

	/**
	 * Total Bitrate
	 *
	 * @var int
	 */
	public $totalBitrate = null;

	/**
	 * Current Bitrate
	 *
	 * @var int
	 */
	public $currentBitrate = null;

	/**
	 * Identifier of the file
	 *
	 * @var bigint
	 */
	public $fileId = null;


}

