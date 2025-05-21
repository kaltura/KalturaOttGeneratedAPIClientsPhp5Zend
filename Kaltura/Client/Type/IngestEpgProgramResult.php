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
class Kaltura_Client_Type_IngestEpgProgramResult extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestEpgProgramResult';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->programId))
			$this->programId = (string)$xml->programId;
		if(!is_null($jsonObject) && isset($jsonObject->programId))
			$this->programId = (string)$jsonObject->programId;
		if(!is_null($xml) && count($xml->externalProgramId))
			$this->externalProgramId = (string)$xml->externalProgramId;
		if(!is_null($jsonObject) && isset($jsonObject->externalProgramId))
			$this->externalProgramId = (string)$jsonObject->externalProgramId;
		if(!is_null($xml) && count($xml->linearChannelId))
			$this->linearChannelId = (string)$xml->linearChannelId;
		if(!is_null($jsonObject) && isset($jsonObject->linearChannelId))
			$this->linearChannelId = (string)$jsonObject->linearChannelId;
		if(!is_null($xml) && count($xml->indexInFile))
			$this->indexInFile = (string)$xml->indexInFile;
		if(!is_null($jsonObject) && isset($jsonObject->indexInFile))
			$this->indexInFile = (string)$jsonObject->indexInFile;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->errors))
		{
			if(empty($xml->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::unmarshalArray($xml->errors, "KalturaEpgIngestErrorMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->errors))
		{
			if(empty($jsonObject->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->errors, "KalturaEpgIngestErrorMessage");
		}
		if(!is_null($xml) && count($xml->warnings))
		{
			if(empty($xml->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::unmarshalArray($xml->warnings, "KalturaMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->warnings))
		{
			if(empty($jsonObject->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->warnings, "KalturaMessage");
		}
	}
	/**
	 * The unique ingested program id
	 *
	 * @var bigint
	 */
	public $programId = null;

	/**
	 * An external program id
	 *
	 * @var string
	 */
	public $externalProgramId = null;

	/**
	 * The id of the linear channel asset that the program belongs to
	 *
	 * @var bigint
	 */
	public $linearChannelId = null;

	/**
	 * The index of the program in the ingested file
	 *
	 * @var bigint
	 */
	public $indexInFile = null;

	/**
	 * Program EPG start date. Date and time represented as epoch
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * Program EPG end date. Date and time represented as epoch
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * The program status
	 *
	 * @var Kaltura_Client_Enum_IngestEpgProgramStatus
	 */
	public $status = null;

	/**
	 * List of errors. Note: error cause the data in question or the whole ingest to fail
	 *
	 * @var Kaltura_Client_Type_EpgIngestErrorMessage[]
	 */
	public $errors;

	/**
	 * List of warnings. Note: warning cause no failure
	 *
	 * @var Kaltura_Client_Type_Message[]
	 */
	public $warnings;


}

