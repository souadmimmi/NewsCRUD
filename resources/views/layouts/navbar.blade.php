<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                   
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/"> NewsCRUD</a></li>
                        <li class="submenu">
                            <a href="{{ route('articles.category', ['categoryId' => 1]) }}">Actualités</a>
                            <ul>
                                <li><a href="{{ route('articles.category', ['categoryId' => 2]) }}">Politique</a></li>
                                <li><a href="{{ route('articles.category', ['categoryId' => 3]) }}">Économie</a></li>
                                <li><a href="{{ route('articles.category', ['categoryId' => 4]) }}">Sport</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('articles.category', ['categoryId' => 5]) }}">Divertissement</a>
                            <ul>
                                <li><a href="{{ route('articles.category', ['categoryId' => 6]) }}">Cinéma</a></li>
                                <li><a href="{{ route('articles.category', ['categoryId' => 7]) }}">Musique</a></li>
                                <li><a href="{{ route('articles.category', ['categoryId' => 8]) }}">Sorties</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('articles.category', ['categoryId' => 9]) }}">Technologie</a>
                            <ul>
                                <li>
                                    <a href="{{ route('articles.category', ['categoryId' => 10]) }}"><b>Informatique</b></a>
                                  
                                        <li><a href="{{ route('articles.category', ['categoryId' => 11]) }}">Ordinateurs de bureau</a></li>
                                        <li><a href="{{ route('articles.category', ['categoryId' => 12]) }}">PC portable</a></li>
                                        <li><a href="{{ route('articles.category', ['categoryId' => 13]) }}">Connexion internet</a></li>
                                  
                                </li>
                                <li><a href="{{ route('articles.category', ['categoryId' => 14]) }}"><b>Gadgets</b></a></li>
                              
                                    <li><a href="{{ route('articles.category', ['categoryId' => 15]) }}">Smartphones</a></li>
                                    <li><a href="{{ route('articles.category', ['categoryId' => 16]) }}">Tablettes</a></li>
                                    <li><a href="{{ route('articles.category', ['categoryId' => 17]) }}">Jeux vidéo</a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('articles.category', ['categoryId' => 18]) }}">Santé</a>
                            <ul>
                                <li><a href="{{ route('articles.category', ['categoryId' => 19]) }}">Médecine</a></li>
                                <li><a href="{{ route('articles.category', ['categoryId' => 20]) }}">Bien-être</a></li>
                            </ul>
                        </li>

                        
                      
                    </ul>        
                </div>
            </div>
        </div>
