<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>{{ title }}</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-bar w3-black">
    <a href="?p=home-page" class="w3-bar-item w3-button">Home</a>
    <a href="?p=about" class="w3-bar-item w3-button">About</a>
    <div class="w3-dropdown-hover">
        <button class="w3-button">
            Gallery
            <svg width="10px" height="10px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.16108 10.0731C4.45387 9.2649 5.02785 8 6.1018 8H17.898C18.972 8 19.5459 9.2649 18.8388 10.0731L13.3169 16.3838C12.6197 17.1806 11.3801 17.1806 10.6829 16.3838L5.16108 10.0731ZM6.65274 9.5L11.8118 15.396C11.9114 15.5099 12.0885 15.5099 12.1881 15.396L17.3471 9.5H6.65274Z" fill="#ffffff" />
            </svg>
        </button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="?p=gallery/item-one" class="w3-bar-item w3-button">Item One</a>
            <a href="?p=gallery/item-two" class="w3-bar-item w3-button">Item Two</a>
            <a href="?p=gallery/item-three" class="w3-bar-item w3-button">Item Three</a>
        </div>
    </div>
    <a href="?p=contact" class="w3-bar-item w3-button">Contact</a>
</div>
{{ body }}
</body>
</html>