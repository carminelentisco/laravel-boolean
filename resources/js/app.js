require('./bootstrap');

$(document).ready(function() {
   // console.log('si');

    //setup 
    var container = $('.students');
    var filter = $('#filter'); 
    var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';

    var source = $('#student-template').html();
    var template = Handlebars.compile(source);

    filter.on('change', function(){
        var gender = $(this).val();

        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: gender
            }
        })
        .done(function(res){
            console.log(res);
            if (res.response.length > 0) {

                container.html(' ')

                for (var i = 0; i < res.response.length; i++) {
                    
                    var student = res.response[i];

                    var context = {
                        slug: student.slug,
                        img : student.img,
                        nome: student.nome,
                        cognome: student.cognome,
                        età: student.età,
                        genere: (student.genere == 'm') ? 'o' : 'a', 
                        azienda: student.azienda,
                        ruolo: student.ruolo,
                        descrizione: student.descrizione
                    }

                    var output = template(context)
                    container.append(output)
                    console.log(output);

                    
                }
            } else {
                console.log(res.error)
            }
        })
        .fail(function () {
            console.log('API error')
        })
    });
});