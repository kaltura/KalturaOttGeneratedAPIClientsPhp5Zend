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
class Kaltura_Client_Type_IngestEpgDetailsAggregation extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestEpgDetailsAggregation';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->linearChannels))
		{
			if(empty($xml->linearChannels))
				$this->linearChannels = array();
			else
				$this->linearChannels = Kaltura_Client_ParseUtils::unmarshalArray($xml->linearChannels, "KalturaChannelAggregatedIngestInfo");
		}
		if(!is_null($jsonObject) && isset($jsonObject->linearChannels))
		{
			if(empty($jsonObject->linearChannels))
				$this->linearChannels = array();
			else
				$this->linearChannels = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->linearChannels, "KalturaChannelAggregatedIngestInfo");
		}
		if(!is_null($xml) && count($xml->dates))
		{
			if(empty($xml->dates))
				$this->dates = array();
			else
				$this->dates = Kaltura_Client_ParseUtils::unmarshalArray($xml->dates, "KalturaDateAggregatedIngestInfo");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dates))
		{
			if(empty($jsonObject->dates))
				$this->dates = array();
			else
				$this->dates = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dates, "KalturaDateAggregatedIngestInfo");
		}
		if(!is_null($xml) && count($xml->all) && !empty($xml->all))
			$this->all = Kaltura_Client_ParseUtils::unmarshalObject($xml->all, "KalturaAggregatedIngestInfo");
		if(!is_null($jsonObject) && isset($jsonObject->all) && !empty($jsonObject->all))
			$this->all = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->all, "KalturaAggregatedIngestInfo");
	}
	/**
	 * Array of aggregated information per channel that included in the ingest job in question
	 *
	 * @var array of KalturaChannelAggregatedIngestInfo
	 */
	public $linearChannels;

	/**
	 * Array of aggregated information per date that included in the ingest job in question
	 *
	 * @var array of KalturaDateAggregatedIngestInfo
	 */
	public $dates;

	/**
	 * All aggregated counters
	 *
	 * @var Kaltura_Client_Type_AggregatedIngestInfo
	 */
	public $all;


}

