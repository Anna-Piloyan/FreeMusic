<footer id="footer">

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2017</p>
            </div>
        </div>
    </div>
</footer>
<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script src="/template/js/script.js"></script>
<script src="audioplayer.js"></script>
<script>
    $(document).ready(function() {
        $(".add-to-cart").click(function() {
            var id = $(this).attr("data-id");
            $.post("/playlist/addAjax/" + id, {}, function(data) {
                $("#cart-count").html(data);
            });
            return false;
        });
        var audio = new Audio();
        var canPlayOgg = !!audio.canPlayType &&
            audio.canPlayType('audio/ogg; codecs="vorbis"') != "";
    });
</script>
</body>

</html>