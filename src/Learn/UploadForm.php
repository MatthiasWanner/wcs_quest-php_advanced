<?php

namespace App\Learn;

class UploadForm
{
    public function getUploadForm()
    {
        $this->sendUploadForm();
?>
        <form method="post" enctype="multipart/form-data">

            <label for="imageUpload">Upload an profile image</label>

            <input type="file" name="avatar" id="imageUpload" />

            <button name="send">Send</button>

        </form>
<?php
    }

    private function sendUploadForm()
    {
        // Je vérifie que le formulaire est soumis, comme pour tout traitement de formulaire.

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            // chemin vers un dossier sur le serveur qui va recevoir les fichiers transférés (attention ce dossier doit être accessible en écriture)
            $uploadDir = '../public/uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }

            $fileId = uniqid();
            // le nom de fichier sur le serveur est celui du nom d'origine du fichier sur le poste du client (mais d'autre stratégies de nommage sont possibles)
            $uploadFile = $uploadDir . basename("{$fileId}_{$_FILES['avatar']['name']}");

            // Je récupère l'extension du fichier
            $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

            // Les extensions autorisées
            $authorizedExtensions = ['jpg', 'jpeg', 'png'];

            // Le poids max géré par PHP par défaut est de 2M
            $maxFileSize = 1000000; // 👈 Max 1Mo

            // Je sécurise et effectue mes tests
            /****** Si l'extension est autorisée *************/
            if ((!in_array($extension, $authorizedExtensions))) {
                $errors[] = 'Veuillez sélectionner une image de type Jpg ou Jpeg ou Png !';
            }


            /****** On vérifie si l'image existe et si le poids est autorisé en octets *************/
            if (file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize) {
                $errors[] = "Votre fichier doit faire moins de 2M !";
            }

            /****** Si je n'ai pas d"erreur alors j'upload *************/
            if (empty($errors)) {
                // on déplace le fichier temporaire vers le nouvel emplacement sur le serveur. Ça y est, le fichier est uploadé
                move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile);
            } else {
                // Sinon, on affiche les erreurs
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
            }
        }
    }
}
