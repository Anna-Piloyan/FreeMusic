    <div class="page-buffer"></div>
    </div>
    <footer id="footer" class="page-footer">

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017</p>
                    <p class="pull-right">Admin</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="/template/js/jquery.js"></script>
    <script src="/template/js/jquery.cycle2.min.js"></script>
    <script src="/template/js/jquery.cycle2.carousel.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/jquery.scrollUp.min.js"></script>
    <script src="/template/js/price-range.js"></script>
    <script src="/template/js/jquery.prettyPhoto.js"></script>
    <script src="/template/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $(".add-to-cart").click(function() {
                var id = $(this).attr("data-id");
                $.post("/playlist/addAjax/" + id, {}, function(data) {
                    $("#cart-count").html(data);
                });
                return false;
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        console.log(e.target.result)
                        $('#imgUpdate').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
            $("#imgInp").change(function() {
                readURL(this);
            });
           

        });
    </script>
    </body>

    </html>