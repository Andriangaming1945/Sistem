<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        section{
            width: 100%;
            height: 100vh;
            background-image: url(images/bg.png);
            background-size: cover;
            background-position: center;
        }

        section nav{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            box-shadow: 0 0 10px #039d3b;
            background: white;
            position: fixed;
            left: 0;
            z-index: 100;
        }

        section nav .logo img{
            width: 100px;
            cursor: pointer;
            margin: 8px 0;
            max-width: 100px;
        }

        section nav ul{
            list-style: none;
        }

        section nav li{
            display: inline-block;
            padding: 0 10px;
        }

        section nav li a{
            text-decoration: none;
            color: black;
        }

        section nav li a:hover{
            color: #039d3b;
        }

        section nav .social_icon i{
            margin: 0 5px;
            font-size: 18px;
        }

        section nav .social_icon i:hover{
            color: #039d3b;
            cursor: pointer;
        }

        section .main{
            display: flex;
            align-items: center;
            justify-content: space-around;
            position: relative;
            top: 10%;
        }

        section .main h1{
            position: relative;
            font-size: 55px;
            top: 80px;
            left: 25px;
        }

        section .main h1 span{
            color: #15803d;
        }

        section .main p{
            width: 650px;
            text-align: justify;
            line-height: 22px;
            position: relative;
            top: 125px;
            left: 25px;
        }

        section .main .main_tag .main_btn{
            background: #039d3b;
            padding: 10px 20px;
            position: relative;
            top: 200px;
            left: 25px;
            color: #fff;
            text-decoration: none;
        }

        section .main .main_img img{
            width: 780px;
            position: relative;
            top: 90px;
            left: 20px;

        }

        .services{
    width: 100%;
    height: auto;
    margin: 35px 0;
}

.services .services_box{
    width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.services .services_box .services_card{
    text-align: center;
    width: 310px;
    height: auto;
    box-shadow: 0 0 8px #15803d;
    padding: 15px 10px;
}

.services .services_box .services_card i{
    color: #039d3b;
    font-size: 45px;
    margin-bottom: 15px;
    cursor: pointer;
}

.services .services_box .services_card h3{
    margin-bottom: 10px;
}


         .about{
            width: 100%;
            height: auto;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-around;
         }

         .about .about_image img{
            width: 800px;
         }

         .about .about_tag h1{
            font-size: 50px;
            position: relative;
            bottom: 35px;
         }

         .about .about_tag p{
            line-height: 22px;
            width: 650px;
            text-align: justify;
            margin-bottom: 15px;
         }

         .about .about_tag .about_btn{
            padding: 10px 20px;
            background: #15803d;
            color: #fff;
            text-decoration: none;
            position: relative;
            top: 50px;
         }

         .featured_boks{
    width: 100%;
    height: 100vh;
    padding: 70px 0;
}

.featured_boks h1{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 45px;
}

.featured_boks .featured_book_box{
    width: 95%;
    height: 60vh;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    overflow: hidden;
    overflow-x: scroll;
}

.featured_boks .featured_book_box .featured_book_card{
    width: 250px;
    height: 420px;
    text-align: center;
    padding: 5px;
    border: 1px solid #919191;
    margin: auto 20px;
}

.featured_boks .featured_book_box .featured_book_card:hover{
    box-shadow: 0 0 5px #15803d;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_img img{
    width: 150px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag h2{
    margin: 12px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .writer{
    color: #919191;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .categories{
    color: #15803d;
    margin-top: 8px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price{
    margin-top: 8px;
    font-weight: bold;
    margin-bottom: 15px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price sub{
    font-weight: 100;
    padding: 0 5px;
}

.featured_boks .featured_book_box .featured_book_card .featurde_book_tag .f_btn{
    padding: 8px 20px;
    border: 2px solid #16a34a;
    text-decoration: none;
    color: #000;
}

::-webkit-scrollbar{
    width: 10px;
    height: 5px;
}

::-webkit-scrollbar-track{
    box-shadow: inset 0 0 8px rgba(0,0,0,0.2);
}

::-webkit-scrollbar-thumb{
    background: #16a34a;
    border-radius: 10px;
}


.reviews{
    width: 100%;
    height: auto;
}

.reviews h1{
    text-align: center;
    font-size: 50px;
    margin-top: 55px;
}

.reviews .review_box{
    width: 95%;
    height: 50vh;
    margin: 15px auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.reviews .review_box .review_card{
    width: 400px;
    height: 320px;
    box-shadow: 0 0 8px #16a34a;
    padding: 15px;
    margin: 0 12px;
}

.reviews .review_box .review_card i{
    float: right;
    font-size: 120px;
    position: relative;
    bottom: 20px;
    color: #eaeaea;
}

.reviews .review_box .review_card .card_top img{
    width: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.reviews .review_box .review_card .card p{
    margin: 10px 0 10px 0;
    text-align: justify;
    line-height: 22px;
}

.reviews .review_box .review_card .card .review_icon i{
    font-size: 16px;
    float: left;
    margin-top: 20px;
    color: #16a34a;
    padding: 0 1px;
}




/*Banner*/

.banner{
    width: 100%;
    height: 50vh;
    background-image: url(images/banner.jpg);
    background-size: cover;
    background-position: center;
}

.banner .banner_btn{
    padding: 8px 20px;
    background: #16a34a;
    text-decoration: none;
    color: #fff;
    position: relative;
    top: 70%;
    left: 7%;
}




/*Blog*/

.blog{
    width: 100%;
    height: auto;
    margin: 25px 0;
}

.blog h1{
    text-align: center;
    font-size: 50px;
    margin-bottom: 30px;
}

.blog .blog_box{
    width: 95%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.blog .blog_box .blog_card{
    margin: 0 auto;
    width: 450px;
    height: auto;
    box-shadow: 0 0 8px rgba(0,0,0,0.5);
}

.blog .blog_box .blog_card .blog_img{
    width: 450px;
    height: 300px;
    overflow: hidden;
}

.blog .blog_box .blog_card .blog_img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.blog .blog_box .blog_card .blog_tag{
    padding: 20px;
}

.blog .blog_box .blog_card .blog_tag h2{
    color: #089da1;
}

.blog .blog_box .blog_card .blog_tag p{
    margin-top: 10px;
    text-align: justify;
    line-height: 22px;
}

.blog .blog_box .blog_card .blog_tag .blog_icon{
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #16a34a;
    cursor: pointer;
}




/*Footer*/

footer{
    width: 100%;
    background: #eaeaea;
}

footer .footer_main{
    width: 100%;
    display: flex;
    justify-content: space-around;
}

footer .footer_main .tag{
    margin: 10px 0;
}

footer .footer_main .tag img{
    width: 100px;
    margin-bottom: 10px;
}

footer .footer_main .tag p{
    width: 250px;
    line-height: 22px;
    text-align: justify;
}

footer .footer_main .tag h1{
    font-size: 25px;
    margin: 25px 0;
    color: #000;
}

footer .footer_main .tag a{
    display: block;
    color: black;
    text-decoration: none;
    margin: 10px 0;
}

footer .footer_main .tag i{
    margin-right: 10px;
}

footer .footer_main .tag .social_link i{
    margin: 0 5px;
}

footer .footer_main .tag .search_bar{
    width: 230px;
    height: 30px;
    background: rgba(202,202,202);
    border-radius: 25px;
}

footer .footer_main .tag .search_bar input{
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
}

footer .footer_main .tag .search_bar button{
    padding: 7px 15px;
    background: #16a34a;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
}

footer .end{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
}

footer .end span{
    color: #16a34a;
    margin-left: 10px;
}


    </style>
</head>
<body>
    <section>

        <nav>

            <div class="logo">
                <img src="images/library.png" alt="">
            </div>

            <ul>
                <li><a href="{{route('user')}}">Home</a></li>

                <li><a href="{{url('buku')}}">Collection Books</a></li>
              
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>

            <div class="social_icon">
               <h3>{{Auth::user()->nama_lengkap}}</h3>
            </div>

        </nav>

        <div class="main">

            <div class="main_tag">
                <h1>WELCOME TO<br><span>BOOK STORE</span></h1>

                <p>
                    Toko Buku kami menyediakan beragam koleksi buku terbaik untuk Anda. 
                Dari novel fiksi hingga buku non-fiksi yang informatif, kami memiliki 
                segala yang Anda butuhkan untuk memperluas wawasan dan hiburan Anda.
                </p>
                <a href="#" class="main_btn">Learn More</a>

            </div>

            <div class="main_img">
                <img src="images/table.png">
            </div>

        </div>

    </section>




    <!--Services-->

    <div class="services">

        <div class="services_box">

            <div class="services_card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                    Kami memberikan layanan pengiriman yang cepat dan andal untuk memastikan 
                Anda mendapatkan buku-buku Anda tepat waktu. 
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Services</h3>
                <p>
                    Layanan pelanggan kami tersedia 24 jam sehari, 7 hari seminggu, untuk 
                membantu Anda dengan pertanyaan atau masalah apa pun yang Anda miliki.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-tag"></i>
                <h3>Best Deal</h3>
                <p>
                    Kami menawarkan penawaran terbaik untuk harga buku yang kompetitif, 
                sehingga Anda dapat mendapatkan nilai terbaik untuk uang Anda.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-lock"></i>
                <h3>Secure Payment</h3>
                <p>
                    Proses pembayaran Anda aman dan terjamin. Kami menggunakan sistem pembayaran 
                    yang aman untuk melindungi informasi pribadi Anda.
                </p>
            </div>

        </div>

    </div>




    <!--About-->

    <div class="about">

        <div class="about_image">
            <img src="images/about.png">
        </div>
        <div class="about_tag">
            <h1>About Us</h1>
            <p>
                Toko Buku kami telah berdiri sejak tahun 2005, dengan komitmen untuk 
                menyediakan bahan bacaan berkualitas kepada pelanggan kami. Kami berdedikasi 
                untuk memberikan layanan terbaik dan membuat pengalaman berbelanja buku Anda 
                menjadi menyenangkan dan bermanfaat.
            </p>
            <a href="#" class="about_btn">Learn More</a>
        </div>

    </div>

   
    

    <!--reviews-->

    <div class="reviews">
        <h1>Reviews</h1>

        <div class="review_box">

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="images/review_1.png">
                </div>
                <div class="card">
                    <h2>John Deo</h2>
                    <p> "Toko Buku ini sangat mengagumkan! Pelayanannya cepat dan bukunya berkualitas. Sangat direkomendasikan!"
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="images/review_2.png">
                </div>
                <div class="card">
                    <h2>Sarah</h2>
                    <p> "Toko Buku ini sangat mengagumkan! Pelayanannya cepat dan bukunya berkualitas. Sangat direkomendasikan!"
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="images/review_3.png">
                </div>
                <div class="card">
                    <h2>Hikaru</h2>
                    <p> "Toko Buku ini sangat mengagumkan! Pelayanannya cepat dan bukunya berkualitas. Sangat direkomendasikan!"
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="images/review_4.png">
                </div>
                <div class="card">
                    <h2>Aimi</h2>
                    <p> "Toko Buku ini sangat mengagumkan! Pelayanannya cepat dan bukunya berkualitas. Sangat direkomendasikan!"
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!--Banner-->

    <div class="banner">
        <a href="#" class="banner_btn">Learn More</a>
    </div>





    <!--Blog-->
    
    <div class="blog">
        <h1>Our Blog</h1>
        <div class="blog_box">

            <div class="blog_card">
                <div class="blog_img">
                    <img src="images/blog_1.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Membaca buku memiliki banyak manfaat. Simak artikel kami untuk mengetahui lebih lanjut tentang manfaat membaca.
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="images/blog_2.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Membaca buku memiliki banyak manfaat. Simak artikel kami untuk mengetahui lebih lanjut tentang manfaat membaca.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="images/blog_3.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Membaca buku memiliki banyak manfaat. Simak artikel kami untuk mengetahui lebih lanjut tentang manfaat membaca.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="images/library.png">
                <p>
                    Toko Buku kami menyediakan beragam koleksi buku terbaik untuk Anda. Dari novel fiksi hingga buku non-fiksi yang informatif, kami memiliki segala yang Anda butuhkan untuk memperluas wawasan dan hiburan Anda.
                </p>
                </p>

            </div>

            <div class="tag">
                <h1>Link</h1>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Collection Books</a>
                
                
            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 12 345 6789</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 699</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>
                
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>                
            </div>            
            
        </div>

       

    </footer>





</body>
</html>