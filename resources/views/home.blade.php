@extends('layouts.main')

@section('content')
    <div class="jumbotron text-center" id="home">
        <img src="assets/foto.jpg" class="rounded-circle img-thumbnail" alt="Leonard Wangka" width="200px">
        <h1 class="display-4">Leonard Wangka</h1>
        <p class="lead">Student | Web Enthusiast</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,64L60,101.3C120,139,240,213,360,208C480,203,600,117,720,80C840,43,960,53,1080,96C1200,139,1320,213,1380,250.7L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="about" id="about">
        
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col" data-aos="fade-down" data-aos-offset="300" data-aos-duration="1000">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1500">
                    <p>Hello World! I'm Leonard Wangka, i was born on 18 September 2006. I study at SMK Negeri 1
                        Rangkasbitung.</p>
                </div>
                <div class="col-md-4" data-aos="fade-left" data-aos-offset="300" data-aos-duration="1500"
                    data-aos-delay="200">
                    <p>I'm passionate about Web Technologies and I'm still learning many programming languages to build
                        more powerful websites.</p>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1500">
                    <p>I'm currently an intern at Newton Cipta Informatika.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1"
                d="M0,32L60,37.3C120,43,240,53,360,53.3C480,53,600,43,720,74.7C840,107,960,181,1080,192C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="projects" id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col" data-aos="fade-down" data-aos-offset="300" data-aos-duration="2000">
                    <h2>My Projects</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/project1.png" class="card-img-top" alt="Project1">
                        <div class="card-body">
                            <p class="card-text">Website about buying land on mars, this website uses JavaScript and
                                MongoDB database.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/project2.png" class="card-img-top" alt="Project2">
                        <div class="card-body">
                            <p class="card-text">Website about favorite movies, this website uses JavaScript API method
                                to change URL into movie card and MongoDB database.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/project3.png" class="card-img-top" alt="Project3">
                        <div class="card-body">
                            <p class="card-text">Website about travel, this website uses PHP and MYSQL database.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,256L60,213.3C120,171,240,85,360,85.3C480,85,600,171,720,218.7C840,267,960,277,1080,245.3C1200,213,1320,139,1380,101.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="contact" id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col" data-aos="fade-down" data-aos-offset="200" data-aos-duration="2500">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/pesan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="nama" class="form-control" id="name" aria-describedby="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Message:</label>
                            <textarea class="form-control" name="pesan" id="pesan" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#00c8ff" fill-opacity="1"
                d="M0,128L60,122.7C120,117,240,107,360,128C480,149,600,203,720,197.3C840,192,960,128,1080,122.7C1200,117,1320,171,1380,197.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>
    <footer class="footer text-center pb-3">
        <p>Created by <a href="https://www.instagram.com/leonardw._" class="text-white fw-bold">Leonard
                Wangka</a></p>
    </footer>
@endsection