<!DOCTYPE html>
  <html>
  <head>

    <title>Computer Based Test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}">

  </head>

<body>
	
  <div class="image">
     <center> <img src="{{ URL::asset('assets/image/welcome.png') }}"></center>
  </div>

	<div id="login">
          <fieldset>
              <form action="login">
                  <input type="text" name="username" placeholder="Nomor Induk">
                  <input type="password" name="password" placeholder="Password">
              </form>
              <!-- <a href="home"> <input type="submit" name="submit"  value="Login"  href="index.html" > </a> -->
              <button class="btn loginbtn" type="submit">MASUK</button>
           </fieldset>
  </div>

</body>
</html>