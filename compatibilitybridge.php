<?php

/**
 * Copyright (C) 2013-2024 Combodo SAS
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

// IMPORTANT: This is a temporary compatibility bridge to enable a smooth migration from iTop 2.6- to iTop 2.7+.
// In the next version of the extension, this will be remove and the require_once from the 2.7 will be moved to the 'datamodel' section of the module.itop-portal-url-brick.php file.

// If the portal is installed, then it may use the approval brick
// Important: The approval brick files are required manually and not autoloaded because it would not work as they are in the same namespace than the standard bricks but not in the same directory.
// We wanted to keep the same namespace to simplify future refactoring of this brick with the standard ones.
if(is_dir(MODULESROOT.'itop-portal-base'))
{
	// iTop 2.7 and newer
	if (file_exists(MODULESROOT.'itop-portal-base/portal/vendor/autoload.php'))
	{
		// Portal framework autoloader is needed for the UrlBrickRouter
		require_once MODULESROOT.'itop-portal-base/portal/vendor/autoload.php';
		// Module autoloader
		require_once __DIR__.'/vendor/autoload.php';
		// Must be explicitly loaded to register its routes
		require_once __DIR__.'/src/Portal/Router/ApprovalBrickRouter.php';
	}
	// iTop 2.6 and older
	else
	{
		require_once __DIR__.'/legacy/approvalbrick.class.inc.php';
		require_once __DIR__.'/legacy/approvalbrickcontroller.class.inc.php';
		require_once __DIR__.'/legacy/approvalbrickrouter.class.inc.php';
	}
}
