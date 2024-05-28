let my_element = document.querySelector('#click')
my_element.addEventListener("click", function(e) {
    $.ajax({
        url: '/api/stores',
        /* Куда отправить запрос */
        method: 'get',
        /* Метод запроса (post или get) */
        dataType: 'json',
        /* Тип данных в ответе (xml, json, script, html). */
        /* Данные передаваемые в массиве */
        success: function(data) { /* функция которая будет выполнена после успешного запроса.  */
            console.log(data); /* В переменной data содержится ответ от index.php. */
        }
    });
    // console.log('hello');
});