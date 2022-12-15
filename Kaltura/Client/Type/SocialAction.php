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
class Kaltura_Client_Type_SocialAction extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSocialAction';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
		{
			if(isset($xml->id->item) && count($xml->id->item))
				$this->multiLingual_id = Kaltura_Client_ParseUtils::unmarshalArray($xml->id, '');
			else
				$this->id = (string)$xml->id;
		}
		if(count($xml->actionType))
		{
			if(isset($xml->actionType->item) && count($xml->actionType->item))
				$this->multiLingual_actionType = Kaltura_Client_ParseUtils::unmarshalArray($xml->actionType, '');
			else
				$this->actionType = (string)$xml->actionType;
		}
		if(count($xml->time))
			$this->time = (string)$xml->time;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->assetType))
		{
			if(isset($xml->assetType->item) && count($xml->assetType->item))
				$this->multiLingual_assetType = Kaltura_Client_ParseUtils::unmarshalArray($xml->assetType, '');
			else
				$this->assetType = (string)$xml->assetType;
		}
		if(count($xml->url))
		{
			if(isset($xml->url->item) && count($xml->url->item))
				$this->multiLingual_url = Kaltura_Client_ParseUtils::unmarshalArray($xml->url, '');
			else
				$this->url = (string)$xml->url;
		}
	}
	/**
	 * social action document id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Action type
	 *
	 * @var Kaltura_Client_Enum_SocialActionType
	 */
	public $actionType = null;

	/**
	 * EPOC based timestamp for when the action occurred
	 *
	 * @var bigint
	 */
	public $time = null;

	/**
	 * ID of the asset that was acted upon
	 *
	 * @var bigint
	 */
	public $assetId = null;

	/**
	 * Type of the asset that was acted upon, currently only VOD (media)
	 *
	 * @var Kaltura_Client_Enum_AssetType
	 */
	public $assetType = null;

	/**
	 * The value of the url
	 *
	 * @var string
	 */
	public $url = null;


}

