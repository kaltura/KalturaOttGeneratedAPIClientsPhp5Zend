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
class Kaltura_Client_Type_BulkUploadStatistics extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadStatistics';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->pending))
			$this->pending = (string)$xml->pending;
		if(count($xml->uploaded))
			$this->uploaded = (string)$xml->uploaded;
		if(count($xml->queued))
			$this->queued = (string)$xml->queued;
		if(count($xml->parsing))
			$this->parsing = (string)$xml->parsing;
		if(count($xml->processing))
			$this->processing = (string)$xml->processing;
		if(count($xml->processed))
			$this->processed = (string)$xml->processed;
		if(count($xml->success))
			$this->success = (string)$xml->success;
		if(count($xml->partial))
			$this->partial = (string)$xml->partial;
		if(count($xml->failed))
			$this->failed = (string)$xml->failed;
		if(count($xml->fatal))
			$this->fatal = (string)$xml->fatal;
	}
	/**
	 * count of bulk upload in pending status
	 *
	 * @var bigint
	 */
	public $pending = null;

	/**
	 * count of bulk Uploaded in uploaded status
	 *
	 * @var bigint
	 */
	public $uploaded = null;

	/**
	 * count of bulk upload in queued status
	 *
	 * @var bigint
	 */
	public $queued = null;

	/**
	 * count of bulk upload in parsing status
	 *
	 * @var bigint
	 */
	public $parsing = null;

	/**
	 * count of bulk upload in processing status
	 *
	 * @var bigint
	 */
	public $processing = null;

	/**
	 * count of bulk upload in processed status
	 *
	 * @var bigint
	 */
	public $processed = null;

	/**
	 * count of bulk upload in success status
	 *
	 * @var bigint
	 */
	public $success = null;

	/**
	 * count of bulk upload in partial status
	 *
	 * @var bigint
	 */
	public $partial = null;

	/**
	 * count of bulk upload in failed status
	 *
	 * @var bigint
	 */
	public $failed = null;

	/**
	 * count of bulk upload in fatal status
	 *
	 * @var bigint
	 */
	public $fatal = null;


}

