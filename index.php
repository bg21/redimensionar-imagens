<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redimensionador de Imagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
        .preview {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            display: none;
        }
    </style>
</head>
<body>
<?php include 'menu.php'; ?>
    <div class="container py-5">
        <h1 class="text-center">Redimensionador de Imagens</h1>
        <form action="resize.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Escolha uma imagem</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="width" class="form-label">Nova Largura (px)</label>
                <input type="number" class="form-control" id="width" name="width" placeholder="Exemplo: 800" required>
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Nova Altura (px)</label>
                <input type="number" class="form-control" id="height" name="height" placeholder="Exemplo: 600" required>
            </div>
            <button type="submit" class="btn btn-primary">Redimensionar</button>
        </form>
        <img id="preview" class="preview" alt="Pré-visualização da imagem">
    </div>
    <script>
        const imageInput = document.getElementById('image');
        const preview = document.getElementById('preview');

        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
