
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Album</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #031c36ff;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #502c3aff, #4a9153ff);
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .page-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 1rem;
        }

        .page-links a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .page-links a:hover, .page-links a.active {
            background-color: white;
            color: #2c3e50;
        }

        .category-section {
            display: none;
            padding: 2rem 1rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .category-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #2c3e50;
            font-size: 2rem;
            position: relative;
            padding-bottom: 10px;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #3498db, #2c3e50);
        }

        .category-description {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 2rem;
            padding: 0 1rem;
            color: #555;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            padding: 0 1rem;
        }

        .gallery-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .photo-info {
            padding: 15px;
        }

        .photo-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: #2c3e50;
            font-size: 1.1rem;
        }

        .photo-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        footer {
            text-align: center;
            padding: 2rem 1rem;
            background-color: #2c3e50;
            color: white;
            margin-top: 3rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 20px;
            }
            
            .page-links {
                gap: 5px;
            }
            
            .page-links a {
                padding: 6px 12px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            h2 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>My Photo Album</h1>
        <h3>TAVERA ASHLEY</h3>
        <div class="page-links">
            <a href="#" class="nav-link active" data-target="photos">content expect to view!</a>
            <a href="#" class="nav-link" data-target="home-town">favorite place</a>
            <a href="#" class="nav-link" data-target="favorite-food">favorite food</a>
            <a href="#" class="nav-link" data-target="favorite-anime">Favorite Anime</a>
            <a href="#" class="nav-link" data-target="Hobbies">Hobbies</a>
        </div>
    </header>

    <!-- Nature Section -->
    <section id="photos" class="category-section active">
        <h2>Foodiesss</h2>
        <div class="category-description">
            “You should know about me more!!”
        <div class="gallery">
            <!-- 20 Nature Photos -->
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg" />
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“Fastest way to kill your body.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1475059886/photo/pasta-spaghetti-with-meat-ball-in-tomato-sauce-top-view.jpg?b=1&s=612x612&w=0&k=20&c=9VEuXMlOsLtnNMkTWKmEn5qGaXZsMfNyDCv0YiDutMo="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“ My Favourite.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1960974311/photo/many-different-products-on-white-table-flat-lay-natural-sources-of-serotonin.jpg?b=1&s=612x612&w=0&k=20&c=MaKLvke0URxJct99yFMmouXkOBAKTXLnDEdrkay8A7o="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“FRUITS.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1149135424/photo/group-of-sweet-and-salty-snacks-perfect-for-binge-watching.jpg?b=1&s=612x612&w=0&k=20&c=xEH1XGQwJLk14RiXYb2y0DrJ0MLl6kUqAaf95hKqHEs="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“JUNK FOODS”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1276645382/photo/chocolate-assortment-background-top-view-of-different-kinds-of-chocolate.jpg?b=1&s=612x612&w=0&k=20&c=ZQ8Hgeb3akXbi3d6faOrGi902WgGs50LyCX6ueG0_I0="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“Chocolate”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1443993866/photo/french-fries-with-ketchup-and-cocktail-sauce.jpg?b=1&s=612x612&w=0&k=20&c=hEwhh1Z4THSXdw8_fai5cn2FZLs9suI3yFeBvY92hhw="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“FRIES”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1412854156/photo/strawberries-isolated-strawberry-whole-and-a-half-on-white-background-strawberry-slice-with.jpg?b=1&s=612x612&w=0&k=20&c=zTWv_RCMlSfr4ATR45uYGFCRMCp8AoBiBCEO_P6XK1Q= "/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“STRAWBERRIES”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/185262648/photo/red-apple-with-leaf-isolated-on-white-background.jpg?b=1&s=612x612&w=0&k=20&c=acFVqLYdwzZQ4WQRre3MUKW9PCMewLldoMVEXLyplkM="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“APPLE.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1367375529/photo/philippines.jpg?b=1&s=612x612&w=0&k=20&c=NDJoTg0NLbz3o4qRUjfcuW4lyqKQg4EOADdxn4VJzvI="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“Paradise island.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/148776353/photo/white-boat-on-a-tropical-beach.jpg?b=1&s=612x612&w=0&k=20&c=ugSxiUsC489sFshysHUMXoeZBuo1AbUUzykc7JOZkbw="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“Staycation i want.”</div>
                </div>
            </div>
                        <div class="gallery-item">
                <img src="https://media.istockphoto.com/id/1195001240/photo/aerial-shot-paradise-beach-bantayan-island-north-cebu-philippines.jpg?b=1&s=612x612&w=0&k=20&c=yun2NEZylJi2T7OzzCqzjPXQBCLHhuLkn2knpXFuxMY="/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“bantayan island the place i want to visit.”</div>
                </div>
            </div>
            <!-- Additional 10 nature photos would go here -->
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BMWU1OGEwNmQtNGM3MS00YTYyLThmYmMtN2FjYzQzNzNmNTE0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“demon slayer.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.lingualift.com/wp-content/uploads/2020/03/anime.png"/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“anime.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.baronnews.com/wp-content/uploads/2021/01/anime-small-1000x667.jpg"/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“Main characterss anime.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="data:image/jpeg;base64,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"/>
                <div class="photo-info">
                    <div class="photo-title">M</div>
                    <div class="photo-description">“cube.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.shutterstock.com/image-photo/freeze-motion-wok-pan-flying-260nw-2433034325.jpg"/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“cooking”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="data:image/jpeg;base64,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"/>
                <div class="photo-info">
                    <div class="photo-title"></div>
                    <div class="photo-description">“games.”</div>
                </div>
            </div>
           
            
        </div>
    </section>

    <!-- Architecture Section -->
    
    <section id="home-town" class="category-section">
        <h2>placaes that i want Photos</h2>
        <div class="category-description">
           Bantayan Island, located at the northern tip of Cebu, is a serene paradise known for its white-sand beaches, crystal-clear waters, and friendly locals. Rich in culture and tradition, the island offers a peaceful escape, where visitors can enjoy stunning sunsets, vibrant fishing villages, and the simple beauty of island life.
        </div>
        <div class="gallery">
            <!-- 20 Architecture Photos -->
            <div class="gallery-item">
                <img src="https://www.nopostcode.com/wp-content/uploads/2022/04/Paradise-Beach-Bantayan-6.jpg" alt="Architecture Photo 1">
                <div class="photo-info">
                    <div class="photo-title">Bantayan Island Beach</div>
                    <div class="photo-description">“Soft white sand beneath the palms — a perfect moment on Bantayan Island where time seems to slow.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.moalboalecolodge.com/uploads/7/1/0/0/71000831/img20220301103636_orig.jpg" alt="Architecture Photo 2">
                <div class="photo-info">
                    <div class="photo-title">Historic Cathedral</div>
                    <div class="photo-description">“Rows of coconut trees whispering in the breeze: the island’s steady guardians of peaceful shores.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://d3hukd8e3cn3kb.cloudfront.net/images/posts/sunsetwithu/cover.jpg" alt="Architecture Photo 3">
                <div class="photo-info">
                    <div class="photo-title">Sunset Seascape</div>
                    <div class="photo-description">“Pastel sky reflecting on the ocean, capturing the magical hour before nightfall.”</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://iloilo.gov.ph/sites/default/files/2024-06/BANTAY-DAGAT-NABS-ILLEGAL-FISHERS-FROM-BANTAYAN-ISLAND-CEBU.jpg" alt="Architecture Photo 4">
                <div class="photo-info">
                    <div class="photo-title">Modern House</div>
                    <div class="photo-description">Clean lines and minimalist design in this contemporary residential architecture.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://theadventurer.video.blog/wp-content/uploads/2019/04/2019-04-04-11-55-36-10043652201592971147.jpg?w=640" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Suspension Bridge at Night</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
            <!-- Additional 15 architecture photos would go here -->
              <div class="gallery-item">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/55/97/3e/ogtong-cave-resort.jpg?h=500&s=1&w=900" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Ogtong Cave Resort</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://res.klook.com/image/upload/w_750%2Ch_469%2Cc_fill%2Cq_85/w_80%2Cx_15%2Cy_15%2Cg_south_west%2Cl_Klook_water_br_trans_yhcmh3/activities/qrdrvazewadua9rcxw00.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Island Adventure Activity</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://www.nopostcode.com/wp-content/uploads/2022/04/Virgin-Island-Bantayan-19.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Virgin Island</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://i.ytimg.com/vi/3kNGOPzRR-Y/hq720.jpg?rs=AOn4CLDAcvI5yvnq7y0vcsPPyjP9UD-7zw&sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Island Shoreline Drone View</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://thetravellingfool.com/wp-content/uploads/2013/08/church-3-1-of-1.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Historic Church</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://www.thisissoutheastasia.com/wp-content/uploads/2025/01/Field-640x360.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Island Fields</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://i.ytimg.com/vi/W2YhXlBzbPI/mqdefault.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Urban Bridge View</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://www.nopostcode.com/wp-content/uploads/2022/05/Bantayan-Tourist-Spots-16.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Bantayan Island Tour Scene</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://www.nopostcode.com/wp-content/uploads/2022/04/The-Ruins-Bantayan-2.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Seaside Resort</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://cdn.create.vista.com/api/media/small/163216556/stock-video-video-showing-coconut-palm-trees-set-bantayan-island-sunset-crescent?token=&videoStaticPreview=true" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Scenic Island Bay</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://nolisoli.ph/wp-content/uploads/2023/06/Bantayan-Island-tricycle-jeep-tour-nolisoliph.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Coconut Palms at Sunset</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://live.staticflickr.com/1620/25413212661_95e1e1204c_b.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Local Lifestyle Shot</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://lillagreen.com/wp-content/uploads/2024/03/Bantayan-Philippines-Travel-Guide-03.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Local Lifestyle Shot</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://travelinsighter.com/wp-content/uploads/2024/11/Bantayan-Island-2.jpg.webp" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Bantayan Travel Guide View</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://live.staticflickr.com/7141/6682239453_afd7d6311c_b.jpg" alt="Architecture Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Beachfront Leisure</div>
                    <div class="photo-description">Elegant suspension bridge spanning a wide river with city lights in the background.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Animals Section -->
    <section id="favorite-food" class="category-section">
        <h2>Food Photos</h2>
        <div class="category-description">
           Filipino food is one of my favorites because it is full of flavor, color, and culture. Each dish has a unique taste and story that reminds me of home, family, and special celebrations. From savory dishes like adobo and sinigang to sweet treats like leche flan and halo-halo, Filipino cuisine shows the creativity and warmth of our people. These are some of my favorite Filipino foods and the reasons why I love them.
        </div>
        <div class="gallery">
            <!-- 20 Animal Photos -->
            <div class="gallery-item">
                <img src="https://www.allrecipes.com/thmb/koFD08H_utDaUsNc578_YZ2peFg=/0x512/filters:no_upscale():max_bytes(150000):strip_icc()/8635-southern-fried-chicken-ddmfs_4x3-90736ab31a7a4bb59eb04e2380ccebe7.jpg" alt="Animal Photo 1">
                <div class="photo-info">
                    <div class="photo-title">Fried chicken</div>
                    <div class="photo-description">AFried chicken is my favorite food because it’s crispy, juicy, and always delicious..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmm2lV7Vm3RF061Q-PoYVpUWUKBd15qRqPdw&s" alt="Animal Photo 2">
                <div class="photo-info">
                    <div class="photo-title">Lecheflan</div>
                    <div class="photo-description">Leche flan is my favorite dessert because it’s sweet, creamy, and melts in my mouth..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.nestlegoodnes.com/ph/sites/default/files/styles/1_1_768px_width/public/srh_recipes/442ce059c4c490e1ab61cdaef9c98511.jpg.webp?itok=sKq8qila" alt="Animal Photo 3">
                <div class="photo-info">
                    <div class="photo-title">sinigang</div>
                    <div class="photo-description">I love sinigang because its sour soup always makes me feel warm and comforted..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="data:image/jpeg;base64,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" alt="Animal Photo 4">
                <div class="photo-info">
                    <div class="photo-title">lechon</div>
                    <div class="photo-description">I like lechon because it’s crispy on the outside and juicy inside—perfect for celebrations..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSOwghkLdhvXLY9Vt_q8qbVSdbfPefReZnzw&s" alt="Animal Photo 5">
                <div class="photo-info">
                    <div class="photo-title">pancit canton</div>
                    <div class="photo-description">A tall giraffe reaching for leaves at the top of an acacia tree.</div>
                </div>
            </div>
            <!-- Additional 15 animal photos would go here -->
             <div class="gallery-item">
                <img src="https://barefeetinthekitchen.com/wp-content/uploads/2025/05/Lumpia-BFK-8.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">lumpia</div>
                    <div class="photo-description">I like lumpia because it’s crunchy, flavorful, and fun to dip in sweet sauce..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVHxVonsbUEkZGfTfZEoZgq_nNR6lTfVceEg&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Caldereta</div>
                    <div class="photo-description">I love caldereta because it’s cheesy, meaty, and full of flavor..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgeSIhB4CSqTg3ldHEAfdEzKodU2EQZAuqSg&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Bibingka</div>
                    <div class="photo-description">I enjoy bibingka because it’s soft, warm, and perfect during Christmas time..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl3minfwZH-6qxcMA89e3tLh59Ov5zvZ2OuQ&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Dinuguan</div>
                    <div class="photo-description">I love dinuguan because it’s savory, unique, and perfect with rice or puto..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJmaBGcXxD7_Ak3SJtEouO3grWwZs7-vHcrQ&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Bicol Express</div>
                    <div class="photo-description">I like Bicol Express because I love the mix of spiciness and coconut milk..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp9eF6wqBiz8fS9zujBlNEWarxKvZzb4fEVA&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Tortang Talong</div>
                    <div class="photo-description">I like tortang talong because it’s simple, smoky, and tastes great with rice and ketchup..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.simpol.ph/wp-content/uploads/2025/06/BEEF-PARES.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Pares</div>
                    <div class="photo-description">I enjoy pares because it’s rich, savory, and perfect with garlic rice..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRthmWxok0PF84m10PYPnAmZPmY33p-JBVdfg&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Turon</div>
                    <div class="photo-description">I love turon because it’s sweet, crispy, and filled with banana and caramelized sugar..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_pE45etYqapY7e3pFHeCgbcB1MwaKuqeRuQ&s" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Ginataang Gulay</div>
                    <div class="photo-description">I love ginataang gulay because it’s creamy, healthy, and full of coconut flavor.</div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="https://yummykitchentv.com/wp-content/uploads/2023/01/pork-lomi-recipe-480x270.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Lomi</div>
                    <div class="photo-description">I like lomi because it’s thick, warm, and full of noodles and toppings.</div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="https://cdn-ilddihb.nitrocdn.com/MgqZCGPEMHvMRLsisMUCAIMWvgGMxqaj/assets/images/optimized/rev-9baa5ce/www.goya.com/wp-content/uploads/2023/10/empanadas-beef-turnovers-900x900.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Empanada</div>
                    <div class="photo-description">I enjoy empanada because it’s crunchy on the outside and filled with flavorful meat and veggies inside.</div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="https://www.allrecipes.com/thmb/VEO6KuVL7sO4TY91yYkomH_rGxo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/265040-Filipino-Beef-Giniling-ddmfs-4x3-251-1-ab56932dcb8b4fb78bf6c1b56217962b.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Giniling</div>
                    <div class="photo-description">I love giniling because it’s tasty, easy to eat, and goes perfectly with rice.</div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="https://i0.wp.com/www.angsarap.net/wp-content/uploads/2024/05/Longganisa-Tuguegarao-Wide.jpg?fit=1080%2C720&ssl=1" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Longganisa</div>
                    <div class="photo-description">I enjoy longganisa because it’s sweet, garlicky, and perfect for breakfast.</div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="https://www.kawalingpinoy.com/wp-content/uploads/2021/10/champorado-1.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Champorado</div>
                    <div class="photo-description">I like champorado because it’s chocolatey, warm, and comforting on cold mornings.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Kutsinta.jpg" alt="Food Photo">
                <div class="photo-info">
                    <div class="photo-title">Kutsinta</div>
                    <div class="photo-description">I like kutsinta because it’s chewy, slightly sweet, and delicious with grated coconut.</div>
                </div>
            </div>

            

        </div>

    </section>

    <!-- People Section -->
    <section id="favorite-anime" class="category-section">
        <h2>Favorite Anime</h2>
        <div class="category-description">
            love anime of all kinds, from epic adventures to cozy slice-of-life stories. My hobbies—solving Rubik’s Cubes, creating and editing digital content, reading, journaling, cooking, and fitness—bring that same passion to life. Sharing them online feels like being part of a global anime community, where we connect, inspire each other, and level up together.
        </div>
        <div class="gallery">
            <!-- 20 People Photos -->
            <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BZTNjOWI0ZTAtOGY1OS00ZGU0LWEyOWYtMjhkYjdlYmVjMDk2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 1">
                <div class="photo-info">
                    <div class="photo-title">Naruto</div>
                    <div class="photo-description">I like Naruto because it teaches about never giving up and believing in yourself.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://preview.redd.it/what-is-it-that-makes-one-piece-so-popular-v0-0u2aefrzacmc1.jpeg?width=640&crop=smart&auto=webp&s=677fd91070fcfdd8e1161bb7658b9df751ada98a" alt="People Photo 2">
                <div class="photo-info">
                    <div class="photo-title">One Piece</div>
                    <div class="photo-description">I love One Piece because it’s full of adventure, friendship, and exciting battles.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BNzVjOWEwYjEtNDJhOC00YjUyLThjMWItMDQwZGY1ODM4YzI3XkEyXkFqcGc@._V1_.jpg" alt="People Photo 3">
                <div class="photo-info">
                    <div class="photo-title">Attack on Titan</div>
                    <div class="photo-description">I enjoy Attack on Titan because it’s intense, emotional, and full of mystery.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BMWU1OGEwNmQtNGM3MS00YTYyLThmYmMtN2FjYzQzNzNmNTE0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 4">
                <div class="photo-info">
                    <div class="photo-title">Demon Slayer (Kimetsu no Yaiba)</div>
                    <div class="photo-description">I like Demon Slayer because of its beautiful animation and touching story about family.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=cover,format=auto,quality=85,width=1920/keyart/G6NQ5DWZ6-backdrop_wide" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">My Hero Academia</div>
                    <div class="photo-description">I love My Hero Academia because it’s inspiring and shows that anyone can be a hero.</div>
                </div>
            </div>
            <!-- Additional 15 people photos would go here -->
              <div class="gallery-item">
                <img src="https://images.justwatch.com/poster/251128847/s718/tokyo-revengers.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Tokyo Revengers</div>
                    <div class="photo-description">I like Tokyo Revengers because it’s full of action, loyalty, and second chances.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BMjBlNTExMDAtMWZjZi00MDc5LWFkMjgtZDU0ZWQ5ODk3YWY5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Jujutsu Kaisen</div>
                    <div class="photo-description">I love Jujutsu Kaisen because of its cool fights and strong, funny characters.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BYjYxMWFlYTAtYTk0YS00NTMxLWJjNTQtM2E0NjdhYTRhNzE4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Haikyuu!!</div>
                    <div class="photo-description">I enjoy Haikyuu!! because it’s exciting and shows the power of teamwork and passion.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2-Cn-7TyKjzKaBQdiOuuXJuWtOpwfA0O2XA&s" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Sword Art Online</div>
                    <div class="photo-description">I like Sword Art Online because it mixes gaming, adventure, and love.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/72/Death_Note_Characters.jpg/250px-Death_Note_Characters.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Death Note</div>
                    <div class="photo-description">I love Death Note because it’s smart, thrilling, and full of mind games.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHqFt3ofc2ZvWAGRx9ou2KDi2-zWBUH-UvGQ&s" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Hunter x Hunter</div>
                    <div class="photo-description">I enjoy Hunter x Hunter because of its fun adventures and amazing storylines.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BODlhNTQ3ZDgtMDJlMC00YzdmLWE3ZTMtOWNmMTZkN2I2MzI5XkEyXkFqcGc@._V1_QL75_UY281_CR4,0,190,281_.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Fairy Tail</div>
                    <div class="photo-description">I like Fairy Tail because it’s all about friendship, magic, and never giving up..</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://upload.wikimedia.org/wikipedia/en/6/62/Blue_Exorcist_vol_1.png" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Blue Exorcist</div>
                    <div class="photo-description">I love Blue Exorcist because of its mix of action, humor, and family bonds..</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BZmZkZjNhMWMtM2U0Mi00MjdlLTk3NmMtMTMwZjgwOTJmODMzXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Black Clover</div>
                    <div class="photo-description">I enjoy Black Clover because it’s motivating and full of powerful battles.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BZDkwNjc0NWEtNzJlOC00N2YwLTk4MjktZGFlZDE2Y2QzOWI0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Spy x Family</div>
                    <div class="photo-description">I like Spy x Family because it’s funny, wholesome, and full of secret missions.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1617389215i/55575967.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Chainsaw Man</div>
                    <div class="photo-description">I love Chainsaw Man because it’s wild, dark, and has deep emotional moments.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM6i-DwiJ_EIbNuU4G0DMrWuPmwgyDaZ4XOw&s" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Your Name (Kimi no Na wa)</div>
                    <div class="photo-description">I like Your Name because it’s romantic, emotional, and beautifully animated.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BOTFiNzRiOWEtYTQwNy00NmRiLWE0ZWYtNTE0YjExZjFmZjkwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">A Silent Voice (Koe no Katachi)</div>
                    <div class="photo-description">I love A Silent Voice because it teaches forgiveness and understanding.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://m.media-amazon.com/images/M/MV5BNzMwOGQ5MWItNzE3My00ZDYyLTk4NzAtZWIyYWI0NTZhYzY0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">One Punch Man.</div>
                    <div class="photo-description">BI enjoy One Punch Man because it’s hilarious and full of epic action.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://www.shutterstock.com/image-vector/cartoon-background-transparent-doraemon-nobita-600nw-2364737497.jpg" alt="People Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Doraemon</div>
                    <div class="photo-description">I like Doraemon because it’s fun, nostalgic, and full of creative gadgets.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Miscellaneous Section -->
    <section id="Hobbies" class="category-section">
        <h2>Hobbies photos</h2>
        <div class="category-description">
          I have hobbies that keep me inspired and entertained, from solving Rubik’s Cubes to creating and editing digital content. I also enjoy reading, journaling, cooking, and fitness, which help me relax and grow. Sharing these online lets me connect with others who share the same passions.
        </div>
        <div class="gallery">
            <!-- 20 Miscellaneous Photos -->
            <div class="gallery-item">
                <img src="https://www.lifewire.com/thmb/3qmK8RHqbxNRL-eALfCpKp-121Y=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1552744698-5d5f5ce5139f495482e0c9e2b820f265.jpg" alt="Misc Photo 1">
                <div class="photo-info">
                    <div class="photo-title">Watching Movies</div>
                    <div class="photo-description">I enjoy watching movies because it helps me relax and feel inspired.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://cloudfront-eu-central-1.images.arcpublishing.com/thenational/IXA3CB6DLZDVLICUSKBAKMFGUM.jpg" alt="Misc Photo 2">
                <div class="photo-info">
                    <div class="photo-title">Playing Games</div>
                    <div class="photo-description">I love playing games because it’s exciting and helps me bond with friends.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSJtHaKrsNfbHLA6ezWQxv27jIqxMaHih2ZQ&s" alt="Misc Photo 3">
                <div class="photo-info">
                    <div class="photo-title">Cooking</div>
                    <div class="photo-description">I like cooking because it’s fun to make delicious food and share it with others..</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW_B5r0bFK41Y2wI266qBGM9Y0o5E8fTv-Cg&s" alt="Misc Photo 4">
                <div class="photo-info">
                    <div class="photo-title">Photography</div>
                    <div class="photo-description">I love photography because it allows me to capture beautiful moments and memories forever.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSbEVPgRU0Uh530k1O56abeF1Bpy7pSjhorQ&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Playing Sports</div>
                    <div class="photo-description">I like playing sports because it keeps me active, challenges me, and helps me bond with others.</div>
                </div>
            </div>
            <!-- Additional 15 miscellaneous photos would go here -->
              <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjdHdSI9eyAbfGncz9Go7unD7ktZvuRmyO6w&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Traveling</div>
                    <div class="photo-description">I enjoy traveling because it exposes me to new cultures, foods, and experiences that broaden my perspective.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://i.ytimg.com/vi/H49twuFKwmc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBNAoZQxgTtl4nnkFyS5JC0rVPAjg" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Gaming (video or board games)</div>
                    <div class="photo-description">I like gaming because it’s a mix of strategy, creativity, and entertainment.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://hellscanyon.tours/wp-content/uploads/2023/01/RiverAdventuresInc-214207-Pieces-Fishing-Equipment-blogbanner1.jpg" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Fishing</div>
                    <div class="photo-description">Fishing is relaxing because it allows me to enjoy quiet time and appreciate nature.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://images.pexels.com/photos/237266/pexels-photo-237266.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Nature Photography</div>
                    <div class="photo-description">I enjoy nature photography because capturing landscapes, plants, and animals preserves their beauty forever.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSh8x65G9aVMi6VVJBI5NKQXLkaIhDKYsrlLA&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Camping</div>
                    <div class="photo-description">Camping is enjoyable because sleeping under the stars and being close to nature feels peaceful and freeing.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://sm.pcmag.com/t/pcmag_me/gallery/t/the-best-o/the-best-online-video-editors-for-2025_hrjt.1200.jpg" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Video Editing</div>
                    <div class="photo-description">Creating polished videos for YouTube, TikTok, or Instagram; you enjoy transforming raw clips into engaging stories and seeing how viewers respond.</div>
                </div>
            </div>
             <div class="gallery-item">
                <img src="https://cdn-useast1.kapwing.com/static/CIf-aiimght.webp" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Photo Editing</div>
                    <div class="photo-description">Enhancing images for social media; it’s fun to experiment with filters, color, and composition to make your content pop.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://www.wikihow.com/images/thumb/2/2f/Workout-Routine-for-Beginners-Step-4.jpg/v4-460px-Workout-Routine-for-Beginners-Step-4.jpg" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Fitness / Exercise Routine</div>
                    <div class="photo-description">Personal workouts, yoga, or running; online apps or communities provide tracking, tips, and encouragement.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRewVYLV92mwtu_E0guAzIckdnAim-0gdPzLQ&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Pet Care / Training</div>
                    <div class="photo-description">Taking care of pets; sharing cute moments or tips online connects you with other pet lovers.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ58C-AlLuAmm-gfWGAwX8qkCfQk0gxYa6Pw&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Fashion / Personal Styling</div>
                    <div class="photo-description">Experimenting with clothes and accessories; sharing outfits online lets you get feedback and connect with style communities.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://i.ytimg.com/vi/hdbpgcg3tYI/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDrX5nPnFCglKWth-GxuLPY5dl1lQ" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Sketching / Drawing</div>
                    <div class="photo-description">Relaxing and expressing yourself creatively; sharing your art online can get encouragement and inspiration.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTw_S7UVgcEVEw7mdAuEdENP15j2bEs52Xgw&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">DIY Home Improvement</div>
                    <div class="photo-description">Fixing or decorating your living space; sharing progress online motivates you and inspires others.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREKGGfNIalC-ddv1yADwbfMPem6qXZ__oZMg&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Self-Care Routines / Skincare </div>
                    <div class="photo-description">Personal wellness hobby; sharing tips online can help others and build community.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHsD-SyLZSnCrGQoJhhxlYWxN0Zj2u0GSVfw&s" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">Learning New Skills / Online Course</div>
                    <div class="photo-description">Expanding knowledge; sharing progress or achievements online keeps you accountable.</div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.newscientist.com/wp-content/uploads/2017/06/30133803/pa-30292018.jpg" alt="Misc Photo 5">
                <div class="photo-info">
                    <div class="photo-title">playing rubics cube</div>
                    <div class="photo-description">I like the challenge – Every time I pick up the cube, it’s like solving a new puzzle. I enjoy testing my brain and figuring out the steps to solve it.</div>
                </div>
            </div>
            

        </div>
    </section>

    <footer>
        <p>&copy; 2023 My Photo Album. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set Nature as the default active page
            document.getElementById('photos').classList.add('active');
            
            // Navigation functionality
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links and sections
                    navLinks.forEach(l => l.classList.remove('active'));
                    document.querySelectorAll('.category-section').forEach(section => {
                        section.classList.remove('active');
                    });
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Show the corresponding section
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                    
                    // Scroll to top of the page
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            });
        });
    </script>
</body>
</html>
