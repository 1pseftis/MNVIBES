<script>
function stuff_init() {
  $.ajax({
        url: "/modules/stuff/index.php",
        success: function(content){
            $("#stuff").html(content);
        }
    });
}
</script>
<style>
    .filling_app_header a {
        float: right;
        display: inline-block;
        font-size: 16px;
        color: #4096e6 !important;
        text-decoration: underline;
        font-family: 'FSElliotPro-Bold';
    }

    .filling_app_header a:hover {
        text-decoration: none;
    }

    .moderator_icon {
        min-width: 188px;
        max-width: 188px;
        max-height: 188px;
        min-height: 188px;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        margin-right: 14px;
        margin-bottom: 14px;
    }

    .moderator_icon img {
        margin: 52px 0px 8px 0px;
        display: inline-block !important;
    }

    .moderator_icon .avatar_round {
        border-radius: 50%;
        width: 120px;
    }

    .moderator_icon p {
        color: #ffffff;
        font-size: 16px;
    }

    .moderator_icon span {
        font-size: 21px;
        font-family: 'FSElliotPro-Heavy';
        color: #ffffff;
    }

    .admin_icon {
        min-width: 200px;
        max-width: 200px;
        max-height: 200px;
        min-height: 200px;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        margin-right: 14px;
        margin-bottom: 14px;
    }

    .admin_icon img {
        margin: 24px 0px 6px 0px;
        display: inline-block !important;
    }

    .admin_icon .avatar_round {
        border-radius: 50%;
        width: auto;
        height: 82px;
    }

    .admin_icon p {
        color: #ffffff;
        font-size: 16px;
        max-width: 200px;
        margin: 0 auto;
    }

    .admin_icon span {
        font-size: 21px;
        font-family: 'FSElliotPro-Heavy';
        color: #ffffff;
    }

    .admins_two_step .admin_icon {
        min-width: 206px;
        max-width: 206px;
        max-height: 206px;
        min-height: 206px;
    }

    .admins_two_step .admin_icon .avatar_round {
        width: 70px;
        height: 70px;
    }

    .admins_two_step .admin_icon p {
        color: #ffffff;
        font-size: 16px;
        max-width: 200px;
        margin: 0 auto;
    }

</style>
<div id='stuff'>
Загрузка...
</div>
<script>
stuff_init();
</script>