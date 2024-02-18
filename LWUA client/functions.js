var how_many_years_to_predict;
var start_year;
var end_year;
var range_of_year;
var ma_divisor;
var total_months;
var total_number_of_years_to_predict;
var compile_forecast;
var sub;
var forecast_type;
var one_time_switch = true;

//---------------------------------------------------------------------
var start_neg;
var start_pos;
var end_neg;
var end_pos;
var start_value;
var end_value;

var res = false;
var com = false;
var gov = false;

var zone_A = false;
var zone_B = false;
var zone_C = false;
var zone_D = false;
var zone_E = false;
var zone_F = false;
var zone_G = false;
var zone_H = false;

var cons = false;
var supp = false;

function add_data() {
    console.log("HELOSBDJK");
}

function get_values() {
    var zone_ctr = 0;
    var household_ctr = 0;
    var forecast_ctr = 0;

    // ZONE

    if (zone_A == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_B == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_C == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_D == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_E == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_F == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_G == true) {
        zone_ctr = zone_ctr + 1;
    }
    if (zone_H == true) {
        zone_ctr = zone_ctr + 1;
    }

    console.log(zone_ctr);
    var t;
    // HOUSEHOLD

    if (res == true) {
        household_ctr = household_ctr + 1;
    } 
    if (com == true) {
        household_ctr = household_ctr + 1;
    }
    if (gov == true) {
        household_ctr = household_ctr + 1;
    }

    console.log(household_ctr);

    // FORECAST TYPE
    if (cons == true) {
        forecast_ctr = forecast_ctr + 1;
    }
    if (supp == true) {
        forecast_ctr = forecast_ctr + 1;
    }
    console.log(forecast_ctr);

    if (zone_ctr == 0) {
        document.getElementById("zone_select").innerHTML = "Zone: None";
    } else {
        t = 0;
        var zarray = new Array(zone_ctr);
        if (zone_A == true) {
            zarray[t] = "Zone A";
            t = t + 1;
        }
        if (zone_B == true) {
            zarray[t] = "Zone B";
            t = t + 1;
        }
        if (zone_C == true) {
            zarray[t] = "Zone C";
            t = t + 1;
        }
        if (zone_D == true) {
            zarray[t] = "Zone D";
            t = t + 1;
        }
        if (zone_E == true) {
            zarray[t] = "Zone E";
            t = t + 1;
        }
        if (zone_F == true) {
            zarray[t] = "Zone F";
            t = t + 1;
        }
        if (zone_G == true) {
            zarray[t] = "Zone G";
            t = t + 1;
        }
        if (zone_H == true) {
            zarray[t] = "Zone H ";
            t = t + 1;
        }
        console.log(zarray);

        if (zarray.length == 1) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0];
        } else if (zarray.length == 2) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1];
        } else if (zarray.length == 3) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1] + ", " + zarray[2];
        } else if (zarray.length == 4) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1] + ", " + zarray[2] + ", " + zarray[3];
        } else if (zarray.length == 5) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1] + ", " + zarray[2] + ", " + zarray[3] + ", " + zarray[4];
        } else if (zarray.length == 6) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1] + ", " + zarray[2] + ", " + zarray[3] + ", " + zarray[4] + ", " + zarray[5];
        } else if (zarray.length == 7) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1] + ", " + zarray[2] + ", " + zarray[3] + ", " + zarray[4] + ", " + zarray[5] + ", " + zarray[6];
        } else if (zarray.length == 8) {
            document.getElementById("zone_select").innerHTML = "Zone: " + zarray[0] + ", " + zarray[1] + ", " + zarray[2] + ", " + zarray[3] + ", " + zarray[4] + ", " + zarray[5] + ", " + zarray[6] + ", " + zarray[7];
        }
    }

    if (household_ctr == 0) {
        document.getElementById("consumer_select").innerHTML = "Consumer Type: None";
    } else {
        t = 0;
        var carray = new Array(household_ctr);
        if (res == true) {
            carray[t] = "Residential";
            t = t + 1;
        }
        if (com == true) {
            carray[t] = "Commercial";
            t = t + 1;
        }
        if (gov == true) {
            carray[t] = "Government";
            t = t + 1;
        }
        console.log(carray);
        if (carray.length == 1) {
            document.getElementById("consumer_select").innerHTML = "Consumer Type: " + carray[0];
        } else if (carray.length == 2) {
            document.getElementById("consumer_select").innerHTML = "Consumer Type: " + carray[0] + ", " + carray[1];
        } else if (carray.length == 3) {
            document.getElementById("consumer_select").innerHTML = "Consumer Type: " + carray[0] + ", " + carray[1] + ", " + carray[2];
        }
    }
    
    document.getElementById("zone_select").style.display = "block";
    document.getElementById("consumer_select").style.display = "block";
}

function residential_option() {
    if (res == false) {
        document.getElementById("residential").style.background = "lightgreen";
        res = true;
    } else if (res == true) {
        document.getElementById("residential").style.background = "white";
        res = false;
    }
}

function commercial_option() {
    if (com == false) {
        document.getElementById("commercial").style.background = "lightgreen";
        
        com = true;
    } else if (com == true) {
        document.getElementById("commercial").style.background = "white";
        com = false;
    }
}

function government_option() {
    if (gov == false) {
        document.getElementById("government").style.background = "lightgreen";
        
        gov = true;
    } else if (gov == true) {
        document.getElementById("government").style.background = "white";
        gov = false;
    }
}

function zone_one() {
    if (zone_A == false) {
        document.getElementById("zone_1").style.background = "lightgreen";
        zone_A = true;
    } else if (zone_A == true) {
        document.getElementById("zone_1").style.background = "white";
        zone_A = false;
    }
}

function zone_two() {
    if (zone_B == false) {
        document.getElementById("zone_2").style.background = "lightgreen";
        zone_B = true;
    } else if (zone_B == true) {
        document.getElementById("zone_2").style.background = "white";
        zone_B = false;
    }
}

function zone_three() {
    if (zone_C == false) {
        document.getElementById("zone_3").style.background = "lightgreen";
        zone_C = true;
    } else if (zone_C == true) {
        document.getElementById("zone_3").style.background = "white";
        zone_C = false;
    }
}

function zone_four() {
    if (zone_D == false) {
        document.getElementById("zone_4").style.background = "lightgreen";
        zone_D = true;
    } else if (zone_D == true) {
        document.getElementById("zone_4").style.background = "white";
        zone_D = false;
    }
}

function zone_five() {
    if (zone_E == false) {
        document.getElementById("zone_5").style.background = "lightgreen";
        zone_E = true;
    } else if (zone_E == true) {
        document.getElementById("zone_5").style.background = "white";
        zone_E = false;
    }
}

function zone_six() {
    if (zone_F == false) {
        document.getElementById("zone_6").style.background = "lightgreen";
        zone_F = true;
    } else if (zone_F == true) {
        document.getElementById("zone_6").style.background = "white";
        zone_F = false;
    }
}

function zone_seven() {
    if (zone_G == false) {
        document.getElementById("zone_7").style.background = "lightgreen";
        zone_G = true;
    } else if (zone_G == true) {
        document.getElementById("zone_7").style.background = "white";
        zone_G = false;
    }
}

function zone_eight() {
    if (zone_H == false) {
        document.getElementById("zone_8").style.background = "lightgreen";
        zone_H = true;
    } else if (zone_H == true) {
        document.getElementById("zone_8").style.background = "white";
        zone_H = false;
    }
}
//---------------------------------------------------------------------






function dashboard() {
    document.getElementById("part_dashboard").style.display = "block";
    document.getElementById("part_analytics").style.display = "none";
    document.getElementById("part_records_residential").style.display = "none";
    document.getElementById("part_about").style.display = "none";
    document.getElementById("parts").style.display = "none";
}

function analytics_manual() {
    if (one_time_switch == true) {
        document.getElementById("popup_tips").style.display = "block";
        document.getElementById("blocker").style.display = "block";
        one_time_switch = false;
    }
    document.getElementById("part_dashboard").style.display = "none";
    document.getElementById("part_analytics").style.display = "block";
    document.getElementById("part_records_residential").style.display = "none";
    document.getElementById("part_about").style.display = "none";
    document.getElementById("parts").style.display = "none";

    document.getElementById("arima_gui_manual").style.display = "block";
    document.getElementById("arima_gui_automatic").style.display = "none";
    document.getElementById("auto_forecast").style.background = "white";
    document.getElementById("manual_forecast").style.background = "orange";
}

function analytics_automatic() {
    document.getElementById("part_dashboard").style.display = "none";
    document.getElementById("part_analytics").style.display = "block";
    document.getElementById("part_records_residential").style.display = "none";
    document.getElementById("part_about").style.display = "none";
    document.getElementById("parts").style.display = "none";

    document.getElementById("arima_gui_manual").style.display = "none";
    document.getElementById("arima_gui_automatic").style.display = "block";
    document.getElementById("auto_forecast").style.background = "orange";
    document.getElementById("manual_forecast").style.background = "white";
}

function records() {
    document.getElementById("part_dashboard").style.display = "none";
    document.getElementById("part_analytics").style.display = "none";
    document.getElementById("part_about").style.display = "none";
    
    document.getElementById("parts").style.display = "block";
    document.getElementById("part_records_residential").style.display = "block";
    document.getElementById("part_records_commercial").style.display = "none";
    document.getElementById("part_records_government").style.display = "none";

    document.getElementById("ab").style.backgroundColor = "white";
    document.getElementById("rb").style.backgroundColor = "lightblue";
    document.getElementById("cb").style.backgroundColor = "white";
    document.getElementById("gb").style.backgroundColor = "white";
}

function about() {
    document.getElementById("part_dashboard").style.display = "none";
    document.getElementById("part_analytics").style.display = "none";
    document.getElementById("part_records_residential").style.display = "none";
    document.getElementById("part_about").style.display = "block";
    document.getElementById("parts").style.display = "none";
}

function show_all_data() {
    document.getElementById("part_records_residential").style.display = "block";
    document.getElementById("part_records_commercial").style.display = "block";
    document.getElementById("part_records_government").style.display = "block";

    document.getElementById("ab").style.backgroundColor = "lightblue";
    document.getElementById("rb").style.backgroundColor = "white";
    document.getElementById("cb").style.backgroundColor = "white";
    document.getElementById("gb").style.backgroundColor = "white";
}

function show_residential_data() {
    document.getElementById("part_records_residential").style.display = "block";
    document.getElementById("part_records_commercial").style.display = "none";
    document.getElementById("part_records_government").style.display = "none";

    document.getElementById("ab").style.backgroundColor = "white";
    document.getElementById("rb").style.backgroundColor = "lightblue";
    document.getElementById("cb").style.backgroundColor = "white";
    document.getElementById("gb").style.backgroundColor = "white";
}

function show_commercial_data() {
    document.getElementById("part_records_residential").style.display = "none";
    document.getElementById("part_records_commercial").style.display = "block";
    document.getElementById("part_records_government").style.display = "none";

    document.getElementById("ab").style.backgroundColor = "white";
    document.getElementById("rb").style.backgroundColor = "white";
    document.getElementById("cb").style.backgroundColor = "lightblue";
    document.getElementById("gb").style.backgroundColor = "white";
}

function show_government_data() {
    document.getElementById("part_records_residential").style.display = "none";
    document.getElementById("part_records_commercial").style.display = "none";
    document.getElementById("part_records_government").style.display = "block";

    document.getElementById("ab").style.backgroundColor = "white";
    document.getElementById("rb").style.backgroundColor = "white";
    document.getElementById("cb").style.backgroundColor = "white";
    document.getElementById("gb").style.backgroundColor = "lightblue";
}

//---------------------------------------------------------------------------------------------------------------------

function downloadCsv(filename, csvData) {
    const element = document.createElement("a");

    element.setAttribute("href", `data:text/csv;charset=utf-8,${csvData}`);
    element.setAttribute("download", filename);
    element.style.display = "none";

    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
}

//---------------------------------------------------------------------------------------------------------------------

function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }
}

document.getElementById("one_ok").onclick = function() { // For empty year input
    document.getElementById("blocker").style.display = "none";
    document.getElementById("popup_empty_step_one").style.display = "none";
}

document.getElementById("two_ok").onclick = function() { // For exceeded year input
    document.getElementById("blocker").style.display = "none";
    document.getElementById("popup_data_range_exceeded").style.display = "none";
}

document.getElementById("three_ok").onclick = function() { // For exceeded year input
    document.getElementById("blocker").style.display = "none";
    document.getElementById("popup_tips").style.display = "none";
    
}

function show_all() {
    document.getElementById("sample").style.display="block";
    document.getElementById("historical_presentation").style.display = "block";
    document.getElementById("compile_overall").style.display = "none";
    
    document.getElementById("show_all").style.backgroundColor="orange";
    document.getElementById("futurama").style.backgroundColor="white";
    document.getElementById("details").style.backgroundColor = "white";
    document.getElementById("compile").style.backgroundColor = "white";
}

function show_future() {
    document.getElementById("sample").style.display="block";
    document.getElementById("historical_presentation").style.display="none";
    document.getElementById("compile_overall").style.display = "none";

    document.getElementById("show_all").style.backgroundColor="white";
    document.getElementById("futurama").style.backgroundColor="orange";
    document.getElementById("details").style.backgroundColor = "white";
    document.getElementById("compile").style.backgroundColor = "white";
}

function show_history() {
    document.getElementById("sample").style.display = "none";
    document.getElementById("historical_presentation").style.display = "block";
    document.getElementById("compile_overall").style.display = "none";

    document.getElementById("show_all").style.backgroundColor="white";
    document.getElementById("futurama").style.backgroundColor = "white";
    document.getElementById("details").style.backgroundColor = "orange";
    document.getElementById("compile").style.backgroundColor = "white";
}

function show_compile() {
    document.getElementById("sample").style.display = "none";
    document.getElementById("historical_presentation").style.display = "none";

    document.getElementById("show_all").style.backgroundColor="white";
    document.getElementById("futurama").style.backgroundColor = "white";
    document.getElementById("details").style.backgroundColor = "white";
    document.getElementById("compile").style.backgroundColor = "orange";

    sub = compile_forecast.length / 12;
    console.log("COMPILE RESULTS:::::")
    console.log(sub);
    console.log(start_year);
    console.log(compile_forecast);
    console.log(compile_forecast.length);

    
    document.getElementById("compile_overall").style.display = "block";
    document.getElementById("summary_graph").style.display = "block";

    const summary = document.getElementById("display_summary");

    var yc = start_year;
    yc = Number(yc);
    var year_ctr = new Array(21);

    for (let i = 0; i < 21; i++) {
        year_ctr[i] = yc;
        year_ctr[i] = year_ctr[i].toString();
        yc = yc + 1;
    }

    if(sub == 3) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 4) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 5) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', '', year_ctr[4], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 6) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', '', year_ctr[4], '', '', '', '', '', '', '', '', '', '', '', year_ctr[5], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 7) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', '', year_ctr[4], '', '', '', '', '', '', '', '', '', '', '', year_ctr[5], '', '', '', '', '', '', '', '', '', '', '', year_ctr[6], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 8) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', '', year_ctr[4], '', '', '', '', '', '', '', '', '', '', '', year_ctr[5], '', '', '', '', '', '', '', '', '', '', '', year_ctr[6], '', '', '', '', '', '', '', '', '', '', '', year_ctr[7], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 9) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', '', year_ctr[4], '', '', '', '', '', '', '', '', '', '', '', year_ctr[5], '', '', '', '', '', '', '', '', '', '', '', year_ctr[6], '', '', '', '', '', '', '', '', '', '', '', year_ctr[7], '', '', '', '', '', '', '', '', '', '', '', year_ctr[8], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    } else if (sub == 10) {
        new Chart(summary, {
            type: 'bar',
            data: {
            labels: [year_ctr[0], '', '', '', '', '', '', '', '', '', '', '', year_ctr[1], '', '', '', '', '', '', '', '', '', '', '', year_ctr[2], '', '', '', '', '', '', '', '', '', '', '', year_ctr[3], '', '', '', '', '', '', '', '', '', '', '', year_ctr[4], '', '', '', '', '', '', '', '', '', '', '', year_ctr[5], '', '', '', '', '', '', '', '', '', '', '', year_ctr[6], '', '', '', '', '', '', '', '', '', '', '', year_ctr[7], '', '', '', '', '', '', '', '', '', '', '', year_ctr[8], '', '', '', '', '', '', '', '', '', '', '', year_ctr[9], '', '', '', '', '', '', '', '', '', '', ''],
            datasets: [{
                label: "Water Usage",
                data: compile_forecast,
                borderWidth: 1
            }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
        }); 
    }
    
}

document.getElementById("create_dataset").onclick = function() {
    start_year = document.getElementById("start_input").value;
    end_year = document.getElementById("end_input").value;
    range_of_year = end_year - start_year;

    // This line will run if the user presses "next" button with empty input fields
    if (document.getElementById("start_input").value == "" || document.getElementById("start_input").value == "") {
        document.getElementById("blocker").style.display = "block";
        document.getElementById("popup_empty_step_one").style.display = "block";
        console.log("Empty Fields");
        document.getElementById("start_input").value = "";
        document.getElementById("end_input").value = "";
        document.getElementById("predict_years").value = "";
    } else if (range_of_year > 4 || range_of_year <= 0) {
        document.getElementById("blocker").style.display = "block";
        document.getElementById("popup_data_range_exceeded").style.display = "block";
        document.getElementById("start_input").value = "";
        document.getElementById("end_input").value = "";
    } else {
        document.getElementById("input_data_year").style.display="none";
        document.getElementById("input_data_A").style.display = "block"; 
        document.getElementById("input_data_B").style.display = "block"; 
        document.getElementById("rickroll").style.display = "block"; 

        if (total_years > 5) { // This will tell the user that the total starting and ending year has exceeded more than 5 years
            document.getElementById("blocker").style.display = "block";
            document.getElementById("popup_data_range_exceeded").style.display = "block";
            document.getElementById("input_data").style.display = "none";
            console.log("Exceeded more than ten years");
        } else {
            var s = document.getElementById("start_input").value;
            var e = document.getElementById("end_input").value;
            var total_years = e - s;

            console.log("Not Empty Fields");
            // document.getElementById("start").value = "";
            // document.getElementById("end").value = "";
            document.getElementById("predict_years").value = "";
            // This line will determine how many years the user wants within 5 years only
            switch(total_years) {
                case 1:
                    document.getElementById("one_year_label").innerHTML = "Year " + s;
                    s++;
                    document.getElementById("two_year_label").innerHTML = "Year " + (s);

                    document.getElementById("one_year_demand").style.display = "block";
                    document.getElementById("two_year_demand").style.display = "block";
                    document.getElementById("three_year_demand").style.display = "none";
                    document.getElementById("four_year_demand").style.display = "none";
                    document.getElementById("five_year_demand").style.display = "none";
                    break;
                case 2:
                    document.getElementById("one_year_label").innerHTML = "Year " + s;
                    s++;
                    document.getElementById("two_year_label").innerHTML = "Year " + (s);
                    s++;
                    document.getElementById("three_year_label").innerHTML = "Year " + (s);

                    document.getElementById("one_year_demand").style.display = "block";
                    document.getElementById("two_year_demand").style.display = "block";
                    document.getElementById("three_year_demand").style.display = "block";
                    document.getElementById("four_year_demand").style.display = "none";
                    document.getElementById("five_year_demand").style.display = "none";
                    break;
                case 3:
                    document.getElementById("one_year_label").innerHTML = "Year " + s;
                    s++;
                    document.getElementById("two_year_label").innerHTML = "Year " + (s);
                    s++;
                    document.getElementById("three_year_label").innerHTML = "Year " + (s);
                    s++;
                    document.getElementById("four_year_label").innerHTML = "Year " + (s);

                    document.getElementById("one_year_demand").style.display = "block";
                    document.getElementById("two_year_demand").style.display = "block";
                    document.getElementById("three_year_demand").style.display = "block";
                    document.getElementById("four_year_demand").style.display = "block";
                    document.getElementById("five_year_demand").style.display = "none";
                    break;
                case 4:
                    document.getElementById("one_year_label").innerHTML = "Year " + s;
                    s++;
                    document.getElementById("two_year_label").innerHTML = "Year " + (s);
                    s++;
                    document.getElementById("three_year_label").innerHTML = "Year " + (s);
                    s++;
                    document.getElementById("four_year_label").innerHTML = "Year " + (s);
                    s++;
                    document.getElementById("five_year_label").innerHTML = "Year " + (s);

                    document.getElementById("one_year_demand").style.display = "block";
                    document.getElementById("two_year_demand").style.display = "block";
                    document.getElementById("three_year_demand").style.display = "block";
                    document.getElementById("four_year_demand").style.display = "block";
                    document.getElementById("five_year_demand").style.display = "block";
                    break;
            }

            document.getElementById("input_data").style.display = "block"; 
        }

    }   
}

document.getElementById("rickroll").onclick = function() { // For exceeded year input

    if (document.getElementById("predict_years").value == "") {
        document.getElementById("popup_empty_step_one").style.display = "block";
    } else if (document.getElementById("predict_years").value <= 0 || document.getElementById("predict_years").value > 5) {
        document.getElementById("blocker").style.display = "block";
        document.getElementById("popup_data_range_exceeded").style.display = "block";
        document.getElementById("predict_years").innerHTML = "";
    } else {
        get_values();
        document.getElementById("noteB").innerHTML = "RESULTS";
        document.getElementById("reload").style.display = "flex";
        document.getElementById("input_data_A").style.display = "none"; 
        document.getElementById("input_data_B").style.display = "none"; 
        document.getElementById("show_all").style.display="inline-block";
        document.getElementById("details").style.display="inline-block";
        document.getElementById("futurama").style.display="inline-block";
        document.getElementById("compile").style.display="inline-block";
        document.getElementById("historical_presentation").style.display = "block";
        document.getElementById("sample").style.display="block";
        document.getElementById("btnDownloadCsv").style.display="block"; 
        window.scrollTo(0, 0);

        how_many_years_to_predict = document.getElementById("predict_years").value;      // FUTURE FORECAST (Maximum of 10 years as of now...)
        start_year = document.getElementById("start_input").value;      // HISTORICAL FORECAST (2 as a minimum years of input)
        end_year = document.getElementById("end_input").value;

        // Constant Volatile Variables
        range_of_year = end_year - start_year;
        ma_divisor = (end_year - start_year) + 1;
        total_months = 12 * ma_divisor;
        total_number_of_years_to_predict = 12 * how_many_years_to_predict;


        // Storages
        var a;
        var b;
        var varA;
        var varB;
        var deseasonal;
        var time;;
        var time_ctr;
        var deseasonal_ctr;
        var ctr;
        var n;
        var xx_ctr;
        var xy_ctr;
        var yy_ctr;
        var current_time;
        var counter;
        var cma_values;
        var ma_values;
        var integrated_values;
        var seasonal_values;
        var dataset;
        var quarter = new Array(12);
        var future_regression = new Array(total_number_of_years_to_predict);
        var future_forecast = new Array(total_number_of_years_to_predict);
        var deseasonal = new Array(total_months);
        var trender = new Array(total_months);
        var historical_forecast = new Array(total_months);

        var history_arrayA;
        var history_arrayB;
        var history_arrayC;
        var history_arrayD;
        var history_arrayE;

        var forecast_array_A;
        var forecast_array_B;
        var forecast_array_C;
        var forecast_array_D;
        var forecast_array_E;

        function ARIMA() {
            MOVING_AVERAGE();
            CENTERED_MOVING_AVERAGE();
            INTEGRATED();
            SEASONALITY();
            SEASONAL();
            REGRESSION_TREND();
            FORECAST();
            HISTORYCHART();
            CHARTCALCULATOR();
        }

        function HISTORYCHART() {

            var s = document.getElementById("start_input").value;
            s = Number(s);

            if(range_of_year == 1) {
                
                ctr = 0;
                history_arrayA = new Array(12);
                history_arrayB = new Array(12);

                for (let i = 0; i < 12; i++) {
                    history_arrayA[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayB[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: s,
                            January: history_arrayA[0],
                            February: history_arrayA[1],
                            March: history_arrayA[2],
                            April: history_arrayA[3],
                            May: history_arrayA[4],
                            June: history_arrayA[5],
                            July: history_arrayA[6],
                            August: history_arrayA[7],
                            September: history_arrayA[8],
                            October: history_arrayA[9],
                            November: history_arrayA[10],
                            December: history_arrayA[11]
                        },
                        {
                            Year: s+1,
                            January: history_arrayB[0],
                            February: history_arrayB[1],
                            March: history_arrayB[2],
                            April: history_arrayB[3],
                            May: history_arrayB[4],
                            June: history_arrayB[5],
                            July: history_arrayB[6],
                            August: history_arrayB[7],
                            September: history_arrayB[8],
                            October: history_arrayB[9],
                            November: history_arrayB[10],
                            December: history_arrayB[11]
                        }

                    ];
                    downloadCsv("historical-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_historical_A").innerHTML = "Year " + s;
                document.getElementById("label_historical_B").innerHTML = "Year " + (s+1);

                document.getElementById("detail_A").style.display = "block";
                document.getElementById("detail_B").style.display = "block";

                const hvA = document.getElementById("displayDetail_A");
                const hvB = document.getElementById("displayDetail_B");

                new Chart(hvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayA,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(hvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayB,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 
            } else if(range_of_year == 2) {

                ctr = 0;
                history_arrayA = new Array(12);
                history_arrayB = new Array(12);
                history_arrayC = new Array(12);

                for (let i = 0; i < 12; i++) {
                    history_arrayA[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayB[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayC[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: s,
                            January: history_arrayA[0],
                            February: history_arrayA[1],
                            March: history_arrayA[2],
                            April: history_arrayA[3],
                            May: history_arrayA[4],
                            June: history_arrayA[5],
                            July: history_arrayA[6],
                            August: history_arrayA[7],
                            September: history_arrayA[8],
                            October: history_arrayA[9],
                            November: history_arrayA[10],
                            December: history_arrayA[11]
                        },
                        {
                            Year: s+1,
                            January: history_arrayB[0],
                            February: history_arrayB[1],
                            March: history_arrayB[2],
                            April: history_arrayB[3],
                            May: history_arrayB[4],
                            June: history_arrayB[5],
                            July: history_arrayB[6],
                            August: history_arrayB[7],
                            September: history_arrayB[8],
                            October: history_arrayB[9],
                            November: history_arrayB[10],
                            December: history_arrayB[11]
                        },
                        {
                            Year: s+2,
                            January: history_arrayC[0],
                            February: history_arrayC[1],
                            March: history_arrayC[2],
                            April: history_arrayC[3],
                            May: history_arrayC[4],
                            June: history_arrayC[5],
                            July: history_arrayC[6],
                            August: history_arrayC[7],
                            September: history_arrayC[8],
                            October: history_arrayC[9],
                            November: history_arrayC[10],
                            December: history_arrayC[11]
                        }
                    ];
                    downloadCsv("historical-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_historical_A").innerHTML = "Year " + s;
                document.getElementById("label_historical_B").innerHTML = "Year " + (s+1);
                document.getElementById("label_historical_C").innerHTML = "Year " + (s+2);

                document.getElementById("detail_A").style.display = "block";
                document.getElementById("detail_B").style.display = "block";
                document.getElementById("detail_C").style.display = "block";

                const hvA = document.getElementById("displayDetail_A");
                const hvB = document.getElementById("displayDetail_B");
                const hvC = document.getElementById("displayDetail_C");

                new Chart(hvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayA,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(hvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayB,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });

                new Chart(hvC, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayC,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });
            } else if(range_of_year == 3) {
                
                ctr = 0;
                history_arrayA = new Array(12);
                history_arrayB = new Array(12);
                history_arrayC = new Array(12);
                history_arrayD = new Array(12);

                for (let i = 0; i < 12; i++) {
                    history_arrayA[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayB[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayC[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayD[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: s,
                            January: history_arrayA[0],
                            February: history_arrayA[1],
                            March: history_arrayA[2],
                            April: history_arrayA[3],
                            May: history_arrayA[4],
                            June: history_arrayA[5],
                            July: history_arrayA[6],
                            August: history_arrayA[7],
                            September: history_arrayA[8],
                            October: history_arrayA[9],
                            November: history_arrayA[10],
                            December: history_arrayA[11]
                        },
                        {
                            Year: s+1,
                            January: history_arrayB[0],
                            February: history_arrayB[1],
                            March: history_arrayB[2],
                            April: history_arrayB[3],
                            May: history_arrayB[4],
                            June: history_arrayB[5],
                            July: history_arrayB[6],
                            August: history_arrayB[7],
                            September: history_arrayB[8],
                            October: history_arrayB[9],
                            November: history_arrayB[10],
                            December: history_arrayB[11]
                        },
                        {
                            Year: s+2,
                            January: history_arrayC[0],
                            February: history_arrayC[1],
                            March: history_arrayC[2],
                            April: history_arrayC[3],
                            May: history_arrayC[4],
                            June: history_arrayC[5],
                            July: history_arrayC[6],
                            August: history_arrayC[7],
                            September: history_arrayC[8],
                            October: history_arrayC[9],
                            November: history_arrayC[10],
                            December: history_arrayC[11]
                        },
                        {
                            Year: s+3,
                            January: history_arrayD[0],
                            February: history_arrayD[1],
                            March: history_arrayD[2],
                            April: history_arrayD[3],
                            May: history_arrayD[4],
                            June: history_arrayD[5],
                            July: history_arrayD[6],
                            August: history_arrayD[7],
                            September: history_arrayD[8],
                            October: history_arrayD[9],
                            November: history_arrayD[10],
                            December: history_arrayD[11]
                        }
                    ];
                    downloadCsv("historical-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_historical_A").innerHTML = "Year " + s;
                document.getElementById("label_historical_B").innerHTML = "Year " + (s+1);
                document.getElementById("label_historical_C").innerHTML = "Year " + (s+2);
                document.getElementById("label_historical_D").innerHTML = "Year " + (s+3);

                document.getElementById("detail_A").style.display = "block";
                document.getElementById("detail_B").style.display = "block";
                document.getElementById("detail_C").style.display = "block";
                document.getElementById("detail_D").style.display = "block";

                const hvA = document.getElementById("displayDetail_A");
                const hvB = document.getElementById("displayDetail_B");
                const hvC = document.getElementById("displayDetail_C");
                const hvD = document.getElementById("displayDetail_D");

                new Chart(hvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayA,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(hvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayB,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });

                new Chart(hvC, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayC,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });

                new Chart(hvD, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayD,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });
            } else if(range_of_year == 4) {

                ctr = 0;
                history_arrayA = new Array(12);
                history_arrayB = new Array(12);
                history_arrayC = new Array(12);
                history_arrayD = new Array(12);
                history_arrayE = new Array(12);

                for (let i = 0; i < 12; i++) {
                    history_arrayA[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayB[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayC[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayD[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    history_arrayE[i] = dataset[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: s,
                            January: history_arrayA[0],
                            February: history_arrayA[1],
                            March: history_arrayA[2],
                            April: history_arrayA[3],
                            May: history_arrayA[4],
                            June: history_arrayA[5],
                            July: history_arrayA[6],
                            August: history_arrayA[7],
                            September: history_arrayA[8],
                            October: history_arrayA[9],
                            November: history_arrayA[10],
                            December: history_arrayA[11]
                        },
                        {
                            Year: s+1,
                            January: history_arrayB[0],
                            February: history_arrayB[1],
                            March: history_arrayB[2],
                            April: history_arrayB[3],
                            May: history_arrayB[4],
                            June: history_arrayB[5],
                            July: history_arrayB[6],
                            August: history_arrayB[7],
                            September: history_arrayB[8],
                            October: history_arrayB[9],
                            November: history_arrayB[10],
                            December: history_arrayB[11]
                        },
                        {
                            Year: s+2,
                            January: history_arrayC[0],
                            February: history_arrayC[1],
                            March: history_arrayC[2],
                            April: history_arrayC[3],
                            May: history_arrayC[4],
                            June: history_arrayC[5],
                            July: history_arrayC[6],
                            August: history_arrayC[7],
                            September: history_arrayC[8],
                            October: history_arrayC[9],
                            November: history_arrayC[10],
                            December: history_arrayC[11]
                        },
                        {
                            Year: s+3,
                            January: history_arrayD[0],
                            February: history_arrayD[1],
                            March: history_arrayD[2],
                            April: history_arrayD[3],
                            May: history_arrayD[4],
                            June: history_arrayD[5],
                            July: history_arrayD[6],
                            August: history_arrayD[7],
                            September: history_arrayD[8],
                            October: history_arrayD[9],
                            November: history_arrayD[10],
                            December: history_arrayD[11]
                        },
                        {
                            Year: s+4,
                            January: history_arrayE[0],
                            February: history_arrayE[1],
                            March: history_arrayE[2],
                            April: history_arrayE[3],
                            May: history_arrayE[4],
                            June: history_arrayE[5],
                            July: history_arrayE[6],
                            August: history_arrayE[7],
                            September: history_arrayE[8],
                            October: history_arrayE[9],
                            November: history_arrayE[10],
                            December: history_arrayE[11]
                        }
                    ];
                    downloadCsv("historical-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_historical_A").innerHTML = "Year " + s;
                document.getElementById("label_historical_B").innerHTML = "Year " + (s+1);
                document.getElementById("label_historical_C").innerHTML = "Year " + (s+2);
                document.getElementById("label_historical_D").innerHTML = "Year " + (s+3);
                document.getElementById("label_historical_E").innerHTML = "Year " + (s+4);

                document.getElementById("detail_A").style.display = "block";
                document.getElementById("detail_B").style.display = "block";
                document.getElementById("detail_C").style.display = "block";
                document.getElementById("detail_D").style.display = "block";
                document.getElementById("detail_E").style.display = "block";

                const hvA = document.getElementById("displayDetail_A");
                const hvB = document.getElementById("displayDetail_B");
                const hvC = document.getElementById("displayDetail_C");
                const hvD = document.getElementById("displayDetail_D");
                const hvE = document.getElementById("displayDetail_E");

                new Chart(hvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayA,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(hvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayB,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });

                new Chart(hvC, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayC,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });

                new Chart(hvD, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayD,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });

                new Chart(hvE, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: history_arrayE,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });
            }
        }

        function CHARTCALCULATOR() {
            var e = document.getElementById("end_input").value;
            var end = document.getElementById("end_input").value;
            e = Number(e);
            end = Number(end);


            if (how_many_years_to_predict == 1) {   // 2 years
                
                ctr =  0;
                forecast_array_A = new Array(12);

                for (let i = 0; i < 12; i++) {
                    forecast_array_A[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: end+1,
                            January: forecast_array_A[0],
                            February: forecast_array_A[1],
                            March: forecast_array_A[2],
                            April: forecast_array_A[3],
                            May: forecast_array_A[4],
                            June: forecast_array_A[5],
                            July: forecast_array_A[6],
                            August: forecast_array_A[7],
                            September: forecast_array_A[8],
                            October: forecast_array_A[9],
                            November: forecast_array_A[10],
                            December: forecast_array_A[11]
                        }
                    ];
                    downloadCsv("forecast-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_future_A").innerHTML = "Year " + (e+1);

                document.getElementById("graph_A").style.display = "block";

                const gvA = document.getElementById("displayChart_A");

                new Chart(gvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: forecast_type,
                        data: forecast_array_A,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 
            } else if (how_many_years_to_predict == 2) {   // 2 years

                ctr =  0;
                forecast_array_A = new Array(12);
                forecast_array_B = new Array(12);

                for (let i = 0; i < 12; i++) {
                    forecast_array_A[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_B[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: end+1,
                            January: forecast_array_A[0],
                            February: forecast_array_A[1],
                            March: forecast_array_A[2],
                            April: forecast_array_A[3],
                            May: forecast_array_A[4],
                            June: forecast_array_A[5],
                            July: forecast_array_A[6],
                            August: forecast_array_A[7],
                            September: forecast_array_A[8],
                            October: forecast_array_A[9],
                            November: forecast_array_A[10],
                            December: forecast_array_A[11]
                        },
                        {
                            Year: end+2,
                            January: forecast_array_B[0],
                            February: forecast_array_B[1],
                            March: forecast_array_B[2],
                            April: forecast_array_B[3],
                            May: forecast_array_B[4],
                            June: forecast_array_B[5],
                            July: forecast_array_B[6],
                            August: forecast_array_B[7],
                            September: forecast_array_B[8],
                            October: forecast_array_B[9],
                            November: forecast_array_B[10],
                            December: forecast_array_B[11]
                        }
                    ];
                    downloadCsv("forecast-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_future_A").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_B").innerHTML = "Year " + (e+1);
                e = e + 1;

                document.getElementById("graph_A").style.display = "block";
                document.getElementById("graph_B").style.display = "block";

                const gvA = document.getElementById("displayChart_A");
                const gvB = document.getElementById("displayChart_B");

                new Chart(gvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_A,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_B,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  


            } else if (how_many_years_to_predict == 3) {

                ctr = 0;
                forecast_array_A = new Array(12);
                forecast_array_B = new Array(12);
                forecast_array_C = new Array(12);

                for (let i = 0; i < 12; i++) {
                    forecast_array_A[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_B[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_C[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: end+1,
                            January: forecast_array_A[0],
                            February: forecast_array_A[1],
                            March: forecast_array_A[2],
                            April: forecast_array_A[3],
                            May: forecast_array_A[4],
                            June: forecast_array_A[5],
                            July: forecast_array_A[6],
                            August: forecast_array_A[7],
                            September: forecast_array_A[8],
                            October: forecast_array_A[9],
                            November: forecast_array_A[10],
                            December: forecast_array_A[11]
                        },
                        {
                            Year: end+2,
                            January: forecast_array_B[0],
                            February: forecast_array_B[1],
                            March: forecast_array_B[2],
                            April: forecast_array_B[3],
                            May: forecast_array_B[4],
                            June: forecast_array_B[5],
                            July: forecast_array_B[6],
                            August: forecast_array_B[7],
                            September: forecast_array_B[8],
                            October: forecast_array_B[9],
                            November: forecast_array_B[10],
                            December: forecast_array_B[11]
                        },
                        {
                            Year: end+3,
                            January: forecast_array_C[0],
                            February: forecast_array_C[1],
                            March: forecast_array_C[2],
                            April: forecast_array_C[3],
                            May: forecast_array_C[4],
                            June: forecast_array_C[5],
                            July: forecast_array_C[6],
                            August: forecast_array_C[7],
                            September: forecast_array_C[8],
                            October: forecast_array_C[9],
                            November: forecast_array_C[10],
                            December: forecast_array_C[11]
                        }
                    ];
                    downloadCsv("forecast-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_future_A").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_B").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_C").innerHTML = "Year " + (e+1);
                e = e + 1;

                document.getElementById("graph_A").style.display = "block";
                document.getElementById("graph_B").style.display = "block";
                document.getElementById("graph_C").style.display = "block";

                const gvA = document.getElementById("displayChart_A");
                const gvB = document.getElementById("displayChart_B");
                const gvC = document.getElementById("displayChart_C");

                new Chart(gvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_A,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_B,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvC, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_C,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

            } else if (how_many_years_to_predict == 4) {

                ctr = 0;
                forecast_array_A = new Array(12);
                forecast_array_B = new Array(12);
                forecast_array_C = new Array(12);
                forecast_array_D = new Array(12);

                for (let i = 0; i < 12; i++) {
                    forecast_array_A[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_B[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_C[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_D[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: end+1,
                            January: forecast_array_A[0],
                            February: forecast_array_A[1],
                            March: forecast_array_A[2],
                            April: forecast_array_A[3],
                            May: forecast_array_A[4],
                            June: forecast_array_A[5],
                            July: forecast_array_A[6],
                            August: forecast_array_A[7],
                            September: forecast_array_A[8],
                            October: forecast_array_A[9],
                            November: forecast_array_A[10],
                            December: forecast_array_A[11]
                        },
                        {
                            Year: end+2,
                            January: forecast_array_B[0],
                            February: forecast_array_B[1],
                            March: forecast_array_B[2],
                            April: forecast_array_B[3],
                            May: forecast_array_B[4],
                            June: forecast_array_B[5],
                            July: forecast_array_B[6],
                            August: forecast_array_B[7],
                            September: forecast_array_B[8],
                            October: forecast_array_B[9],
                            November: forecast_array_B[10],
                            December: forecast_array_B[11]
                        },
                        {
                            Year: end+3,
                            January: forecast_array_C[0],
                            February: forecast_array_C[1],
                            March: forecast_array_C[2],
                            April: forecast_array_C[3],
                            May: forecast_array_C[4],
                            June: forecast_array_C[5],
                            July: forecast_array_C[6],
                            August: forecast_array_C[7],
                            September: forecast_array_C[8],
                            October: forecast_array_C[9],
                            November: forecast_array_C[10],
                            December: forecast_array_C[11]
                        },
                        {
                            Year: end+4,
                            January: forecast_array_D[0],
                            February: forecast_array_D[1],
                            March: forecast_array_D[2],
                            April: forecast_array_D[3],
                            May: forecast_array_D[4],
                            June: forecast_array_D[5],
                            July: forecast_array_D[6],
                            August: forecast_array_D[7],
                            September: forecast_array_D[8],
                            October: forecast_array_D[9],
                            November: forecast_array_D[10],
                            December: forecast_array_D[11]
                        }
                    ];
                    downloadCsv("forecast-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_future_A").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_B").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_C").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_D").innerHTML = "Year " + (e+1);
                e = e + 1;

                document.getElementById("graph_A").style.display = "block";
                document.getElementById("graph_B").style.display = "block";
                document.getElementById("graph_C").style.display = "block";
                document.getElementById("graph_D").style.display = "block";

                const gvA = document.getElementById("displayChart_A");
                const gvB = document.getElementById("displayChart_B");
                const gvC = document.getElementById("displayChart_C");
                const gvD = document.getElementById("displayChart_D");

                new Chart(gvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_A,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_B,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvC, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_C,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(gvD, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_D,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

            } else if (how_many_years_to_predict == 5) {

                ctr = 0;
                forecast_array_A = new Array(12);
                forecast_array_B = new Array(12);
                forecast_array_C = new Array(12);
                forecast_array_D = new Array(12);
                forecast_array_E = new Array(12);

                for (let i = 0; i < 12; i++) {
                    forecast_array_A[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_B[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_C[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_D[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                for (let i = 0; i < 12; i++) {
                    forecast_array_E[i] = future_forecast[ctr];
                    ctr = ctr + 1;
                }

                //-----------------------------------------------------------------------
                const btnDownloadCsv = document.getElementById("btnDownloadCsv");
                btnDownloadCsv.addEventListener("click", () => {
                    const data = [
                        {
                            Year: end+1,
                            January: forecast_array_A[0],
                            February: forecast_array_A[1],
                            March: forecast_array_A[2],
                            April: forecast_array_A[3],
                            May: forecast_array_A[4],
                            June: forecast_array_A[5],
                            July: forecast_array_A[6],
                            August: forecast_array_A[7],
                            September: forecast_array_A[8],
                            October: forecast_array_A[9],
                            November: forecast_array_A[10],
                            December: forecast_array_A[11]
                        },
                        {
                            Year: end+2,
                            January: forecast_array_B[0],
                            February: forecast_array_B[1],
                            March: forecast_array_B[2],
                            April: forecast_array_B[3],
                            May: forecast_array_B[4],
                            June: forecast_array_B[5],
                            July: forecast_array_B[6],
                            August: forecast_array_B[7],
                            September: forecast_array_B[8],
                            October: forecast_array_B[9],
                            November: forecast_array_B[10],
                            December: forecast_array_B[11]
                        },
                        {
                            Year: end+3,
                            January: forecast_array_C[0],
                            February: forecast_array_C[1],
                            March: forecast_array_C[2],
                            April: forecast_array_C[3],
                            May: forecast_array_C[4],
                            June: forecast_array_C[5],
                            July: forecast_array_C[6],
                            August: forecast_array_C[7],
                            September: forecast_array_C[8],
                            October: forecast_array_C[9],
                            November: forecast_array_C[10],
                            December: forecast_array_C[11]
                        },
                        {
                            Year: end+4,
                            January: forecast_array_D[0],
                            February: forecast_array_D[1],
                            March: forecast_array_D[2],
                            April: forecast_array_D[3],
                            May: forecast_array_D[4],
                            June: forecast_array_D[5],
                            July: forecast_array_D[6],
                            August: forecast_array_D[7],
                            September: forecast_array_D[8],
                            October: forecast_array_D[9],
                            November: forecast_array_D[10],
                            December: forecast_array_D[11]
                        },
                        {
                            Year: end+5,
                            January: forecast_array_E[0],
                            February: forecast_array_E[1],
                            March: forecast_array_E[2],
                            April: forecast_array_E[3],
                            May: forecast_array_E[4],
                            June: forecast_array_E[5],
                            July: forecast_array_E[6],
                            August: forecast_array_E[7],
                            September: forecast_array_E[8],
                            October: forecast_array_E[9],
                            November: forecast_array_E[10],
                            December: forecast_array_E[11]
                        }
                    ];
                    downloadCsv("forecast-data.csv", json2csv.parse(data, {
                        header: true
                    }));
                });
                //-----------------------------------------------------------------------

                document.getElementById("label_future_A").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_B").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_C").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_D").innerHTML = "Year " + (e+1);
                e = e + 1;
                document.getElementById("label_future_E").innerHTML = "Year " + (e+1);
                e = e + 1;
                
                document.getElementById("graph_A").style.display = "block";
                document.getElementById("graph_B").style.display = "block";
                document.getElementById("graph_C").style.display = "block";
                document.getElementById("graph_D").style.display = "block";
                document.getElementById("graph_E").style.display = "block";

                const gvA = document.getElementById("displayChart_A");
                const gvB = document.getElementById("displayChart_B");
                const gvC = document.getElementById("displayChart_C");
                const gvD = document.getElementById("displayChart_D");
                const gvE = document.getElementById("displayChart_E");

                new Chart(gvA, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_A,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvB, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_B,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                });  

                new Chart(gvC, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_C,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(gvD, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_D,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 

                new Chart(gvE, {
                    type: 'bar',
                    data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: "Water Usage",
                        data: forecast_array_E,
                        borderWidth: 1
                    }]
                    },
                    options: {
                    scales: {
                        y: {
                        beginAtZero: true
                        }
                    }
                    }
                }); 


            }
        }

        function MOVING_AVERAGE() {
            ctr = 0;
            for (let i = 0; i < total_months - 1; i++) {
                if (ctr == total_months) {
                    break;
                } else {
                    ma_values[ctr] = (dataset[i] + (dataset[i+1])) / ma_divisor;
                    ctr = ctr + 1;
                }
            }
            console.log("Moving Average Values: " + ma_values);
        }


        function CENTERED_MOVING_AVERAGE() {
            ctr = 0;
            for (let i = 0; i < total_months - 2; i++) {
                if (ctr == total_months - 1) {
                    break;
                } else {
                    cma_values[ctr] = (ma_values[i] + (ma_values[i+1])) / ma_divisor;
                    ctr = ctr + 1;
                }
            }
            console.log("Centered Moving Average Values: " + cma_values);
        }


        function INTEGRATED() {
            ctr = 0;
            for (let i = 0; i < total_months - 2; i++) {
                integrated_values[ctr] = dataset[i] / cma_values[i];
                ctr = ctr + 1;
            }
            console.log("Integrated Values: " + integrated_values);
        }


        function SEASONALITY() {
            n = 11;
            ctr = 0;

            if (ma_divisor == 2) {
                // console.log(integrated_values.length);
                for (let i = 0; i < 12; i++) {
                    quarter[ctr] = (integrated_values[ctr] + integrated_values[n+1]) / ma_divisor;
                    n = n + 1;
                    ctr = ctr + 1;
                    if ((n + 1) == 22) {
                        break;
                    }
                }
                quarter[10] = integrated_values[10];
                quarter[11] = integrated_values[11];
                console.log("Seasonal Quarters: " + quarter);

            } else if (ma_divisor == 3) {
                for (let i = 0; i < 12; i++) {
                    quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11]) / ma_divisor;
                    n = n + 1;
                    ctr = ctr + 1;
                    if ((n + 1) == 34) {
                        break;
                    }
                }
                console.log("Seasonal Quarters: " + quarter);

            } else if (ma_divisor == 4) {
                for (let i = 0; i < 12; i++) {
                    quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11] + integrated_values[n + 21]) / ma_divisor;
                    n = n + 1;
                    ctr = ctr + 1;
                }
                console.log("Seasonal Quarters: " + quarter);

            } else if (ma_divisor == 5) {
                for (let i = 0; i < 12; i++) {
                    quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11] + integrated_values[n + 21] + integrated_values[n + 31]) / ma_divisor;
                    n = n + 1;
                    ctr = ctr + 1;
                }
                console.log("Seasonal Quarters: " + quarter);

            } else if (ma_divisor == 6) {
                for (let i = 0; i < 12; i++) {
                    quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11] + integrated_values[n + 21] + integrated_values[n + 31] + integrated_values[n + 41]) / ma_divisor;
                    n = n + 1;
                    ctr = ctr + 1;
                }
                console.log("Seasonal Quarters: " + quarter);

            }
        }


        function SEASONAL() {
            ctr = 0;
            n = 0;

            for (let i = 0; i < dataset.length; i++) {
                seasonal_values[ctr] = i / quarter[n];
                if (n % 12 == 0) {
                    n = 0;
                    ctr = ctr + 1;
                } else {
                    n = n + 1;
                    ctr = ctr + 1;
                }
            }
            console.log(dataset.length);
            console.log("Seasonal Values: " + seasonal_values);
        }


        function REGRESSION_TREND() {
            time = 1;
            deseasonal = new Array(dataset.length);

            var xx = new Array(total_months);
            var xy = new Array(total_months);
            var yy = new Array(total_months);
            
            for (let i = 0; i < dataset.length; i++) {
                deseasonal[i] = dataset[i];
            }
            
            for (let i = 0; i < total_months; i++) {
                xy[i] = time * deseasonal[i];
                xx[i] = Math.pow(time, 2);
                yy[i] = Math.pow(deseasonal[i], 2);
                time = time + 1;

            }
            
            // console.log("Hello: " + deseasonal);
            time_ctr = 0;
            deseasonal_ctr = 0;
            xx_ctr = 0;
            xy_ctr = 0;
            yy_ctr = 0;
            time = 1;
            
            for (let i = 0; i < total_months; i++) {
                time_ctr = time_ctr + time;
                time = time + 1;

                deseasonal_ctr = deseasonal_ctr + deseasonal[i];
                xy_ctr = xy_ctr + xy[i];
                xx_ctr = xx_ctr + xx[i];
                yy_ctr = yy_ctr + yy[i];
            }

            var n = time - 1;

            varA = ((n * xy_ctr) - (time_ctr * deseasonal_ctr)) / ((n *xx_ctr) - (Math.pow(time_ctr, 2)));
            console.log("Total A: " + varA);
            varB = ((deseasonal_ctr * xx_ctr) - (time_ctr * xy_ctr)) / ((n * xx_ctr) - (Math.pow(time_ctr, 2)));
            console.log("Total B: " + varB);
            console.log(deseasonal);
            console.log("Time: " + time_ctr);
            console.log("Deseasonalize: " + deseasonal_ctr);
            console.log("XY: " + xy_ctr);
            console.log("X^2: " + xx_ctr);
            console.log("Y^2: " + yy_ctr);
        }


        function FORECAST() {
            
            time = 1;
            xy = new Array(total_months);
            xx = new Array(total_months);
            yy = new Array(total_months);

            for (let i = 0; i < total_months.length; i++) {
                deseasonal[i] = dataset[i];
                xy[i] = time * deseasonal[i];
                xx[i] = Math.pow(time, 2);
                yy[i] = Math.pow(deseasonal[i], 2);
                time = time + 1;
            }
            time_ctr = 0;
            deseasonal_ctr = 0;
            xy_ctr = 0;
            xx_ctr = 0;
            yy_ctr = 0;
            time = 1;

            for (let i = 0; i < total_months.length; i++) {
                time_ctr = time_ctr + time;
                time = time + 1;
                deseasonal_ctr = deseasonal_ctr + deseasonal[i];
                xy_ctr = xy_ctr + xy[i];
                xx_ctr = xx_ctr + xx[i];
                yy_ctr = yy_ctr + yy[i];
            }

            for (let i = 0; i < total_months; i++) {
                historical_forecast[i] = dataset[i];
            }
            console.log("Historical Forecast: " + historical_forecast);
           
            // Future Forecast Data

            current_time = 12 * (range_of_year + 1);
            counter = current_time;
            // console.log("Future Quarterly: quarter");
            for (let i = 0; i < total_number_of_years_to_predict; i++) {
                future_regression[i] = (varB + (varA * counter));
                counter = counter + 1;
            }

            ctr = 1;
            for (let i = 0; i < total_number_of_years_to_predict; i++) {
                future_forecast[i] = quarter[ctr] * future_regression[i];
                ctr = ctr + 1;
                if (ctr == 12) {
                    ctr = 1;
                }
            }
            console.log(future_forecast.length);

            console.log("Future Forecast: " + future_forecast);
            console.log(future_forecast.length);
            console.log(future_forecast.length);
            console.log(future_forecast.length);
            
            /*
            Start of Construction relating in compiling both historical and future forecast as one
            */
            
            ctr = 0;
            if (historical_forecast.length == 24 && future_forecast.length == 12) {   // 2 year historical & 1 year future forecast
                compile_forecast = new Array(36);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
                console.log("kadgjkagdkjakjdgada: " + compile_forecast);
            } else if (historical_forecast.length == 24 && future_forecast.length == 24) {
                compile_forecast = new Array(48);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 24 && future_forecast.length == 36) {
                compile_forecast = new Array(60);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 24 && future_forecast.length == 48) {
                compile_forecast = new Array(72);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 24 && future_forecast.length == 60) {
                compile_forecast = new Array(84);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 36 && future_forecast.length == 12) {   // 3 year historical & 1 year future forecast
                compile_forecast = new Array(48);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 36 && future_forecast.length == 24) {
                compile_forecast = new Array(60);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 36 && future_forecast.length == 36) {
                compile_forecast = new Array(72);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 36 && future_forecast.length == 48) {
                compile_forecast = new Array(84);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 36 && future_forecast.length == 60) {
                compile_forecast = new Array(96);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 48 && future_forecast.length == 12) {   // 4 year historical & 1 year future forecast
                compile_forecast = new Array(60);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 48 && future_forecast.length == 24) {
                compile_forecast = new Array(72);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 48 && future_forecast.length == 36) {
                compile_forecast = new Array(84);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 48 && future_forecast.length == 48) {
                compile_forecast = new Array(96);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 48 && future_forecast.length == 60) {
                compile_forecast = new Array(108);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 60 && future_forecast.length == 12) {   // 5 year historical & 1 year future forecast
                compile_forecast = new Array(72);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 60 && future_forecast.length == 24) {
                compile_forecast = new Array(84);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 60 && future_forecast.length == 36) {
                compile_forecast = new Array(96);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 60 && future_forecast.length == 48) {
                compile_forecast = new Array(108);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } else if (historical_forecast.length == 60 && future_forecast.length == 60) {
                compile_forecast = new Array(120);
                for(let i = 0; i < historical_forecast.length; i++) {
                    compile_forecast[ctr] = historical_forecast[i];
                    ctr = ctr + 1;
                }
                for(let i = 0; i < future_forecast.length; i++) {
                    compile_forecast[ctr] = future_forecast[i];
                    ctr = ctr + 1;
                }
            } 
        }

        if (range_of_year <= 0) {

            console.log("Data provided is not Necessary or Insufficient to forecast!");

        } else if (range_of_year == 1) {
            
            cma_values = new Array(22);
            ma_values = new Array(23);
            integrated_values = new Array(22);
            seasonal_values = new Array(24);
            
            /*
            dataset = [4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3];
            */

            dataset = new Array(24);
            var a = 1;
            var connect = "_";
            var b = 1;
            var converted_variable;

            for(let i = 0; i < 24; i++) {
                a = a.toString();
                b = b.toString();
                converted_variable = a + connect + b;

                dataset[i] = document.getElementById(converted_variable).value;
                dataset[i] = Number(dataset[i]);

                console.log(dataset[i]);
                a = Number(a);
                b = Number(b);

                b = b + 1;

                if (b == 13) {
                    b = 1;
                    a = a + 1;
                }

            }

            console.log("ORIGINAL DATASET: " + dataset);
            ARIMA();

        } else if (range_of_year == 2) {

            var cma_values = new Array(34);
            var ma_values = new Array(35);
            var integrated_values = new Array(34);
            var seasonal_values = new Array(36);

            /*
            var dataset = [4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3,
                        4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 1.8, 7.4, 6.0, 3.3, 7.5, 2.3];
            */

            dataset = new Array(36);
            var a = 1;
            var connect = "_";
            var b = 1;
            var converted_variable;

            for(let i = 0; i < 36; i++) {
                a = a.toString();
                b = b.toString();
                converted_variable = a + connect + b;

                dataset[i] = document.getElementById(converted_variable).value;
                dataset[i] = Number(dataset[i]);

                console.log(dataset[i]);
                a = Number(a);
                b = Number(b);

                b = b + 1;

                if (b == 13) {
                    b = 1;
                    a = a + 1;
                }

            }

            console.log("ORIGINAL DATASET: " + dataset);
            ARIMA();

        } else if (range_of_year == 3) {

            var cma_values = new Array(46);
            var ma_values = new Array(47);
            var integrated_values = new Array(46);
            var seasonal_values = new Array(48);

            /*
            var dataset = [4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3,
                        4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3];
            */

            dataset = new Array(48);
            var a = 1;
            var connect = "_";
            var b = 1;
            var converted_variable;

            for(let i = 0; i < 48; i++) {
                a = a.toString();
                b = b.toString();
                converted_variable = a + connect + b;

                dataset[i] = document.getElementById(converted_variable).value;
                dataset[i] = Number(dataset[i]);

                console.log(dataset[i]);
                a = Number(a);
                b = Number(b);

                b = b + 1;

                if (b == 13) {
                    b = 1;
                    a = a + 1;
                }

            }

            console.log("ORIGINAL DATASET: " + dataset);
            ARIMA();

        } else if (range_of_year == 4) {

            var cma_values = new Array(58);
            var ma_values = new Array(59);
            var integrated_values = new Array(58);
            var seasonal_values = new Array(60);

            /*
            var dataset = [4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3,
                        4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3,
                        4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8];
            */

            dataset = new Array(60);
            var a = 1;
            var connect = "_";
            var b = 1;
            var converted_variable;

            for(let i = 0; i < 60; i++) {
                a = a.toString();
                b = b.toString();
                converted_variable = a + connect + b;

                dataset[i] = document.getElementById(converted_variable).value;
                dataset[i] = Number(dataset[i]);

                console.log(dataset[i]);
                a = Number(a);
                b = Number(b);

                b = b + 1;

                if (b == 13) {
                    b = 1;
                    a = a + 1;
                }

            }

            console.log("ORIGINAL DATASET: " + dataset);
            ARIMA();

        } else if (range_of_year == 5) {
            
            var cma_values = new Array(70);
            var ma_values = new Array(71);
            var integrated_values = new Array(70);
            var seasonal_values = new Array(72);

            /*
            var dataset = [4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3,
                        4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3,
                        4.8, 4.1, 6.0, 6.5, 5.8, 5.2, 6.8, 7.4, 6.0, 5.6, 7.5, 7.8,
                        6.3, 5.9, 8.0, 8.4, 4.8, 4.3, 5.3, 6.1, 5.9, 5.5, 6.7, 7.3];
            */

            dataset = new Array(72);
            var a = 1;
            var connect = "_";
            var b = 1;
            var converted_variable;

            for(let i = 0; i < 72; i++) {
                a = a.toString();
                b = b.toString();
                converted_variable = a + connect + b;

                dataset[i] = document.getElementById(converted_variable).value;
                dataset[i] = Number(dataset[i]);

                console.log(dataset[i]);
                a = Number(a);
                b = Number(b);

                b = b + 1;

                if (b == 13) {
                    b = 1;
                    a = a + 1;
                }

            }

            console.log("ORIGINAL DATASET: " + dataset);
            ARIMA();

        }
    }
    
}