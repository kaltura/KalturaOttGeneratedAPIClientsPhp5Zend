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
class Kaltura_Client_Type_UserLogFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserLogFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->userIdIn))
			$this->userIdIn = (string)$jsonObject->userIdIn;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (int)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (int)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (int)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (int)$jsonObject->endDate;
	}
	/**
	 * A comma-separated list of up to 15 positive integer user IDs (greater than zero) used to filter log entries. An empty list is not permitted;
	 *             Valid IDs: Only log entries associated with valid, existing user IDs are returned; 
	 *             Invalid IDs: Specifying a non-existent user ID will result in no log entries being returned for that specific ID; 
	 *             Users: Log entries associated with a deleted user will be returned unless the log entry itself has also been deleted;
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * The start date for filtering (Epoch format). Only logs created on or after this date are returned. If omitted, no start date filter is applied.
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The end date for filtering (Epoch format). Only logs created on or before this date are returned. If omitted, no end date filter is applied.
	 *
	 * @var int
	 */
	public $endDate = null;


}

