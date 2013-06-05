<!-- PHP script that captures list of users followed on Instagram for a particular account -->

<?php
$user_id = "***********"; //Instagram User ID (numeric)
$num_to_display = "50";
$access_token = "*************************"
?>

<style>
.instagram-placeholder {
display: inline-block;
}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div class="instagram"></div>
<script>

$(function() {
    $.ajax({
      type: "GET",
        dataType: "jsonp",
        cache: false,
        url: "https://api.instagram.com/v1/users/<?=$user_id?>/follows?access_token=<?=$access_token?>",
        success: function(data) {
            for (var i = 0; i < <?=$num_to_display?>; i++) {
               $(".instagram").append("<p>" + (i+1) + " " + data.data[i].username + "</p>");
            }
        }
    });
});
</script>