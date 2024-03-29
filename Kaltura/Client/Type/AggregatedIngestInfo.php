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
class Kaltura_Client_Type_AggregatedIngestInfo extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAggregatedIngestInfo';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->resultsCount))
			$this->resultsCount = (string)$xml->resultsCount;
		if(!is_null($jsonObject) && isset($jsonObject->resultsCount))
			$this->resultsCount = (string)$jsonObject->resultsCount;
		if(!is_null($xml) && count($xml->totalFailureCount))
			$this->totalFailureCount = (string)$xml->totalFailureCount;
		if(!is_null($jsonObject) && isset($jsonObject->totalFailureCount))
			$this->totalFailureCount = (string)$jsonObject->totalFailureCount;
		if(!is_null($xml) && count($xml->partialFailureCount))
			$this->partialFailureCount = (string)$xml->partialFailureCount;
		if(!is_null($jsonObject) && isset($jsonObject->partialFailureCount))
			$this->partialFailureCount = (string)$jsonObject->partialFailureCount;
		if(!is_null($xml) && count($xml->warningsCount))
			$this->warningsCount = (string)$xml->warningsCount;
		if(!is_null($jsonObject) && isset($jsonObject->warningsCount))
			$this->warningsCount = (string)$jsonObject->warningsCount;
	}
	/**
	 * Number of results
	 *
	 * @var bigint
	 */
	public $resultsCount = null;

	/**
	 * Number of results that include at least one error of severity TotalFailure
	 *
	 * @var bigint
	 */
	public $totalFailureCount = null;

	/**
	 * Number of results that include no error with severity TotalFailure but at at least one error of severity PartialFailure
	 *
	 * @var bigint
	 */
	public $partialFailureCount = null;

	/**
	 * Number of results that include at least one warning
	 *
	 * @var bigint
	 */
	public $warningsCount = null;


}

