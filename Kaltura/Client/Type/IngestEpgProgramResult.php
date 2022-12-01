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
class Kaltura_Client_Type_IngestEpgProgramResult extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestEpgProgramResult';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->programId))
			$this->programId = (string)$xml->programId;
		if(count($xml->externalProgramId))
		{
			if(isset($xml->externalProgramId->item) && count($xml->externalProgramId->item))
				$this->multiLingual_externalProgramId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalProgramId, '');
			else
				$this->externalProgramId = (string)$xml->externalProgramId;
		}
		if(count($xml->linearChannelId))
			$this->linearChannelId = (string)$xml->linearChannelId;
		if(count($xml->indexInFile))
			$this->indexInFile = (string)$xml->indexInFile;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->status))
		{
			if(isset($xml->status->item) && count($xml->status->item))
				$this->multiLingual_status = Kaltura_Client_ParseUtils::unmarshalArray($xml->status, '');
			else
				$this->status = (string)$xml->status;
		}
		if(count($xml->errors))
		{
			if(empty($xml->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::unmarshalArray($xml->errors, "KalturaEpgIngestErrorMessage");
		}
		if(count($xml->warnings))
		{
			if(empty($xml->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::unmarshalArray($xml->warnings, "KalturaMessage");
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
	 * @var array of KalturaEpgIngestErrorMessage
	 */
	public $errors;

	/**
	 * List of warnings. Note: warning cause no failure
	 *
	 * @var array of KalturaMessage
	 */
	public $warnings;


}

