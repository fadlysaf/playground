@extends('app')

@section('content')
    <section id="hero-banner">
        <div class="container">
            <div class="hero-layout">
                <div class="title-banner">
                    <h1 style="color: black;">Welcome to the Hero Banner</h1>
                    <p style="color: grey;">This is a simple hero banner section.</p>
                    <a href="#" class="cta-button button-white">Get Started</a>
                    <a href="#" class="cta-button button-transparent">Learn More</a>
                </div>
                {{-- <div class="image-banner">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGdoBOPkOT0RU8MbfEpKc0vdsJ58Ttobz5pKb3xD3bxeVN2PfqCxZxOi0&s=10"
                        alt="Hero Image" width="200px" height="200px">
                </div> --}}
            </div>
        </div>
    </section>
    <section id="content-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1783273234637-540c3bf66d6d?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Content Image">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">Content Title</h1>
                            <p class="card-text" style="color: grey;">This is a simple content section.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-overlay">
                        <img src="https://images.unsplash.com/photo-1783273234637-540c3bf66d6d?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Content Image">
                        <div class="card-body">
                            <h1 class="card-title">Content Title</h1>
                            <p class="card-text" style="color: grey;">This is a simple content section.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
