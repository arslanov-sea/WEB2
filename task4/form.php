<!DOCTYPE html>
<html lang="ru">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
<?php
if (!empty($messages)) {
  print('<div id="messages">');
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}
?>
    <div class="main-block tab mt-4 mb-4 shadow rounded" id="quf">
        <form action="index.php" method="POST" class="row mx-5 my-2 gy-1">
        <!-- ФИО -->
            <div class="form_item form-group">
                <label for="formName" style="color: black;">ФИО:</label>
                <input name="names" class="<?php if ($errors['names']) {print 'error';} ?> form_input _req form-control w-50 shadow bg-white rounded"
                value="<?php print $values['names']; ?>" placeholder="Введите ФИО" />
            </div>
        
            <!-- Телефон -->
            <div class="form_item form-group">
                <label for="formTel" style="color: black;">Телефон:</label>
                <input name="phone" class="<?php if ($errors['phone']) {print 'error';} ?> form_input _req form-control w-50 shadow bg-white rounded"
                value="<?php print $values['phone']; ?>" placeholder="Введите телефон" />
            </div>
        
            <!-- E-mail -->
            <div class="form_item form-group">
                <label for="formEmail" style="color: black;">E-mail:</label>
                <input name="email" class="<?php if ($errors['email']) {print 'error';} ?> form_input _req _email form-control w-50 shadow bg-white rounded"
                value="<?php print $values['email']; ?>" placeholder="Введите E-mail" />
            </div>
        
            <!-- Дата рождения -->
        
            <div class="form_item form-group">
                <label for="formDate" style="color: black;">Дата рождения:</label>
                <input type="date" class="<?php if ($errors['date']) {print 'error';} ?> form_input _req form-control w-50 shadow bg-white rounded" name="date" value="<?php print $values['date']; ?>"
                    min="1900-01-01" max="2024-03-01" id="formDate">
            </div>
        
            <!-- Пол -->
            <div class="form_item form-group">
                <label style="color: black;">Пол:</label><br>
                <div class="form-check1 form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Sex1" value="m">
                    <label class="form-check-label" for="Sex1">Мужской</label>
                </div>
                <div class="form-check1 form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Sex2" value="f">
                    <label class="form-check-label" for="Sex2">Женский</label>
                </div>
            </div>
        
            <!-- Любимый язык программирования -->
            <div class="form_item form-group">
                <label for="multipleLanguages" style="color: black;">Любимый язык программирования:</label>
                <select multiple class="<?php if ($errors['languages']) {print 'error';} ?> form_input _req form-control w-50 shadow bg-white rounded"
                id="multipleLanguages" name="languages[]">
                    <option value="1">Pascal</option>
                    <option value="2">C</option>
                    <option value="3">C++</option>
                    <option value="4">JavaScript</option>
                    <option value="5">PHP</option>          
                    <option value="6">Python</option>
                    <option value="7">Java</option>
                    <option value="8">Haskel</option>
                    <option value="9">Clojure</option>
                    <option value="10">Prolog</option>
                </select>
            </div>
        
            <!-- Биография -->
            <div class="form_item form-group">
                <label for="formMessage" style="color: black;">Биография:</label>
                <textarea id="formMessage" name="biography" class="<?php if ($errors['biography']) {print 'error';} ?> form_input _req form-control w-50 shadow bg-white rounded"><?php print $values['biography']; ?></textarea>
                </div>
        
            <!-- Соглашение -->
            <div class="form_item form-group">
                <div class="form-check">
                    <label class="checkbox_input form-check-input" for="agree">ознакомлен(а)</label>
                    <input id="agree" type="checkbox" name="agree" class="<?php if ($errors['agree']) {print 'error';} ?> checkbox_input form-check-input">
                </div>
            </div>
        
            <!-- Кнопка отправки формы -->
            <div class="form_item form-group">
                <label class="col-12"><input type="submit" value="Сохранить" name="submit" class="submit btn-dark"></label>
            </div>
        </form>
    </div>
</body>