# CGP Systems. Laravel
## CGP_Systems PHP test

1. Создать модель User (id, name, city, created_at) и UserImage (id, image, created_at), описать связи между моделями. У модели User может быть несколько UserImage.
2. Создать сидер для модели User, который создаст 10 000 записей.
3. Создать сидер для модели UserImage, который создаст 100 000 записей и привяжет их к User (рандомно).
4. Сделать api эндпоинт, который будет возвращать список Users, отсортировав их по количеству UserImages.
5. создать api эндпоинт с помощью которого можно создать User (name- string, city - string) +  UserImage (image - string).

На HTML + JS
1. простую страницу, на которой будет таблица в которую будут выводится данные Users (name, city, images_count) отсортированы по количеству UserImages.
2. данные в таблицу будут подгружаться с помощью AJAX
3. простая форма, в которую можно ввести user name (текст), user city (текст), user image (файл jpg, png).
4. форма должна отправляться с помощью AJAX на сервер и создавать запись User + UserImage