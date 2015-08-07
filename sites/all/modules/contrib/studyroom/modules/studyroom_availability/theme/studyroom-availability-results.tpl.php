<?php

/**
 * @file
 * Default theme implementation to display the results page.
 *
 * Available variables:
 * - $date: The query date specified by the user
 * - $login_notification_message: Notification message to display if a user is not logged in
 * - $login_notification_message_type: Type of notification message to display. See drupal_set_message().
 *
 * @see template_preprocess_studyroom_availability_results()
 *
 * @ingroup themeable
 */
?>
<?php
  if (!user_is_logged_in()) {
    drupal_set_message($login_notification_message, $login_notification_message_type);
  }
?>
<?php
  print '<p class="studyroom-availability-date">' . $date->format('D, m/d/Y') . '</p>';
?>
<?php print render($location); ?>
<?php print render($results); ?>
