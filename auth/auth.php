<?php
require "../db.php";


if(isset($_SESSION['logged_user']))
{
  header("Location:".$site_url."/razdel/Forum");
}
else
{

$data = $_POST;

if( isset($data['up_singup'])){

  $errors = array();

  if( trim($data['login']) == '')
  {
    $errors[] = 'Введите логин';
  }

  if( trim($data['logemail']) == '')
  {
    $errors[] = 'Введите почту';
  }

  if( $data['logpass'] == '')
  {
    $errors[] = 'Введите пароль';
  }

  if( R::count('users', "email = ?", array($data['logemail'])) > 0 )
  {
    $errors[] = 'Почта уже существует';
  }

  if( R::count('users', "login = ?", array($data['login'])) > 0 )
  {
    $errors[] = 'Логин занят';
  }

  if(empty($errors) )
  {
    $user = R::dispense('users');
    $user->login = $data['login'];
    $user->email = $data['logemail'];
    $user->password = password_hash($data['logpass'],  PASSWORD_DEFAULT);
    $user->join_date = date('Y-m-d');
    $user->user_ip = $_SERVER['REMOTE_ADDR'];

    R::store($user);

    /*echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';*/

  } else{
  }
}


if( isset($data['up_login']))
{
  $errorse = array();
  $user = R::findOne('users', 'login = ?', array($data['logine']));

  if ( $user )
  {
    if(password_verify($data['lopass'], $user->password) ){
      $_SESSION['logged_user'] = $user;
      header("Location:".$site_url."/razdel/Forum");
    }
    else
    {
      $errorse[] = 'Пароль неверный';
    }
  }
  else
  {
    $errorse[] = 'Пользователь не найден';
  }

  if(!empty($errorse) )
  {
    /*echo '<div style="color: red;">'.array_shift($errorse).'</div><hr>';*/
  }
}
}
?>


<!DOCTYPE html>
<html lang="ru" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Авторизация Forum Pig RP</title>
<!--===============================================================================================-->
    <link rel="shortcut icon" type="image/png" href="/img/faviconka.ico" type="img/x-icon">
<!--===============================================================================================-->
  	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="regform_style.css">
<!--===============================================================================================-->

</head>
<body>
  	<form method="POST" action="auth" class="section" >
  		<div class="container">
  			<div class="row full-height justify-content-center">
  				<div class="col-12 text-center align-self-center py-5">
  					<div class="section pb-5 pt-5 pt-sm-2 text-center">
  						<h6 class="mb-0 pb-3"><span>Войти </span><span>Регистрация</span></h6>
  			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
  			          	<label for="reg-log"></label>
  						<div class="card-3d-wrap mx-auto">
  							<div class="card-3d-wrapper">
  								<div class="card-front">
  									<div class="center-wrap">
  										<div class="section text-center">
  											<h4 class="mb-4 pb-3">Вход</h4>
  											<div class="form-group">
  												<input type="text" name="logine" class="form-style" placeholder="Ваша логин"  autocomplete="off">
  												<i class="input-icon uil uil-home"></i>
  											</div>
  											<div class="form-group mt-2">
  												<input type="password" name="lopass" class="form-style" placeholder="Ваш пароль"  autocomplete="off">
  												<i class="input-icon uil uil-lock-alt"></i>
  											</div>
  											<button type="submit" name="up_login" class="btn mt-4">Войти</button>
  				      					</div>
  			      					</div>
  			      				</div>
  								<div class="card-back">
  									<div class="center-wrap">
  										<div class="section text-center">
  											<h4 class="mb-4 pb-3">Регистрация</h4>
  											<div class="form-group">
  												<input type="text" name="login" class="form-style" value="<?php echo @$data['login'];?>" placeholder="Ваше имя в игре" id="logname" autocomplete="off">
  												<i class="input-icon uil uil-user"></i>
  											</div>
  											<div class="form-group mt-2">
  												<input type="email" name="logemail" class="form-style" value="<?php echo @$data['logemail'];?>" placeholder="Ваша почта" id="logemail" autocomplete="off">
  												<i class="input-icon uil uil-at"></i>
  											</div>
  											<div class="form-group mt-2">
  												<input type="password" name="logpass" class="form-style"  placeholder="Ваш пароль" id="logpass" autocomplete="off">
  												<i class="input-icon uil uil-lock-alt"></i>
  											</div>
  											<button type="submit" class="btn mt-4" name="up_singup">Зарегистрироваться</button>
  				      					</div>
  			      					</div>
  			      				</div>
  			      			</div>
  			      		</div>
  			      	</div>
  		      	</div>
  	      	</div>
  	    </div>
  	</form>
</body>
</html>
