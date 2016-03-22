<?php
class TfbGoogleFonts {
    
    var $_fontName = '';
    var $_fontImportStyle = '';
    
    public function TfbGoogleFonts( $fontName = '' ) {
        $this->_fontName = $fontName;
        
        if ($this->_fontName !== '') {
            if ( strtolower($this->_fontName) === strtolower('ABeeZee') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=ABeeZee:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Abel') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Abel);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Abril Fatface') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Abril+Fatface);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Aclonica') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Aclonica);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Acme') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Acme);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Actor') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Actor);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Adamina') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Adamina);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Advent Pro') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Advent+Pro:400,100,200,300,500,600,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Aguafina Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Aguafina+Script);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Akronim') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Akronim);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Aladin') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Aladin&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Aldrich') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Aldrich);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alef') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alef:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alegreya') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,900italic,400,700,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alegreya SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alegreya+SC:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alegreya Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alegreya Sans SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alex Brush') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alex+Brush&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alfa Slab One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alfa+Slab+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alice') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alice);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alike') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alike);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Alike Angular') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Alike+Angular);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Allan') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Allan:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Allerta') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Allerta);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Allerta Stencil') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Allerta+Stencil);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Allura') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Allura&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Almendra') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Almendra:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Almendra Display') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Almendra+Display&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Almendra SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Almendra+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Amarante') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Amaranth') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Amatic SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Amatic+SC:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Amethysta') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Amethysta);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Anaheim') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Anaheim&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Andada') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Andada&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Andika') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Annie Use Your Telescope') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Anonymous Pro') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Anonymous+Pro:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Antic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Antic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Antic Didone') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Antic+Didone);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Antic Slab') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Antic+Slab);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Anton') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Anton&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Arapey') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Arapey:400italic,400);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Arbutus') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Arbutus&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Arbutus Slab') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Arbutus+Slab&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Architects Daughter') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Architects+Daughter);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Archivo Black') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Archivo+Black&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Archivo Narrow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Arimo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Arizonia') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Arizonia&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Armata') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Armata&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Artifika') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Artifika);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Arvo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Asap') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Asset') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Asset);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Astloch') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Astloch:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Astloch') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Asul:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Atomic Age') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Atomic+Age);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Aubrey') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Aubrey);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Audiowide') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Audiowide&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Autour One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Autour+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Average') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Average&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Average Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Average+Sans&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Averia Gruesa Libre') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Averia+Gruesa+Libre&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Averia Libre') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Averia+Libre:400,300,300italic,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Averia Sans Libre') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Averia+Sans+Libre:300,400,700,300italic,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Averia Serif Libre') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Averia+Serif+Libre:300,400,700,300italic,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bad Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bad+Script);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Balthazar') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Balthazar);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bangers') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bangers);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Basic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Basic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Baumans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Baumans);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Belgrano') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Belgrano);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Belleza') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Belleza&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('BenchNine') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=BenchNine:300,400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bentham') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bentham);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Berkshire Swash') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Berkshire+Swash&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bevan') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bevan);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bigelow Rules') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bigelow+Rules&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bigshot One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bigshot+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bilbo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bilbo&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bilbo Swash Caps') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bitter') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Black Ops One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Black+Ops+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bonbon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bonbon);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Boogaloo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Boogaloo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bowlby One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bowlby+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bowlby One SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bowlby+One+SC&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Brawler') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Brawler);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bree Serif') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bubblegum Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bubblegum+Sans&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Bubbler One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Bubbler+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Buda') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Buda:300);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Buenard') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Buenard:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Butcherman') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Butcherman&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Butterfly Kids') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Butterfly+Kids&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cabin') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cabin Condensed') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cabin Sketch') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Caesar Dressing') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Caesar+Dressing);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cagliostro') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cagliostro);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Calligraffitti') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Calligraffitti);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cambo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cambo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Candal') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Candal);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cantarell') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cantarell:400,700,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cantata One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cantata+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cantora One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cantora+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Capriola') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Capriola&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cardo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cardo:400,400italic,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Carme') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Carme);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Carrois Gothic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Carrois+Gothic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Carrois Gothic SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Carrois+Gothic+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Carter One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Carter+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Caudex') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Caudex:400,700,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cedarville Cursive') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cedarville+Cursive);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ceviche One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ceviche+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Changa One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Changa+One:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chango') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chango&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chau Philomene One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chau+Philomene+One:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chela One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chela+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chelsea Market') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chelsea+Market&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cherry Cream Soda') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cherry+Cream+Soda);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cherry Swash') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cherry+Swash:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chewy') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chewy);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chicle') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chicle&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Chivo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Chivo:400,400italic,900,900italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cinzel') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cinzel:400,700,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cinzel Decorative') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Clicker Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Clicker+Script&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Coda') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Coda:400,800);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Coda Caption') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Coda+Caption:800);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Codystar') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Codystar:300,400&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Combo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Combo&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Comfortaa') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Comfortaa:400,300,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Coming Soon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Coming+Soon);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Concert One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Concert+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Condiment') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Condiment&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Contrail One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Contrail+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Convergence') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Convergence);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cookie') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cookie);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Copse') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Copse);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Corben') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Corben:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Courgette') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Courgette&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cousine') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cousine:400,700,400italic,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Coustard') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Coustard:400,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Covered By Your Grace') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Covered+By+Your+Grace);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Crafty Girls') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Crafty+Girls);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Creepster') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Creepster);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Crete Round') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Crete+Round:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Crimson Text') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Croissant One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Croissant+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Crushed') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Crushed);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cuprum') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cutive') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cutive&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Cutive Mono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Cutive+Mono&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Damion') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Damion);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Dancing Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Dancing+Script:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Dawning of a New Day') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Dawning+of+a+New+Day);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Days One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Days+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Delius') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Delius);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Delius Swash Caps') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Delius+Swash+Caps);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Delius Unicase') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Delius+Unicase:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Della Respira') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Della+Respira);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Denk One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Denk+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Devonshire') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Devonshire&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Didact Gothic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,latin-ext,cyrillic-ext,greek-ext,greek,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Diplomata') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Diplomata&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Diplomata SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Diplomata+SC&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Domine') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Domine:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Donegal One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Donegal+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Doppio One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Doppio+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Dorsa') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Dorsa);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Dosis') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Dr Sugiyama') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Dr+Sugiyama&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Droid Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Droid+Sans:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Droid Sans Mono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Droid+Sans+Mono);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Droid Serif') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Duru Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Duru+Sans&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Dynalight') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Dynalight&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Eagle Lake') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Eagle+Lake&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Eater') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Eater&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Economica') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Economica:400,700,400italic,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Electrolize') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Electrolize);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Elsie') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Elsie:400,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Elsie Swash Caps') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Emblema One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Emblema+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Emilys Candy') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Emilys+Candy&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Engagement') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Engagement);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Englebert') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Englebert&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Enriqueta') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Enriqueta:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Erica One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Erica+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Esteban') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Esteban&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Euphoria Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Euphoria+Script&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ewert') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ewert&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Exo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Exo 2') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Expletus Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Expletus+Sans:400,400italic,500,500italic,600,600italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fanwood Text') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fanwood+Text:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fascinate') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fascinate);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fascinate Inline') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fascinate+Inline);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Faster One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Faster+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fauna One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fauna+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Federant') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Federant);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Federo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Federo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Felipa') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Felipa&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fenix') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fenix&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Finger Paint') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Finger+Paint);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fjalla One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fjalla+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fjord One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fjord+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Flamenco') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Flamenco:300,400);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Flavors') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Flavors);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fondamento') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fondamento:400italic,400&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fontdiner Swanky') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fontdiner+Swanky);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Forum') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Forum&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Francois One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Freckle Face') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Freckle+Face&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fredericka the Great') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fredericka+the+Great);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fredoka One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fredoka+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fresca') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fresca&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Frijole') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Frijole);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fruktur') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fruktur&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Fugaz One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Fugaz+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gabriela') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gabriela&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gafata') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gafata&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Galdeano') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Galdeano);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Galindo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Galindo&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gentium Basic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gentium Book Basic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Geo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Geo:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Geostar') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Geostar);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Geostar Fill') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Geostar+Fill);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Germania One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Germania+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gilda Display') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gilda+Display&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Give You Glory') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Give+You+Glory);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Glass Antiqua') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Glass+Antiqua&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Glegoo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Glegoo&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gloria Hallelujah') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gloria+Hallelujah);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Goblin One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gloria+Hallelujah);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gochi Hand') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gochi+Hand);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gorditas') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gorditas:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Goudy Bookletter 1911') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Graduate') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Graduate);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Grand Hotel') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Grand+Hotel&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gravitas One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gravitas+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Great Vibes') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Great+Vibes&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Griffy') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Griffy&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gruppo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gruppo&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Gudea') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Gudea:400,700,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Habibi') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Habibi&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Hammersmith One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Hammersmith+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Hanalei') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Hanalei&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Hanalei Fill') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Hanalei+Fill&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Handlee') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Handlee);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Happy Monkey') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Happy+Monkey&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Headland One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Headland+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Henny Penny') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Henny+Penny);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Herr Von Muellerhoff') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Holtwood One SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Holtwood+One+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Homemade Apple') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Homemade+Apple);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Homenaje') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Homenaje);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell DW Pica') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell DW Pica SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell Double Pica') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell Double Pica SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell English') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+English:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell English SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+English+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell French Canon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell French Canon SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell Great Primer') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('IM Fell Great Primer SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Iceberg') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Iceberg);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Iceland') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Iceland);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Imprima') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Imprima&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Inconsolata') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Inder') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Inder&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Indie Flower') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Indie+Flower);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Inika') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Inika:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Irish Grover') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Irish+Grover);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Istok Web') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic&subset=latin,latin-ext,cyrillic,cyrillic-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Italiana') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Italiana);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Italianno') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Italianno&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Jacques Francois') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Jacques+Francois);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Jacques Francois Shadow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Jacques+Francois+Shadow);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Jim Nightshade') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Jim+Nightshade&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Jockey One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Jockey+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Jolly Lodger') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Jolly+Lodger&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Josefin Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Josefin Slab') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Joti One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Joti+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Judson') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Judson:400,700,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Julee') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Julee);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Julius Sans One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Julius+Sans+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Junge') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Junge);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Jura') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Jura:400,300,500,600&subset=latin,latin-ext,cyrillic-ext,cyrillic,greek,greek-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Just Another Hand') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Just+Another+Hand);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Just Me Again Down Here') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kameron') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kameron:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Karla') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kaushan Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kaushan+Script&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kavoon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kavoon&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Keania One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Keania+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kelly Slab') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kelly+Slab&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kenia') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kenia);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kite One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kite+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Knewave') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Knewave&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kotta One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kotta+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kranky') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kranky);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kreon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kreon:300,400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Kristi') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Kristi);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Krona One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Krona+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('La Belle Aurore') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=La+Belle+Aurore);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lancelot') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lancelot);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lato') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);';
            }
            else if ( strtolower($this->_fontName) === strtolower('League Gothic') ) {
                $this->_fontImportStyle = '@import url(' . get_template_directory_uri() . '/css/tfb-font-league-gothic.css);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('League Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=League+Script);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Leckerli One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Leckerli+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ledger') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ledger&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lekton') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lekton:400,700,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lemon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lemon);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Libre Baskerville') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Life Savers') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Life+Savers:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lilita One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lilita+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lily Script One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lily+Script+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Limelight') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Limelight&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Linden Hill') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Linden+Hill:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lobster') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext,cyrillic,cyrillic-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lobster Two') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Londrina Outline') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Londrina+Outline);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Londrina Shadow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Londrina+Shadow);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Londrina Sketch') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Londrina+Sketch);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Londrina Solid') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Londrina+Solid);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lora') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Love Ya Like A Sister') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Loved by the King') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Loved+by+the+King);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lovers Quarrel') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lovers+Quarrel&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Luckiest Guy') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Luckiest+Guy);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lusitana') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lusitana:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Lustria') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Lustria);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Macondo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Macondo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Macondo Swash Caps') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Macondo+Swash+Caps);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Magra') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Magra:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Maiden Orange') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Maiden+Orange);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mako') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mako);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Marcellus') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Marcellus&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Marcellus SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Marcellus+SC&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Marck Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Marck+Script&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Margarine') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Margarine&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Marko One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Marko+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Marmelad') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Marmelad&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Marvel') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Marvel:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mate') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mate:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mate SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mate+SC);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Maven Pro') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('McLaren') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=McLaren&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Meddon') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Meddon);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('MedievalSharp') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=MedievalSharp&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Medula One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Medula+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Megrim') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Megrim);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Meie Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Meie+Script&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Merienda') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Merienda:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Merienda One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Merienda+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Merriweather') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Merriweather Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic,800,800italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Metal Mania') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Metal+Mania&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Metamorphous') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Metamorphous&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Metrophobic') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Metrophobic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Michroma') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Michroma);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Milonga') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Milonga&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Miltonian') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Miltonian);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Miltonian Tattoo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Miltonian+Tattoo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Miniver') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Miniver);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Miss Fajardose') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Miss+Fajardose&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Modern Antiqua') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Modern+Antiqua&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Molengo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Molengo&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Molle') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Molle:400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Monda') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Monda:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Monofett') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Monofett);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Monoton') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Monoton);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Monsieur La Doulaise') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Montaga') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Montaga);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Montez') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Montez);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Montserrat') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Montserrat Alternates') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Montserrat Subrayada') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mountains of Christmas') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mountains+of+Christmas:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mouse Memoirs') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mouse+Memoirs&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mr Bedfort') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mr+Bedfort&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mr Dafoe') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mr+Dafoe&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mr De Haviland') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mr+De+Haviland&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mrs Saint Delafield') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mrs+Saint+Delafield&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mrs Sheppards') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mrs+Sheppards&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Muli') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Mystery Quest') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Mystery+Quest&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Neucha') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Neucha&subset=latin,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Neuton') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Neuton:200,300,400,700,800,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('New Rocker') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=New+Rocker&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('News Cycle') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=News+Cycle:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Niconne') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Niconne&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nixie One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nixie+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nobile') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nobile:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Norican') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Norican&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nosifer') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nosifer&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nothing You Could Do') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nothing+You+Could+Do);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Noticia Text') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic&subset=latin,vietnamese,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Noto Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,greek-ext,greek,devanagari,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Noto Serif') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Cut') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Cut);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Flat') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Flat);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Mono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Mono&subset=latin,greek);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Oval') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Oval);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Round') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Round);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Script);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Slim') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Slim);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nova Square') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nova+Square);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Numans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Numans);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Nunito') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Nunito:400,300,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Offside') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Offside);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Old Standard TT') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oldenburg') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oldenburg&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oleo Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oleo+Script:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oleo Script Swash Caps') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Open Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Open Sans Condensed') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oranienbaum') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oranienbaum&subset=latin,cyrillic-ext,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Orbitron') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Orbitron:400,500,700,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oregano') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oregano:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Orienta') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Orienta&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Original Surfer') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Original+Surfer);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oswald') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oswald:400,300,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Over the Rainbow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Over+the+Rainbow);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Overlock') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Overlock:400,700,900,400italic,700italic,900italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Overlock SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Overlock+SC&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ovo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ovo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oxygen') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oxygen:400,300,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Oxygen Mono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Oxygen+Mono&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('PT Mono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=PT+Mono&subset=latin,cyrillic-ext,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('PT Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,latin-ext,cyrillic,cyrillic-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('PT Sans Caption') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,latin-ext,cyrillic,cyrillic-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('PT Sans Narrow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,latin-ext,cyrillic-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('PT Serif') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('PT Serif Caption') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic&subset=latin,cyrillic-ext,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Pacifico') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Pacifico);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Paprika') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Paprika);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Parisienne') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Parisienne&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Passero One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Passero+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Passion One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Passion+One:400,700,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Pathway Gothic One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Pathway+Gothic+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Patrick Hand') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Patrick+Hand&subset=latin,vietnamese,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Patrick Hand SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Patrick+Hand+SC&subset=latin,vietnamese,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Patua One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Patua+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Paytone One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Paytone+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Peralta') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Peralta&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Permanent Marker') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Permanent+Marker);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Petit Formal Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Petit+Formal+Script&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Petrona') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Petrona);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Philosopher') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic&subset=latin,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Piedra') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Piedra&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Pinyon Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Pinyon+Script);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Pirata One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Pirata+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Plaster') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Plaster&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Play') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Play:400,700&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Playball') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Playball&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Playfair Display') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Playfair Display SC') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Podkova') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Podkova:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Poiret One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Poiret+One&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Poller One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Poller+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Poly') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Poly:400,400italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Pompiere') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Pompiere);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Pontano Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Port Lligat Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Port+Lligat+Sans);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Port Lligat Slab') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Port+Lligat+Slab);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Prata') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Prata);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Press Start 2P') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Press+Start+2P&subset=latin,greek,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Princess Sofia') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Princess+Sofia&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Prociono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Prociono);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Prosto One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Prosto+One&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Puritan') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Puritan:400,700,400italic,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Purple Purse') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Purple+Purse&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Quando') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Quando&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Quantico') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Quantico:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Quattrocento') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Quattrocento:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Quattrocento Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Questrial') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Questrial);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Quicksand') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Quicksand:300,400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Quintessential') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Quintessential&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Qwigley') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Qwigley&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Racing Sans One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Racing+Sans+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Radley') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Radley:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Raleway') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Raleway Dots') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Raleway+Dots&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rambla') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rambla:400,700,400italic,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rammetto One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rammetto+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ranchers') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ranchers&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rancho') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rancho);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rationale') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rationale);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Redressed') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Redressed);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Reenie Beanie') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Reenie+Beanie);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Revalia') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Revalia&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ribeye') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ribeye&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ribeye Marrow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ribeye+Marrow&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Righteous') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Righteous&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Risque') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Risque&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Roboto') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Roboto Condensed') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Roboto Slab') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rochester') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rochester);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rock Salt') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rock+Salt);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rokkitt') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rokkitt:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Romanesco') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Romanesco&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ropa Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rosario') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rosarivo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rosarivo:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rouge Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rouge+Script);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ruda') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ruda:400,700,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rufina') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rufina:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ruge Boogie') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ruge+Boogie&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ruluko') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ruluko&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rum Raisin') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rum+Raisin&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ruslan Display') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ruslan+Display&subset=latin,cyrillic-ext,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Russo One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Russo+One&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ruthie') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ruthie&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Rye') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Rye&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sacramento') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sacramento&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sail') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sail);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Salsa') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Salsa);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sanchez') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sanchez:400italic,400&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sancreek') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sancreek&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sansita One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sansita+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sarina') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sarina&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Satisfy') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Satisfy);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Scada') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Scada:400italic,700italic,400,700&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Schoolbell') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Schoolbell);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Seaweed Script') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Seaweed+Script&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sevillana') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sevillana&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Seymour One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Seymour+One&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Shadows Into Light') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Shadows+Into+Light);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Shadows Into Light Two') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Shanti') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Shanti);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Share') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Share:400,400italic,700,700italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Share Tech') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Share+Tech);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Share Tech Mono') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Share+Tech+Mono);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Shojumaru') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Shojumaru&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Short Stack') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Short+Stack);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sigmar One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sigmar+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Signika') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Signika:400,300,600,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Signika Negative') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Simonetta') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Simonetta:400,900,400italic,900italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sintony') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sirin Stencil') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sirin+Stencil);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Six Caps') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Six+Caps);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Skranji') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Skranji:400,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Slackey') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Slackey);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Smokum') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Smokum);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Smythe') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Smythe);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sniglet') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sniglet:400,800&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Snippet') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Snippet);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Snowburst One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Snowburst+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sofadi One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sofadi+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sofia') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sofia);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sonsie One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sonsie+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sorts Mill Goudy') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Source Code Pro') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Source Sans Pro') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic&subset=latin,vietnamese,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Special Elite') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Special+Elite);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Spicy Rice') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Spicy+Rice);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Spinnaker') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Spinnaker&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Spirax') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Spirax);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Squada One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Squada+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Stalemate') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Stalemate&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Stalinist One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Stalinist+One&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Stardos Stencil') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Stardos+Stencil:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Stint Ultra Condensed') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Stint Ultra Expanded') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Stoke') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Stoke:400,300&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Strait') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Strait);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sue Ellen Francisco') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sue+Ellen+Francisco);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Sunshiney') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Sunshiney);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Supermercado One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Supermercado+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Swanky and Moo Moo') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Syncopate') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Syncopate:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Tangerine') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Tangerine:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Tauri') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Tauri&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Telex') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Telex);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Tenor Sans') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Tenor+Sans&subset=latin,cyrillic-ext,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Text Me One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Text+Me+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('The Girl Next Door') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=The+Girl+Next+Door);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Tienne') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Tienne:400,700,900);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Tinos') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Tinos:400,700,400italic,700italic&subset=latin,greek-ext,cyrillic-ext,greek,vietnamese,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Titan One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Titan+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Titillium Web') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Trade Winds') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Trade+Winds);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Trocchi') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Trocchi&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Trochut') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Trochut:400,400italic,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Trykker') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Trykker&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Tulpen One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Tulpen+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ubuntu') ) {
//                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic);';
                
                $this->_fontImportStyle = '@import url(' . get_template_directory_uri() . '/css/tfb-font-ubuntu.css);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ubuntu Light') ) {
                $this->_fontImportStyle = '@import url(' . get_template_directory_uri() . '/css/tfb-font-ubuntu.css);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ubuntu Condensed') ) {
                $this->_fontImportStyle = '@import url(' . get_template_directory_uri() . '/css/tfb-font-ubuntu.css);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ubuntu Mono') ) {
                $this->_fontImportStyle = '@import url(' . get_template_directory_uri() . '/css/tfb-font-ubuntu.css);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Ultra') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Ultra);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Uncial Antiqua') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Uncial+Antiqua);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Underdog') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Underdog&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Unica One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Unica+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('UnifrakturCook') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=UnifrakturCook:700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('UnifrakturMaguntia') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=UnifrakturMaguntia);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Unkempt') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Unkempt:400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Unlock') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Unlock);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Unna') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Unna);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('VT323') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=VT323);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Vampiro One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Vampiro+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Varela') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Varela&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Varela Round') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Varela+Round);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Vast Shadow') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Vast+Shadow);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Vibur') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Vibur);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Vidaloka') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Vidaloka);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Viga') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Viga&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Voces') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Voces&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Volkhov') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Volkhov:400,400italic,700,700italic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Vollkorn') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Voltaire') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Voltaire);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Waiting for the Sunrise') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Wallpoet') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Wallpoet);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Walter Turncoat') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Walter+Turncoat);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Warnes') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Warnes&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Wellfleet') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Wellfleet&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Wendy One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Wendy+One&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Wire One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Wire+One);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Yanone Kaffeesatz') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700&subset=latin,latin-ext);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Yellowtail') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Yellowtail);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Yeseva One') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Yeseva+One&subset=latin,latin-ext,cyrillic);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Yesteryear') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Yesteryear);';
            }
            elseif ( strtolower($this->_fontName) === strtolower('Zeyada') ) {
                $this->_fontImportStyle = '@import url(http://fonts.googleapis.com/css?family=Zeyada);';
            }
            
        }
        
    }
    
    public function IncludeFontStyles() {
        return ( $this->_fontImportStyle );
    }
    
    public function GetFontName() {
        return $this->_fontName;
    }
    
    public function GetGoogleFontFamilyList() {
        $TfbGoogleFontFamilyList = array(
                                        array('ABeeZee', "'ABeeZee', sans-serif"),
                                        array('Abel', "'Abel', sans-serif"),
                                        array('Abril Fatface', "'Abril Fatface', cursive"),
                                        array('Aclonica', "'Aclonica', sans-serif"),
                                        array('Acme', "'Acme', sans-serif"),
                                        array('Actor', "'Actor', sans-serif"),
                                        array('Adamina', "'Adamina', serif"),
                                        array('Advent Pro', "'Advent Pro', sans-serif"),
                                        array('Aguafina Script', "'Aguafina Script', cursive"),
                                        array('Akronim', "'Akronim', cursive"),
                                        array('Aladin', "'Aladin', cursive"),
                                        array('Aldrich', "'Aldrich', sans-serif"),
                                        array('Alef', "'Alef', sans-serif"),
                                        array('Alegreya', "'Alegreya', serif"),
                                        array('Alegreya SC', "'Alegreya SC', serif"),
                                        array('Alegreya Sans', "'Alegreya Sans', sans-serif"),
                                        array('Alegreya Sans SC', "'Alegreya Sans SC', sans-serif"),
                                        array('Alex Brush', "'Alex Brush', cursive"),
                                        array('Alfa Slab One', "'Alfa Slab One', cursive"),
                                        array('Alice', "'Alice', serif"),
                                        array('Alike', "'Alike', serif"),
                                        array('Alike Angular', "'Alike Angular', serif"),
                                        array('Allan', "'Allan', cursive"),
                                        array('Allerta', "'Allerta', sans-serif"),
                                        array('Allerta Stencil', "'Allerta Stencil', sans-serif"),
                                        array('Allura', "'Allura', cursive"),
                                        array('Almendra', "'Almendra', serif"),
                                        array('Almendra Display', "'Almendra Display', cursive"),
                                        array('Almendra SC', "'Almendra SC', serif"),
                                        array('Amarante', "'Amarante', cursive"),
                                        array('Amaranth', "'Amaranth', sans-serif"),
                                        array('Amatic SC', "'Amatic SC', cursive"),
                                        array('Amethysta', "'Amethysta', serif"),
                                        array('Anaheim', "'Anaheim', sans-serif"),
                                        array('Andada', "'Andada', serif"),
                                        array('Andika', "'Andika', sans-serif"),
                                        array('Annie Use Your Telescope', "'Annie Use Your Telescope', cursive"),
                                        array('Anonymous Pro', "'Anonymous Pro'"),
                                        array('Antic', "'Antic', sans-serif"),
                                        array('Antic Didone', "'Antic Didone', serif"),
                                        array('Antic Slab', "'Antic Slab', serif"),
                                        array('Anton', "'Anton', sans-serif"),
                                        array('Arapey', "'Arapey', serif"),
                                        array('Arbutus', "'Arbutus', cursive"),
                                        array('Arbutus Slab', "'Arbutus Slab', serif"),
                                        array('Architects Daughter', "'Architects Daughter', cursive"),
                                        array('Archivo Black', "'Archivo Black', sans-serif"),
                                        array('Archivo Narrow', "'Archivo Narrow', sans-serif"),
                                        array('Arimo', "'Arimo', sans-serif"),
                                        array('Arizonia', "'Arizonia', cursive"),
                                        array('Armata', "'Armata', sans-serif"),
                                        array('Artifika', "'Artifika', serif"),
                                        array('Arvo', "'Arvo', serif"),
                                        array('Asap', "'Asap', sans-serif"),
                                        array('Asset', "'Asset', cursive"),
                                        array('Asul', "'Asul', sans-serif"),
                                        array('Atomic Age', "'Atomic Age', cursive"),
                                        array('Aubrey', "'Aubrey', cursive"),
                                        array('Audiowide', "'Audiowide', cursive"),
                                        array('Autour One', "'Autour One', cursive"),
                                        array('Average', "'Average', serif"),
                                        array('Average Sans', "'Average Sans', sans-serif"),
                                        array('Averia Gruesa Libre', "'Averia Gruesa Libre', cursive"),
                                        array('Averia Libre', "'Averia Libre', cursive"),
                                        array('Averia Sans Libre', "'Averia Sans Libre', cursive"),
                                        array('Averia Serif Libre', "'Averia Serif Libre', cursive"),
                                        array('Bad Script', "'Bad Script', cursive"),
                                        array('Balthazar', "'Balthazar', serif"),
                                        array('Bangers', "'Bangers', cursive"),
                                        array('Basic', "'Basic', sans-serif"),
                                        array('Baumans', "'Baumans', cursive"),
                                        array('Belgrano', "'Belgrano', serif"),
                                        array('Belleza', "'Belleza', sans-serif"),
                                        array('BenchNine', "'BenchNine', sans-serif"),
                                        array('Bentham', "'Bentham', serif"),
                                        array('Berkshire Swash', "'Berkshire Swash', cursive"),
                                        array('Bevan', "'Bevan', cursive"),
                                        array('Bigelow Rules', "'Bigelow Rules', cursive"),
                                        array('Bigshot One', "'Bigshot One', cursive"),
                                        array('Bilbo', "'Bilbo', cursive"),
                                        array('Bilbo Swash Caps', "'Bilbo Swash Caps', cursive"),
                                        array('Bitter', "'Bitter', serif"),
                                        array('Black Ops One', "'Black Ops One', cursive"),
                                        array('Bonbon', "'Bonbon', cursive"),
                                        array('Boogaloo', "'Boogaloo', cursive"),
                                        array('Bowlby One', "'Bowlby One', cursive"),
                                        array('Bowlby One SC', "'Bowlby One SC', cursive"),
                                        array('Brawler', "'Brawler', serif"),
                                        array('Bree Serif', "'Bree Serif', serif"),
                                        array('Bubblegum Sans', "'Bubblegum Sans', cursive"),
                                        array('Bubbler One', "'Bubbler One', sans-serif"),
                                        array('Buda', "'Buda', cursive"),
                                        array('Buenard', "'Buenard', serif"),
                                        array('Butcherman', "'Butcherman', cursive"),
                                        array('Butterfly Kids', "'Butterfly Kids', cursive"),
                                        array('Cabin', "'Cabin', sans-serif"),
                                        array('Cabin Condensed', "'Cabin Condensed', sans-serif"),
                                        array('Cabin Sketch', "'Cabin Sketch', cursive"),
                                        array('Caesar Dressing', "'Caesar Dressing', cursive"),
                                        array('Cagliostro', "'Cagliostro', sans-serif"),
                                        array('Calligraffitti', "'Calligraffitti', cursive"),
                                        array('Cambo', "'Cambo', serif"),
                                        array('Candal', "'Candal', sans-serif"),
                                        array('Cantarell', "'Cantarell', sans-serif"),
                                        array('Cantata One', "'Cantata One', serif"),
                                        array('Cantora One', "'Cantora One', sans-serif"),
                                        array('Capriola', "'Capriola', sans-serif"),
                                        array('Cardo', "'Cardo', serif"),
                                        array('Carme', "'Carme', sans-serif"),
                                        array('Carrois Gothic', "'Carrois Gothic', sans-serif"),
                                        array('Carrois Gothic SC', "'Carrois Gothic SC', sans-serif"),
                                        array('Carter One', "'Carter One', cursive"),
                                        array('Caudex', "'Caudex', serif"),
                                        array('Cedarville Cursive', "'Cedarville Cursive', cursive"),
                                        array('Ceviche One', "'Ceviche One', cursive"),
                                        array('Changa One', "'Changa One', cursive"),
                                        array('Chango', "'Chango', cursive"),
                                        array('Chau Philomene One', "'Chau Philomene One', sans-serif"),
                                        array('Chela One', "'Chela One', cursive"),
                                        array('Chelsea Market', "'Chelsea Market', cursive"),
                                        array('Cherry Cream Soda', "'Cherry Cream Soda', cursive"),
                                        array('Cherry Swash', "'Cherry Swash', cursive"),
                                        array('Chewy', "'Chewy', cursive"),
                                        array('Chicle', "'Chicle', cursive"),
                                        array('Chivo', "'Chivo', sans-serif"),
                                        array('Cinzel', "'Cinzel', serif"),
                                        array('Cinzel Decorative', "'Cinzel Decorative', cursive"),
                                        array('Clicker Script', "'Clicker Script', cursive"),
                                        array('Coda', "'Coda', cursive"),
                                        array('Coda Caption', "'Coda Caption', sans-serif"),
                                        array('Codystar', "'Codystar', cursive"),
                                        array('Combo', "'Combo', cursive"),
                                        array('Comfortaa', "'Comfortaa', cursive"),
                                        array('Coming Soon', "'Coming Soon', cursive"),
                                        array('Concert One', "'Concert One', cursive"),
                                        array('Condiment', "'Condiment', cursive"),
                                        array('Contrail One', "'Contrail One', cursive"),
                                        array('Convergence', "'Convergence', sans-serif"),
                                        array('Cookie', "'Cookie', cursive"),
                                        array('Copse', "'Copse', serif"),
                                        array('Corben', "'Corben', cursive"),
                                        array('Courgette', "'Courgette', cursive"),
                                        array('Cousine', "'Cousine'"),
                                        array('Coustard', "'Coustard', serif"),
                                        array('Covered By Your Grace', "'Covered By Your Grace', cursive"),
                                        array('Crafty Girls', "'Crafty Girls', cursive"),
                                        array('Creepster', "'Creepster', cursive"),
                                        array('Crete Round', "'Crete Round', serif"),
                                        array('Crimson Text', "'Crimson Text', serif"),
                                        array('Croissant One', "'Croissant One', cursive"),
                                        array('Crushed', "'Crushed', cursive"),
                                        array('Cuprum', "'Cuprum', sans-serif"),
                                        array('Cutive', "'Cutive', serif"),
                                        array('Cutive Mono', "'Cutive Mono'"),
                                        array('Damion', "'Damion', cursive"),
                                        array('Dancing Script', "'Dancing Script', cursive"),
                                        array('Dawning of a New Day', "'Dawning of a New Day', cursive"),
                                        array('Days One', "'Days One', sans-serif"),
                                        array('Delius', "'Delius', cursive"),
                                        array('Delius Swash Caps', "'Delius Swash Caps', cursive"),
                                        array('Delius Unicase', "'Delius Unicase', cursive"),
                                        array('Della Respira', "'Della Respira', serif"),
                                        array('Denk One', "'Denk One', sans-serif"),
                                        array('Devonshire', "'Devonshire', cursive"),
                                        array('Didact Gothic', "'Didact Gothic', sans-serif"),
                                        array('Diplomata', "'Diplomata', cursive"),
                                        array('Diplomata SC', "'Diplomata SC', cursive"),
                                        array('Domine', "'Domine', serif"),
                                        array('Donegal One', "'Donegal One', serif"),
                                        array('Doppio One', "'Doppio One', sans-serif"),
                                        array('Dorsa', "'Dorsa', sans-serif"),
                                        array('Dosis', "'Dosis', sans-serif"),
                                        array('Dr Sugiyama', "'Dr Sugiyama', cursive"),
                                        array('Droid Sans', "'Droid Sans', sans-serif"),
                                        array('Droid Sans Mono', "'Droid Sans Mono'"),
                                        array('Droid Serif', "'Droid Serif', serif"),
                                        array('Duru Sans', "'Duru Sans', sans-serif"),
                                        array('Dynalight', "'Dynalight', cursive"),
                                        array('Eagle Lake', "'Eagle Lake', cursive"),
                                        array('Eater', "'Eater', cursive"),
                                        array('Economica', "'Economica', sans-serif"),
                                        array('Electrolize', "'Electrolize', sans-serif"),
                                        array('Elsie', "'Elsie', cursive"),
                                        array('Elsie Swash Caps', "'Elsie Swash Caps', cursive"),
                                        array('Emblema One', "'Emblema One', cursive"),
                                        array('Emilys Candy', "'Emilys Candy', cursive"),
                                        array('Engagement', "'Engagement', cursive"),
                                        array('Englebert', "'Englebert', sans-serif"),
                                        array('Enriqueta', "'Enriqueta', serif"),
                                        array('Erica One', "'Erica One', cursive"),
                                        array('Esteban', "'Esteban', serif"),
                                        array('Euphoria Script', "'Euphoria Script', cursive"),
                                        array('Ewert', "'Ewert', cursive"),
                                        array('Exo', "'Exo', sans-serif"),
                                        array('Exo 2', "'Exo 2', sans-serif"),
                                        array('Expletus Sans', "'Expletus Sans', cursive"),
                                        array('Fanwood Text', "'Fanwood Text', serif"),
                                        array('Fascinate', "'Fascinate', cursive"),
                                        array('Fascinate Inline', "'Fascinate Inline', cursive"),
                                        array('Faster One', "'Faster One', cursive"),
                                        array('Fauna One', "'Fauna One', serif"),
                                        array('Federant', "'Federant', cursive"),
                                        array('Federo', "'Federo', sans-serif"),
                                        array('Felipa', "'Felipa', cursive"),
                                        array('Fenix', "'Fenix', serif"),
                                        array('Finger Paint', "'Finger Paint', cursive"),
                                        array('Fjalla One', "'Fjalla One', sans-serif"),
                                        array('Fjord One', "'Fjord One', serif"),
                                        array('Flamenco', "'Flamenco', cursive"),
                                        array('Flavors', "'Flavors', cursive"),
                                        array('Fondamento', "'Fondamento', cursive"),
                                        array('Fontdiner Swanky', "'Fontdiner Swanky', cursive"),
                                        array('Forum', "'Forum', cursive"),
                                        array('Francois One', "'Francois One', sans-serif"),
                                        array('Freckle Face', "'Freckle Face', cursive"),
                                        array('Fredericka the Great', "'Fredericka the Great', cursive"),
                                        array('Fredoka One', "'Fredoka One', cursive"),
                                        array('Fresca', "'Fresca', sans-serif"),
                                        array('Frijole', "'Frijole', cursive"),
                                        array('Fruktur', "'Fruktur', cursive"),
                                        array('Fugaz One', "'Fugaz One', cursive"),
                                        array('Gabriela', "'Gabriela', serif"),
                                        array('Gafata', "'Gafata', sans-serif"),
                                        array('Galdeano', "'Galdeano', sans-serif"),
                                        array('Galindo', "'Galindo', cursive"),
                                        array('Gentium Basic', "'Gentium Basic', serif"),
                                        array('Gentium Book Basic', "'Gentium Book Basic', serif"),
                                        array('Geo', "'Geo', sans-serif"),
                                        array('Geostar', "'Geostar', cursive"),
                                        array('Geostar Fill', "'Geostar Fill', cursive"),
                                        array('Germania One', "'Germania One', cursive"),
                                        array('Gilda Display', "'Gilda Display', serif"),
                                        array('Give You Glory', "'Give You Glory', cursive"),
                                        array('Glass Antiqua', "'Glass Antiqua', cursive"),
                                        array('Glegoo', "'Glegoo', serif"),
                                        array('Gloria Hallelujah', "'Gloria Hallelujah', cursive"),
                                        array('Goblin One', "'Goblin One', cursive"),
                                        array('Gochi Hand', "'Gochi Hand', cursive"),
                                        array('Gorditas', "'Gorditas', cursive"),
                                        array('Goudy Bookletter 1911', "'Goudy Bookletter 1911', serif"),
                                        array('Graduate', "'Graduate', cursive"),
                                        array('Grand Hotel', "'Grand Hotel', cursive"),
                                        array('Gravitas One', "'Gravitas One', cursive"),
                                        array('Great Vibes', "'Great Vibes', cursive"),
                                        array('Griffy', "'Griffy', cursive"),
                                        array('Gruppo', "'Gruppo', cursive"),
                                        array('Gudea', "'Gudea', sans-serif"),
                                        array('Habibi', "'Habibi', serif"),
                                        array('Hammersmith One', "'Hammersmith One', sans-serif"),
                                        array('Hanalei', "'Hanalei', cursive"),
                                        array('Hanalei Fill', "'Hanalei Fill', cursive"),
                                        array('Handlee', "'Handlee', cursive"),
                                        array('Happy Monkey', "'Happy Monkey', cursive"),
                                        array('Headland One', "'Headland One', serif"),
                                        array('Henny Penny', "'Henny Penny', cursive"),
                                        array('Herr Von Muellerhoff', "'Herr Von Muellerhoff', cursive"),
                                        array('Holtwood One SC', "'Holtwood One SC', serif"),
                                        array('Homemade Apple', "'Homemade Apple', cursive"),
                                        array('Homenaje', "'Homenaje', sans-serif"),
                                        array('IM Fell DW Pica', "'IM Fell DW Pica', serif"),
                                        array('IM Fell DW Pica SC', "'IM Fell DW Pica SC', serif"),
                                        array('IM Fell Double Pica', "'IM Fell Double Pica', serif"),
                                        array('IM Fell Double Pica SC', "'IM Fell Double Pica SC', serif"),
                                        array('IM Fell English', "'IM Fell English', serif"),
                                        array('IM Fell English SC', "'IM Fell English SC', serif"),
                                        array('IM Fell French Canon', "'IM Fell French Canon', serif"),
                                        array('IM Fell French Canon SC', "'IM Fell French Canon SC', serif"),
                                        array('IM Fell Great Primer', "'IM Fell Great Primer', serif"),
                                        array('IM Fell Great Primer SC', "'IM Fell Great Primer SC', serif"),
                                        array('Iceberg', "'Iceberg', cursive"),
                                        array('Iceland', "'Iceland', cursive"),
                                        array('Imprima', "'Imprima', sans-serif"),
                                        array('Inconsolata', "'Inconsolata'"),
                                        array('Inder', "'Inder', sans-serif"),
                                        array('Indie Flower', "'Indie Flower', cursive"),
                                        array('Inika', "'Inika', serif"),
                                        array('Irish Grover', "'Irish Grover', cursive"),
                                        array('Istok Web', "'Istok Web', sans-serif"),
                                        array('Italiana', "'Italiana', serif"),
                                        array('Italianno', "'Italianno', cursive"),
                                        array('Jacques Francois', "'Jacques Francois', serif"),
                                        array('Jacques Francois Shadow', "'Jacques Francois Shadow', cursive"),
                                        array('Jim Nightshade', "'Jim Nightshade', cursive"),
                                        array('Jockey One', "'Jockey One', sans-serif"),
                                        array('Jolly Lodger', "'Jolly Lodger', cursive"),
                                        array('Josefin Sans', "'Josefin Sans', sans-serif"),
                                        array('Josefin Slab', "'Josefin Slab', serif"),
                                        array('Joti One', "'Joti One', cursive"),
                                        array('Judson', "'Judson', serif"),
                                        array('Julee', "'Julee', cursive"),
                                        array('Julius Sans One', "'Julius Sans One', sans-serif"),
                                        array('Junge', "'Junge', serif"),
                                        array('Jura', "'Jura', sans-serif"),
                                        array('Just Another Hand', "'Just Another Hand', cursive"),
                                        array('Just Me Again Down Here', "'Just Me Again Down Here', cursive"),
                                        array('Kameron', "'Kameron', serif"),
                                        array('Karla', "'Karla', sans-serif"),
                                        array('Kaushan Script', "'Kaushan Script', cursive"),
                                        array('Kavoon', "'Kavoon', cursive"),
                                        array('Keania One', "'Keania One', cursive"),
                                        array('Kelly Slab', "'Kelly Slab', cursive"),
                                        array('Kenia', "'Kenia', cursive"),
                                        array('Kite One', "'Kite One', sans-serif"),
                                        array('Knewave', "'Knewave', cursive"),
                                        array('Kotta One', "'Kotta One', serif"),
                                        array('Kranky', "'Kranky', cursive"),
                                        array('Kreon', "'Kreon', serif"),
                                        array('Kristi', "'Kristi', cursive"),
                                        array('Krona One', "'Krona One', sans-serif"),
                                        array('La Belle Aurore', "'La Belle Aurore', cursive"),
                                        array('Lancelot', "'Lancelot', cursive"),
                                        array('Lato', "'Lato', sans-serif"),
                                        array('League Gothic', "'League Gothic', sans-serif"),
                                        array('League Script', "'League Script', cursive"),
                                        array('Leckerli One', "'Leckerli One', cursive"),
                                        array('Ledger', "'Ledger', serif"),
                                        array('Lekton', "'Lekton', sans-serif"),
                                        array('Lemon', "'Lemon', cursive"),
                                        array('Libre Baskerville', "'Libre Baskerville', serif"),
                                        array('Life Savers', "'Life Savers', cursive"),
                                        array('Lilita One', "'Lilita One', cursive"),
                                        array('Lily Script One', "'Lily Script One', cursive"),
                                        array('Limelight', "'Limelight', cursive"),
                                        array('Linden Hill', "'Linden Hill', serif"),
                                        array('Lobster', "'Lobster', cursive"),
                                        array('Lobster Two', "'Lobster Two', cursive"),
                                        array('Londrina Outline', "'Londrina Outline', cursive"),
                                        array('Londrina Shadow', "'Londrina Shadow', cursive"),
                                        array('Londrina Sketch', "'Londrina Sketch', cursive"),
                                        array('Londrina Solid', "'Londrina Solid', cursive"),
                                        array('Lora', "'Lora', serif"),
                                        array('Love Ya Like A Sister', "'Love Ya Like A Sister', cursive"),
                                        array('Loved by the King', "'Loved by the King', cursive"),
                                        array('Lovers Quarrel', "'Lovers Quarrel', cursive"),
                                        array('Luckiest Guy', "'Luckiest Guy', cursive"),
                                        array('Lusitana', "'Lusitana', serif"),
                                        array('Lustria', "'Lustria', serif"),
                                        array('Macondo', "'Macondo', cursive"),
                                        array('Macondo Swash Caps', "'Macondo Swash Caps', cursive"),
                                        array('Magra', "'Magra', sans-serif"),
                                        array('Maiden Orange', "'Maiden Orange', cursive"),
                                        array('Mako', "'Mako', sans-serif"),
                                        array('Marcellus', "'Marcellus', serif"),
                                        array('Marcellus SC', "'Marcellus SC', serif"),
                                        array('Marck Script', "'Marck Script', cursive"),
                                        array('Margarine', "'Margarine', cursive"),
                                        array('Marko One', "'Marko One', serif"),
                                        array('Marmelad', "'Marmelad', sans-serif"),
                                        array('Marvel', "'Marvel', sans-serif"),
                                        array('Mate', "'Mate', serif"),
                                        array('Mate SC', "'Mate SC', serif"),
                                        array('Maven Pro', "'Maven Pro', sans-serif"),
                                        array('McLaren', "'McLaren', cursive"),
                                        array('Meddon', "'Meddon', cursive"),
                                        array('MedievalSharp', "'MedievalSharp', cursive"),
                                        array('Medula One', "'Medula One', cursive"),
                                        array('Megrim', "'Megrim', cursive"),
                                        array('Meie Script', "'Meie Script', cursive"),
                                        array('Merienda', "'Merienda', cursive"),
                                        array('Merienda One', "'Merienda One', cursive"),
                                        array('Merriweather', "'Merriweather', serif"),
                                        array('Merriweather Sans', "'Merriweather Sans', sans-serif"),
                                        array('Metal Mania', "'Metal Mania', cursive"),
                                        array('Metamorphous', "'Metamorphous', cursive"),
                                        array('Metrophobic', "'Metrophobic', sans-serif"),
                                        array('Michroma', "'Michroma', sans-serif"),
                                        array('Milonga', "'Milonga', cursive"),
                                        array('Miltonian', "'Miltonian', cursive"),
                                        array('Miltonian Tattoo', "'Miltonian Tattoo', cursive"),
                                        array('Miniver', "'Miniver', cursive"),
                                        array('Miss Fajardose', "'Miss Fajardose', cursive"),
                                        array('Modern Antiqua', "'Modern Antiqua', cursive"),
                                        array('Molengo', "'Molengo', sans-serif"),
                                        array('Molle', "'Molle', cursive"),
                                        array('Monda', "'Monda', sans-serif"),
                                        array('Monofett', "'Monofett', cursive"),
                                        array('Monoton', "'Monoton', cursive"),
                                        array('Monsieur La Doulaise', "'Monsieur La Doulaise', cursive"),
                                        array('Montaga', "'Montaga', serif"),
                                        array('Montez', "'Montez', cursive"),
                                        array('Montserrat', "'Montserrat', sans-serif"),
                                        array('Montserrat Alternates', "'Montserrat Alternates', sans-serif"),
                                        array('Montserrat Subrayada', "'Montserrat Subrayada', sans-serif"),
                                        array('Mountains of Christmas', "'Mountains of Christmas', cursive"),
                                        array('Mouse Memoirs', "'Mouse Memoirs', sans-serif"),
                                        array('Mr Bedfort', "'Mr Bedfort', cursive"),
                                        array('Mr Dafoe', "'Mr Dafoe', cursive"),
                                        array('Mr De Haviland', "'Mr De Haviland', cursive"),
                                        array('Mrs Saint Delafield', "'Mrs Saint Delafield', cursive"),
                                        array('Mrs Sheppards', "'Mrs Sheppards', cursive"),
                                        array('Muli', "'Muli', sans-serif"),
                                        array('Mystery Quest', "'Mystery Quest', cursive"),
                                        array('Neucha', "'Neucha', cursive"),
                                        array('Neuton', "'Neuton', serif"),
                                        array('New Rocker', "'New Rocker', cursive"),
                                        array('News Cycle', "'News Cycle', sans-serif"),
                                        array('Niconne', "'Niconne', cursive"),
                                        array('Nixie One', "'Nixie One', cursive"),
                                        array('Nobile', "'Nobile', sans-serif"),
                                        array('Norican', "'Norican', cursive"),
                                        array('Nosifer', "'Nosifer', cursive"),
                                        array('Nothing You Could Do', "'Nothing You Could Do', cursive"),
                                        array('Noticia Text', "'Noticia Text', serif"),
                                        array('Noto Sans', "'Noto Sans', sans-serif"),
                                        array('Noto Serif', "'Noto Serif', serif"),
                                        array('Nova Cut', "'Nova Cut', cursive"),
                                        array('Nova Flat', "'Nova Flat', cursive"),
                                        array('Nova Mono', "'Nova Mono'"),
                                        array('Nova Oval', "'Nova Oval', cursive"),
                                        array('Nova Round', "'Nova Round', cursive"),
                                        array('Nova Script', "'Nova Script', cursive"),
                                        array('Nova Slim', "'Nova Slim', cursive"),
                                        array('Nova Square', "'Nova Square', cursive"),
                                        array('Numans', "'Numans', sans-serif"),
                                        array('Nunito', "'Nunito', sans-serif"),
                                        array('Offside', "'Offside', cursive"),
                                        array('Old Standard TT', "'Old Standard TT', serif"),
                                        array('Oldenburg', "'Oldenburg', cursive"),
                                        array('Oleo Script', "'Oleo Script', cursive"),
                                        array('Oleo Script Swash Caps', "'Oleo Script Swash Caps', cursive"),
                                        array('Open Sans', "'Open Sans', sans-serif"),
                                        array('Open Sans Condensed', "'Open Sans Condensed', sans-serif"),
                                        array('Oranienbaum', "'Oranienbaum', serif"),
                                        array('Orbitron', "'Orbitron', sans-serif"),
                                        array('Oregano', "'Oregano', cursive"),
                                        array('Orienta', "'Orienta', sans-serif"),
                                        array('Original Surfer', "'Original Surfer', cursive"),
                                        array('Oswald', "'Oswald', sans-serif"),
                                        array('Over the Rainbow', "'Over the Rainbow', cursive"),
                                        array('Overlock', "'Overlock', cursive"),
                                        array('Overlock SC', "'Overlock SC', cursive"),
                                        array('Ovo', "'Ovo', serif"),
                                        array('Oxygen', "'Oxygen', sans-serif"),
                                        array('Oxygen Mono', "'Oxygen Mono'"),
                                        array('PT Mono', "'PT Mono'"),
                                        array('PT Sans', "'PT Sans', sans-serif"),
                                        array('PT Sans Caption', "'PT Sans Caption', sans-serif"),
                                        array('PT Sans Narrow', "'PT Sans Narrow', sans-serif"),
                                        array('PT Serif', "'PT Serif', serif"),
                                        array('PT Serif Caption', "'PT Serif Caption', serif"),
                                        array('Pacifico', "'Pacifico', cursive"),
                                        array('Paprika', "'Paprika', cursive"),
                                        array('Parisienne', "'Parisienne', cursive"),
                                        array('Passero One', "'Passero One', cursive"),
                                        array('Passion One', "'Passion One', cursive"),
                                        array('Pathway Gothic One', "'Pathway Gothic One', sans-serif"),
                                        array('Patrick Hand', "'Patrick Hand', cursive"),
                                        array('Patrick Hand SC', "'Patrick Hand SC', cursive"),
                                        array('Patua One', "'Patua One', cursive"),
                                        array('Paytone One', "'Paytone One', sans-serif"),
                                        array('Peralta', "'Peralta', cursive"),
                                        array('Permanent Marker', "'Permanent Marker', cursive"),
                                        array('Petit Formal Script', "'Petit Formal Script', cursive"),
                                        array('Petrona', "'Petrona', serif"),
                                        array('Philosopher', "'Philosopher', sans-serif"),
                                        array('Piedra', "'Piedra', cursive"),
                                        array('Pinyon Script', "'Pinyon Script', cursive"),
                                        array('Pirata One', "'Pirata One', cursive"),
                                        array('Plaster', "'Plaster', cursive"),
                                        array('Play', "'Play', sans-serif"),
                                        array('Playball', "'Playball', cursive"),
                                        array('Playfair Display', "'Playfair Display', serif"),
                                        array('Playfair Display SC', "'Playfair Display SC', serif"),
                                        array('Podkova', "'Podkova', serif"),
                                        array('Poiret One', "'Poiret One', cursive"),
                                        array('Poller One', "'Poller One', cursive"),
                                        array('Poly', "'Poly', serif"),
                                        array('Pompiere', "'Pompiere', cursive"),
                                        array('Pontano Sans', "'Pontano Sans', sans-serif"),
                                        array('Port Lligat Sans', "'Port Lligat Sans', sans-serif"),
                                        array('Port Lligat Slab', "'Port Lligat Slab', serif"),
                                        array('Prata', "'Prata', serif"),
                                        array('Press Start 2P', "'Press Start 2P', cursive"),
                                        array('Princess Sofia', "'Princess Sofia', cursive"),
                                        array('Prociono', "'Prociono', serif"),
                                        array('Prosto One', "'Prosto One', cursive"),
                                        array('Puritan', "'Puritan', sans-serif"),
                                        array('Purple Purse', "'Purple Purse', cursive"),
                                        array('Quando', "'Quando', serif"),
                                        array('Quantico', "'Quantico', sans-serif"),
                                        array('Quattrocento', "'Quattrocento', serif"),
                                        array('Quattrocento Sans', "'Quattrocento Sans', sans-serif"),
                                        array('Questrial', "'Questrial', sans-serif"),
                                        array('Quicksand', "'Quicksand', sans-serif"),
                                        array('Quintessential', "'Quintessential', cursive"),
                                        array('Qwigley', "'Qwigley', cursive"),
                                        array('Racing Sans One', "'Racing Sans One', cursive"),
                                        array('Radley', "'Radley', serif"),
                                        array('Raleway', "'Raleway', sans-serif"),
                                        array('Raleway Dots', "'Raleway Dots', cursive"),
                                        array('Rambla', "'Rambla', sans-serif"),
                                        array('Rammetto One', "'Rammetto One', cursive"),
                                        array('Ranchers', "'Ranchers', cursive"),
                                        array('Rancho', "'Rancho', cursive"),
                                        array('Rationale', "'Rationale', sans-serif"),
                                        array('Redressed', "'Redressed', cursive"),
                                        array('Reenie Beanie', "'Reenie Beanie', cursive"),
                                        array('Revalia', "'Revalia', cursive"),
                                        array('Ribeye', "'Ribeye', cursive"),
                                        array('Ribeye Marrow', "'Ribeye Marrow', cursive"),
                                        array('Righteous', "'Righteous', cursive"),
                                        array('Risque', "'Risque', cursive"),
                                        array('Roboto', "'Roboto', sans-serif"),
                                        array('Roboto Condensed', "'Roboto Condensed', sans-serif"),
                                        array('Roboto Slab', "'Roboto Slab', serif"),
                                        array('Rochester', "'Rochester', cursive"),
                                        array('Rock Salt', "'Rock Salt', cursive"),
                                        array('Rokkitt', "'Rokkitt', serif"),
                                        array('Romanesco', "'Romanesco', cursive"),
                                        array('Ropa Sans', "'Ropa Sans', sans-serif"),
                                        array('Rosario', "'Rosario', sans-serif"),
                                        array('Rosarivo', "'Rosarivo', serif"),
                                        array('Rouge Script', "'Rouge Script', cursive"),
                                        array('Ruda', "'Ruda', sans-serif"),
                                        array('Rufina', "'Rufina', serif"),
                                        array('Ruge Boogie', "'Ruge Boogie', cursive"),
                                        array('Ruluko', "'Ruluko', sans-serif"),
                                        array('Rum Raisin', "'Rum Raisin', sans-serif"),
                                        array('Ruslan Display', "'Ruslan Display', cursive"),
                                        array('Russo One', "'Russo One', sans-serif"),
                                        array('Ruthie', "'Ruthie', cursive"),
                                        array('Rye', "'Rye', cursive"),
                                        array('Sacramento', "'Sacramento', cursive"),
                                        array('Sail', "'Sail', cursive"),
                                        array('Salsa', "'Salsa', cursive"),
                                        array('Sanchez', "'Sanchez', serif"),
                                        array('Sancreek', "'Sancreek', cursive"),
                                        array('Sansita One', "'Sansita One', cursive"),
                                        array('Sarina', "'Sarina', cursive"),
                                        array('Satisfy', "'Satisfy', cursive"),
                                        array('Scada', "'Scada', sans-serif"),
                                        array('Schoolbell', "'Schoolbell', cursive"),
                                        array('Seaweed Script', "'Seaweed Script', cursive"),
                                        array('Sevillana', "'Sevillana', cursive"),
                                        array('Seymour One', "'Seymour One', sans-serif"),
                                        array('Shadows Into Light', "'Shadows Into Light', cursive"),
                                        array('Shadows Into Light Two', "'Shadows Into Light Two', cursive"),
                                        array('Shanti', "'Shanti', sans-serif"),
                                        array('Share', "'Share', cursive"),
                                        array('Share Tech', "'Share Tech', sans-serif"),
                                        array('Share Tech Mono', "'Share Tech Mono'"),
                                        array('Shojumaru', "'Shojumaru', cursive"),
                                        array('Short Stack', "'Short Stack', cursive"),
                                        array('Sigmar One', "'Sigmar One', cursive"),
                                        array('Signika', "'Signika', sans-serif"),
                                        array('Signika Negative', "'Signika Negative', sans-serif"),
                                        array('Simonetta', "'Simonetta', cursive"),
                                        array('Sintony', "'Sintony', sans-serif"),
                                        array('Sirin Stencil', "'Sirin Stencil', cursive"),
                                        array('Six Caps', "'Six Caps', sans-serif"),
                                        array('Skranji', "'Skranji', cursive"),
                                        array('Slackey', "'Slackey', cursive"),
                                        array('Smokum', "'Smokum', cursive"),
                                        array('Smythe', "'Smythe', cursive"),
                                        array('Sniglet', "'Sniglet', cursive"),
                                        array('Snippet', "'Snippet', sans-serif"),
                                        array('Snowburst One', "'Snowburst One', cursive"),
                                        array('Sofadi One', "'Sofadi One', cursive"),
                                        array('Sofia', "'Sofia', cursive"),
                                        array('Sonsie One', "'Sonsie One', cursive"),
                                        array('Sorts Mill Goudy', "'Sorts Mill Goudy', serif"),
                                        array('Source Code Pro', "'Source Code Pro'"),
                                        array('Source Sans Pro', "'Source Sans Pro', sans-serif"),
                                        array('Special Elite', "'Special Elite', cursive"),
                                        array('Spicy Rice', "'Spicy Rice', cursive"),
                                        array('Spinnaker', "'Spinnaker', sans-serif"),
                                        array('Spirax', "'Spirax', cursive"),
                                        array('Squada One', "'Squada One', cursive"),
                                        array('Stalemate', "'Stalemate', cursive"),
                                        array('Stalinist One', "'Stalinist One', cursive"),
                                        array('Stardos Stencil', "'Stardos Stencil', cursive"),
                                        array('Stint Ultra Condensed', "'Stint Ultra Condensed', cursive"),
                                        array('Stint Ultra Expanded', "'Stint Ultra Expanded', cursive"),
                                        array('Stoke', "'Stoke', serif"),
                                        array('Strait', "'Strait', sans-serif"),
                                        array('Sue Ellen Francisco', "'Sue Ellen Francisco', cursive"),
                                        array('Sunshiney', "'Sunshiney', cursive"),
                                        array('Supermercado One', "'Supermercado One', cursive"),
                                        array('Swanky and Moo Moo', "'Swanky and Moo Moo', cursive"),
                                        array('Syncopate', "'Syncopate', sans-serif"),
                                        array('Tangerine', "'Tangerine', cursive"),
                                        array('Tauri', "'Tauri', sans-serif"),
                                        array('Telex', "'Telex', sans-serif"),
                                        array('Tenor Sans', "'Tenor Sans', sans-serif"),
                                        array('Text Me One', "'Text Me One', sans-serif"),
                                        array('The Girl Next Door', "'The Girl Next Door', cursive"),
                                        array('Tienne', "'Tienne', serif"),
                                        array('Tinos', "'Tinos', serif"),
                                        array('Titan One', "'Titan One', cursive"),
                                        array('Titillium Web', "'Titillium Web', sans-serif"),
                                        array('Trade Winds', "'Trade Winds', cursive"),
                                        array('Trocchi', "'Trocchi', serif"),
                                        array('Trochut', "'Trochut', cursive"),
                                        array('Trykker', "'Trykker', serif"),
                                        array('Tulpen One', "'Tulpen One', cursive"),
                                        array('Ubuntu', "'ubunturegular', sans-serif"),
                                        array('Ubuntu Condensed', "'ubuntu_condensedregular', sans-serif"),
                                        array('Ubuntu Light', "'ubuntulight', sans-serif"),
                                        array('Ubuntu Mono', "'ubuntu_monoregular', monospace"),
                                        array('Ultra', "'Ultra', serif"),
                                        array('Uncial Antiqua', "'Uncial Antiqua', cursive"),
                                        array('Underdog', "'Underdog', cursive"),
                                        array('Unica One', "'Unica One', cursive"),
                                        array('UnifrakturCook', "'UnifrakturCook', cursive"),
                                        array('UnifrakturMaguntia', "'UnifrakturMaguntia', cursive"),
                                        array('Unkempt', "'Unkempt', cursive"),
                                        array('Unlock', "'Unlock', cursive"),
                                        array('Unna', "'Unna', serif"),
                                        array('VT323', "'VT323'"),
                                        array('Vampiro One', "'Vampiro One', cursive"),
                                        array('Varela', "'Varela', sans-serif"),
                                        array('Varela Round', "'Varela Round', sans-serif"),
                                        array('Vast Shadow', "'Vast Shadow', cursive"),
                                        array('Vibur', "'Vibur', cursive"),
                                        array('Vidaloka', "'Vidaloka', serif"),
                                        array('Viga', "'Viga', sans-serif"),
                                        array('Voces', "'Voces', cursive"),
                                        array('Volkhov', "'Volkhov', serif"),
                                        array('Vollkorn', "'Vollkorn', serif"),
                                        array('Voltaire', "'Voltaire', sans-serif"),
                                        array('Waiting for the Sunrise', "'Waiting for the Sunrise', cursive"),
                                        array('Wallpoet', "'Wallpoet', cursive"),
                                        array('Walter Turncoat', "'Walter Turncoat', cursive"),
                                        array('Warnes', "'Warnes', cursive"),
                                        array('Wellfleet', "'Wellfleet', cursive"),
                                        array('Wendy One', "'Wendy One', sans-serif"),
                                        array('Wire One', "'Wire One', sans-serif"),
                                        array('Yanone Kaffeesatz', "'Yanone Kaffeesatz', sans-serif"),
                                        array('Yellowtail', "'Yellowtail', cursive"),
                                        array('Yeseva One', "'Yeseva One', cursive"),
                                        array('Yesteryear', "'Yesteryear', cursive"),
                                        array('Zeyada', "'Zeyada', cursive")
                                        
                                   );

        return $TfbGoogleFontFamilyList;
    }
}