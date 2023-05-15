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
class Kaltura_Client_Type_UsageModule extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUsageModule';
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
		if(!is_null($xml) && count($xml->maxViewsNumber))
			$this->maxViewsNumber = (int)$xml->maxViewsNumber;
		if(!is_null($jsonObject) && isset($jsonObject->maxViewsNumber))
			$this->maxViewsNumber = (int)$jsonObject->maxViewsNumber;
		if(!is_null($xml) && count($xml->viewLifeCycle))
			$this->viewLifeCycle = (int)$xml->viewLifeCycle;
		if(!is_null($jsonObject) && isset($jsonObject->viewLifeCycle))
			$this->viewLifeCycle = (int)$jsonObject->viewLifeCycle;
		if(!is_null($xml) && count($xml->fullLifeCycle))
			$this->fullLifeCycle = (int)$xml->fullLifeCycle;
		if(!is_null($jsonObject) && isset($jsonObject->fullLifeCycle))
			$this->fullLifeCycle = (int)$jsonObject->fullLifeCycle;
		if(!is_null($xml) && count($xml->couponId))
			$this->couponId = (int)$xml->couponId;
		if(!is_null($jsonObject) && isset($jsonObject->couponId))
			$this->couponId = (int)$jsonObject->couponId;
		if(!is_null($xml) && count($xml->waiverPeriod))
			$this->waiverPeriod = (int)$xml->waiverPeriod;
		if(!is_null($jsonObject) && isset($jsonObject->waiverPeriod))
			$this->waiverPeriod = (int)$jsonObject->waiverPeriod;
		if(!is_null($xml) && count($xml->isWaiverEnabled))
		{
			if(!empty($xml->isWaiverEnabled) && ((int) $xml->isWaiverEnabled === 1 || strtolower((string)$xml->isWaiverEnabled) === 'true'))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isWaiverEnabled))
		{
			if(!empty($jsonObject->isWaiverEnabled) && ((int) $jsonObject->isWaiverEnabled === 1 || strtolower((string)$jsonObject->isWaiverEnabled) === 'true'))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(!is_null($xml) && count($xml->isOfflinePlayback))
		{
			if(!empty($xml->isOfflinePlayback) && ((int) $xml->isOfflinePlayback === 1 || strtolower((string)$xml->isOfflinePlayback) === 'true'))
				$this->isOfflinePlayback = true;
			else
				$this->isOfflinePlayback = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isOfflinePlayback))
		{
			if(!empty($jsonObject->isOfflinePlayback) && ((int) $jsonObject->isOfflinePlayback === 1 || strtolower((string)$jsonObject->isOfflinePlayback) === 'true'))
				$this->isOfflinePlayback = true;
			else
				$this->isOfflinePlayback = false;
		}
	}
	/**
	 * Usage module identifier
	 *
	 * @var bigint
	 */
	public $id = null;

	/**
	 * Usage module name
	 *
	 * @var string
	 * @insertonly
	 */
	public $name = null;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 *
	 * @var int
	 * @insertonly
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 *
	 * @var int
	 */
	public $viewLifeCycle = null;

	/**
	 * The amount time an item is available for viewing
	 *
	 * @var int
	 */
	public $fullLifeCycle = null;

	/**
	 * Identifies a specific coupon linked to this object
	 *
	 * @var int
	 * @readonly
	 */
	public $couponId = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 *
	 * @var int
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 *
	 * @var bool
	 */
	public $isWaiverEnabled = null;

	/**
	 * Indicates that usage is targeted for offline playback
	 *
	 * @var bool
	 */
	public $isOfflinePlayback = null;


}

