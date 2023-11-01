<script>
    $(document).ready(function (){
        $(document).on('click','#editBtn',function (){
            let user_id = $(this).val();

            $('#edit-Modal').modal('show');
            $.ajax({
                type: 'GET',
                url: "/users/edit/"+user_id,
                success: function (response){
                    // Check if response.student exists before accessing properties
                    if (response && response.user) {
                        let id = response.user.id;
                        let name = response.user.name;
                        let email = response.user.email;

                        $("#my_edit_form input[name= 'user_id']").val(id);
                        $("#my_edit_form input[name= 'name']").val(name);
                        $("#my_edit_form input[name= 'email']").val(email);


                    } else {
                        // Handle invalid or missing response data
                        console.error("Invalid or missing student data in the response.");
                    }
                },
                error: function (xhr, status, error) {
                    // Handle AJAX errors here
                    console.error("AJAX Error:", status, error);
                }
            });
        });
    });
</script>
