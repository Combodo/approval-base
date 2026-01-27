<?php

/**
 * @copyright   Copyright (C) 2010-2026 Combodo SAS
 * * @license     http://opensource.org/licenses/AGPL-3.0
 */

if (is_dir(MODULESROOT.'itop-portal-base')) {
	// Must be explicitly loaded to register its routes
	require_once __DIR__.'/src/Portal/Router/ApprovalBrickRouter.php';
}
