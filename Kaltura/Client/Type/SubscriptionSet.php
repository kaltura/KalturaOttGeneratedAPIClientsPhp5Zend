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
abstract class Kaltura_Client_Type_SubscriptionSet extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscriptionSet';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->subscriptionIds))
			$this->subscriptionIds = (string)$xml->subscriptionIds;
	}
	/**
	 * SubscriptionSet identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * SubscriptionSet name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Type of the Subscription Set
	 *
	 * @var Kaltura_Client_Enum_SubscriptionSetType
	 * @readonly
	 */
	public $type = null;

	/**
	 * A list of comma separated subscription ids associated with this set ordered by priority ascending
	 *
	 * @var string
	 */
	public $subscriptionIds = null;


}

