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
class Kaltura_Client_Type_BookmarkEvent extends Kaltura_Client_Type_EventObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaBookmarkEvent';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->householdId))
			$this->householdId = (string)$xml->householdId;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->fileId))
			$this->fileId = (string)$xml->fileId;
		if(count($xml->position))
			$this->position = (int)$xml->position;
		if(count($xml->action))
		{
			if(isset($xml->action->item) && count($xml->action->item))
				$this->multiLingual_action = Kaltura_Client_ParseUtils::unmarshalArray($xml->action, '');
			else
				$this->action = (string)$xml->action;
		}
		if(count($xml->productType))
		{
			if(isset($xml->productType->item) && count($xml->productType->item))
				$this->multiLingual_productType = Kaltura_Client_ParseUtils::unmarshalArray($xml->productType, '');
			else
				$this->productType = (string)$xml->productType;
		}
		if(count($xml->productId))
			$this->productId = (int)$xml->productId;
	}
	/**
	 * User Id
	 *
	 * @var bigint
	 */
	public $userId = null;

	/**
	 * Household Id
	 *
	 * @var bigint
	 */
	public $householdId = null;

	/**
	 * Asset Id
	 *
	 * @var bigint
	 */
	public $assetId = null;

	/**
	 * File Id
	 *
	 * @var bigint
	 */
	public $fileId = null;

	/**
	 * position
	 *
	 * @var int
	 */
	public $position = null;

	/**
	 * Bookmark Action Type
	 *
	 * @var Kaltura_Client_Enum_BookmarkActionType
	 */
	public $action = null;

	/**
	 * Product Type
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 */
	public $productType = null;

	/**
	 * Product Id
	 *
	 * @var int
	 */
	public $productId = null;


}

