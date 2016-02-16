<?php
	 class Time
		{
		private $hour;
		private $minute;

		function __construct($hour, $minute)
		{
			$this->hour = $hour;
			$this->minute = $minute;
		}

		function getHour(){return $this->hour;}
		function setHour($hour){$this->hour = $hour;}
		function getMinute(){return $this->minute;}
		function setMinute($minute){$this->minute = $minute;}

		function getHourAngle($hour, $minute)
		{
			if(is_int($hour)){
				if (($hour < 1) || ($hour > 12)) {
					return 'Please enter a valid hour';
				} else {
					$hour_hand = 360 * ($hour / 12) + 30 * ($minute/60);
					return $hour_hand;
				}
			} else {
				return "Please enter a number!";
			}
		}

		function getMinuteAngle($minute)
		{
			if(is_int($minute)){
				if (($minute < 1) || ($minute > 59)) {
					return 'Please enter a valid minute';
				} else {
					$minute_hand = 360 * $minute / 60;
					return $minute_hand;
				}
			} else {
				return "Please enter a number!";
			}
		}

		function angleDiff()
		{
			$hour_angle = $this->getHourAngle($this->hour, $this->minute);
			$minute_angle = $this->getMinuteAngle($this->minute);
			if ($hour_angle > $minute_angle) {
				return $hour_angle - $minute_angle;
			} elseif ($minute_angle > $hour_angle) {
				return $minute_angle - $hour_angle;
			} else {
				return 0;
			}
		}
	}
 ?>
