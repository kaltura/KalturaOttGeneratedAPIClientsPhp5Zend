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
class Kaltura_Client_Type_ActionPermissionItem extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaActionPermissionItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->network))
			$this->network = (string)$xml->network;
		if(!is_null($jsonObject) && isset($jsonObject->network))
			$this->network = (string)$jsonObject->network;
		if(!is_null($xml) && count($xml->actionPrivacy))
			$this->actionPrivacy = (string)$xml->actionPrivacy;
		if(!is_null($jsonObject) && isset($jsonObject->actionPrivacy))
			$this->actionPrivacy = (string)$jsonObject->actionPrivacy;
		if(!is_null($xml) && count($xml->privacy))
			$this->privacy = (string)$xml->privacy;
		if(!is_null($jsonObject) && isset($jsonObject->privacy))
			$this->privacy = (string)$jsonObject->privacy;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
	}
	/**
	 * Social network
	 *
	 * @var Kaltura_Client_Enum_SocialNetwork
	 */
	public $network = null;

	/**
	 * Action privacy
	 *
	 * @var Kaltura_Client_Enum_SocialActionPrivacy
	 */
	public $actionPrivacy = null;

	/**
	 * Social privacy
	 *
	 * @var Kaltura_Client_Enum_SocialPrivacy
	 */
	public $privacy = null;

	/**
	 * Action - separated with comma
	 *
	 * @var string
	 */
	public $action = null;


}

