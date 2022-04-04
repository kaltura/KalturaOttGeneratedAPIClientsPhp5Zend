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
class Kaltura_Client_Type_SubscriptionFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscriptionFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->subscriptionIdIn))
			$this->subscriptionIdIn = (string)$xml->subscriptionIdIn;
		if(count($xml->mediaFileIdEqual))
			$this->mediaFileIdEqual = (int)$xml->mediaFileIdEqual;
		if(count($xml->externalIdIn))
			$this->externalIdIn = (string)$xml->externalIdIn;
		if(count($xml->couponGroupIdEqual))
			$this->couponGroupIdEqual = (int)$xml->couponGroupIdEqual;
		if(count($xml->previewModuleIdEqual))
			$this->previewModuleIdEqual = (string)$xml->previewModuleIdEqual;
		if(count($xml->pricePlanIdEqual))
			$this->pricePlanIdEqual = (string)$xml->pricePlanIdEqual;
		if(count($xml->channelIdEqual))
			$this->channelIdEqual = (string)$xml->channelIdEqual;
		if(count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(count($xml->alsoInactive))
		{
			if(!empty($xml->alsoInactive) && ((int) $xml->alsoInactive === 1 || strtolower((string)$xml->alsoInactive) === 'true'))
				$this->alsoInactive = true;
			else
				$this->alsoInactive = false;
		}
	}
	/**
	 * Comma separated subscription IDs to get the subscriptions by
	 *
	 * @var string
	 */
	public $subscriptionIdIn = null;

	/**
	 * Media-file ID to get the subscriptions by
	 *
	 * @var int
	 */
	public $mediaFileIdEqual = null;

	/**
	 * Comma separated subscription external IDs to get the subscriptions by
	 *
	 * @var string
	 */
	public $externalIdIn = null;

	/**
	 * couponGroupIdEqual
	 *
	 * @var int
	 */
	public $couponGroupIdEqual = null;

	/**
	 * previewModuleIdEqual
	 *
	 * @var bigint
	 */
	public $previewModuleIdEqual = null;

	/**
	 * pricePlanIdEqual
	 *
	 * @var bigint
	 */
	public $pricePlanIdEqual = null;

	/**
	 * channelIdEqual
	 *
	 * @var bigint
	 */
	public $channelIdEqual = null;

	/**
	 * KSQL expression
	 *
	 * @var string
	 */
	public $kSql = null;

	/**
	 * Root only
	 *
	 * @var bool
	 */
	public $alsoInactive = null;


}

