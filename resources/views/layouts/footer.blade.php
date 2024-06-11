<div class="footer bg-light py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Manchester City Football Club is an English football club based in Manchester, that competes in the Premier League.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/news') }}">News</a></li>
                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                    <li><a href="{{ url('/players') }}">Players</a></li>
                    <li><a href="{{ url('/club') }}">Club</a></li>
                    <li><a href="{{ url('/faq') }}">FAQ</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <address>
                    Etihad Stadium<br>
                    Ashton New Rd<br>
                    Manchester M11 3FF
                </address>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <p>&copy; 2024 Manchester City Football Club. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .footer {
        background-color: #A6C7E4 !important;
        color: #003566;
    }
    .footer h5 {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .footer p, .footer address {
        font-size: 0.9rem;
    }
    .footer ul {
        padding-left: 0;
        list-style: none;
    }
    .footer ul li {
        margin-bottom: 10px;
    }
    .footer ul li a {
        color: #003566;
        text-decoration: none;
    }
    .footer ul li a:hover {
        text-decoration: underline;
    }
    .footer .container {
        max-width: 1200px;
    }
</style>
