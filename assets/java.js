console.log('R!')

  $(document).ready(function () {
            $('#btn-content').click(function(){
                $.ajax({
                    url:'get-data.php',
                    success: function(data)
                    {
                        $('#content').html(data);
                        return true;
                    }
                })
            })
        })
