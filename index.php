<?php
  setcookie("languange","pl-PL",time()+3600);
?>
<html>
<head>
<meta charset="UTF-8"></meta>
</head>
<body>
<?php
  if $_ COOKIE['languange'] = "pl-PL" 
  {
    echo "<h1>Witamy na Fox Cloud</h1>"
    echo "Fox Cloud to narzędzie deweloperskie umożliwiaujące łatwe tworzenie chmur.\n Jednak postawienie serwera Hostingowego drogo kosztuje."
    echo "Możesz zacząć już teraz."
    echo "<input type="button" value="zaloguj sie" action="goto_login.php"/>
  }
?>
</body>
