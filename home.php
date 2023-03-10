<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Minha página</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Contato</a></li>
		  <li><a href="form-cadastrar.php">Registrar</a></li>
        </ul>
      </nav>
    </header>

    <section id="home">
      <video src="http://192.168.0.111:81/stream" id="video" autoplay></video>
    </section>

    <section id="about">
      <h1>Sobre mim</h1>
      <p>Este é o conteúdo da seção sobre.</p>
    </section>

    <section id="contact">
      <h1>Contato</h1>
      <p>Este é o conteúdo da seção contato.</p>
    </section>

    <footer>
      <p>Copyright © 2022 Manoel Vitor</p>
    </footer>
    <script type="text/javascript">
      function myStream(){
          const video = document.querySelector('#video');
          video.srcObject = 'http://192.168.0.111:81/stream';
          video.play();
      }
      window.onload = myStream;
    </script>
  </body>
</html>
