<!DOCTYPE HTML>  
<html>
<head>
 <meta charset="utf-8" />
<title>Домашно 2 по Web технологии 2020/2021</title>
</head>
<body>  


<form method="post" action=<?php
  $valid = array();
  $errors = array();
  $subjectErr = $teacherErr = $descriptionErr = $creditsErr = $err = "";
  if ($_POST) {
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $description = $_POST['description'];
    $credits = $_POST['credits'];

    if (!$subject) {
      $errors['subject'] = 'Името на предмета е задължително поле.';
	  $subjectErr = 'Името на предмета е задължително поле.';
    } elseif (strlen($subject) > 150) {
	  $errors['subject'] = 'Името на предмета има максимална дължина 150 символа.';
      $subjectErr = 'Името има максимална дължина 150 символа.';
    } else {
      $valid['subject'] = $subject;
    }
	
	if (!$teacher) {
      $errors['teacher'] = 'Името на преподавателя е задължително поле.';
	  $teacherErr = 'Името на преподавателя е задължително поле.';
    } elseif (strlen($teacher) > 200) {
      $errors['teacher'] = 'Името на преподавателя има максимална дължина 200 символа.';
	  $teacherErr = 'Името на преподавателя има максимална дължина 200 символа.';
    } else {
      $valid['teacher'] = $teacher;
    }
    
	if (!$description) {
      $errors['description'] = 'Описанието е задължително поле.';
	  $descriptionErr = 'Описанието е задължително поле.';
    } elseif (strlen($description) < 10) {
      $errors['description'] = 'Описанието има  минимална дължина 10 символа.';
	  $descriptionErr = 'Описанието има минимална дължина 10 символа.';
    } else {
      $valid['description'] = $description;
    }
	if ($credits < 0) {
      $errors['credits'] = 'Кредитите трябва да са положително число.';
	  $creditsErr = 'Кредитите трябва да са положително число.';
    } else {
      $valid['credits'] = $credits;
    }
	if (!$errors) { 
	$err = "Избираемата дисциплина е добавена успешно!"; }
  }
?>>  
  <h1> Форма за добавяне на избираема дисциплина </h1>
  <label>Предмет: </label> <input type="text" name="subject">
    <span class="error"> <?php echo $subjectErr;?></span>
  <br><br>
  <label>Преподавател: </label> <input type="text" name="teacher">
  <span class="error"> <?php echo $teacherErr;?></span>
  <br><br>
  <label>Описание: </label> <input type="text" name="description">
  <span class="error"><?php echo $descriptionErr;?></span>
  <br><br>
   <label>Кредити: </label> <input type="number" name="credits" >
   <span class="error"> <?php echo $creditsErr;?></span>
  <br><br>
  <label>Група: </label>
  <input type="radio" name="group" value="m"><label>М </label>
  <input type="radio" name="group" value="pm"><label>ПМ </label>
  <input type="radio" name="group" value="onk"><label>ОКН </label>
  <input type="radio" name="group" value="qkn"><label>ЯКН </label>
  <br><br>
  <input type="submit" name="submit" value="Submit" >
   <span class="error"> <?php echo $err;?></span>  
</form>

</body>
</html>
