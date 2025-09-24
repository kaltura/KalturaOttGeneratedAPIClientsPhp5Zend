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
class Kaltura_Client_Type_VodIngestAssetResultAggregation extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVodIngestAssetResultAggregation';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ingestDateFrom))
			$this->ingestDateFrom = (string)$xml->ingestDateFrom;
		if(!is_null($jsonObject) && isset($jsonObject->ingestDateFrom))
			$this->ingestDateFrom = (string)$jsonObject->ingestDateFrom;
		if(!is_null($xml) && count($xml->ingestDateTo))
			$this->ingestDateTo = (string)$xml->ingestDateTo;
		if(!is_null($jsonObject) && isset($jsonObject->ingestDateTo))
			$this->ingestDateTo = (string)$jsonObject->ingestDateTo;
		if(!is_null($xml) && count($xml->failureCount))
			$this->failureCount = (int)$xml->failureCount;
		if(!is_null($jsonObject) && isset($jsonObject->failureCount))
			$this->failureCount = (int)$jsonObject->failureCount;
		if(!is_null($xml) && count($xml->successCount))
			$this->successCount = (int)$xml->successCount;
		if(!is_null($jsonObject) && isset($jsonObject->successCount))
			$this->successCount = (int)$jsonObject->successCount;
		if(!is_null($xml) && count($xml->externalFailureCount))
			$this->externalFailureCount = (int)$xml->externalFailureCount;
		if(!is_null($jsonObject) && isset($jsonObject->externalFailureCount))
			$this->externalFailureCount = (int)$jsonObject->externalFailureCount;
		if(!is_null($xml) && count($xml->successWithWarningCount))
			$this->successWithWarningCount = (int)$xml->successWithWarningCount;
		if(!is_null($jsonObject) && isset($jsonObject->successWithWarningCount))
			$this->successWithWarningCount = (int)$jsonObject->successWithWarningCount;
	}
	/**
	 * Ingest date of the first asset in the response list. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $ingestDateFrom = null;

	/**
	 * Ingest date of the last asset in the response list. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $ingestDateTo = null;

	/**
	 * Number of assets which failed ingest. Calculated on the assets returned according to the applied filters.
	 *
	 * @var int
	 */
	public $failureCount = null;

	/**
	 * Number of assets which succeeded ingest without any warning. Calculated on the assets returned according to the applied filters.
	 *
	 * @var int
	 */
	public $successCount = null;

	/**
	 * Number of files (not assets) which failed ingest and are reported by external none-WS_ingest entity. Calculated on the failed files returned according to the applied filters.
	 *
	 * @var int
	 */
	public $externalFailureCount = null;

	/**
	 * Number of assets which succeeded ingest, but with warnings. Calculated on the assets returned according to the applied filters.
	 *
	 * @var int
	 */
	public $successWithWarningCount = null;


}

