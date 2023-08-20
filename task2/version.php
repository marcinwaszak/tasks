<?php

/**
 * @package   report_task2
 * @copyright 2023 onwards Marcin Waszak
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2023082000; // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2023041800;   // Requires this Moodle version.
$plugin->component = 'report_task2'; // Full name of the plugin (used for diagnostics).
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '1.0.0';    // Numer wersji wtyczki
$plugin->cron = 0;
$plugin->pluginname = 'task2';



    $capabilities = array(
        'report/task2:view' => array(
            'captype' => 'read',
            'contextlevel' => CONTEXT_SYSTEM,
            'archetypes' => array(
                'admin' => CAP_ALLOW
            )
        )
    );


?>