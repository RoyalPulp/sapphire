<?php
/**
 * Abstract task representing scheudled tasks.
 * You can use the different subclasses {@link HourlyTask}, {@link DailyTask},
 * {@link WeeklyTask} to determine when a task should be run,
 * and use automation tools such as unix cron to trigger them.
 * 
 * Example Cron:
 * <code>
 * # HourlyTask (every hour at 25 minutes past)
 * 25 * * * *  www-data /my/webroot/sapphire/cli-script.php /DailyTask > /var/log/silverstripe_dailytask.log
 * 
 * # DailyTask (every day at 6:25am)
 * 25 6 * * *  www-data /my/webroot/sapphire/cli-script.php /DailyTask > /var/log/silverstripe_dailytask.log
 * 
 * # WeelkyTask (every Monday at 6:25am)
 * 25 6 1 * *  www-data /my/webroot/sapphire/cli-script.php /WeeklyTask > /var/log/silverstripe_weeklytask.log
 * </code>
 * 
 * @todo Improve documentation
 * @package sapphire
 * @subpackage cron
 */
abstract class ScheduledTask extends CliController {
    // this class exists as a logical extension
}  
?>