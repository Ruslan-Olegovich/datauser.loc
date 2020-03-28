<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<script src="/assets/jquery.js"></script>
    <script >
            $(document).ready(function () {
                $('button').click(function () {
                  $.get("index.php", success);
                });

                function success(data) {
                  $('#content').html(data);
                }
                });
            // $("form.follow-form").submit(function(e){
            //   /*останавливаем событие*/
            //       e.preventDefault();
            //       /*при нажатии кнопки*/
            //       $(this).finde('i').addClass('active');
            //       /*посылаем ajax запрос*/
            //       $.post('get-data.php', {
            //     		followID: $(this).find('input').val()
            //     	}, function () {
            //     	/* находим и скрываем кнопку, создаем новый элемент */
            //     	$(e.currentTarget)
            //     	.find('button').hide()
            //     	.after('<span class="ok"><span></span>готово!</span>');
            //     	});
            // });


    </script>
  </head>
  <body>
    <div id="content"></div>
<button>Нажми</button>
<!-- <form class="follow-form" action="get-data.php" method="POST">
  <button type="submit" value="Actions" class="get_data.php" name="button">
    <i></i><span>подписаться<span>
  </button>

</form> -->
<!-- <p id ="load" style="cursor:pointer">Загрузить данные</p>
<div id="information"></div>

</div> -->
  </body>
</html>
