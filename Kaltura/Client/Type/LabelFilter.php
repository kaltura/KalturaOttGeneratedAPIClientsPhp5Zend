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
class Kaltura_Client_Type_LabelFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaLabelFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idIn))
		{
			if(isset($xml->idIn->item) && count($xml->idIn->item))
				$this->multiLingual_idIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->idIn, '');
			else
				$this->idIn = (string)$xml->idIn;
		}
		if(count($xml->labelEqual))
		{
			if(isset($xml->labelEqual->item) && count($xml->labelEqual->item))
				$this->multiLingual_labelEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->labelEqual, '');
			else
				$this->labelEqual = (string)$xml->labelEqual;
		}
		if(count($xml->labelStartsWith))
		{
			if(isset($xml->labelStartsWith->item) && count($xml->labelStartsWith->item))
				$this->multiLingual_labelStartsWith = Kaltura_Client_ParseUtils::unmarshalArray($xml->labelStartsWith, '');
			else
				$this->labelStartsWith = (string)$xml->labelStartsWith;
		}
		if(count($xml->entityAttributeEqual))
		{
			if(isset($xml->entityAttributeEqual->item) && count($xml->entityAttributeEqual->item))
				$this->multiLingual_entityAttributeEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->entityAttributeEqual, '');
			else
				$this->entityAttributeEqual = (string)$xml->entityAttributeEqual;
		}
	}
	/**
	 * Comma-separated identifiers of labels
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Filter the label with this value
	 *
	 * @var string
	 */
	public $labelEqual = null;

	/**
	 * Filter labels which start with this value
	 *
	 * @var string
	 */
	public $labelStartsWith = null;

	/**
	 * Type of entity that labels are associated with
	 *
	 * @var Kaltura_Client_Enum_EntityAttribute
	 */
	public $entityAttributeEqual = null;


}

