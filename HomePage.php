<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Club - Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #006400;
            margin-top: 30px;
            font-size: 2.5em;
        }

        p {
            color: #006400;
            margin: 20px 0;
            font-size: 1.2em;
        }

        .box-container {
            background-color: #fff;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns */
            gap: 15px; /* Space between boxes */
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto; /* Center the container */
        }

        .box {
            background-color: #d0f0c0;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 18px;
            color: #333;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden; /* Ensure child elements are clipped */
            position: relative;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .box img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.5s ease;
        }

        .box:hover img {
            transform: scale(1.1); /* Slight zoom-in effect */
        }
        @keyframes rotate {
            from {
                transform: rotateY(0deg);
            }
            to {
                transform: rotateY(360deg);
            }
        }
       

        .box .image-title {
            margin: 10px 0;
            font-weight: bold;
            color: #006400;
            font-size: 1.2em;
        }

        .box .details {
            margin: 10px 0;
            font-size: 1em;
            color: #555;
        }

        .box .buy-button {
            background-color: #006400;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .box .buy-button:hover {
            background-color: #004d00;
        }

        
        /* Video background */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            object-fit: fill;
            object-position: center;
        }

        /* Optional overlay for better readability */
        .video-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        
    </style>
</head>
<body>
    <!-- Video Background -->
    <video autoplay muted loop class="video-bg">
        <source src="background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
        
    <h1>We are glad to have you here.</h1>
    
    <div class="box-container">
        <!-- Box 1 with Image, Details, and Button -->
       <div class="box" >
            <img src="aset/Z1.webp" alt="Image 1">
            <div class="image-title">Peace Lily</div>
            <div class="details">
            The Peace Lily is a beautiful, low-maintenance plant with lush green leaves, striking white blooms, and air-purifying qualities, perfect for any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/peace-lily-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z4.png" alt="Image 2">
            <div class="image-title">Bamboo Palm</div>
            <div class="details">
            The Bamboo Palm is a lush, low-light plant with graceful, slender stems and air-purifying qualities, ideal for adding a tropical touch to indoor spaces.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/bamboo-palm-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z62.png" alt="Image 3">
            <div class="image-title">Variegated Jade Mini</div>
            <div class="details">
            The Variegated Jade Mini Plant is a charming succulent with green leaves edged in cream, perfect for adding elegance and simplicity to indoor spaces.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/variegated-jade-mini-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z8.png" alt="Image 1">
            <div class="image-title">Ficus Bonsai</div>
            <div class="details">
            The Ficus Bonsai is a miniature tree with intricate roots and glossy leaves,artistic touch to any indoor setting. Perfect for adding nature's elegance to small spaces.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/ficus-bonsai-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z9.png" alt="Image 1">
            <div class="image-title">Syngonium pink</div>
            <div class="details">
            The Syngonium Pink Plant features heart-shaped leaves with a soft pink hue, bringing a vibrant and delicate charm to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/syngonium-pink-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z10.png" alt="Image 1">
            <div class="image-title">Peacock </div>
            <div class="details">
            The Peacock Plant boasts vibrant, patterned leaves with rich colors, adding an exotic touch to any indoor space. Its striking appearance brings lively charm and visual interest.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/peacock-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z11.png" alt="Image 1">
            <div class="image-title">Money Tree</div>
            <div class="details">
            The Money Tree is a low-maintenance plant with shiny, palm-like leaves and a braided trunk. It symbolizes good luck and adds elegance to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/money-tree', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z12.png" alt="Image 1">
            <div class="image-title">Rubber</div>
            <div class="details">
            The Rubber Plant features large, glossy leaves and a robust, upright growth habit, adding a touch of elegance and a lush, green vibe to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/rubber-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z13.png" alt="Image 1">
            <div class="image-title">Zamia ZZ Black </div>
            <div class="details">
            The Zamia ZZ Black is a striking, low-maintenance plant with dark, glossy leaves that add a dramatic and sophisticated touch to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/zamia-zz-black-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z14.webp" alt="Image 1">
            <div class="image-title">Aglaonema Read</div>
            <div class="details">
            The Aglaonema Red showcases bold, red-tinged leaves with a glossy finish. Its vibrant appearance adds a dynamic touch to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/aglaonema-red-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z15.webp" alt="Image 1">
            <div class="image-title">Calathea Sanderiana</div>
            <div class="details">
            The Calathea Sanderiana, or Zebra Plant, has bold, striped leaves with striking patterns. Its unique design adds exotic elegance to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/calathea-sanderiana', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z16.png" alt="Image 2">
            <div class="image-title">Ixora (Rugmini) Yellow</div>
            <div class="details">
            The Ixora (Rugmini) Yellow features vibrant yellow flower clusters and lush green leaves. Its bright blooms add a cheerful touch to any space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/ixora-rugmini-plant-yellow', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z56.png" alt="Image 3">
            <div class="image-title">Lucky Bomboo</div>
            <div class="details">
            Lucky Bamboo features sleek green stalks and lush leaves. It symbolizes good fortune and adds a touch of elegance to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/lucky-bamboo-plant-3-layer-1', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z18.png" alt="Image 1">
            <div class="image-title">Ixora (Rugmini) Pink </div>
            <div class="details">
            The Ixora (Rugmini) Pink showcases vibrant pink flower clusters with lush green foliage. Its bright and cheerful blooms bring a lively touch to any space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/ixora-rugmini-plant-pink', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z19.png" alt="Image 1">
            <div class="image-title">Red Bromeliad</div>
            <div class="details">
            The Red Bromeliad features striking, vibrant red bracts with a rosette of green foliage. Its bold color and unique shape add a dramatic touch to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/red-bromeliad', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z25.png" alt="Image 1">
            <div class="image-title">Netted Ficustree</div>
            <div class="details">
            The Netted Ficus Tree has dense, dark green foliage with a unique net-like leaf pattern. Its distinctive look adds elegance to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/netted-ficus-tree', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z28.png" alt="Image 1">
            <div class="image-title">Air Purufying</div>
            <div class="details">
            Air-purifying plants help remove toxins and improve indoor air quality. They add a natural touch of greenery while enhancing the environment.
            </div>
            <button class="buy-button" onclick="window.open('https://www.ugaoo.com/products/air-purifying-plant-bundle-areca-palm-sansevieria-futura-superba', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z27.png" alt="Image 1">
            <div class="image-title">Fittonia Pink</div>
            <div class="details">
            Fittonia Pink features vibrant pink and green foliage with a striking, veined pattern. Its colorful leaves add a lively touch to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/fittonia-pink-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z20.webp" alt="Image 1">
            <div class="image-title">Roes</div>
            <div class="details">
            Roses are classic flowers known for their elegant, fragrant blooms in various colors. They add timeless beauty and romance to any garden or indoor setting.
            </div>
            <button class="buy-button"  onclick="window.open('https://vermiorganics.co/products/rose-pink-plant?variant=48930605695256&currency=INR&utm_medium=product_sync&utm_source=google&utm_content=sag_organic&utm_campaign=sag_organic&gad_source=1&gbraid=0AAAAAqbF5LeJ8ObTH8H12wrfaeicLTJ4X&gclid=Cj0KCQjw_sq2BhCUARIsAIVqmQvIxPzp2594_pomXmIySYAOMSqJejyXxwObk77AUUfNaFUyJGevgk0aAg14EALw_wcB', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z30.png" alt="Image 1">
            <div class="image-title">Button Fern</div>
            <div class="details">
            The Button Fern features delicate, rounded leaflets and a lush, feathery appearance. Its compact size and graceful foliage add elegance to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/fern-button-plant-for-environment-day-gifting', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z34.png" alt="Image 1">
            <div class="image-title">Broken Heart</div>
            <div class="details">
            The Broken Heart plant has striking, heart-shaped leaves with unique variegated patterns. Its bold foliage adds charm and intrigue to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/broken-heart-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z31.png" alt="Image 2">
            <div class="image-title">Dracaena Coffee(Fragrans)</div>
            <div class="details">
            Dracaena Coffee (Fragrans) features glossy, dark green leaves with a sturdy, upright growth habit. Its elegant appearance adds a sophisticated touch to any indoor setting.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/dracaena-coffee-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z32.png" alt="Image 3">
            <div class="image-title">Aechmea Fasciata</div>
            <div class="details">
            Aechmea Fasciata, or the Silver Vase Plant, boasts striking silver-gray foliage and a vibrant pink flower spike. Its unique look adds a dramatic touch to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/aechmea-fasciata-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z37.png" alt="Image 1">
            <div class="image-title">Jade Mini Bonsai</div>
            <div class="details">
            The Jade Mini Bonsai features small, succulent leaves on a compact, intricate tree form. Its unique, charming appearance adds a touch of elegance to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/jade-mini-bonsai', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z63.png" alt="Image 1">
            <div class="image-title">Monstera Peru</div>
            <div class="details">
            Monstera Peru features deep, textured leaves with unique, rugged patterns. Its striking foliage adds an exotic and bold touch to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/monstera-peru-green', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z41.png" alt="Image 1">
            <div class="image-title">Heart Hoyo</div>
            <div class="details">
            Heart Hoyo has heart-shaped leaves with a glossy, vibrant green hue. Its charming foliage adds a touch of elegance and affection to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/heart-hoya-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z61.png" alt="Image 1">
            <div class="image-title">Elongated Cactus</div>
            <div class="details">
            The Elongated Cactus has tall, ribbed stems with a distinctive shape. Its unique appearance and low-maintenance nature make it a striking indoor plant.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/elongated-cactus-plant-variegated', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z46.png" alt="Image 1">
            <div class="image-title">Lemon Grass</div>
            <div class="details">
            Lemon Grass has tall, slender stalks with a fresh, citrusy scent. It adds a vibrant, aromatic touch to any indoor garden or kitchen space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/lemon-grass', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z50.png" alt="Image 1">
            <div class="image-title">Aglaonema Queen</div>
            <div class="details">
            Aglaonema Queen features elegant silver-green leaves with dark green patterns. Its refined appearance adds sophistication to any indoor space.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/aglaonema-queen-plant', '_blank');">Buy Now</button>
        </div>
        <div class="box" >
            <img src="aset/Z51.webp" alt="Image 1">
            <div class="image-title">Snake</div>
            <div class="details">
            The Snake Plant, also known as Sansevieria, has tall, upright leaves with striking patterns. It’s known for its low maintenance and air-purifying qualities.
            </div>
            <button class="buy-button"  onclick="window.open('https://www.ugaoo.com/products/sansevieria-gold-flame-snake-plant', '_blank');">Buy Now</button>
        </div>
        <!-- Add more boxes as needed -->
    </div>

</body>
</html>
