<?php
require "header.php";
?>



<div class="search">
    <section class="container search_section">

        <form action="" role="searchs_form" id="searchForm">
            <div class="search_img col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up">
                <img src="img/search_logo.png" alt="Search Bar for Social media">
            </div>

            <div class="row search_container">

                <div class="search_ico col-lg-1 col-md-1 col-sm-1 col-1">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search_box  col-lg-9 col-md-9 col-sm-8 col-8">
                    <input type="search" class="col-12 col-lg-12 col-md-12 col-sm-12" class="form-control"
                        id="searchInput" aria-label="Search">
                </div>
                <div class="search_menu col-lg-2 col-md-2 col-sm-3 col-3">
                    <i class="fa-solid fa-keyboard"></i>
                    <i class="fa-solid fa-microphone"></i>
                    <i class="fa-solid fa-camera"></i>
                </div>

            </div>

            <div class="search_choose col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="choose_box">
                        <span>Google Search</span>
                    </div>
                    <div class="choose_box ">
                        <span>I'm Feeling Lucky</span>
                    </div>
                </div>
            </div>
            <div class="choose_offered col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <span>Google Offered in: <a href="">ภาษาไทย</a> </span>
                </div>
            </div>
        </form>

        <div id="searchResults">

        </div>
    </section>
</div>



<script>
$(document).ready(function() {
    $('#searchForm').submit(function() {
        event.preventDefault();
        var searchTerm = $('#searchInput').val();
        searchGoogle(searchTerm);
    });

    function searchGoogle(searchTerm) {
        var url =
            'https://www.googleapis.com/customsearch/v1?key=AIzaSyCNZMj9bWNZkY1aNLPXoY9ULxSYTuR9MzE&cx=d76cb9a21982f40fc&q=' +
            searchTerm;
        $.get(url, function(data) {
            var results = data.items;
            var j = 1;
            var output = '<ul>';
            $.each(results, function(index, result) {
                output += '<li><span>' + j++ + '.&ensp;</span><a href=" ' + result.link +
                    ' ">' +
                    result.title + '</a></li>';
            });
            output += '</ul>';
            $('#searchResults').html(output);
        });
    }
});
</script>

<?php
require "footer.php";
?>