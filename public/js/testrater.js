
$('#rate-plugin').append("<tr><td><div class='rate2' data-rate-value = '4'></div></td></tr>");

var options = {
      max_value: 5,
        step_size: 0.5,
        initial_value: 0,
        symbols: {
            utf8_star: {
                base: '\u2606',
                hover: '\u2605',
                selected: '\u2605',
            },
            utf8_hexagon: {
                base: '\u2B21',
                hover: '\u2B22',
                selected: '\u2B22',
            },
            hearts: '&hearts;',
            fontawesome_beer: '<i class="fas fa-beer"></i>',
            fontawesome_star: {
                base: '<i class="far fa-star"></i>',
                hover: '<i class="fas fa-star"></i>',
                selected: '<i class="fas fa-star"></i>',
            },
            utf8_emoticons: {
                base: [0x1F625, 0x1F613, 0x1F612, 0x1F604],
                hover: [0x1F625, 0x1F613, 0x1F612, 0x1F604],
                selected: [0x1F625, 0x1F613, 0x1F612, 0x1F604],
            },
        },
        selected_symbol_type: 'utf8_star', // Must be a key from symbols
        convert_to_utf8: false,
        cursor: 'default',
        readonly: false,
        change_once: false, // Determines if the rating can only be set once
        only_select_one_symbol: false, // If set to true, only selects the hovered/selected symbol and nothing prior to it
        ajax_method: 'POST',
        additional_data: {}, // Additional data to send to the server
        //update_input_field_name = some input field set by the user
}


$(".rate2").rate();


//or for example



$("#rate-plugin").on("afterChange", function(ev, data){
    console.log(data.from, data.to);
    console.log("AFTER CHANGE")
    $("#review-rating-entry").val(data.to);  

});

    