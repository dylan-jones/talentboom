$(document).ready(function(){

    var jobform = $(".job-search-bar"); 
    var form = jobform.find("form");

    form.submit(function(e){
        e.preventDefault();

        if(form.find('#duration').val().length !== 0) {
            var duration = form.find('#duration').val();
            console.log('found duration');
        }

        if(form.find('#location').val().length !== 0) {
            var location = form.find('#location').val();
            console.log('found location');
        }

        if(form.find('#search').val().length !== 0) {
            var search = form.find('#search').val();
            console.log('found title');
        }

        var data = {
            action: 'tb_job_search', 
            duration : duration,
            location : location,
            search : search
        }

        $.ajax({
            type: "POST",
            url: "./wp-admin/admin-ajax.php",
            data: data,
            beforeSend:function(response){
                $('.form-results').addClass('in-progress');
                jobform.find("#results").empty().append('<div class="loader"></div>');
            },
            success : function(response) {
                jobform.find("#results").empty();
                if(response) {
                    for(var i = 0 ;  i < response.length ; i++) {
                         var html  = "<div id='post-" + response[i].id + "' class='result-box'>";
                             html += "  <h4>" + response[i].title + "</h4>";
                             html += "  <div class='company-name'>" + response[i].companyname + "</div>";
                             html += "  <div class='location'>" + response[i].location + "</div>";
                             html += "  <a href='mailto:hello@thetalentboom.com?subject=" + response[i].title + " Enquiry' class='btn btn-outline'>Enquire</a>";
                             html += "</div>";
                         jobform.find("#results").append(html);
                    }
                    console.log('success');
                } else {
                    var html  = "No matching jobs found.";
                    jobform.find("#results").append(html);
                }
            },
            fail: function(xhr, textStatus, errorThrown){
                var html  = "Error";
                jobform.find("#results").append(html);
            }
        });
    });
});