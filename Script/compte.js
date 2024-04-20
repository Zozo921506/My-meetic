$(document).ready(function() 
{
    $("#email").submit(function(event) 
    {
        event.preventDefault();
        let emailValue = $("#new_email").val();
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(emailValue)) 
        {
            console.error("Adresse e-mail invalide");
            return;
        }

        let formData = $(this).serialize();
        $.ajax(
        {
            url: "../Controller/compte_controller.php",
            method: "POST",
            data: formData,
            dataType: "json",
            success: function(response) 
            {
                console.log(response);
                if (response.success) 
                {
                    alert("Votre addresse mail à été modifié avec succès")
                    window.location.href = "connexion.html";
                } 
                else 
                {
                    console.error(response.message);
                }
            },
            error: function(error) 
            {
                console.error(error);
            }
        });
    });

    $("#new_password").submit(function(event) 
    {
        event.preventDefault();
        let formData = $(this).serialize();
        $.ajax(
        {
            url: "../Controller/compte_controller_password.php",
            method: "POST",
            data: formData,
            dataType: "json",
            success: function(response) 
            {
                console.log(response);
                if (response.success) 
                {
                    alert("Votre mot de passe à été modifié avec succès");
                    window.location.href = "connexion.html";
                } 
                else 
                {
                    console.error(response.message);
                }
            },
            error: function(error) 
            {
                console.error(error);
            }
        });
    });
});