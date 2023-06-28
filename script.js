function getRandomImage() {
    fetch('api.php')  // Cambia esto a la ruta completa si es necesario
        .then(response => response.text())
        .then(imageUrl => {
            const imgElement = document.getElementById('randomImage');
            imgElement.src = imageUrl;
        })
        .catch(error => console.error('Error:', error));
}
