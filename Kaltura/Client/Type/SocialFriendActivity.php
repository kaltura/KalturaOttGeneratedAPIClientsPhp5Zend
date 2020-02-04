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
class Kaltura_Client_Type_SocialFriendActivity extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSocialFriendActivity';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userFullName))
			$this->userFullName = (string)$xml->userFullName;
		if(count($xml->userPictureUrl))
			$this->userPictureUrl = (string)$xml->userPictureUrl;
		if(count($xml->socialAction) && !empty($xml->socialAction))
			$this->socialAction = Kaltura_Client_ParseUtils::unmarshalObject($xml->socialAction, "KalturaSocialAction");
	}
	/**
	 * The full name of the user who did the social action
	 *
	 * @var string
	 */
	public $userFullName = null;

	/**
	 * The URL of the profile picture of the user who did the social action
	 *
	 * @var string
	 */
	public $userPictureUrl = null;

	/**
	 * The social action
	 *
	 * @var Kaltura_Client_Type_SocialAction
	 */
	public $socialAction;


}

