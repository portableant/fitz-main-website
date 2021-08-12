<?php

return [
    /*
     * This is the class responsible for providing the URLs which must be redirected.
     * The only requirement for the redirector is that it needs to implement the
     * `Spatie\MissingPageRedirector\Redirector\Redirector`-interface
     */
    'redirector' => \Spatie\MissingPageRedirector\Redirector\ConfigurationRedirector::class,

    /*
     * By default the package will only redirect 404s. If you want to redirect on other
     * response codes, just add them to the array. Leave the array empty to redirect
     * always no matter what the response code.
     */
    'redirect_status_codes' => [
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND,
        // \Symfony\Component\HttpFoundation\Response::HTTP_GONE
    ],

    /*
     * When using the `ConfigurationRedirector` you can specify the redirects in this array.
     * You can use Laravel's route parameters here.
     */
    'redirects' => [
      # 301 redircts
      '/index.html' => '/',
      '/bicentenary' => '/about-us/the-museums-bicentenary',
      # Visiting
      '/visit' => '/visit-us',
      '/visit2' => '/visit-us',
      '/visit/cafe' => '/visit-us/shopping-and-eating',
      '/visit/access' => '/visit-us/accessibility-and-our-facilities',
      # About
      '/aboutus' => '/about-us',
      '/aboutus/mission' => '/about-us/our-mission',
      '/aboutus/museumhistory/old' => '/about-us/history-of-the-building-and-collections',
      '/aboutus/history' => '/about-us/history-of-the-building-and-collections',
      '/aboutus/press/pr_archive' => '/about-us/press-room',
      '/aboutus/today' => '/about-us/the-fitzwilliam-today',
      '/aboutus/support/marlaygroup' => '/support-us/the-marlay-group',
      '/aboutus/support/friends/membership' => '/support-us/friends-of-the-fitzwilliam',
      '/aboutus/pdp' => '/about-us/departments/paintings-drawings-and-prints',
      '/aboutus/ant' => '/about-us/departments/antiquities',
      '/aboutus/aa' => '/about-us/departments/applied-arts',
      '/aboutus/coins' => '/about-us/departments/coins-and-medals',
      '/aboutus/msspb' => '/about-us/departments/manuscripts-and-printed-books',
      '/aboutus/founding' => '/about-us/founding-the-fitzwilliam',
      '/aboutus/jobs' => '/about-us/work-for-us',
      '/jobs/' => '/about-us/work-for-us',
      '/jobs/{url}' => '/about-us/work-for-us/details/{url}',
      '/support-us/support-us' => '/support-us',
      '/about-us/collections/textiles' => '/about-us/collections/textiles-and-fans',
      '/about-us/collections/armsarmour' => '/about-us/collections/arms-and-armour',
      '/depts' => '/about-us/departments',
      # Press
      '/pr' => '/about-us/press-room',
      '/pr/{url}' => '/about-us/press-room',
      # people
      '/people' => '/research/staff-profiles',
      '/users/' => '/research/staff-profiles',
      '/users/{url}' => '/research/staff-profiles/{url}',

      #  Collections
      '/explorer' => '/object-and-artworks',
      '/explorer/{url}' => '/object-and-artworks',
      '/collections/' => '/about-us/collections/',
      '/opacdirect/{url}' => 'https://data.fitzmuseum.cam.ac.uk/id/object/{url}',
      '/collections/greeceandrome' => '/about-us/collections/greece-and-rome',
      '/collections/drawingsandwatercolours' => '/about-us/collections/watercolours-and-drawings',
      '/collections/paintings' => '/about-us/collections/paintings',
      '/collections/ane' => '/about-us/collections/ancient-near-east',
      '/collections/archives' => '/about-us/collections/archives',
      '/collections/armsarmour' => '/about-us/collections/arms-and-armour',
      '/collections/arts-of-asia' => '/about-us/collections/arts-of-asia',
      '/collections/ceramics' => '/about-us/collections/ceramics-glass-and-enamels',
      '/collections/coinsandmedals' => '/about-us/collections/coins-and-medals',
      '/collections/cyprus' => '/about-us/collections/cyprus',
      '/collections/egypt' => '/about-us/collections/egypt',
      '/collections/fineprintedbooks' => '/about-us/collections/fine-printed-books',
      '/collections/furnitureandclocks' =>  'about-us/collections/furniture-and-clocks',
      '/collections/illuminatedmanuscripts' => '/about-us/collections/illuminated-manuscripts',
      '/collections/islamicart'=> '/about-us/collections/islamic-art',
      '/collections/kemetandkush'  => '/about-us/collections/kemet-and-kush',
      '/collections/literarymanuscripts' =>  '/about-us/collections/literary-manuscripts',
      '/collections/nubiaandsudan' =>  '/about-us/collections/nubia-and-sudan',
      '/collections/paintings' => '/about-us/collections/paintings',
      '/collections/prints' => '/about-us/collections/prints',
      '/collections/sculpture' => '/about-us/collections/sculpture-ivories-and-woodwork',
      '/collections/jewellery' => '/about-us/collections/silver-and-jewellery',
      '/collections/textiles' => '/about-us/collections/textiles-and-fans',
      # exhibitions
      '/pastexhibitions' => '/visit-us/exhibitions/archive',
      '/pastexhibitions{url}' => '/visit-us/exhibitions/archive',
      '/pastexhibitions/{url}' => '/visit-us/exhibitions/archive',
      '/degas' => '/visit-us/exhibitions/degas-a-passion-for-perfection',
      # Resources
      '/onlineresources' => '/research/online-resources',
        # Night of Longing
      '/gallery/nightoflonging/' => 'https://nightoflonging.fitzmuseum.cam.ac.uk',
      '/gallery/nightoflonging/sfs/{url}' => 'https://nightoflonging.fitzmuseum.cam.ac.uk/explore/sex-for-sale/',
      '/gallery/nightoflonging/{url}' => 'https://nightoflonging.fitzmuseum.cam.ac.uk/{url}',
      '/gallery/nightoflonging/lovestories/{url}' => 'https://nightoflonging.fitzmuseum.cam.ac.uk/explore/love-stories/',
      '/gallery/nightoflonging/furtherreading/{url}' =>  'https://nightoflonging.fitzmuseum.cam.ac.uk/further-reading/',
      '/gallery/nightoflonging/loveletters/{url}' => 'https://nightoflonging.fitzmuseum.cam.ac.uk/explore/love-letters/',
        # Rebinding manuscripts
      '/utc/' => 'https://https://colour-illuminated.fitzmuseum.cam.ac.uk/rebinding/',
      '/utc/{url}' => 'https://https://colour-illuminated.fitzmuseum.cam.ac.uk/rebinding/{url}',
        # Colour illuminated
      '/colour' => 'https://colour-illuminated.fitzmuseum.cam.ac.uk/',
      '/colour/explore/{url}' => 'https://colour-illuminated.fitzmuseum.cam.ac.uk/explore/{url}',
      '/colour/{url}' => 'https://colour-illuminated.fitzmuseum.cam.ac.uk/{url}',
        # The  great war
      '/gallery/lagrandeguerre/' => 'https://la-grande-guerre.fitzmuseum.cam.ac.uk',
      '/gallery/lagrandeguerre/{url}' => 'https://la-grande-guerre.fitzmuseum.cam.ac.uk/explore/{url}',
        #  Snow country
      '/gallery/snowcountry' => 'https://snowcountry.fitzmuseum.cam.ac.uk',
      '/gallery/snowcountry/{url}' => 'https://snowcountry.fitzmuseum.cam.ac.uk/{url}',
        # vive la difference
      '/gallery/viveladifference/' => 'https://vive-la-difference.fitzmuseum.cam.ac.uk',
      '/gallery/viveladifference/{url}' => 'https://vive-la-difference.fitzmuseum.cam.ac.uk/{url}',
        #  shahnameh
      '/gallery/shahnameh/' => 'https://shahnameh.fitzmuseum.cam.ac.uk/',
      '/gallery/shahnameh/{url}' => 'https://shahnameh.fitzmuseum.cam.ac.uk/{url}',
        # Netsuke
      '/netsuke' => 'https://netsuke.fitzmuseum.cam.ac.uk',
      '/netsuke/{url}' => 'https://netsuke.fitzmuseum.cam.ac.uk/{url}',
        # Book of the dead
      '/gallery/papyrus/' => 'https://book-of-the-dead.fitzmuseum.cam.ac.uk',
      '/gallery/papyrus/{url}' => 'https://book-of-the-dead.fitzmuseum.cam.ac.uk/{url}',
        # Cockerell
      '/cockerell' => 'https://cockerel.fitzmuseum.cam.ac.uk',
      '/cockerell/{url}' => 'https://cockerel.fitzmuseum.cam.ac.uk{url}',
      '/cockerell/pigstytopalace/{url}' =>  'https://cockerel.fitzmuseum.cam.ac.uk/pigsty-to-palace/antiquities/',
      '/cockerell/directorcollector/{url}' => 'https://cockerel.fitzmuseum.cam.ac.uk/director-collector/',

       # Vani
      '/gallery/goldenfleece' => 'https://golden-fleece.fitzmuseum.cam.ac.uk',
      '/gallery/goldenfleece/{url}' => 'https://golden-fleece.fitzmuseum.cam.ac.uk/{url}',
       # extreme unction
      '/gallery/paintinginfocus' => 'https://extreme-unction.fitzmuseum.cam.ac.uk/',
      '/gallery/paintinginfocus/{url}' => 'https://extreme-unction.fitzmuseum.cam.ac.uk/{url}',
      # Yoshitoshi
      '/gallery/yoshitoshi' => 'https://yoshitoshi.fitzmuseum.cam.ac.uk',
      '/gallery/yoshitoshi/{url}' => 'https://yoshitoshi.fitzmuseum.cam.ac.uk/{url}',
       # Sales catalogues
      '/dept/coins/library/salescatalogue' => 'https://numismatic-catalogues.fitzmuseum.cam.ac.uk',
      '/dept/coins/library/salescatalogue/{url}' => 'https://numismatic-catalogues.fitzmuseum.cam.ac.uk/{url}',
       # miniare
      '/miniare' => 'https://miniare.fitzmuseum.cam.ac.uk',
      '/miniare/{url}' => 'https://miniare.fitzmuseum.cam.ac.uk/{url}',
      # Events
      '/calendar' => '/events',
      '/calendar/whatson/gold-great-steppe' => '/visit-us/exhibitions/gold-of-the-great-steppe',
      '/calendar/events' => '/events',
      '/calendar/whatson' => '/events',
      '/calendar/whatson/{url}' => '/events',
      '/events/whatson' => '/events',
      '/events/whatson/{url}' => '/events',
      '/events/events' => '/events',
      '/wo' => '/events',
      # Learning
      '/learningresources' => '/learning/resources',
      '/learning/youngpeople' => 'learning/young-people',
      '/learning/youngpeople/awards' => '/learning/young-people/arts-award',
      '/learning/adulteducation' => '/learning/adult-programming',
      '/learning/contact' => '/learning/contact-us',
      '/learning/groups' => '/learning/group-activities',
      '/learning/schools' => 'learning/school-sessions',
      '/learning/family' => '/learning/families',
      '/learning/families/gallery-activities' => '/learning/gallery-activities',
      '/learning/community' => '/learning/community-programming',
      '/learning/adults' => '/learning/adult-programming',
      '/learning/families/stories' => '/learning/tales-from-the-museum',
      '/work/fitzwilliam-museum-portico' => '/learning/look-think-do/the-fitzwilliam-museum-portico',
      '/work/{url}' => '/learning/look-think-do/{url}',
      '/lookthinkdo/{url}' => '/learning/look-think-do/{url}',
      '/learning/schoolscolleges/plan-your-visit' => '/learning/plan-your-visit',
      # Pharos
      '/pharos' => '/objects-and-artworks',
      '/ce-work' => '/objects-and-artworks',
      # News - Most of these urls  are rewritten for clarity of semantics
      '/news/inside-macclesfield-psalter' => '/news/inside-the-macclesfield-psalter',
      '/news/easter-fitzwilliam' => '/news/easter-at-the-fitzwilliam',
      '/news/easter-fitz' => '/news/easter-at-the-fitzwilliam',
      '/news/christmas-fitzwilliam' => '/news/christmas-at-the-fitzwilliam-2015',
      '/news/magnificence-rome' => '/news/magnificence-of-rome',
      '/news/ra250-fitz' => '/news/ra250-at-the-fitz',
      '/news/summer-fitzwilliam' => '/news/summer-at-the-fitzwilliam',
      '/news/twilight-fitzwilliam' => '/news/twilight-at-the-fitzwilliam',
      '/news/support-us' => '/support-us',
      '/news/behind-secret-doors' => '/news/behind-the-secret-doors',
      '/news/christmas-fitzwilliam-1' => '/news/christmas-at-the-fitzwilliam-2017',
      '/news/summer-fitzwilliam-0' => '/news/summer-at-the-fitzwilliam',
      '/news/easter-fitzwilliam-1' => '/news/easter-at-the-fitzwilliam-2018',
      '/news/welcome-our-two-new-deputy-directors' => '/news/welcome-to-our-two-new-deputy-directors',
      '/news/portrait-giovanni-belzoni-donated-fitzwilliam' => '/news/portrait-of-giovanni-belzoni,-donated-to-the-fitzwilliam',
      '/news/sensualvirtual' => '/news/sensual-virtual',
      '/news/‘young-advocates’-museums' => '/news/young-advocates-in-museums',
      '/news/napoleon’s-legacy-prints' => '/news/napoleon\'s-legacy-in-prints',
      '/news/final-weeks-discoveries' => '/news/final-weeks-of-discoveries',
      '/news/easter-fitzwilliam-2' => '/news/easter-at-the-fitzwilliam-2019',
      '/news/easter-fitz-1' => '/news/easter-at-the-fitz',
      '/news/mannequin-parade-0' => '/news/mannequin-parade',
      '/news/follow-fitz-twitter' => '/news/follow-the-fitz-on-twitter!',
      '/news/award-saving-masterpiece' => '/news/award-for-saving-a-masterpiece',
      '/news/music-late-fitzwilliam' => '/news/music-late-at-the-fitzwilliam',
      '/news/poetry-sean-borodale' => '/news/poetry-with-sean-borodale',
      '/news/object-month-january' => '/news/object-of-the-month-january',
      '/news/not-miss-november' => '/news/not-to-miss-in-november',
      '/news/story-early-film' => '/news/the-story-of-early-film',
      '/news/summer-holidays-fitzwilliam' => '/news/summer-holidays-at-the-fitzwilliam',
      '/news/fitzwilliam-200-today' => '/news/the-fitzwilliam-is-200-today',
      '/news/delftware-fitzwilliam-museum' => '/news/delftware-in-the-fitzwilliam-museum',
      '/news/spectre-brave-alonzo' => '/news/the-spectre-of-brave-alonzo',
      '/news/verve-fitzwilliam-museum' => '/news/verve-at-the-fitzwilliam-museum',
      '/news/fitzwilliam-museum-facebook' => '/news/the-fitzwilliam-museum-on-facebook',
      '/news/festival-ideas-fitz' => '/news/the-festival-of-ideas-at-the-fitz',
      '/news/inspiring-ancient-world' => '/news/inspiring-with-the-ancient-world',
      '/news/sebastiano-restoration-nominated-award' => '/news/sebastiano-restoration-nominated-for-award',
      '/news/new-film-michael-rosen' => '/news/new-film-with-michael-rosen',
      '/news/new-podcast-fitzwilliam-museum' => '/news/new-podcast-from-the-fitzwilliam-museum',
      'news/festival-ideas-fitzwilliam-museum' => 'news/the-festival-of-ideas-at-the-fitzwilliam-museum',
      '/news/bbc-civilisations-and-fitzwilliam'  => '/news/bbc-civilisations-and-the-fitzwilliam',
      '/news/thomas-hardys-jude-obscure' => '/news/thomas-hardy\'s-jude-the-obscure',
      '/news/virtual-tour-true-nature' => '/news/virtual-tour-of-true-to-nature',
      '/news/2016-fitzwilliam-museum-bicentenary' => '/news/2016-the-fitzwilliam-museum-bicentenary',
      '/news/poussin-masterpiece-goes-tour' => '/news/poussin-masterpiece-goes-on-tour',
      '/news/last-week-silent-partners' => '/news/last-week-of-silent-partners',
      '/news/verve-returns-fitzwilliam-museum' => '/news/verve-returns-to-the-fitzwilliam-museum',
      '/news/final-stage-building-works' => '/news/final-stage-of-building-works',
      '/news/mannequins-x-ray-vision' => '/news/mannequins-with-x-ray-vision',
      '/news/colouring-competition-grown-ups' => '/news/colouring-competition-for-grown-ups',
      '/news/co-production-adc-theatre' => '/news/co-production-with-adc-theatre',
      '/news/fitzwilliam-focuses-prints-whistler' => '/news/the-fitzwilliam-focuses-on-the-prints-of-whistler',
      '/news/coronavirus-covid-19-update' => '/news/the-museum-and-coronavirus-covid-19-an-update',
      '/news/whistler-studies-allocated-fitzwilliam' => '/news/whistler-studies-allocated-to-the-fitzwilliam',
      '/news/launch-new-legacy-brochure' => '/news/launch-of-new-legacy-brochure',
      '/news/chapman-brothers-prints-0' => '/news/chapman-brothers-prints',
      '/news/michelangelo-bronzes-discovered-0' => '/news/michelangelo-bronzes-discovered',
      '/news/macclesfield-psalter-back-display' => '/news/the-macclesfield-psalter-back-on-display',
      '/news/collaboration-street-artist-run' => 'news/collaboration-with-street-artist-run',
      '/news/flying-flag-cambridge-pride' => '/news/flying-the-flag-for-cambridge-pride',
      '/news/special-display-edward-lear' => '/news/special-display-on-edward-lear',
      '/news/double-nomination-egyptian-coffins-project' => '/news/double-nomination-for-the-egyptian-coffins-project',
      '/news/radiance-and-reflection-story-glass' => '/news/radiance-and-reflection-the-story-of-glass',
      '/news/fitzwilliam-prevents-export-queen-victoria' => '/news/fitzwilliam-prevents-the-export-of-queen-victoria',
      '/news/conservation-stories-university-science-festival' => '/news/conservation-stories-for-university-science-festival',
      '/news/discover-first-class-craft-collect' => '/news/discover-first-class-craft-at-collect',
      '/news/october-half-term-week-fitzwilliam' => '/news/october-half-term-week-at-the-fitzwilliam',
      '/news/new-facsimile-museum’s-medieval-manuscript' => '/news/new-facsimile-for-museum’s-medieval-manuscript',
      '/news/bicentenary-book-fitzwilliam-museum-history' => '/news/bicentenary-book-the-fitzwilliam-museum-a-history',
      '/news/arrival-deputy-director-ian-hardwick' => '/news/arrival-of-deputy-director-ian-hardwick',
      '/news/weeping-virgin-saved-public-appeal' => '/news/weeping-virgin-saved-in-public-appeal',
      '/news/king-henry-viii-display-august' => '/news/king-henry-viii-on-display-in-august',
      '/news/original-manuscripts-literary-archives-display' => '/news/original-manuscripts-from-the-literary-archives-on-display',
      '/news/ode-nightingale-‘my-heart-aches’' =>  '/news/ode-to-a-nightingale-my-heart-aches',
      '/news/seasonal-offerings-online-advent-calendar' => '/news/seasonal-offerings-&-online-advent-calendar',
      '/news/podcast-series-my-minds-eye' => '/news/new-podcast-series-in-my-minds-eye',
      '/news/whales-fish-and-aquatic-wonders' => '/news/whales,-fish-and-aquatic-wonders',
      '/news/last-weeks-see-caroline-watson' => '/news/last-weeks-to-see-caroline-watson',
      '/news/fitzwilliam-named-top-attraction-tripadvisor' => '/news/fitzwilliam-named-a-top-attraction-by-tripadvisor',
      '/news/easter-events-families-fitzwilliam-museum' => '/news/easter-events-for-families-at-the-fitzwilliam-museum',
      '/news/new-alan-turing-archives-show' => '/news/new-alan-turing-archives-on-show',
      '/news/re-display-poussin’s-extreme-unction' => '/news/re-display-of-poussin’s-extreme-unction',
      '/news/fitzwilliam-acquires-three-important-paintings' => '/news/the-fitzwilliam-acquires-three-important-paintings',
      '/news/gainsborough-masterpiece-celebrated-peterborough-school' => '/news/gainsborough-masterpiece-celebrated-in-peterborough-school',
      '/news/behind-scenes-videos-and-podcasts' => '/news/behind-the-scenes-videos-and-podcasts',
      '/news/fitzwilliam-looking-participants-2013-exhibition' => '/news/fitzwilliam-looking-for-participants-in-2013-exhibition',
      '/news/thank-you-national-lottery-players' => '/news/thank-you-to-national-lottery-players',
      '/news/tell-history-world-fitzwilliamâ€™s-collection' => '/news/tell-a-history-of-the-world-with-the-fitzwilliam-s-collection',
      '/news/renovations-and-revivals-fitzwilliam-museum' => '/news/renovations-and-revivals-at-the-fitzwilliam-museum',
      '/news/were-back-human-touch-opens' => '/news/we-re-back-human-touch-opens',
      '/news/100-questions-installation-fitzwilliam-museum' => '/news/100-questions-installation-at-the-fitzwilliam-museum',
      '/news/booking-open-michelangelo-bronze-conference' => '/news/booking-open-for-michelangelo-bronze-conference',
      '/news/fitzwilliam-focuses-whistlers-palaces-night' => '/news/fitzwilliam-focuses-on-whistler\'s-palaces-in-the-night',
      '/news/february-half-term-week-fitzwilliam' => '/news/february-half-term-week-at-the-fitzwilliam',
      '/news/new-director-hamilton-kerr-institute' => '/news/new-director-for-the-hamilton-kerr-institute',
      '/news/fitzwilliam-museum-annual-review-2016' =>  '/news/the-fitzwilliam-museum-annual-review-2016',
      '/news/masterpieces-dutch-golden-age-back-display' =>  '/news/masterpieces-of-the-dutch-golden-age-back-on-display',
      '/news/last-weeks-see-manuscript-conservation-secrets' => '/news/last-weeks-to-see-manuscript-conservation-secrets',
      '/news/original-manuscript-thomas-hardy’s-jude-obscure' => '/news/original-manuscript-of-thomas-hardy’s-jude-obscure',
      '/news/bbc-cambridgeshire-broadcasting-live-fitzwilliam-week' => 'news/bbc-cambridgeshire-broadcasting-live-from-the-fitzwilliam-this-week',
      '/news/february-half-term-week-fitzwilliam-1' => 'news/february-half-term-week-at-the-fitzwilliam',
      '/news/february-half-term-week-fitzwilliam-2019'  => '/news/february-half-term-week-at-the-fitzwilliam-2019',
      '/news/musée-bourdelle-paris-reopens-silent-partners' => '/news/musee-bourdelle-paris-reopens-with-silent-partners',
      '/news/amendments-chinese-new-year-family-event' => '/news/amendments-to-the-chinese-new-year-family-event',
      '/news/fitzwilliam-needs-your-first-editions-molesworth' => '/news/the-fitzwilliam-needs-your-first-editions-of-molesworth',
      '/news/illuminate-your-winter-new-manuscript-displays' => '/news/illuminate-your-winter!-new-manuscript-displays',
      '/news/own-copy-your-favourite-fitz-artwork' => '/news/own-a-copy-of-your-favourite-fitz-artwork',
      '/news/winner-chen-hong-prize-draw-announced' => '/news/winner-of-chen-hong-prize-draw-announced',
      '/news/reopening-fitz-updated-19-august-2020' => '/news/reopening-the-fitzwilliam-museum',
      '/news/ancient-persia-brought-life-new-exhibition' => '/news/ancient-persia-brought-to-life-in-new-exhibition',
      '/news/poet-laureate-and-novelists-celebrate-collection' => '/news/poet-laureate-and-novelists-celebrate-the-collection',
      '/news/join-us-special-twilight-opening-tonight' => '/news/join-us-for-a-special-twilight-opening-tonight',
      '/news/five-works-stanley-spencer-saved-nation' => '/news/five-works-by-stanley-spencer-saved-for-the-nation',
      '/news/3d-imaging-collections-offer-increased-access' => '/news/3d-imaging-of-the-collections-to-offer-increased-access',
      '/news/codebreakers-merchandise-wins-ace-range-year' => '/news/codebreakers-merchandise-wins-ace-\'range-of-the-year\'',
      '/news/open-forum-â€˜public-art-who-caresâ€™' => '/news/open-forum-public-art-who-cares',
      '/newsarts-20th-century-gallery-now-reopened' => '/news/the-arts-of-the-20th-century-gallery-now-reopened',
      '/news/uk-museums-explore-cultural-links-china' => 'news/uk-museums-to-explore-cultural-links-with-china',
      '/news/prince-wales-and-duchess-cornwalls-visit' => '/news/the-prince-of-wales-and-the-duchess-of-cornwall\'s-visit',
      '/news/late-opening-summer-exhibitions-dutch-gallery' => '/news/late-opening-summer-exhibitions-&-dutch-gallery',
      '/news/great-war-britains-efforts-and-ideals' => '/news/the-great-war-britain\'s-efforts-and-ideals',
      '/news/oxford-and-cambridge-exchange-masterpieces-0' => '/news/oxford-and-cambridge-exchange-masterpieces',
      '/news/exhibition-year-award-fitzwilliams-darwin-exhibition' => '/news/exhibition-year-award-fitzwilliam\'s-darwin-exhibition',
      '/news/tim-knox-has-left-fitzwilliam-museum' => '/news/tim-knox-has-left-the-fitzwilliam-museum',
      '/news/exceptional-paintings-el-greco-largillière-loan' => '/news/exceptional-paintings-by-el-greco-largilliere-loan',
      '/news/nominate-us-family-friendly-museum-award' => '/news/nominate-us-for-the-family-friendly-museum-award',
      '/news/discover-sargent-sickert-spencer-new-podcast' => '/news/discover-sargent,-sickert-&-spencer-with-new-podcast',
      '/news/celebration-event-last-weeks-craxton-show' => '/news/celebration-event-for-last-weeks-of-craxton-show',
      '/news/silent-partners-wins-apollo-exhibition-year' => '/news/silent-partners-wins-apollo-exhibition-of-the-year',
      '/news/week-only-special-william-blake-display' => '/news/this-week-only-special-william-blake-display',
      '/news/horse-mannequin-dressed-and-ready-go' => '/news/horse-mannequin-dressed-and-ready-to-go',
      '/news/james-h-marrow-research-travel-fund' => '/news/james-h.-marrow-research-travel-fund',
      '/news/re-opening-main-entrance-gallery-1' => '/news/re-opening-of-main-entrance-gallery-1',
      '/news/summertime-loan-sleeping-john-everett-millais' =>  '/news/summertime-loan-\'sleeping\'-john-everett-millais',
      '/news/jennifer-marchant-december-1979-–-june-2020' => '/news/jennifer-marchant',
      '/news/auerbach-sketches-and-birthday-messages-join-collections' => '/news/auerbach-sketches-and-birthday-messages-join-the-collections',
      '/news/‘who’s-artist’-free-sculpture-panel-discussion-week' => '/news/‘who-s-artist-free-sculpture-panel-discussion-week',
      '/news/fitzwilliam-revealed-most-popular-free-attraction-region' => '/news/fitzwilliam-revealed-as-most-popular-free-attraction-in-the-region',
      '/news/new-print-exhibition-celebrates-japan-and-sea' => '/news/new-print-exhibition-celebrates-japan-and-the-sea',
      '/news/spotlight-beauty-gallery-trail-and-prize-draw' => '/news/spotlight-on-beauty-gallery-trail-and-prize-draw',
      '/news/works-first-british-female-printmaker-go-show' => '/news/works-of-the-first-british-female-printmaker-go-show',
      '/news/fitzwilliam-museum-starts-friday-night-exhibition-openings' => '/news/the-fitzwilliam-museum-starts-friday-night-exhibition-openings',
      '/news/prize-giving-ceremony-winners-egyptian-writing-competition' => '/news/prize-giving-ceremony-for-winners-of-egyptian-writing-competition',
      '/news/identity-matters-black-history-month-fitzwilliam-museum' => '/news/identity-matters-black-history-month-at-the-fitzwilliam-museum',
      '/news/fitzwilliam-joins-national-scheme-help-budding-artists' => '/news/fitzwilliam-joins-national-scheme-to-help-budding-artists',
      '/news/fitzs-outdoor-festival-celebrates-chinese-culture-sun' => '/news/fitz\'s-outdoor-festival-celebrates-chinese-culture-in-the-sun',
      '/news/gold-pineapple-welcomes-visitors-feast-fast-exhibition' => '/news/gold-pineapple-welcomes-visitors-to-feast-&-fast-exhibition',
      '/news/explore-art-glass-engraving-online-virtual-exhibition' =>  '/news/explore-the-art-of-glass-engraving-online-with-virtual-exhibition',
      '/news/reinvigorated-hang-20th-and-21st-century-art' => '/news/a-reinvigorated-hang-of-20th-and-21st-century-art',
      '/news/rss-news-feeds-now-available-fitzwilliam-museum' => '/news/rss-news-feeds-now-available-from-the-fitzwilliam-museum',
      '/news/fitzwilliam-museum-masterpieces-2020-edition-greetings-cards' => '/news/fitzwilliam-museum-masterpieces-2020-edition-of-greetings-cards',
      '/sensualvirtual' => '/news/sensualvirtual',
      '/news/david-scrase-15-march-1949-31-october-2020' => '/news/david-scrase',

      # Research
      '/conservd' => '/research/projects/conservd',
      '/research/grr' => '/visit-us/galleries/gallery-9',
      '/research/mec' => '/research/projects/medieval-european-coinage',

      #visit
      '/visit/gettinghere' => '/visit-us',
      '/visit' => '/visit-us',
      '/visit/{url}' => '/visit-us/{url}',


    ],

];
