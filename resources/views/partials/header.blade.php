<div id="secondHeader">
    <a href="{{ route('home') }}" class="text-decoration-none d-flex gap-3 text-dark">
        <img class="no-selected align-self-center" width="32px" height="32px" src="{{ asset('./assets/logo.png') }}"
            alt="">
        <h1 class="align-self-center">Fe<span class="text-warning font-italic">ED</span>me</h1>
    </a>
    <div class="form-div">
        <form method="POST" action="{{ route('home.searchFromApi') }}">
            @csrf
            <input type="search" name="home_search" placeholder="Busca un producto" id="searcher"
                maxlength="13"><button id="search" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <button id="scanner" class="d-none">SCANNER</button>

</div>
