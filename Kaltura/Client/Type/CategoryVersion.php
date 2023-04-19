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
class Kaltura_Client_Type_CategoryVersion extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryVersion';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->treeId))
			$this->treeId = (string)$xml->treeId;
		if(!is_null($jsonObject) && isset($jsonObject->treeId))
			$this->treeId = (string)$jsonObject->treeId;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->baseVersionId))
			$this->baseVersionId = (string)$xml->baseVersionId;
		if(!is_null($jsonObject) && isset($jsonObject->baseVersionId))
			$this->baseVersionId = (string)$jsonObject->baseVersionId;
		if(!is_null($xml) && count($xml->categoryRootId))
			$this->categoryRootId = (string)$xml->categoryRootId;
		if(!is_null($jsonObject) && isset($jsonObject->categoryRootId))
			$this->categoryRootId = (string)$jsonObject->categoryRootId;
		if(!is_null($xml) && count($xml->defaultDate))
			$this->defaultDate = (string)$xml->defaultDate;
		if(!is_null($jsonObject) && isset($jsonObject->defaultDate))
			$this->defaultDate = (string)$jsonObject->defaultDate;
		if(!is_null($xml) && count($xml->updaterId))
			$this->updaterId = (string)$xml->updaterId;
		if(!is_null($jsonObject) && isset($jsonObject->updaterId))
			$this->updaterId = (string)$jsonObject->updaterId;
		if(!is_null($xml) && count($xml->comment))
			$this->comment = (string)$xml->comment;
		if(!is_null($jsonObject) && isset($jsonObject->comment))
			$this->comment = (string)$jsonObject->comment;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
	}
	/**
	 * Unique identifier for the category version
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Category version name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Category tree identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $treeId = null;

	/**
	 * The category version state
	 *
	 * @var Kaltura_Client_Enum_CategoryVersionState
	 * @readonly
	 */
	public $state = null;

	/**
	 * The version id that this version was created from
	 *
	 * @var bigint
	 * @insertonly
	 */
	public $baseVersionId = null;

	/**
	 * The root of category item id that was created for this version
	 *
	 * @var bigint
	 * @readonly
	 */
	public $categoryRootId = null;

	/**
	 * The date that this version became default represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $defaultDate = null;

	/**
	 * Last updater user id.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updaterId = null;

	/**
	 * Comment.
	 *
	 * @var string
	 */
	public $comment = null;

	/**
	 * The date that this version was created represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * The date that this version was last updated represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

