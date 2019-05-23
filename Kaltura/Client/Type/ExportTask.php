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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_Type_ExportTask extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaExportTask';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->alias))
			$this->alias = (string)$xml->alias;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->dataType))
			$this->dataType = (string)$xml->dataType;
		if(count($xml->filter))
			$this->filter = (string)$xml->filter;
		if(count($xml->exportType))
			$this->exportType = (string)$xml->exportType;
		if(count($xml->frequency))
			$this->frequency = (string)$xml->frequency;
		if(count($xml->notificationUrl))
			$this->notificationUrl = (string)$xml->notificationUrl;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
	}
	/**
	 * Task identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Alias for the task used to solicit an export using API
	 *
	 * @var string
	 */
	public $alias = null;

	/**
	 * Task display name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The data type exported in this task
	 *
	 * @var Kaltura_Client_Enum_ExportDataType
	 */
	public $dataType = null;

	/**
	 * Filter to apply on the export, utilize KSQL.
	 *             Note: KSQL currently applies to media assets only. It cannot be used for USERS filtering
	 *
	 * @var string
	 */
	public $filter = null;

	/**
	 * Type of export batch – full or incremental
	 *
	 * @var Kaltura_Client_Enum_ExportType
	 */
	public $exportType = null;

	/**
	 * How often the export should occur, reasonable minimum threshold should apply, configurable in minutes
	 *
	 * @var bigint
	 */
	public $frequency = null;

	/**
	 * The URL for sending a notification when the task&#39;s export process is done
	 *
	 * @var string
	 */
	public $notificationUrl = null;

	/**
	 * Indicates if the task is active or not
	 *
	 * @var bool
	 */
	public $isActive = null;


}

