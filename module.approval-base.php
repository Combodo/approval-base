<?php
/**
 * Copyright (C) 2013-2020 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

/** @noinspection PhpUnhandledExceptionInspection */
SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'approval-base/3.3.2',
	array(
		// Identification
		//
		'label' => 'Approval prerequisites',
		'category' => 'feature',

		// Setup
		//
		'dependencies' => array(
		),
		'mandatory' => false,
		'visible' => false,
		//'installer' => 'MyInstaller',

		// Components
		//
		'datamodel' => array(
			// Explicitly load classes from DM
			'main.approval-base.php',
			'model.approval-base.php',
			// Temp. compatibility with iTop 2.6 and earlier
			'compatibilitybridge.php',
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			'email_sender' => '',
			'email_reply_to' => '',
			'comment_attcode' => '',
			'list_last_first' => false,
			'enable_reminder' => true,
		),
	)
);
