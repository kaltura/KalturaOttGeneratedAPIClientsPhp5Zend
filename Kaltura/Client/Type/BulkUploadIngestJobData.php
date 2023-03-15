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
class Kaltura_Client_Type_BulkUploadIngestJobData extends Kaltura_Client_Type_BulkUploadJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadIngestJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ingestProfileId))
			$this->ingestProfileId = (int)$xml->ingestProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->ingestProfileId))
			$this->ingestProfileId = (int)$jsonObject->ingestProfileId;
		if(!is_null($xml) && count($xml->disableEpgNotification))
		{
			if(!empty($xml->disableEpgNotification) && ((int) $xml->disableEpgNotification === 1 || strtolower((string)$xml->disableEpgNotification) === 'true'))
				$this->disableEpgNotification = true;
			else
				$this->disableEpgNotification = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->disableEpgNotification))
		{
			if(!empty($jsonObject->disableEpgNotification) && ((int) $jsonObject->disableEpgNotification === 1 || strtolower((string)$jsonObject->disableEpgNotification) === 'true'))
				$this->disableEpgNotification = true;
			else
				$this->disableEpgNotification = false;
		}
	}
	/**
	 * Identifies the ingest profile that will handle the ingest of programs
	 *             Ingest profiles are created separately using the ingest profile service
	 *
	 * @var int
	 */
	public $ingestProfileId = null;

	/**
	 * By default, after the successful ingest, devices will be notified about changes in epg channels.
	 *             This parameter disables this notification.
	 *
	 * @var bool
	 */
	public $disableEpgNotification = null;


}

