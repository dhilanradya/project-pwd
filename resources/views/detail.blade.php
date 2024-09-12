<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail Page</title>
    <link rel="stylesheet" href="{{asset('style_detail.css')}}">
</head>
<body>
    <div class="header">
        <div class="logo">Rell Reter</div>
        <div class="menu">
            <a href="#">Menu</a>
            <select>
                <option value="all">All</option>
                <!-- other options -->
            </select>
            <input type="text" placeholder="Search Rell Reter">
            <div class="account">
                <a href="#">Watchlist</a>
                <a href="#">Sign in</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="movie-detail">
            <div class="poster">
                <img src="storage/img/poster siksa kubur.jpeg" alt="Siksa Kubur" ">
            </div>
            <div class="info">
                <h1>Siksa Kubur</h1>
                <div class="ratings">
                    <div class="rr-rating">
                        <span class="star">&#9733;</span> 7.1 / 10
                    </div>
                    <div class="user-rating">
                        <a href="#">Rate</a>
                    </div>
                </div>
                <div class="trailer">
                    <div class="video-placeholder" ">
                        <span class="play-button">&#9658;</span>
                        <span class="duration">3.02</span>
                    </div>
                    <div class="likes">
                        <span>&#128077;</span> 312
                    </div>
                </div>
                <div class="tags">
                    <span>Drama</span>
                    <span>Horor</span>
                    <span>Trailer</span>
                </div>
                <p>Menceritakan tentang siksa kubur yang terjadi setelah seseorang dikuburkan.</p>
                <div class="details">
                    <div class="detail-item"><strong>Director:</strong> Joko Anwar</div>
                    <div class="detail-item"><strong>Penulis:</strong> Joko Anwar</div>
                    <div class="detail-item"><strong>Bintang:</strong> Faradina Mufti - Reza Rahadian - Widuri Puteri</div>
                </div>
                <button class="watchlist-button">Add to Watchlist</button>
            </div>
        </div>
    </div>
</body>
</html>
