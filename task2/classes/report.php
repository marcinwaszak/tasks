<?php
/**
 * @package   report_task2
 * @copyright 2023 onwards Marcin Waszak
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();

class report_task2 extends report_unaspected {

    public function fetch() {
        // Pobieranie 10 losowych użytkowników
       $random_users = get_records_sql("SELECT id, firstname, lastname FROM {user} WHERE deleted = 0 ORDER BY RAND() LIMIT 10");


        foreach ($random_users as $user) {
            // Pobieranie kursów użytkownika
            $user_courses = enrol_get_users_courses($user->id);
            
            foreach ($user_courses as $course) {
                $this->add_data(
                    $user->fullname,
                    $course->fullname
                );
            }
        }
    }

    public function display() {
        $table = new html_table();
        $table->head = array('Użytkownik', 'Nazwa kursu');
        $table->data = $this->data;
        
        echo html_writer::table($table);
    }
}

?>