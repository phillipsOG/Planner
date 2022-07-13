require('./bootstrap');

$(document).ready(function() {

    $("#plannerAdd").click(function() {
        console.log("new planned idea");
        let userIdea = $('#plan-user-data').val();
        console.log(userIdea);
        //$("#plan-data").append(userIdea + "<br>");
        $.ajax({
            type: "GET",
            url: "/addToPlanner",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {"plan-idea": userIdea},
            success: function(data) {
                console.log("Successfully added " + data.toString());
                //window.location.href = "/addToPlanner?;
            }
        })
    });
});
