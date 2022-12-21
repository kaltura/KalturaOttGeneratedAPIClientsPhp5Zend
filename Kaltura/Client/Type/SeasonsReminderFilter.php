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
class Kaltura_Client_Type_SeasonsReminderFilter extends Kaltura_Client_Type_ReminderFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaSeasonsReminderFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->seriesIdEqual))
		{
			if(isset($xml->seriesIdEqual->item) && count($xml->seriesIdEqual->item))
				$this->multiLingual_seriesIdEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->seriesIdEqual, '');
			else
				$this->seriesIdEqual = (string)$xml->seriesIdEqual;
		}
		if(count($xml->seasonNumberIn))
		{
			if(isset($xml->seasonNumberIn->item) && count($xml->seasonNumberIn->item))
				$this->multiLingual_seasonNumberIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->seasonNumberIn, '');
			else
				$this->seasonNumberIn = (string)$xml->seasonNumberIn;
		}
		if(count($xml->epgChannelIdEqual))
			$this->epgChannelIdEqual = (string)$xml->epgChannelIdEqual;
	}
	/**
	 * Series ID
	 *
	 * @var string
	 */
	public $seriesIdEqual = null;

	/**
	 * Comma separated season numbers
	 *
	 * @var string
	 */
	public $seasonNumberIn = null;

	/**
	 * EPG channel ID
	 *
	 * @var bigint
	 */
	public $epgChannelIdEqual = null;


}

