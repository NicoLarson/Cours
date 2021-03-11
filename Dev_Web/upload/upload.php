<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <h1><code>Upload()</code></h1>
    </header>
    <main>
        <section>
            <h2>Fichier téléchargé</h2>
            <?php
            $KO = 10000;
            if (isset($_POST['upload'])) {
                $content_dir = "asset/";
                $tmp_file = $_FILES['file']['tmp_name'];
                if (!is_uploaded_file($tmp_file)) {
                    exit("Le fichier est introuvable");
                }
                // Vérifier l'extention
                $type_file = $_FILES['file']['type'];
                $size = $_FILES['file']['size'];
                if($size > $KO){
                    exit("Le fichier est trop volumineux: ".round(((int)$size/1024),2)." ko");
                }
                if (
                    !strstr($type_file, 'jpg')
                    && !strstr($type_file, 'jpeg')
                    && !strstr($type_file, 'bmp')
                    && !strstr($type_file, 'gif')
                    && !strstr($type_file, 'png')
                ) {
                    exit("le fchier n'est pas une image");
                }
                // Copier le fichier
                $name_file = $_FILES['file']['name'];

                if (!move_uploaded_file($tmp_file, $content_dir . $name_file)) {
                    exit("Impossible de copier le fichier");
                }
            //    print $content_dir . $name_file;
        echo '
        <figure>
        <img src="'.$content_dir.$name_file.'" alt="'.$name_file.'">
        <figcaption>
        <h3>Le fichier a bien été uploadé: '.$name_file.'
        le: "'.date("d/yy - H:i").'"
        </h3>
        </figcaption>
        </figure>
        ';    
        
        }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy;Copyright - MIT - Nicolas Yang - 2021</p>
    </footer>
</body>

</html>