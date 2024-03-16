<nav class="navbar navbar-expand-lg end-0 start-0 bg-dark sticky-top" data-bs-theme="dark">
    <div class="container">
        <a href="/" wire:navigate class="navbar-brand">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row d-lg-none pt-5">
                @include('partials.navbar-menu')
            </div>    
        </div>
    </div>
</nav>