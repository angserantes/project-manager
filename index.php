<!DOCTYPE html>
<html>
<head>
	<title>My Simple Project Management | phpGrid</title> 
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<style>
.centered {
    margin: 0;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align:center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}

body{
  background-image: url(https://images.pexels.com/photos/53594/blue-clouds-day-fluffy-53594.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
</style>

<div class="centered">
<h1>Aplicación de Gestión de Proyectos</h1>

<a href="login/login.php" target="_new">Login</a>
</div>

<div class="footer"><strong>Ángela Serantes</strong> | Formaweb IV &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>

