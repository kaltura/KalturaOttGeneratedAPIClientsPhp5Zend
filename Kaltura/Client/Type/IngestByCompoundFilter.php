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
class Kaltura_Client_Type_IngestByCompoundFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestByCompoundFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ingestNameContains))
			$this->ingestNameContains = (string)$xml->ingestNameContains;
		if(!is_null($jsonObject) && isset($jsonObject->ingestNameContains))
			$this->ingestNameContains = (string)$jsonObject->ingestNameContains;
		if(!is_null($xml) && count($xml->ingestedByUserIdIn))
			$this->ingestedByUserIdIn = (string)$xml->ingestedByUserIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->ingestedByUserIdIn))
			$this->ingestedByUserIdIn = (string)$jsonObject->ingestedByUserIdIn;
		if(!is_null($xml) && count($xml->ingestStatusIn))
			$this->ingestStatusIn = (string)$xml->ingestStatusIn;
		if(!is_null($jsonObject) && isset($jsonObject->ingestStatusIn))
			$this->ingestStatusIn = (string)$jsonObject->ingestStatusIn;
		if(!is_null($xml) && count($xml->createdDateGreaterThan))
			$this->createdDateGreaterThan = (string)$xml->createdDateGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->createdDateGreaterThan))
			$this->createdDateGreaterThan = (string)$jsonObject->createdDateGreaterThan;
		if(!is_null($xml) && count($xml->createdDateSmallerThan))
			$this->createdDateSmallerThan = (string)$xml->createdDateSmallerThan;
		if(!is_null($jsonObject) && isset($jsonObject->createdDateSmallerThan))
			$this->createdDateSmallerThan = (string)$jsonObject->createdDateSmallerThan;
	}
	/**
	 * A string that is included in the ingest file name
	 *
	 * @var string
	 */
	public $ingestNameContains = null;

	/**
	 * Comma seperated user ids
	 *
	 * @var string
	 */
	public $ingestedByUserIdIn = null;

	/**
	 * Comma seperated valid stutuses
	 *
	 * @var string
	 */
	public $ingestStatusIn = null;

	/**
	 * Ingest created date greater then this value. . Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $createdDateGreaterThan = null;

	/**
	 * Ingest created date smaller than this value. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $createdDateSmallerThan = null;


}

