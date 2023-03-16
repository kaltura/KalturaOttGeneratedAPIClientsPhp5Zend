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
abstract class Kaltura_Client_Type_IngestProgramResultsByRefineFilter extends Kaltura_Client_Type_IngestEpgProgramResultFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestProgramResultsByRefineFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ingestStatusIn))
			$this->ingestStatusIn = (string)$xml->ingestStatusIn;
		if(!is_null($jsonObject) && isset($jsonObject->ingestStatusIn))
			$this->ingestStatusIn = (string)$jsonObject->ingestStatusIn;
		if(!is_null($xml) && count($xml->startDateGreaterThan))
			$this->startDateGreaterThan = (string)$xml->startDateGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThan))
			$this->startDateGreaterThan = (string)$jsonObject->startDateGreaterThan;
		if(!is_null($xml) && count($xml->startDateSmallerThan))
			$this->startDateSmallerThan = (string)$xml->startDateSmallerThan;
		if(!is_null($jsonObject) && isset($jsonObject->startDateSmallerThan))
			$this->startDateSmallerThan = (string)$jsonObject->startDateSmallerThan;
	}
	/**
	 * Comma seperated valid statuses - only &#39;FAILURE&#39;, &#39;WARNING&#39; and &#39;SUCCESS&#39; are valid strings. No repetitions are allowed.
	 *
	 * @var string
	 */
	public $ingestStatusIn = null;

	/**
	 * Program EPG start date greater then this value. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $startDateGreaterThan = null;

	/**
	 * Program EPG start date smaller than this value. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $startDateSmallerThan = null;


}

