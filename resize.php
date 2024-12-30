<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && isset($_POST['width']) && isset($_POST['height'])) {
        $image = $_FILES['image'];
        $newWidth = intval($_POST['width']);
        $newHeight = intval($_POST['height']);

        // Verifica se houve erro no upload
        if ($image['error'] === 0) {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $tempPath = $image['tmp_name'];
            $originalName = basename($image['name']);
            $destinationPath = $uploadDir . 'resized_' . $originalName;

            // Redimensiona a imagem
            $sourceImage = imagecreatefromstring(file_get_contents($tempPath));
            $resizedImage = imagescale($sourceImage, $newWidth, $newHeight);

            // Salva a imagem redimensionada
            imagejpeg($resizedImage, $destinationPath, 90);

            // Libera a memória
            imagedestroy($sourceImage);
            imagedestroy($resizedImage);

            // Exibe o HTML com o resultado
            echo "<!DOCTYPE html>
                  <html lang='en'>
                  <head>
                      <meta charset='UTF-8'>
                      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                      <title>Imagem Redimensionada</title>
                      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'>
                      <link rel='stylesheet' href='assets/css/style.css'>
                  </head>
                  <body>";
                      include 'menu.php';
                      echo "<div class='container py-5'>
                          <h1 class='text-center mb-4'>Imagem Redimensionada</h1>
                          <div class='resized-container text-center'>
                              <img src='$destinationPath' alt='Imagem Redimensionada' class='resized-image' style='max-width:100%; height:auto; border-radius:5px;'>
                              <p class='mt-3'>Imagem redimensionada para {$newWidth}px x {$newHeight}px</p>
                              <div class='mt-3'>
                                  <a href='$destinationPath' download class='btn btn-success'>Baixar Imagem</a>
                                  <a href='index.php' class='btn btn-primary'>Redimensionar Outra Imagem</a>
                              </div>
                          </div>
                      </div>
                      <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
                  </body>
                  </html>";
        } else {
            // Erro ao fazer upload
            echo "<!DOCTYPE html>
                  <html lang='en'>
                  <head>
                      <meta charset='UTF-8'>
                      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                      <title>Erro no Upload</title>
                      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'>
                      <style>
                          body { padding-top: 70px; }
                          .container {
                              max-width: 800px;
                          }
                      </style>
                  </head>
                  <body>
                      <nav class='navbar navbar-dark bg-dark fixed-top'>
                          <div class='container'>
                              <a class='navbar-brand' href='index.php'>Redimensionador de Imagens</a>
                          </div>
                      </nav>
                      <div class='container py-5'>
                          <h1 class='text-center text-danger mb-4'>Erro ao Fazer Upload da Imagem</h1>
                          <div class='text-center'>
                              <a href='index.php' class='btn btn-primary'>Tentar Novamente</a>
                          </div>
                      </div>
                      <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
                  </body>
                  </html>";
        }
    } else {
        header('Location: index.php');
        exit();
    }
}
