$(function () {
    $('.Button-CheckBox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button.Check'),
            $checkbox = $widget.find('input.Check:checkbox'),
            settings = {
                on: {
                    icon: 'fa fa-check-circle'
                },
                off: {
                    icon: 'fa fa-plus-circle'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);
            $checkbox.each(function(){
                if ($(this).is(':checked')) {
                    $(this).prev().addClass('Color');
                } else {
                    $(this).prev().removeClass('Color');
                }
            });
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});