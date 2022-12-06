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
class Kaltura_Client_Type_SearchPriorityCriteria extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSearchPriorityCriteria';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->type))
		{
			if(isset($xml->type->item) && count($xml->type->item))
				$this->multiLingual_type = Kaltura_Client_ParseUtils::unmarshalArray($xml->type, '');
			else
				$this->type = (string)$xml->type;
		}
		if(count($xml->value))
		{
			if(isset($xml->value->item) && count($xml->value->item))
				$this->multiLingual_value = Kaltura_Client_ParseUtils::unmarshalArray($xml->value, '');
			else
				$this->value = (string)$xml->value;
		}
	}
	/**
	 * Criterion type
	 *
	 * @var Kaltura_Client_Enum_SearchPriorityCriteriaType
	 */
	public $type = null;

	/**
	 * Condition
	 *             KSQL has to have no more than 10 conditions. Text, boolean, enum and tag fields can be used only with = operator, numeric and datetime fields - only with &lt;, = and &gt; operators.
	 *
	 * @var string
	 */
	public $value = null;


}

