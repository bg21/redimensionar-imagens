# Redimensionar Imagens

Uma ferramenta web para redimensionar imagens de forma rápida e eficiente. Esta aplicação permite alterar as dimensões de suas imagens sem comprometer a qualidade, com uma interface simples e intuitiva.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Hack](https://img.shields.io/badge/Hack-999999?style=for-the-badge&logo=hacklang&logoColor=white)

## 📋 Funcionalidades

- Redimensionar imagens para dimensões específicas
- Manter a proporção original da imagem (opcional)
- Suporte para vários formatos de imagem (JPEG, PNG, GIF)
- Visualização prévia da imagem redimensionada
- Download direto para o dispositivo
- Interface responsiva para uso em dispositivos móveis

## 🚀 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/bg21/redimensionar-imagens.git
```

2. Navegue até o diretório do projeto:
```bash
cd redimensionar-imagens
```

3. Configure um servidor PHP local (como XAMPP, WAMP ou servidor web integrado do PHP):
```bash
php -S localhost:8000
```

4. Acesse a aplicação pelo navegador em `http://localhost:8000`

## 💻 Como usar

1. Acesse a página inicial da aplicação
2. Selecione a imagem que deseja redimensionar
3. Especifique as novas dimensões (largura e altura)
4. Marque a opção "Manter proporção" se desejar preservar a relação de aspecto
5. Clique em "Redimensionar"
6. Visualize a imagem com as novas dimensões
7. Clique em "Baixar" para salvar a imagem redimensionada

## 🔧 Estrutura do Projeto

- `index.php` - Página principal da aplicação com o formulário de upload e configurações
- `resize.php` - Script responsável pelo processamento e redimensionamento das imagens
- `menu.php` - Componente de navegação do sistema
- `assets/css/` - Arquivos de estilo da aplicação

## 🔍 Tecnologias Utilizadas

- PHP para manipulação e processamento de imagens
- Biblioteca GD/Imagick para redimensionamento
- Hack para funcionalidades específicas
- CSS para estilização da interface

## ⚡ Recursos Técnicos

- Preservação de metadados da imagem (opcional)
- Otimização do tamanho do arquivo
- Opções de qualidade configuráveis
- Processamento em memória para maior eficiência

## 🤝 Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests para melhorar este projeto.

1. Faça um fork do projeto
2. Crie sua branch de feature (`git checkout -b feature/nova-funcionalidade`)
3. Commit suas alterações (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE)

## 📱 Contato

[GitHub: bg21](https://github.com/bg21)

---

💡 **Dica:** Para manter a melhor qualidade ao redimensionar, evite aumentar as dimensões da imagem original significativamente. 
