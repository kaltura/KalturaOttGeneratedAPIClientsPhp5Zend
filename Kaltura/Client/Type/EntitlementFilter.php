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
class Kaltura_Client_Type_EntitlementFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntitlementFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->productTypeEqual))
			$this->productTypeEqual = (string)$xml->productTypeEqual;
		if(count($xml->entityReferenceEqual))
			$this->entityReferenceEqual = (string)$xml->entityReferenceEqual;
		if(count($xml->isExpiredEqual))
		{
			if(!empty($xml->isExpiredEqual) && ((int) $xml->isExpiredEqual === 1 || strtolower((string)$xml->isExpiredEqual) === 'true'))
				$this->isExpiredEqual = true;
			else
				$this->isExpiredEqual = false;
		}
	}
	/**
	 * The type of the entitlements to return
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 */
	public $productTypeEqual = null;

	/**
	 * Reference type to filter by
	 *
	 * @var Kaltura_Client_Enum_EntityReferenceBy
	 */
	public $entityReferenceEqual = null;

	/**
	 * Is expired
	 *
	 * @var bool
	 */
	public $isExpiredEqual = null;


}

