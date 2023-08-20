<?php
/**
 * @package   report_task2
 * @copyright 2023 onwards Marcin Waszak
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('reports', new admin_externalpage('reporttask2', get_string('task2', 'report_task2'),
    "$CFG->wwwroot/report/task2/index.php", 'report/task2:view'));


$settings = null;
?>