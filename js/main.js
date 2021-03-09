$(document).ready(function () {
    $( "#slider" ).slider({
        min: 10000,
        max: 3000000,
        step: 50,
        range: "min",
        slide: function( event, ui ) {
            $( "#amount" ).val( ui.value );
        }
    });
    $( "#amount" ).val($( "#slider" ).slider( "value" ) );
    $("input.slider-input").change(function() {
        const $this = $(this);
        $("#slider").slider("value", $this.val());
    });
    $( "#slider2" ).slider({
        min: 10000,
        max: 3000000,
        step: 50,
        range: "min",
        slide: function( event, ui ) {
            $( "#deposit-repl" ).val( ui.value );
        }
    });
    $( "#deposit-repl" ).val($( "#slider2" ).slider( "value" ) );
    $("input.slider-input2").change(function() {
        const $this = $(this);
        $("#slider2").slider("value", $this.val());
    });

        $( "#datepicker" ).datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true,
        });

    $('#calc-deposit').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'calc.php',
            cache:false,
            data: $(this).serialize(),
            success: function(html) {
                $( "#result" ).text(html)
            }
        });
    });




} );