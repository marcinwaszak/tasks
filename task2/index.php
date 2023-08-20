<?php
/**
 * @package   report_task2
 * @copyright 2023 onwards Marcin Waszak
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_login();

$context = context_system::instance();
require_capability('report/task2:view', $context);

$PAGE->set_context($context);
$PAGE->set_title(get_string('pluginname', 'report_task2'));
$PAGE->set_heading(get_string('pluginname', 'report_task2'));

$output = $PAGE->get_renderer('report_task2');
echo $output->header();

$report = new report_task2();
$report->fetch();
$report->display();

echo $output->footer();


?>