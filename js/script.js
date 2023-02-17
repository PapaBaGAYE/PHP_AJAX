$('document').ready(function(){
    $('#submit').click(function(){
        var name = $("#name").val();
        var adress = $("#adress").val();
        var age = $("#age").val();
        var gender = $("#gender").val();
        var phone = $("#phone").val();

        if(name !="")
        {
            if(adress !="")
            {
                if(age !='')
                {
                    if(phone !="")
                    {
                        $.ajax(
                            {
                                url : "addUser.php",
                                type : "POST",
                                data : {name: name,
                                        adress: adress,
                                        age: age,
                                        gender: gender,
                                        phone: phone,
                                        },
                                success : function(response)
                                {
                                    if(response == 0)
                                    {
                                        alert('User added');

                                        setTimeout(function(){
                                            window.location.reload();
                                        }, 2000)
                                    }
                                },
                            }
                        )
                    }
                    else
                    {
                        $('#phone-error').addClass('is-invalid');
                        $('#phone-error').html('Phone should not be empty');
                    }
                }
                else
                {
                    $('#age-error').addClass('is-invalid');
                    $('#age-error').html('Age should not be empty');
                }
            }
            else
            {
                $('#adress-error').addClass('is-invalid');
                $('#adress-error').html('Adress should not be empty');
            }
        }
        else
        {
            $('#name-error').addClass('is-invalid');
            $('#name-error').html('Name should not be empty');
        }
    });
});