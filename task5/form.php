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
                <input type="text" name="name" <?php if ($errors['name']) {print 'class="group error"';} else print 'class="group"'; ?> value="<?php print $values['name']; ?>">
            </div>
        
            <!-- Телефон -->
            <div class="form_item form-group">
                <label for="formTel" style="color: black;">Телефон:</label>
                <input type="tel" name="phone" <?php if ($errors['phone']) {print 'class="group error"';} else print 'class="group"'; ?> value="<?php print $values['phone']; ?>">
            </div>
        
            <!-- E-mail -->
            <div class="form_item form-group">
                <label for="formEmail" style="color: black;">E-mail:</label>
                <input type="text" name="email" <?php if ($errors['email']) {print 'class="group error"';} else print 'class="group"'; ?> value="<?php print $values['email']; ?>">
            </div>
        
            <!-- Дата рождения -->
        
            <div class="form_item form-group">
                <label for="formDate" style="color: black;">Дата рождения:</label>
                <input type="date" id="year" size="3" name="year" <?php if ($errors['year']) {print 'class="group error"';} else print 'class="group"';?> value="<?php print $values['year']; ?>">
            </div>
        
            <!-- Пол -->
            <div <?php if ($errors['gender']) {print 'class="error"';} ?>>
                Пол:<br>
                <input class="radio" type="radio" name="gender" value="M" <?php if ($values['gender'] == 'M') {print 'checked';} ?>> Мужской
                <input class="radio" type="radio" name="gender" value="W" <?php if ($values['gender'] == 'W') {print 'checked';} ?>> Женский
            </div>
        
            <!-- Любимый язык программирования -->
            <div class="form_item form-group">
                <label for="multipleLanguages" style="color: black;">Любимый язык программирования:</label>
                <select id="multipleLanguages" class="form_input _req form-control w-50 shadow bg-white rounded" name="languages[]" size="11" multiple>
                    <option value="Pascal" <?php if (in_array("Pascal", $values['language'])) {print 'selected';} ?>>Pascal</option>
                    <option value="C" <?php if (in_array("C", $values['language'])) {print 'selected';} ?>>C</option>
                    <option value="C_plus_plus" <?php if (in_array("C++", $values['language'])) {print 'selected';} ?>>C++</option>
                    <option value="JavaScript" <?php if (in_array("JavaScript", $values['language'])) {print 'selected';} ?>>JavaScript</option>
                    <option value="PHP" <?php if (in_array("PHP", $values['language'])) {print 'selected';} ?>>PHP</option>
                    <option value="Python" <?php if (in_array("Python", $values['language'])) {print 'selected';} ?>>Python</option>
                    <option value="Java" <?php if (in_array("Java", $values['language'])) {print 'selected';} ?>>Java</option>
                    <option value="Haskel" <?php if (in_array("Haskel", $values['language'])) {print 'selected';} ?>>Haskel</option>
                    <option value="Clojure" <?php if (in_array("Clojure", $values['language'])) {print 'selected';} ?>>Clojure</option>
                    <option value="Prolog" <?php if (in_array("Prolog", $values['language'])) {print 'selected';} ?>>Prolog</option>
                    <option value="Scala" <?php if (in_array("Scala", $values['language'])) {print 'selected';} ?>>Scala</option>
                </select>
                
            </div>
        
            <!-- Биография -->
            <div class="form_item form-group">
                <label for="formMessage" style="color: black;">Биография:</label>
                <textarea class="group" id="formMessage" name="bio" class="form_input _req form-control w-50 shadow bg-white rounded" rows="3" cols="30"><?php print $values['bio']; ?></textarea>
            </div>
        
            <!-- Соглашение -->
            <div class="form_item form-group">
                <div class="form-check">
                    <label class="checkbox_input form-check-input" for="agree">ознакомлен(а)</label>
                    <input type="checkbox" id="agree" name="checkbox" class="checkbox_input form-check-input" <?php if ($values['checkbox']) {print 'checked';} ?>>
                </div>
            </div>
        
            <!-- Кнопка отправки формы -->
            <div class="form_item form-group">
                <label class="col-12"><input type="submit" id="send" value="ОТПРАВИТЬ"></label>
            </div>
        </form>
    </div>
</body>
