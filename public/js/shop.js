$(document).ready(function() {
    // Создаем экземпляр спиннера
    var spinner = new Spinner().spin();

    // Обработчик события переключения табов
    $('.camp-type-tabs .nav-link-catalog').on('click', function() {
        // Получаем выбранные значения фильтров
        var month = $('#search-form input[name="month[]"]:checked').map(function() {
            return $(this).val();
        }).get().join(',');
        var type = $(this).val();
        var sort = $('#search-form select[name="sort"]').val();

        // Проверяем, есть ли выбранные фильтры
        if (month || type || sort) {
            // Показываем спиннер
            $('#camp-list').html(spinner.el);

            // Задержка таймера на секунду
            setTimeout(function() {
                // Отправляем AJAX-запрос на сервер для получения данных
                $.ajax({
                    url: '/shop2',
                    type: 'GET',
                    data: {
                        month: month,
                        type: type,
                        sort: sort
                    },
                    success: function(response) {
                        // Скрываем спиннер и обновляем содержимое карточек на странице
                        $('#camp-list').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    }
                });
            }, 50);
        } else {
            // Если фильтры не выбраны, то очищаем содержимое карточек
            $('#camp-list').html('');
        }
    });

    // Обработчик события изменения чекбоксов
    $('#search-form input[name="month[]"]').on('change', function() {
        // Получаем выбранные значения фильтров
        var month = $('#search-form input[name="month[]"]:checked').map(function() {
            return $(this).val();
        }).get().join(',');
        var type = $('.camp-type-tabs .nav-link-catalog.active').val();
        var sort = $('#search-form select[name="sort"]').val();

        // Проверяем, есть ли выбранные фильтры
        if (month || type || sort) {
            // Показываем спиннер
            $('#camp-list').html(spinner.el);

            // Задержка таймера на секунду
            setTimeout(function() {
                // Отправляем AJAX-запрос на сервер для получения данных
                $.ajax({
                    url: '/shop2',
                    type: 'GET',
                    data: {
                        month: month,
                        type: type,
                        sort: sort
                    },
                    success: function(response) {
                        // Скрываем спиннер и обновляем содержимое карточек на странице
                        $('#camp-list').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    }
                });
            }, 50);
        } else {
            // Если фильтры не выбраны, то очищаем содержимое карточек
            $('#camp-list').html('');
        }
    });

    // Обработчик события изменения фильтра "Тип"
    $('#search-form select[name="type"]').on('change', function() {
        // Получаем выбранные значения фильтров
        var month = $('#search-form input[name="month[]"]:checked').map(function() {
            return $(this).val();
        }).get().join(',');
        var type = $(this).val();
        var sort = $('#search-form select[name="sort"]').val();

        // Проверяем, есть ли выбранные фильтры
        if (month || type || sort) {
            // Показываем спиннер
            $('#camp-list').html(spinner.el);

            // Задержка таймера на секунду
            setTimeout(function() {
                // Отправляем AJAX-запрос на сервер для получения данных
                $.ajax({
                    url: '/shop2',
                    type: 'GET',
                    data: {
                        month: month,
                        type: type,
                        sort: sort
                    },
                    success: function(response) {

                        $('#camp-list').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    }
                });
            }, 50);
        } else {
// Если фильтры не выбраны, то очищаем содержимое карточек
            $('#camp-list').html('');
        }
    });
    $('#search-form select[name="sort"]').on('change', function() {
        // Получаем выбранные значения фильтров
        var month = $('#search-form input[name="month[]"]:checked').map(function() {
            return $(this).val();
        }).get().join(',');
        var type = $('.camp-type-tabs .nav-link-catalog.active').val();
        var sort = $(this).val();

        // Проверяем, есть ли выбранные фильтры
        if (month || type || sort) {
            // Показываем спиннер
            $('#camp-list').html(spinner.el);

            // Задержка таймера на секунду
            setTimeout(function() {
                // Отправляем AJAX-запрос на сервер для получения данных
                $.ajax({
                    url: '/shop2',
                    type: 'GET',
                    data: {
                        month: month,
                        type: type,
                        sort: sort
                    },
                    success: function(response) {
                        // Скрываем спиннер и обновляем содержимое карточек на странице
                        $('#camp-list').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    }
                });
            }, 50);
        } else {
            // Если фильтры не выбраны, то очищаем содержимое карточек
            $('#camp-list').html('');
        }
    });
});

// Скрываем спиннер и обновляем содержимое карточек на
