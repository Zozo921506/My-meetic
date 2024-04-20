$(document).ready(function(){
    $("#menu > ul > li").hover(
        function() 
        {
            var url = $(this).find("a").attr("href");
            var target = $(this).find("ul");
            if (target.children().length === 0) 
            {
                $.ajax({
                    url: url,
                    type: "GET",
                    beforeSend: function() 
                    {
                        target.html('<li class="loading">Chargement en cours...</li>');
                    },
                    success: function(data) 
                    {
                        target.html(data);
                        target.slideDown('fast');
                    },
                    error: function() 
                    {
                        target.html('<li class="error">Une erreur s\'est produite lors du chargement du contenu.</li>');
                    }
                });
            } 
            else 
            {
                target.slideDown('fast');
            }
        },
        function() 
        {
            $(this).find("ul").slideUp('fast');
        }
    );

    $("#menu ul li ul").hover(
        function() 
        {
            $(this).stop(true, true).slideDown('fast');
        },
        function() 
        {
            $(this).stop(true, true).slideUp('fast');
        }
    );
});