/**
 * downCount: Simple Countdown clock with offset
 * Author: Sonny T. <hi@sonnyt.com>, sonnyt.com
 */

(function ($) {

    $.fn.downCount = function (options, callback) {
        var day_label = (options.day_label) ? options.day_label : '';
        var hour_label = (options.hour_label) ? options.hour_label : '';
        var minute_label = (options.min_label) ? options.min_label : '';
        var second_label = (options.sec_label) ? options.sec_label : '';
        var settings = $.extend({
            date: null,
            offset: null
        }, options);

        // Throw error if date is not set
        if (!settings.date) {
            $.error('Date is not defined.');
        }

        // Throw error if date is set incorectly
        if (!Date.parse(settings.date)) {
            $.error('Incorrect date format, it should look like this, 12/24/2012 12:00:00.');
        }

        // Save container
        var container = this;

        /**
         * Change client's local date to match offset timezone
         * @return {Object} Fixed Date object.
         */
        var currentDate = function () {
            // get client's current date
            var date = new Date();

            // turn date to utc
            var utc = date.getTime() + (date.getTimezoneOffset() * 60000);

            // set new Date object
            var new_date = new Date(utc + (3600000 * settings.offset))

            return new_date;
        };

        /**
         * Main downCount function that calculates everything
         */
        function countdown() {
            var target_date = new Date(settings.date), // set target date
                    current_date = currentDate(); // get fixed current date

            // difference of dates
            var difference = target_date - current_date;

            // if difference is negative than it's pass the target date
            if (difference < 0) {
                // stop timer
                clearInterval(interval);

                if (callback && typeof callback === 'function')
                    callback();

                return;
            }

            // basic math variables
            var _second = 1000,
                    _minute = _second * 60,
                    _hour = _minute * 60,
                    _day = _hour * 24;

            // calculate dates
            var days = Math.floor(difference / _day),
                    hours = Math.floor((difference % _day) / _hour),
                    minutes = Math.floor((difference % _hour) / _minute),
                    seconds = Math.floor((difference % _minute) / _second);

            // fix dates so that it will show two digets
            days = (String(days).length >= 2) ? days : '0' + days;
            hours = (String(hours).length >= 2) ? hours : '0' + hours;
            minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
            seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;

            // based on the date change the refrence wording
            if (day_label == '') {
                var day_label = (days === 1) ? 'day' : 'days';
            }
            if (hour_label == '') {
                var hour_label = (hours === 1) ? 'hour' : 'hours';
            }
            if (minute_label == '') {
                var minute_label = (minutes === 1) ? 'minute' : 'minutes';
            }
            if (second_label == '') {
                var second_label = (seconds === 1) ? 'second' : 'seconds';
            }

            // set to DOM
            container.find('.days').text(days);
            container.find('.hours').text(hours);
            container.find('.minutes').text(minutes);
            container.find('.seconds').text(seconds);

            container.find('.days_ref').text(day_label);
            container.find('.hours_ref').text(hour_label);
            container.find('.minutes_ref').text(minute_label);
            container.find('.seconds_ref').text(second_label);
        }
        ;

        // start
        var interval = setInterval(countdown, 1000);
    };

})(jQuery);