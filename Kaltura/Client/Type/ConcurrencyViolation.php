<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Type_ConcurrencyViolation extends Kaltura_Client_Type_EventObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaConcurrencyViolation';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->timestamp))
			$this->timestamp = (string)$xml->timestamp;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->violationRule))
			$this->violationRule = (string)$xml->violationRule;
		if(count($xml->householdId))
			$this->householdId = (string)$xml->householdId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
	}
	/**
	 * Timestamp
	 *
	 * @var bigint
	 */
	public $timestamp = null;

	/**
	 * UDID
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * Asset Id
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * Violation Rule
	 *
	 * @var string
	 */
	public $violationRule = null;

	/**
	 * Household Id
	 *
	 * @var string
	 */
	public $householdId = null;

	/**
	 * User Id
	 *
	 * @var string
	 */
	public $userId = null;


}

