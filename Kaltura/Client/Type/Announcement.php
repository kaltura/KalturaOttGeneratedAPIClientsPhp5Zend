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
class Kaltura_Client_Type_Announcement extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnnouncement';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->enabled))
		{
			if(!empty($xml->enabled) && ((int) $xml->enabled === 1 || strtolower((string)$xml->enabled) === 'true'))
				$this->enabled = true;
			else
				$this->enabled = false;
		}
		if(count($xml->startTime))
			$this->startTime = (string)$xml->startTime;
		if(count($xml->timezone))
			$this->timezone = (string)$xml->timezone;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->recipients))
			$this->recipients = (string)$xml->recipients;
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->imageUrl))
			$this->imageUrl = (string)$xml->imageUrl;
		if(count($xml->includeMail))
		{
			if(!empty($xml->includeMail) && ((int) $xml->includeMail === 1 || strtolower((string)$xml->includeMail) === 'true'))
				$this->includeMail = true;
			else
				$this->includeMail = false;
		}
		if(count($xml->mailTemplate))
			$this->mailTemplate = (string)$xml->mailTemplate;
		if(count($xml->mailSubject))
			$this->mailSubject = (string)$xml->mailSubject;
		if(count($xml->includeSms))
		{
			if(!empty($xml->includeSms) && ((int) $xml->includeSms === 1 || strtolower((string)$xml->includeSms) === 'true'))
				$this->includeSms = true;
			else
				$this->includeSms = false;
		}
	}
	/**
	 * Announcement name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Announcement message
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Announcement enabled
	 *
	 * @var bool
	 */
	public $enabled = null;

	/**
	 * Announcement start time
	 *
	 * @var bigint
	 */
	public $startTime = null;

	/**
	 * Announcement time zone
	 *
	 * @var string
	 */
	public $timezone = null;

	/**
	 * Announcement status: NotSent=0/Sending=1/Sent=2/Aborted=3
	 *
	 * @var Kaltura_Client_Enum_AnnouncementStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Announcement recipients: All=0/LoggedIn=1/Guests=2/Other=3
	 *
	 * @var Kaltura_Client_Enum_AnnouncementRecipientsType
	 */
	public $recipients = null;

	/**
	 * Announcement id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Announcement image URL, relevant for system announcements
	 *
	 * @var string
	 */
	public $imageUrl = null;

	/**
	 * Include Mail
	 *
	 * @var bool
	 */
	public $includeMail = null;

	/**
	 * Mail Template
	 *
	 * @var string
	 */
	public $mailTemplate = null;

	/**
	 * Mail Subject
	 *
	 * @var string
	 */
	public $mailSubject = null;

	/**
	 * Include SMS
	 *
	 * @var bool
	 */
	public $includeSms = null;


}

