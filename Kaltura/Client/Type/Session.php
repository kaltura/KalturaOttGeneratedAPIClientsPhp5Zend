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
class Kaltura_Client_Type_Session extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSession';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(count($xml->privileges))
			$this->privileges = (string)$xml->privileges;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(count($xml->createDate))
			$this->createDate = (int)$xml->createDate;
	}
	/**
	 * KS
	 *
	 * @var string
	 */
	public $ks = null;

	/**
	 * Partner identifier
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * User identifier
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * Expiry
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Privileges
	 *
	 * @var string
	 */
	public $privileges = null;

	/**
	 * UDID
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * Create date
	 *
	 * @var int
	 */
	public $createDate = null;


}

