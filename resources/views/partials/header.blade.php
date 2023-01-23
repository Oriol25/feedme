<div id="header">
    <ul>
        <li><a href="{{ route('home') }}">HOME</a></li>
        {{-- <li><a>PRODUCTS</a></li> --}}
    </ul>
</div>
<div id="secondHeader">
    <div class="d-flex gap-3">
        <img class="no-selected align-self-center" width="32px" height="32px" src="{{ asset('./assets/logo.png') }}"
            alt="">
        <h1 class="align-self-center">Fe<span class="text-warning font-italic">ED</span>me</h1>
    </div>
    <div>
        <form method="POST" action="{{ route('home.searchFromApi') }}">
            @csrf
            <input type="search" name="home_search" placeholder="Busca un producto" id="searcher" maxlength="13">
            <button id="search" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <button id="scanner">SCANNER</button>

</div>
