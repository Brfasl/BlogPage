<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sayfası</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome için link -->
    <style>
        /* Genel stil ayarları */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Logo ve marka */
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 30px;
            background-color: #007bff;
            color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .logo-container img {
            width: 45px;
            height: 45px;
            margin-right: 15px;
        }

        .logo-container span {
            font-size: 1.8rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Menü çubuğu */
        .nav-bar {
            display: flex;
            justify-content: center;
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-bar div {
            margin: 0 25px;
            text-align: center;
            font-size: 1.1rem;
            color: #444;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-bar div:hover {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        .nav-bar div i {
            display: block;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        /* Sayfa başlığı */
        .simple-title {
            font-family: 'Georgia', serif;
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-top: 30px;
            letter-spacing: 0.5px;
        }

        /* Arama kutusu sağ üst köşeye yerleştirilmiş */
        .search-box {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #fff;
            border-radius: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            display: flex;
            align-items: center;
            width: 250px;
        }

        .search-box input {
            width: 100%;
            border: none;
            outline: none;
            padding: 8px;
            font-size: 1rem;
            border-radius: 50px;
            box-sizing: border-box;
        }

        .search-box input::placeholder {
            color: #aaa;
        }

        .search-box i {
            margin-right: 10px;
            color: #007BFF;
        }

        /* Profil sağ üst köşeye yerleştirilmiş */
        .profile {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 10px 15px;
            border-radius: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile span {
            font-weight: bold;
            color: #444;
        }

    </style>
</head>
<body>

<!-- Logo ve marka adı -->
<div class="logo-container">
    <img src="logo.png" alt="Logo">
    <span>BlogMe</span>
</div>

<!-- Üst menü -->
<div class="nav-bar">
    <div>
        <i class="fas fa-home"></i>
        <span>Ana Sayfa</span>
    </div>
    <div>
        <i class="fas fa-book-reader"></i>
        <span>Okuma Listesi</span>
    </div>
    <div>
        <i class="fas fa-pen"></i>
        <span>Benim Yazdıklarım</span>
    </div>
</div>

<!-- Sayfa başlığı -->
<header>
    <h1 class="simple-title">{{ $pageTitle ?? 'Blog Sayfam' }}</h1>
</header>

<!-- Arama kutusu sağ üst köşeye yerleştirilmiş -->
<div class="search-box">
    <i class="fas fa-search"></i>
    <input type="text" placeholder="Ara...">
</div>

<!-- Profil sağ üst köşeye yerleştirilmiş -->
<div class="profile">
    <img src="profil-resmi.jpg" alt="Profil Resmi">
    <span>Profil</span>
</div>

<main>
    <!-- Diğer içerikler burada olacak -->
</main>

</body>
</html>
