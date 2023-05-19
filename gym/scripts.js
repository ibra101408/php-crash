/*$(document).ready(function(){
    $('.button-56').on('change', function() {
        if($('.package').is(':checked')){
            console.log("checked");
        } else {
            console.log("checked");
        }
    });
});*/

$('.package').click(function() {
    if($('.control').is(':checked')) { 
        $('.button-56').removeAttr('disabled');
    }
    else{
      $('#button-56').attr('disabled','disabled');
    }
 });

var value = {};
$('#muscle_options').change(function(){
    $('.dropdown-open').text($(this).find('option:selected').text());
    // console.log(option);
    var e = document.getElementById("muscle_options");
    value = e.value;
    
    callAjax();
});

var return_first; 

function changeContent(){
    var x=document.getElementById('memberList').rows
    var y=x[3].cells
    y[3].innerHTML="";
}
function callback(response) { //get data from callAjax(); 
    return_first = response; //delete "return_first"?
    
    const json = return_first;
    
    parseJSON(json);

    function parseJSON(string){
        var result_of_parsing_json = JSON.parse(string);
        document.body.appendChild(
            document.createTextNode(result_of_parsing_json[0]["name"])
        );

        var cols = ['name', 'type', 'muscle', 'equipment', 'difficulty', 'instructions'];
        let blockTable = document.querySelector('.table');

        console.log(result_of_parsing_json[0]["name"]);
        $(".table1 tr").remove(); 

        for (var i = 0; i < result_of_parsing_json.length; i++) {
            $('.table1').append('<tr></tr>');
                for (var j = 0; j < cols.length; j++) {
                    console.log(result_of_parsing_json[i][cols[j]]);
                    // console.log(Object.values(value['name']));
                    $('.table1 tr:last-child').append('<td>' + result_of_parsing_json[i][cols[j]] + '</td>');
                    
                        const table = document.querySelector('table');
                        const cells = table.querySelectorAll('td');
                        cells.forEach(function(cell) {
                            var text = cell.textContent;
                            var maxLength = 50; // set the maximum length of the text you want to display
                            //var rm = "... Read More";
                            var load_rm = document.getElementById("read_more");
                            var textRM = load_rm.textContent;
                            

                            var elem = $("<div>").text(textRM);

                            if (text.length > maxLength) {
                                var truncatedText = text.substr(0, maxLength - 13) + textRM; // truncate the text and add ellipses
                                cell.textContent = truncatedText;
    
                                //rm.addEventListener('click', function() {
                                elem.on("click", function(){
                                console.log("RRRRMMMM" + elem);
                                
                                if (cell.textContent === truncatedText) {
                                    cell.textContent = text; // load remaining text
                                } else {
                                    cell.textContent = truncatedText; // возвращаем сокращенный текст
                                }
                                });
                               

                            }
                            });


                        /*cells.forEach(cell => {
                            if (cell.textContent.length > 50) {
                                cell.style.backgroundColor = 'green';
                            } else{

                            }
                        });*/


                }
            }
     } 
   /* const obj = JSON.parse(json, (key, value) => {
        console.log("key: " + key);
        console.log("val: " + value);
        
        return value;
    });*/
   // console.log("obj: " + typeof obj);

   // document.getElementById("demo").innerText = response;
    //console.log("return_first" + return_first);
    //console.log(typeof return_first);
    //var cols = ['name'];
    //console.log("ret_f" + return_first['name']);


     /*for (var i = 0; i < obj.length; i++) {
        $('table').append('<tr></tr>');
            for (var j = 0; j < cols.length; j++) {
                console.log(return_first[i][cols[j]]);
                // console.log(Object.values(value['name']));
                        $('table tr:last-child').append('<td>' + return_first[i][cols[j]] + '</td>');
            }
        } */
    };

function callAjax(){   
    console.log("value iiin : " + value);
    
    let muscle = 'biceps';
    $.ajax({
        method: 'GET',
        async: false,
        global: false,
        dataType: 'html',
        url: 'https://api.api-ninjas.com/v1/exercises?muscle=' + value,
        headers: { 'X-Api-Key': 'eUyUPP4L6s2p2xBq3dBpbw==08ZovfF2SOT3yHdr'},
        contentType: 'application/json',
        success: function(result) {
            //console.log(result);
           /* const json = result;
            const obj = JSON.parse(json, (key, value) => {
                console.log("key: " + key);
                console.log("val: " + value);
                
                return value;
            });*/
            callback(result);

           // const childCount = document.querySelector('#memberList td:nth-child(6)');
           // console.log("HHHHHHHHHHHHHHHHHH" + childCount );
            
        },
        
        error: function ajaxError(jqXHR) {
            console.error('Error: ', jqXHR.responseText);
        }
    });
}




//APi https://api-ninjas.com/api/exercises


/*[{"name": "Incline Hammer Curls", "type": "strength", 
"muscle": "biceps", "equipment": "dumbbell", "difficulty":
 "beginner", "instructions": "Seat yourself on an incline
  bench with a dumbbell in each hand. You should pressed firmly
   against he back with your feet together. Allow the dumbbells to
    hang straight down at your side, holding them with a neutral grip. 
    This will be your starting position. Initiate the movement by flexing
     at the elbow, attempting to keep the upper arm stationary. Continue to
      the top of the movement and pause, then slowly return to the start 
      position."}, {"name": "Wide-grip barbell curl", "type": "strength", 
      "muscle": "biceps", "equipment": "barbell", "difficulty": "beginner", 
      "instructions": "Stand up with your torso upright while holding a
       barbell at the wide outer handle. The palm of your hands should be 
       facing forward. The elbows should be close to the torso*/






