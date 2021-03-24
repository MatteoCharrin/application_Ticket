
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ticket Staff</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Ticket</h1></a>
                <p>Ici se trouve tout les tickets de votre site ().</p>
            </header>
            <div id="contenu">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=Ticket;charset=utf8',
                        'root', 'simone');
                $tickets = $bdd->query( ' select T_TICKET.ETA_ID as id, TIK_DATE as date, ETA_LIB as etat,
                TIK_TITRE as titre, TIK_CONTENU as contenu, TIK_ID as tid
                FROM T_ETAT, T_TICKET WHERE T_TICKET.ETA_ID = T_ETAT.ETA_ID 
                order by TIK_ID desc');
                foreach ($tickets as $ticket):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreticket"><?= $ticket['titre'] ?></h1>
                            <time><?= $ticket['date'] ?></time>
                        </header>
                        <p><?= $ticket['contenu'] ?></p>
                        <p><?= $ticket['etat'] ?></p>
                        <article>
                        <hr />
                        
                            
                        

                        
                    </article>
                    <hr />
                    <hr />
                <?php endforeach; ?>
            
            </div> <!-- #contenu -->
            <footer id="piedticket">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>

