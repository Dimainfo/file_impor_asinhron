<?

if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else 
{
  if(is_file(__DIR__.'/' . $_FILES['file']['name']))
  {
      echo 'Такой файл уже существует';
  }
  else
  {
    move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'/' . $_FILES['file']['name']);
    if(is_file(__DIR__.'/' . $_FILES['file']['name']))
    {
     echo 'файл загружен';
    }
    else
    {
     echo 'файл не загружен';
    }
  }
}
exit;