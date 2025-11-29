<?php
// Evita que el navegador almacene en caché la página
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Cache-Control: max-age=0, no-cache, no-store, must-revalidate");
header("Expires: 0");
$url="https://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //Esta debe ser la url, que sea https, no http, se comprobará después si se está cumpliendo.
$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http"; // Comprobar si HTTPS está activado
if($protocolo==="http") {header("Location: $url");} //Obliga a que sea https

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once 'head.php';?>
</head>
<body>
    <?php include_once 'nav.php';?>
    <div class='container'>
        <div class='recuadro'>
        <h1 class='centrado'>Qué somos</h1>
        <p>¡Bienvenido a La Orden Ibérica! Aquí no hacemos pruebas de DPS para medir tu valía, nos basta con que tengas ganas de pasarlo bien y de reírnos juntos.
        <p>Guild principalmente ESPAÑOLA para cubrir el horario de raid España
        <p><b>TS3 : </b> La Orden Ibérica (contraseña:españa)
        <p><b>Telegram : </b> t.me/laordeniberica
        </div>

        <div class='recuadro centrado'>
            <h1>Calendario de eventos de hermandad</h1>
                <iframe src="https://calendar.google.com/calendar/embed?src=pinguinolodriguez%40gmail.com&ctz=Europe%2FMadrid" style="border: 0;" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            <p><b>También podéis usar /calendar en el juego, y clickar para inscribiros</b>
        </div>

        <div class='recuadro'>
        <h1 class='centrado'>Administradores de la guild</h1>
        <ul>
        <li>Galloman</li>
        <li>Kiyoo</li>
        <li>Morheals / Mordanger </li>
        </ul>
        </div>

        <div class='recuadro'>
        <h1 class='centrado'>Normativa de hermandad</h1>
<ol style="list-style-type: decimal">
<li>Se debe tener un comportamiento adecuado, incluído offline. Insultos a otros jugadores pueden ser motivo de sanción. Por ejemplo, llamar basura a alguien por atraer adds.</li>

<li>Se permite el humor negro, pero no ofender a drede, en ese caso es motivo de expulsión o de bajar de rango.</li>

<li>Los lows solo podrán ser "paria" o "escudero real", salvo personajes twink, que pueden ser cualquier rango.</li>
<li>La Armada Invencible le da 1000 vueltas a la Marina Boliviana</li>
<li>El medio de información oficial es <a href="https://laordeniberica.free.nf" class='a-norma'>https://laordeniberica.free.nf</a>, cuando tengamos subsección en foro, será el foro.</li>

<li>Está prohibido sobornar o chantajear para ascender de rango.</li>

<li>El acceso al banco depende del rango. Se puede pedir a un compañero que te saque un item.</li>

<li>Si un jugador A desea expulsar a otro, se deberá realizar un consenso e informar al masterguild Gallomán. En función del veredicto, se expulsará al jugador. El único que puede expulsar sin consenso es Galloman, que deberá indicar los motivos.</li>

<li>Normas de raideo por determinar.</li>

<li>En la web se pueden comentar sugerencias. El mal uso de esta herramienta puede ser motivo de expulsión.</li>

<li>Nadie recibirá un castigo si abandona la guild y regresa, pero eso no significa que se le devolverá el rango.</li>

<li>Aunque se llame Galloman, se transforma en lechuhico y no en gallo, pero le queremos igual.</li>

<li>Nuestras redes son ts3 (pass : España), y Telegram. Cualquier uso indebido puede ser motivo de expulsión.</li>

<li>Se dispone de un calendario donde anotar eventos, como las semanales, pero cualquiera es libre de armar aunque no figure en el calendario. pero cualquiera es libre de armar aunque no figure en el calendario. Lo ideal es anotarlo, sé podrá si eres de los siguientes rangos: Caballero Real, Conquistador, a Admin

<li>Para cualquier duda, escriban en <a href='https://docs.google.com/forms/d/e/1FAIpQLSd_VipdP6dYbkp6csdMfOBhFMvWCmX-gq25TGkV9iRkZV94kg/viewform?usp=sharing&ouid=114792237868050755748' class='a-norma'>sugerencias</a> o envíen un correo a <a href="mailto:pinguinolodriguez@gmail.com" class='a-norma'>pinguinolodriguez@gmail.com</a></li>
</ol>
        </div>
        </div>
</body>
</html>
