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
class Kaltura_Client_Type_IngestEpg extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestEpg';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ingestId))
			$this->ingestId = (string)$xml->ingestId;
		if(count($xml->ingestName))
			$this->ingestName = (string)$xml->ingestName;
		if(count($xml->ingestFilenameExtension))
			$this->ingestFilenameExtension = (string)$xml->ingestFilenameExtension;
		if(count($xml->createdDate))
			$this->createdDate = (string)$xml->createdDate;
		if(count($xml->ingestedByUserId))
			$this->ingestedByUserId = (string)$xml->ingestedByUserId;
		if(count($xml->completedDate))
			$this->completedDate = (string)$xml->completedDate;
		if(count($xml->ingestProfileId))
			$this->ingestProfileId = (string)$xml->ingestProfileId;
		if(count($xml->status))
			$this->status = (string)$xml->status;
	}
	/**
	 * Unique id of the ingest job in question
	 *
	 * @var bigint
	 * @readonly
	 */
	public $ingestId = null;

	/**
	 * The ingested file name without its extention
	 *
	 * @var string
	 */
	public $ingestName = null;

	/**
	 * The ingested file name extention
	 *
	 * @var string
	 */
	public $ingestFilenameExtension = null;

	/**
	 * The ingest job created date and time. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $createdDate = null;

	/**
	 * The user id of the addFromBulkUpload caller.
	 *
	 * @var bigint
	 */
	public $ingestedByUserId = null;

	/**
	 * The ingest job completed date and time. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $completedDate = null;

	/**
	 * The ingest profile id that of the ingest job.
	 *
	 * @var bigint
	 */
	public $ingestProfileId = null;

	/**
	 * The ingest profile id that of the ingest job.
	 *
	 * @var Kaltura_Client_Enum_IngestStatus
	 */
	public $status = null;


}

