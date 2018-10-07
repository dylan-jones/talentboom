$(document).ready(function(){

    var jobform = $(".job-search-bar"); 
    var form = jobform.find("form");

    form.submit(function(e){
        e.preventDefault();

        if(form.find('#jobDuration').val().length !== 0) {
            var jobduration = form.find('#jobDuration').val();
            console.log('found duration');
        }

        if(form.find('#jobLocation').val().length !== 0) {
            var joblocation = form.find('#jobLocation').val();
            console.log('found location');
        }

        if(form.find('#jobTitle').val().length !== 0) {
            var jobtitle = form.find('#jobTitle').val();
            console.log('found title');
        }

        $.ajax({
            type:"POST",
            url: "./wp-admin/admin-ajax.php",
            data: {
                action: 'tb_job_search', 
                jobduration : jobduration,
                joblocation : joblocation,
                jobtitle : jobtitle
            },
            beforeSend:function(response){
                $('.form-results').addClass('in-progress');
            },
            /*success:function(response){
                $('#results').append('response');
                $('.form-results').addClass('is-active');
                $('.form-results').removeClass('in-progress');
                console.log('success');
            }*/
            success : function(response) {
                jobform.find("#results").empty();
                if(response) {
                    for(var i = 0 ;  i < response.length ; i++) {
                         var html  = "<div id='poste-" + response[i].id + "' class='result-box'>";
                             html += "  <h4>" + response[i].title + "</h4>";
                             html += "  <div class='company-name'>" + response[i].companyname + "</div>";
                             html += "  <div class='location'>" + response[i].location + "</div>";
                             html += "  <a href='mailto:" + response[i].enquire + "' class='btn btn-outline'>Enquire</a>";
                             html += "</div>";
                         jobform.find("#results").append(html);
                    }
                    console.log('success');
                } else {
                    var html  = "<li class='no-result'>No matching movies found. Try a different filter or search keyword</li>";
                    jobform.find("ul").append(html);
                }
            }
        });
    });
});