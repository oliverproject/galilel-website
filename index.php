<?php
  /* include required files. */
  require('lib/bootstrap.php');

  /* get dynamic values (mainnet). */
  $GalilelStatistics = GalilelData(".statistics");
  $GalilelDonations = GalilelData(".donations");

  /* get dynamic values (testnet). */
  $GalilelTestnetStatistics = GalilelData(".statistics-testnet");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Maik Broemme">
    <meta name="description" content="Galilel Core - Hybrid Mobile Proof-of-Stake, Proof-of-Burn, Term Deposits and Instant On Masternodes">
    <meta name="revisit-after" content="30 days">
    <meta name="keywords" content="Galilel, GALI, Cloud, Masternode, Hosting, Proof-of-Stake, PoS, Block Explorer, Service, Payment, Blockchain, Crypto, ghPoS, ghTD, ghMSC, gIOMN">

    <!-- Facebook -->
    <meta property="og:url" content="https://galilel.cloud">
    <meta property="og:site_name" content="Galilel Coin">
    <meta property="article:author" content="https://www.facebook.com/mbroemme">
    <meta property="article:tag" content="Galilel">
    <meta property="article:tag" content="GALI">
    <meta property="article:tag" content="Cloud">
    <meta property="article:tag" content="Masternode">
    <meta property="article:tag" content="Hosting">
    <meta property="article:tag" content="Proof-of-Stake">
    <meta property="article:tag" content="PoS">
    <meta property="article:tag" content="Block">
    <meta property="article:tag" content="Explorer">
    <meta property="article:tag" content="Service">
    <meta property="article:tag" content="Payment">
    <meta property="article:tag" content="Blockchain">
    <meta property="article:tag" content="Crypto">
    <meta property="article:tag" content="ghPoS">
    <meta property="article:tag" content="ghTD">
    <meta property="article:tag" content="ghMSC">
    <meta property="article:tag" content="gIOMN">
    <meta property="article:section" content="Crypto">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:src" content="https://galilel.cloud/images/logo.svg">
    <meta name="twitter:site" content="@GalilelEN">

    <!-- Import Google Icons and Font -->
    <liNK href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet">

    <!-- Import Font Awesome Font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/brands.css" integrity="sha384-1KLgFVb/gHrlDGLFPgMbeedi6tQBLcWvyNUN+YKXbD7ZFbjX6BLpMDf0PJ32XJfX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous">

    <!-- Import materialize.css -->
    <liNK type="text/css" rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <liNK type="text/css" rel="stylesheet" media="screen,projection" href="css/init.css">

    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" />

    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" href="css/jvectormap/jquery-jvectormap-2.0.3.css" />

    <!-- Featherlight -->
    <link rel="stylesheet" type="text/css" href="css/featherlight/featherlight.min.css" />

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="css/responsive-tabs/responsive-tabs.css" />

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/inview/jquery.inview.min.js"></script>
    <script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="js/featherlight/featherlight.min.js"></script>
    <script src="js/init.js"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Website title -->
    <title>Galilel Core - Hybrid Mobile Proof-of-Stake, Proof-of-Burn, Term Deposits and Instant On Masternodes</title>
</head>

<body>

    <!-- Drop Down Menu -->
    <ul id="about" class="dropdown-content">
        <li><a href="#features">Features</a></li>
        <li><a href="#information">Information</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#roadmap">Roadmap</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="#merchants">Merchants</a></li>
    </ul>
    <ul id="wallet" class="dropdown-content">
        <li><a href="#wallets">Desktop Wallets</a></li>
        <li><a href="#wallets">Paper Wallets</a></li>
        <li><a href="https://paper.galilel.cloud/" target="_blank" rel="noopener noreferrer">Instant Wallets</a></li>
        <li><a href="#wallets">Bootstrap</a></li>
    </ul>
    <ul id="exchange" class="dropdown-content">
        <li><a href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">Graviex</a></li>
        <li><a href="https://crex24.com/exchange/GALI-BTC" target="_blank" rel="noopener noreferrer">Crex24</a></li>
        <li><a href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">Aiodex</a></li>
        <li><a href="https://cratex.io/index.php?pair=GALI/BTC" target="_blank" rel="noopener noreferrer">Cratex</a></li>
        <li><a href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">Raisex</a></li>
        <li><a href="https://trade.mct.plus" target="_blank" rel="noopener noreferrer">MCT+</a></li>
        <li><a href="https://www.finexbox.com/market/pair/GALI-BTC.html" target="_blank" rel="noopener noreferrer">Finexbox</a></li>
        <li><a href="https://blocknet.co/galilel-2/about/" target="_blank" rel="noopener noreferrer">Block DX</a></li>
        <li><a href="https://bisq.network/markets/?currency=gali_btc" target="_blank" rel="noopener noreferrer">Bisq</a></li>
        <li><a href="https://amsterdex.com/exchange?market=gali" target="_blank" rel="noopener noreferrer">Amsterdex</a></li>
    </ul>
    <ul id="paper" class="dropdown-content">
        <li><a href="downloads/guides/Galilel_Corporate_Design_Guidelines.pdf" target="_blank" rel="noopener noreferrer">Brand Guide</a></li>
        <li><a href="downloads/guides/Galilel_TOR_Masternode_Guide_EN.pdf" target="_blank" rel="noopener noreferrer">Tor Masternode Guide</a></li>
        <li><a href="#" target="_blank" data-featherlight="#whitepapers">Whitepapers</a></li>
        <li><a href="#" target="_blank" data-featherlight="#walletguides">Wallet guides</a></li>       
    </ul>
    <ul id="explorer" class="dropdown-content">
        <li><a href="https://explorer.galilel.cloud" target="_blank" rel="noopener noreferrer">Mainnet</a></li>
        <li><a href="https://explorer.aiodex.com/GALI" target="_blank" rel="noopener noreferrer">Mainnet (Aiodex)</a></li>
        <li><a href="https://explorer.testnet.galilel.cloud" target="_blank" rel="noopener noreferrer">Testnet</a></li>
    </ul>

    <!-- Main Menu -->
    <div class="navbar-fixed">
        <nav class="main-nav" role="navigation" id="top">
            <div class="nav-wrapper container">
                <ul class="main-menu left hide-on-med-and-down">
                    <li class="no-hover">
                        <a href="/"><img id="menu-logo" src="images/logo.svg"></a>
                    </li>
                    <li><a class="dropdown-trigger" data-target="about">About</a></li>
                    <li><a class="dropdown-trigger" data-target="wallet">Wallets</a></li>
                    <li><a class="dropdown-trigger" data-target="exchange">Exchanges</a></li>
                    <li><a class="dropdown-trigger" data-target="paper">Papers</a></li>
                    <li><a class="dropdown-trigger" data-target="explorer">Explorers</a></li>
                    <li><a href="#media">Media</a></li>
                </ul>
                <ul class="main-menu right hide-on-med-and-down">
                    <?php
                        $deploy_masternodes = [
                            '<li class="deploymasternode"><a href="https://p.ginplatform.io/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/ginplatform.svg">Deploy Masternode</a>',
                            '<li class="deploymasternode"><a href="https://ihostmn.com/hostmn.php?coin=GALI" target="_blank" rel="noopener noreferrer"><img src="images/marketing/ihostmn.svg">Deploy Masternode</a>',
                            '<li class="deploymasternode"><a href="https://dextro.io" target="_blank" rel="noopener noreferrer"><img src="images/marketing/dextro.svg">Deploy Masternode</a>',
                            '<li class="deploymasternode"><a href="https://hub.kalkul.us" target="_blank" rel="noopener noreferrer"><img src="images/marketing/kalkulus.svg">Deploy Masternode</a>',
                            '<li class="deploymasternode"><a href="https://pecuniaplatform.io/99HOST" target="_blank" rel="noopener noreferrer"><img src="images/marketing/pecunia.svg">Deploy Masternode</a>',
                            '<li class="deploymasternode"><a href="https://masternodes-germany.de/masternode-hosting/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/masternodesgermany.svg">Deploy Masternode</a>'
                        ];
                        echo $deploy_masternodes[mt_rand(0, count($deploy_masternodes) - 1)];
                    ?>
                </ul>
                <a class="sidenav-trigger right" data-target="nav-mobile" href="#"><i class="material-icons right">menu</i>MENU</a>
            </div>
        </nav>
    </div>

    <!-- Sidenav Menu -->
    <ul id="nav-mobile" class="collapsible collapsible-accordion sidenav">
        <li><a class="collapsible-header waves-effect waves-grey">About</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#information">Information</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#roadmap">Roadmap</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#merchants">Merchants</a></li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect waves-grey">Wallets</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#wallets">Desktop Wallets</a></li>
                    <li><a href="#wallets">Paper Wallets</a></li>
                    <li><a href="https://paper.galilel.cloud/" target="_blank" rel="noopener noreferrer">Instant Wallets</a></li>
                    <li><a href="#wallets">Bootstrap</a></li>
                    <li><a href="https://github.com/Galilel-Project" target="_blank" rel="noopener noreferrer">Repositories</a></li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect waves-grey">Exchanges</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">Graviex</a></li>
                    <li><a href="https://crex24.com/exchange/GALI-BTC" target="_blank" rel="noopener noreferrer">Crex24</a></li>
                    <li><a href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">Aiodex</a></li>
                    <li><a href="https://cratex.io/index.php?pair=GALI/BTC" target="_blank" rel="noopener noreferrer">Cratex</a></li>
                    <li><a href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">Raisex</a></li>
                    <li><a href="https://trade.mct.plus" target="_blank" rel="noopener noreferrer">MCT+</a></li>
                    <li><a href="https://www.finexbox.com/market/pair/GALI-BTC.html" target="_blank" rel="noopener noreferrer">Finexbox</a></li>
                    <li><a href="https://blocknet.co/galilel-2/about/" target="_blank" rel="noopener noreferrer">Block DX</a></li>
                    <li><a href="https://bisq.network/markets/?currency=gali_btc" target="_blank" rel="noopener noreferrer">Bisq</a></li>
                    <li><a href="https://amsterdex.com/exchange?market=gali" target="_blank" rel="noopener noreferrer">Amsterdex</a></li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect waves-grey">Papers</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="downloads/guides/Galilel_Corporate_Design_Guidelines.pdf" target="_blank" rel="noopener noreferrer">Brand Guide</a></li>
                    <li><a href="downloads/guides/Galilel_TOR_Masternode_Guide_EN.pdf" target="_blank" rel="noopener noreferrer">Tor Masternode Guide</a></li>
                    <li><a href="#" target="_blank" data-featherlight="#whitepapers">Whitepapers</a></li>
                    <li><a href="#" target="_blank" data-featherlight="#walletguides">Wallet guides</a></li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect waves-grey">Community</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer">Discord</a></li>
                    <li><a href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                    <li><a href="https://t.me/GalilelEN" target="_blank" rel="noopener noreferrer">Telegram</a></li>
                    <li><a href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer">BitcoinTalk</a></li>
                    <li><a href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                    <li><a href="https://youtube.com/channel/UC26rKBciicXp33dK8NkALmg" target="_blank" rel="noopener noreferrer">YouTube</a></li>
                    <li><a href="https://instagram.com/galilel_en/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect waves-grey">Explorers</a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="https://explorer.galilel.cloud" target="_blank" rel="noopener noreferrer">Mainnet</a></li>
                    <li><a href="https://explorer.aiodex.com/GALI" target="_blank" rel="noopener noreferrer">Mainnet (Aiodex)</a></li>
                    <li><a href="https://explorer.testnet.galilel.cloud">Testnet</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#media">Media</a></li>
    </ul>

    <!-- Information Header -->
    <div class="container-fluid" id="head">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col m12">
                        <img id="header-logo" src="images/logo.svg">
                        <h1 class="header">GALILEL CORE</h1>
                        <h3>The first general purpose crypto currency with Hybrid Consensus Algorithm, Dynamic Zerocoin Proof-of-Stake, Proof-of-Transaction and Masternode voting for period based reward burning</h3>
                        <a href="#wallets" class="btn-large waves-effect">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Information Content -->
    <div class="container" id="features">
        <div class="slick-controls">
            <div class="slick-control-next"><i class="fas fa-angle-right"></i></div>
            <div class="slick-control-prev"><i class="fas fa-angle-left"></i></div>
        </div>
        <div class="slick-container">
            <div class="slick">
                <div class="carousel-item">
                    <h5><img src="images/logo.svg"><br>Galilel Coin (GALI and <span class="small">z</span>GALI)</h5>
                    <p>is an open-source public and private Proof-of-Stake digital crypto currency for fast (using SwiftX), private (Zerocoin protocol) and secure micro transactions. Our main goal is to create a decentralized fully secure and anonymous network to run applications, which do not rely on any central body control. By having a distributed system, thousands of users will be responsible for maintaining the application and data so that there is no single point of failure.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">tune</i><br>Dynamic Zerocoin Proof-of-Stake (<span class="small">dz</span>P<span class="small">o</span>S)</h5>
                    <p class="light">In Galilel, we implement a dynamic version of Zerocoin staking. Zerocoin staking generates rewards in denominations, which represent an integer value. The smallest possible denomination is one. In the first version - warmup phase - we always use the smallest denomination value for testing purposes. The drawback of this approach is that Zerocoin staking is very CPU intensive and probability to generate an orphan block is higher as a public coin stake can solve the block later but distribute it to the chain earlier. In the second version - full phase - we auto determine the best denomination structure based on the block reward amount. This significantly reduces the probability to generate orphan blocks.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">vpn_key</i><br>Proof-of-Transaction (<span class="small">gh</span>P<span class="small">o</span>T)</h5>
                    <p>In traditional economics with money transfers between bank accounts, it is possible to specify a subject so that the recipient can assign the amount to a specific invoice. It is not possible in current wallet implementations. It allows specifying a comment or comment-to value, which is not part of the transaction and only stored locally. To assign an invoice to a particular payee it is necessary to create a wallet address with a one-to-one mapping between both stakeholders. In Galilel, we include an additional data field and attach it to the transaction, which is stored in the block. It is an encrypted field and decryption is only possible by the wallets, which negotiated the transaction. It solves the transaction assignment problem and allows payment-processing gateways to identify the payee of an invoice as it is with traditional fiat invoices.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">smartphone</i><br>Hybrid Proof-of-Stake (<span class="small">gh</span>P<span class="small">o</span>S)</h5>
                    <p>While Proof-of-Stake (PoS) is an environmentally friendly consensus algorithm, it creates rewards only as long as the desktop wallet is running. One solution to this problem is to sign-up to any shared Proof-of-Stake pool and stake in the cloud. However, the disadvantage is that user need to trust the staking pool and transfer specific amount of coins to it. It can lead to situation that huge amount of coins are stored in a few wallets. This is a weak situation for a decentralized network approach and is a fundamental part to reach consensus. Private staking, so called Zerocoin Proof-of-Stake (zPoS), has the same problems and limitations. In Galilel, the solution to this problem will be a complete hybrid consensus algorithm named Galilel Hybrid Proof-of-Stake (<span class="small">gh</span>P<span class="small">o</span>S). We will extend Proof-of-Stake with mobile staking capabilities for both public and private staking.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">attach_money</i><br>Term Deposits (<span class="small">g</span>TD)</h5>
                    <p>While mobile staking is dependent from network difficulty and amount of staked coins, the <a class="link-text" href="https://en.wikipedia.org/wiki/Time_deposit" target="_blank" rel="noopener noreferrer">Term Deposit</a> function allow to lock coins for a certain period and generate predictable rewards. The user decides the period to lock coins. Once locked, moving or spending coins for purchases is impossible, cancellation of term deposit before expiration time is impossible. This will effectively reduce the coin supply during the lock period.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">money_off</i><br>Money Supply Control (<span class="small">g</span>MSC)</h5>
                    <p>Inflation control is the most challenging part for digital money to be recognized and accepted as alternative to fiat money. Without any controlling mechanism, the value of any digital money is unpredictable. This leads to situation when investors' starts betting on the value and this can seriously damage the market within hours and immediately eliminates the possibility to push digital money into market as accepted payment option. With inflation control, we believe that people outside the digital money sphere are attracted to use it, as there is no need to look every day at their portfolio. Unlike central banks in case of fiat money, there will be no central place for watching and maintaining money supply. In Galilel, we implement a decentralized approach to burn coins, so called <a class="link-text" href="https://en.bitcoin.it/wiki/Proof_of_burn" target="_blank" rel="noopener noreferrer">Proof-of-Burn</a> mechanism for private and public staked coins. While this is one necessary step to control money circulation, masternode owners get the possibility to vote for reward reduction or complete burning for a specific period to reduce coin generation. We name it Galilel Money Supply Control (<span class="small">g</span>MSC), effectively Proof-of-Burn v2. This mechanism burns only rewards, never term deposits and development budget.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">cloud_done</i><br>Instant On Masternodes (<span class="small">g</span>IOMN)</h5>
                    <p>Masternodes gained already a lot of attraction in digital money sphere. While many new digital crypto currencies try to create ridiculous high return of investment (ROI) coins and fail after coin inflation kicks in as well as having unbalanced reward distribution between masternodes and staking wallets, this is not the main purpose for running a masternode. In Galilel, the main use-case for masternodes is securing the network while having the opportunity to vote of future development aspects as well as maintaining coin circulation. However, the main weak point for available masternode implementations is the requirement to have the blockchain synced and indexed on each machine acting as a masternode. Galilel Instant On Masternode (<span class="small">g</span>IOMN) solves this problem by implementing a shared blockchain to run <a class="link-text" href="https://en.wikipedia.org/wiki/One-to-many_(data_model)" target="_blank" rel="noopener noreferrer">one-to-many</a> wallet daemons in a client server model. It is comparable to "Instant On" model available in Electrum client.</p>
                </div>
                <div class="carousel-item">
                    <h5><i class="material-icons">lightbulb_outline</i><br>Transparency and Trust</h5>
                    <p>The trust relationship between investors and the project team is the key to success. Therefore, we have created a GitHub organization named <a class="link-text" href="https://github.com/Galilel-Project" target="_blank" rel="noopener noreferrer">Galilel-Project</a>, which tracks all our development activities in public repositories including all our backend code and passed <a class="link-text" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer">Know Your Developer (KYD)</a> public verification. The project uses mostly <a class="link-text" href="https://opensource.org/licenses/MIT" target="_blank" rel="noopener noreferrer">MIT</a>, <a class="link-text" href="https://www.gnu.org/licenses/gpl.txt" target="_blank" rel="noopener noreferrer">GPLv3</a> and <a class="link-text" href="https://creativecommons.org/licenses/by-nc/4.0/legalcode.txt" target="_blank" rel="noopener noreferrer">CC-BY-NC 4.0</a> open source and open content licenses. The translation and localization process uses <a class="link-text" href="https://www.transifex.com/galilel-project/galilel-project-translations/dashboard/" target="_blank" rel="noopener noreferrer">Transifex</a> platform.</p>
                </div>
            </div>
        </div>
    </div>

   <!-- Social Content -->
   <div class="container-fluid" id="social">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5 class="center">Get in contact and join our community channels</h5>
                    <p class="center">Click on the country on the map to open the telegram link (if available).</p>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <ul id="social_icons">
                        <li><a href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer"><i class="fab fa-discord"></i></a></li>
                        <li><a href="https://t.me/GalilelEN" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram-plane"></i></a></li>
                        <li><a href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer"><i class="fab fa-bitcoin"></i></a></li>
                        <li><a href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://youtube.com/channel/UC26rKBciicXp33dK8NkALmg" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://github.com/Galilel-Project" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://instagram.com/galilel_en/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div id="map-container">
                        <div id="world-map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Content -->
    <div class="container-fluid" id="information">
        <div class="container">
            <div class="row">
                <div class="col m12">
                    <div id="responsiveTabs">
                        <ul>
                            <li><a href="#tab-1" class="btn-small waves-effect btn-active">Galilel Statistics</a></li>
                            <li><a href="#tab-2" class="btn-small waves-effect">Coin Information</a></li>
                            <li><a href="#tab-3" class="btn-small waves-effect">Zerocoin Information</a></li><br>
                            <li><a href="#tab-4" class="btn-small waves-effect">Proof-of-Work Rewards</a></li>
                            <li><a href="#tab-5" class="btn-small waves-effect">Proof-of-Stake Rewards</a></li>
                        </ul>
                        <div id="tab-1">
                            <p class="center">Galilel Statistics visualize the current real-time snapshot of the blockchain network. The wallet notification system updates the statistics automatically once a new block detected in the network.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="12%"><b>Network</b></th>
                                            <th width="16%"><b>Hashrate (GH/s)</b></th>
                                            <th width="16%"><b>Difficulty</b></th>
                                            <th width="16%"><b>Height</b></th>
                                            <th width="16%"><b>Masternodes</b></th>
                                            <th width="24%"><b>Average Reward Time</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mainnet</td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelStatistics['HASHRATE'] ?></b></span></td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelStatistics['DIFFICULTY'] ?></b></span></td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelStatistics['HEIGHT'] ?></b></span></td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelStatistics['MASTERNODES'] ?></b></span></td>
                                            <th><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelStatistics['REWARDS'] ?></b></span></th>
                                        </tr>
                                        <tr>
                                            <td>Testnet</td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelTestnetStatistics['HASHRATE'] ?></b></span></td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelTestnetStatistics['DIFFICULTY'] ?></b></span></td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelTestnetStatistics['HEIGHT'] ?></b></span></td>
                                            <td><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelTestnetStatistics['MASTERNODES'] ?></b></span></td>
                                            <th><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelTestnetStatistics['REWARDS'] ?></b></span></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab-2">
                            <p class="center">General information about used algorithm, ticker symbol, staking and masternode collateral.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><b>Description</b></th>
                                            <th><b>Parameter</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Coin Name</td>
                                            <td>Galilel</td>
                                        </tr>
                                        <tr>
                                            <td>Coin Ticker</td>
                                            <td>GALI</td>
                                        </tr>
                                        <tr>
                                            <td>Hash Algorithm</td>
                                            <td>Quark</td>
                                        </tr>
                                        <tr>
                                            <td>Consensus Algorithm</td>
                                            <td>PoS + zPoS Hybrid</td>
                                        </tr>
                                        <tr>
                                            <td>Block Size</td>
                                            <td>2 MB</td>
                                        </tr>
                                        <tr>
                                            <td>Block Time</td>
                                            <td>60 Seconds (Re-targeting every block)</td>
                                        </tr>
                                        <tr>
                                            <td>RPC Port</td>
                                            <td>36002</td>
                                        </tr>
                                        <tr>
                                            <td>P2P Port</td>
                                            <td>36001</td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>PoW / PoS / zPoS / MN</td>
                                        </tr>
                                        <tr>
                                            <td>Minimum Staking Age</td>
                                            <td>2 Hours</td>
                                        </tr>
                                        <tr>
                                            <td>Maturity</td>
                                            <td>120 confirmations</td>
                                        </tr>
                                        <tr>
                                            <td>Send Eligibility</td>
                                            <td>6 confirmations</td>
                                        </tr>
                                        <tr>
                                            <td>Rewards (till block 1,500)</td>
                                            <td>MN 60%, PoW 40%</td>
                                        </tr>
                                        <tr>
                                            <td>Rewards (till block 205,000)</td>
                                            <td>MN 60%, PoS 40%</td>
                                        </tr>
                                        <tr>
                                            <td>Rewards (from block 205,001)</td>
                                            <td>MN 70%, PoS 30%</td>
                                        </tr>
                                        <tr>
                                            <td>Last PoW Block</td>
                                            <td>1,500</td>
                                        </tr>
                                        <tr>
                                            <td>Masternode Collateral</td>
                                            <td>15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Max Coin Supply (January 2020)</td>
                                            <td>19,035,999</td>
                                        </tr>
                                        <tr>
                                            <td>Max Coin Supply (January 2030)</td>
                                            <td>45,315,999</td>
                                        </tr>
                                        <tr>
                                            <td>Max Coin Supply (January 2040)</td>
                                            <td>71,595,999</td>
                                        </tr>
                                        <tr>
                                            <td>Max Coin Supply (January 2050)</td>
                                            <td>97,875,999</td>
                                        </tr>
                                        <tr>
                                            <td>Dynamic Coin Supply</td>
                                            <td>All transaction fees and <span class="small">z</span>GALI minting fees are burnt</td>
                                        </tr>
                                        <tr>
                                            <td>Community Donation Address</td>
                                            <td><a class="link-text" href="https://explorer.galilel.cloud/address/UUr5nDmykhun1HWM7mJAqLVeLzoGtx19dX" target="_blank" rel="noopener noreferrer">UUr5nDmykhun1HWM7mJAqLVeLzoGtx19dX</a></td>
                                        </tr>
                                        <tr>
                                            <td>Community Donation Balance</td>
                                            <td><a class="link-text" href="https://explorer.galilel.cloud/address/UUr5nDmykhun1HWM7mJAqLVeLzoGtx19dX" target="_blank" rel="noopener noreferrer"><span class="new badge brown" data-badge-caption=""><b><?php echo $GalilelDonations['DONATION_BALANCE'] ?></b></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>Dev Budget (from block 250,001)</td>
                                            <td>10% in monthly superblock</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab-3">
                            <p class="center">Zerocoin minting specifications.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><b>Description</b></th>
                                            <th><b>Parameter</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Zerocoin v1 activation</td>
                                            <td>Block 245,000</td>
                                        </tr>
                                        <tr>
                                            <td>Zerocoin v2 activation</td>
                                            <td>Block 245,000</td>
                                        </tr>
                                        <tr>
                                            <td><span class="small">z</span>GALI Automint</td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="small">z</span>GALI Rewards (from block 245,001)</td>
                                            <td>1 <span class="small">z</span>GALI</td>
                                        </tr>
                                        <tr>
                                            <td><span class="small">z</span>GALI Rewards (from block 340,001)</td>
                                            <td>MN 40%, zPoS 60%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="small">z</span>GALI Rewards (from block 430,001)</td>
                                            <td>MN 40%, zPoS 60%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="small">z</span>GALI Denominators</td>
                                            <td>1, 5, 10, 50, 100, 500, 1000, 5000</td>
                                        </tr>
                                        <tr>
                                            <td>Accumulator Modulus</td>
                                            <td>RSA-2048</td>
                                        </tr>
                                        <tr>
                                            <td>Maturity</td>
                                            <td>240 confirmations</td>
                                        </tr>
                                        <tr>
                                            <td>Send Eligibility</td>
                                            <td>20 confirmations</td>
                                        </tr>
                                        <tr>
                                            <td>Fees (mint)</td>
                                            <td>0.01 GALI per minted <span class="small">z</span>GALI denomination</td>
                                        </tr>
                                        <tr>
                                            <td>Fees (spend)</td>
                                            <td>No fee</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab-4">
                            <p class="center">Proof-of-Work is used as instamine protection and will end at block 1500.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><b>Block Height</b></th>
                                            <th><b>Reward</b></th>
                                            <th><b>MN</b></th>
                                            <th><b>PoW</b></th>
                                            <th><b>Coin Supply</b></th>
                                            <th><b>Stage Runtime</b></th>
                                            <th><b>Stage End</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Block 1</td>
                                            <td>220,000 GALI (premine)</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>220,000</td>
                                            <td>0 days</td>
                                            <td>2018-05-25</td>
                                        </tr>
                                        <tr>
                                            <td>Block 2 - 1500</td>
                                            <td>1 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>221,499</td>
                                            <td>1 day</td>
                                            <td>2018-05-26</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab-5">
                            <p class="center">Proof-of-Stake will start at block 1501 until max coin emission is reached.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><b>Stages</b></th>
                                            <th><b>Block Height</b></th>
                                            <th><b>Reward</b></th>
                                            <th><b>MN</b></th>
                                            <th><b>PoS</b></th>
                                            <th><b>Coin Supply</b></th>
                                            <th><b>Stage Runtime</b></th>
                                            <th><b>Stage End</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Stage 1</td>
                                            <td>1501-12000</td>
                                            <td>100 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>1,271,399</td>
                                            <td>7 days</td>
                                            <td>2018-06-02</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 2</td>
                                            <td>12001-22000</td>
                                            <td>90 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>2,171,309</td>
                                            <td>7 days</td>
                                            <td>2018-06-09</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 3</td>
                                            <td>22001-42000</td>
                                            <td>80 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>3,771,229</td>
                                            <td>14 days</td>
                                            <td>2018-06-23</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 4</td>
                                            <td>42001-100000</td>
                                            <td>70 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>7,831,159</td>
                                            <td>40 days</td>
                                            <td>2018-08-02</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 5</td>
                                            <td>100001-160000</td>
                                            <td>60 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>11,431,099</td>
                                            <td>42 days</td>
                                            <td>2018-09-13</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 6</td>
                                            <td>160001-205000</td>
                                            <td>50 GALI</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                            <td>13,681,049</td>
                                            <td>31 days</td>
                                            <td>2018-10-14</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 7</td>
                                            <td>205001-250000</td>
                                            <td>25 GALI</td>
                                            <td>70%</td>
                                            <td>30%</td>
                                            <td>14,806,024</td>
                                            <td>31 days</td>
                                            <td>2018-11-14</td>
                                        </tr>
                                        <tr>
                                            <td>Stage 8</td>
                                            <td>250001-340000</td>
                                            <td>13.5 GALI</td>
                                            <td>70%</td>
                                            <td>30%</td>
                                            <td>16,156,009</td>
                                            <td>62 days</td>
                                            <td>2019-01-15</td>
                                      </tr>
                                      <tr <?php if($GalilelStatistics['HEIGHT'] > 340001 && $GalilelStatistics['HEIGHT'] <= 430000){ echo 'class="highlight"'; }; ?>>
                                            <td>Stage 9</td>
                                            <td>340001-430000</td>
                                            <td>10 GALI</td>
                                            <td>70%</td>
                                            <td>30%</td>
                                            <td>17,055,999</td>
                                            <td>62 days</td>
                                            <td>2019-03-18</td>
                                      </tr>
                                        <tr <?php if($GalilelStatistics['HEIGHT'] > 430000){ echo 'class="highlight"'; }; ?>>
                                            <td>Stage 10</td>
                                            <td>430001-ongoing</td>
                                            <td>5 GALI</td>
                                            <td>70%</td>
                                            <td>30%</td>
                                            <td>ongoing</td>
                                            <td>ongoing</td>
                                            <td>ongoing</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wallets Content -->
    <div class="container-fluid" id="wallets">
        <div class="container">
            <div class="row">
                <div class="col m12">
                    <div id="responsiveTabsWallets">
                        <ul>
                            <li><a href="#desktop-wallets-1" class="btn-small waves-effect">Desktop Wallets</a></li>
                            <li><a href="#paper-wallets-2" class="btn-small waves-effect">Paper Wallets</a></li>
                            <li><a href="#bootstrap-3" class="btn-small waves-effect">Blockchain Snapshot</a></li>
                        </ul>
                        <div id="desktop-wallets-1">
                            <p class="center">Galilel wallet is available for a wide range of platforms and architectures.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><img class="system_icon" src="images/wallet/windows_logo.svg" /></th>
                                            <th><img class="system_icon" src="images/wallet/linux_logo.svg" /></th>
                                            <th><img class="system_icon" src="images/wallet/osx_logo.svg" /></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-win32.zip">galilel-v3.2.0-win32.zip</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-lin32.tar.gz">galilel-v3.2.0-lin32.tar.gz</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-osx64.tar.gz">galilel-v3.2.0-osx64.tar.gz</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-win64.zip">galilel-v3.2.0-win64.zip</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-lin64.tar.gz">galilel-v3.2.0-lin64.tar.gz</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-osx64-unsigned.dmg">galilel-v3.2.0-osx64-unsigned.dmg</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-win32-setup-unsigned.exe">galilel-v3.2.0-win32-setup-unsigned.exe</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-armhf.tar.gz">galilel-v3.2.0-armhf.tar.gz</a></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-win64-setup-unsigned.exe">galilel-v3.2.0-win64-setup-unsigned.exe</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-aarch64.tar.gz">galilel-v3.2.0-aarch64.tar.gz</a></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.2.0/galilel-v3.2.0-riscv64.tar.gz">galilel-v3.2.0-riscv64.tar.gz</a></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="paper-wallets-2">
                            <p class="center">Galilel paper wallet is an offline wallet, regarded as cold storage.</p>
                            <div style="overflow-x:auto;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><img class="system_icon" src="images/wallet/windows_logo.svg" /></th>
                                            <th><img class="system_icon" src="images/wallet/linux_logo.svg" /></th>
                                            <th><img class="system_icon" src="images/wallet/osx_logo.svg" /></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel-paper-wallet/releases/download/v1.0.0/Galilel-Paper-Wallet-win32-ia32.zip">Galilel-Paper-Wallet-win32-ia32.zip</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel-paper-wallet/releases/download/v1.0.0/Galilel-Paper-Wallet-linux-ia32.tar.gz">Galilel-Paper-Wallet-linux-ia32.tar.gz</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel-paper-wallet/releases/download/v1.0.0/Galilel-Paper-Wallet-darwin-x64.tar.gz">Galilel-Paper-Wallet-darwin-x64.tar.gz</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel-paper-wallet/releases/download/v1.0.0/Galilel-Paper-Wallet-win32-x64.zip">Galilel-Paper-Wallet-win32-x64.zip</a></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel-paper-wallet/releases/download/v1.0.0/Galilel-Paper-Wallet-linux-x64.tar.gz">Galilel-Paper-Wallet-linux-x64.tar.gz</a></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><a class="link-text" href="https://github.com/Galilel-Project/galilel-paper-wallet/releases/download/v1.0.0/Galilel-Paper-Wallet-linux-arm64.tar.gz">Galilel-Paper-Wallet-linux-arm64.tar.gz</a></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="bootstrap-3">
                            <p class="center">Galilel blockchain snapshot is created every night, used for fast bootstrap of new wallets.</p>
                            <div style="overflow-x:auto;">
                                <table class="highlight">
                                    <thead>
                                        <tr>
                                            <th><b>File</b></th>
                                            <th><b>Size</b></th>
                                            <th><b>Date</b></th>
                                            <th><b>Height</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          /* directory of bootstrap files. */
                                          $directroy = "downloads/bootstrap";

                                          /* loop through all files in directory. */
                                          foreach (FileNamesDirectory($directroy) as $filename)
                                          {

                                              /* get block height from filename. */
                                              $height = explode("-", $filename)[1];
                                              $height = explode(".", $height)[0];

                                              /* dynamic created table (one row = one file). */
                                              echo '              <tr>
                                                          <td><a class="link-text" href="'.$directroy.'/'.$filename.'">'.$filename.'</a></td>
                                                          <td>'.FileSizeHumanReadable(filesize($directroy.'/'.$filename)).'</td>
                                                          <td>'.date("Y-m-d", filemtime($directroy.'/'.$filename)).'</td>
                                                          <td><a class="link-text" href="'.$directroy.'/'.$filename.'"><span class="new badge green lighten-2" data-badge-caption=""><b>'.$height.'</b></span></a></td>
                                                        </tr>';
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Content -->
    <div class="container" id="team">
        <div class="row">
            <div class="col s12">
                <h5 class="center">Leadership and Development</h5>
                <p class="center">Meet the team behind Galilel.</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/maik.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Maik Broemme</span>
                            <br> Babyface#7772
                            <br>
                            <span class="role">Founder & Developer</span>
                            <br>
                            Germany
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://www.linkedin.com/in/mbroemme/" target="_blank" rel="noopener noreferrer"><img src="images/team/linkedin.svg"></a>
                            <a class="link-text" href="https://www.xing.com/profile/Maik_Broemme/cv" target="_blank" rel="noopener noreferrer"><img src="images/team/xing.svg"></a>
                            <a class="link-text" href="https://www.facebook.com/mbroemme" target="_blank" rel="noopener noreferrer"><img src="images/team/facebook.svg"></a>
                            <a class="link-text" href="https://github.com/mbroemme" target="_blank" rel="noopener noreferrer"><img src="images/team/github.svg"></a>
                            <a class="link-text" href="https://zuppy.pm/" target="_blank" rel="noopener noreferrer"><img src="images/team/home.svg"></a>
                            <a class="link-text" href="mailto:maik.broemme@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/miles.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Miles Clay</span>
                            <br> Bossteck#6262
                            <br>
                            <span class="role">Co-Founder &amp; Designer</span>
                            <br>
                            United Kingdom
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://www.facebook.com/BBR.MILES.CLAY" target="_blank" rel="noopener noreferrer"><img src="images/team/facebook.svg"></a>
                            <a class="link-text" href="https://twitter.com/bossteck" target="_blank" rel="noopener noreferrer"><img src="images/team/twitter.svg"></a>
                            <a class="link-text" href="https://github.com/Bossteck" target="_blank" rel="noopener noreferrer"><img src="images/team/github.svg"></a>
                            <a class="link-text" href="mailto:miles.clay@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/manuel.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Manuel Gogoll</span>
                            <br> Cryptogerman#8070
                            <br>
                            <span class="role">Marketing &amp; Campaigns</span>
                            <br>
                            Germany
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://www.facebook.com/manuel.gogoll" target="_blank" rel="noopener noreferrer"><img src="images/team/facebook.svg"></a>
                            <a class="link-text" href="https://twitter.com/cryptogerman1" target="_blank" rel="noopener noreferrer"><img src="images/team/twitter.svg"></a>
                            <a class="link-text" href="https://github.com/cryptogerman" target="_blank" rel="noopener noreferrer"><img src="images/team/github.svg"></a>
                            <a class="link-text" href="mailto:manuel.gogoll@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/pascal.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Pascal Rebholz</span>
                            <br> crypto5.0#6432
                            <br>
                            <span class="role">Marketing &amp; Campaigns</span>
                            <br>
                            Germany
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://www.linkedin.com/in/pascal-rebholz-705646173/" target="_blank" rel="noopener noreferrer"><img src="images/team/linkedin.svg"></a>
                            <a class="link-text" href="https://www.xing.com/profile/Pascal_Rebholz/cv" target="_blank" rel="noopener noreferrer"><img src="images/team/xing.svg"></a>
                            <a class="link-text" href="https://www.facebook.com/pascal.rebholz" target="_blank" rel="noopener noreferrer"><img src="images/team/facebook.svg"></a>
                            <a class="link-text" href="mailto:pascal.rebholz@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/alex.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Alex Mesquita</span>
                            <br> Alex Mesquita#9361
                            <br>
                            <span class="role">Partnerships &amp; Business Development</span>
                            <br>
                            Brazil
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://twitter.com/alexmesq" target="_blank" rel="noopener noreferrer"><img src="images/team/twitter.svg"></a>
                            <a class="link-text" href="mailto:alex.mesquita@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/sascha.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Sascha Volland</span>
                            <br> coreyou#6882
                            <br>
                            <span class="role">Partnerships &amp; Business Development</span>
                            <br>
                            Germany
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://www.linkedin.com/in/sv-technik-sascha-4281b0b9/" target="_blank" rel="noopener noreferrer"><img src="images/team/linkedin.svg"></a>
                            <a class="link-text" href="https://www.xing.com/profile/Sascha_Volland/cv" target="_blank" rel="noopener noreferrer"><img src="images/team/xing.svg"></a>
                            <a class="link-text" href="https://twitter.com/CoreyouNow/" target="_blank" rel="noopener noreferrer"><img src="images/team/twitter.svg"></a>
                            <a class="link-text" href="mailto:sasha.volland@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/armand.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Armand Pers</span>
                            <br> Bio_Logik#7089
                            <br>
                            <span class="role">Designer</span>
                            <br>
                            French
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://www.linkedin.com/in/armand-pers/" target="_blank" rel="noopener noreferrer"><img src="images/team/linkedin.svg"></a>
                            <a class="link-text" href="http://gremlinsmarketing.com/" target="_blank" rel="noopener noreferrer"><img src="images/team/home.svg"></a>
                            <a class="link-text" href="mailto:armand.pers@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/christian.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Christian Grieger</span>
                            <br> Swooty#5527
                            <br>
                            <span class="role">Front-End & Back-End Developer</span>                            
                            <br>
                            Germany
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://twitter.com/C_Grieger/" target="_blank" rel="noopener noreferrer"><img src="images/team/twitter.svg"></a>
                            <a class="link-text" href="https://github.com/ChristianGrieger/" target="_blank" rel="noopener noreferrer"><img src="images/team/github.svg"></a>
                            <a class="link-text" href="https://christiangrieger.de/" target="_blank" rel="noopener noreferrer"><img src="images/team/home.svg"></a>
                            <a class="link-text" href="mailto:christian.grieger@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/team/ehsan.png">
                    </div>
                    <div class="card-content">
                        <p class="center">
                            <span class="name">Ehsan Khademi</span>
                            <br> eshby#4291
                            <br>
                            <span class="role">Business Manager</span>
                            <br>
                            Germany
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="center">
                            <a class="link-text" href="https://mobile.twitter.com/eshbycasablanca" target="_blank" rel="noopener noreferrer"><img src="images/team/twitter.svg"></a>
                            <a class="link-text" href="mailto:ehsan.khademi@galilel.cloud"><img src="images/team/email.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Roadmap Content -->
    <div class="container-fluid" id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="icon-block">
                        <h5 class="center">Milestones and Estimations</h5>
                        <p class="center">What we build and when you can expect it.</p>
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header">
                                    Q2/2018
                                    <span class="badge">1</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Enable and release MAINNET</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    Q3/2018
                                    <span class="badge">11</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Create block explorer (SSL secured)</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Create discord bot for block height</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Create discord bot for donation monitoring</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Create discord bot for GitHub monitoring</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Community poll: Max Coin Supply</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Community poll: MN/PoS reward distribution</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Community poll: MN collateral amount</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>Community poll: Reward structure modification</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>9.</td>
                                                <td>Create branding (logos, banners and icons)</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>10.</td>
                                                <td>Release Galilel v2.0.0 with community vote results</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>11.</td>
                                                <td>Know Your Developer (KYD) public verification</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    Q4/2018
                                    <span class="badge">7</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Enable and release TESTNET</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Refactor Galilel codebase to latest PIVX 3.1.1</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Enable Decentralized Autonomous Organization (DAO) for blockchain voting</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Release Galilel Coin whitepaper</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Release Brand Guide</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Release Galilel v3.0.0 with Zerocoin v1 activation at block 245,000</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Release Galilel v3.1.0 with Zerocoin v2 with private Proof-of-Stake (zPoS) at block 245,000</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>Create BitcoinTalk Announcement</td>
                                                <td><span class="new badge green lighten-2" data-badge-caption=""><b>RESOLVED</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li class="active">
                                <div class="collapsible-header">
                                    Q1/2019
                                    <span class="badge">2</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Release Galilel v4.0.0 with Instant On Masternode (<span class="small">g</span>IOMN) at block 380,000</td>
                                                <td><span class="new badge orange lighten-2" data-badge-caption=""><b>IN PROGRESS</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Start Android wallet development</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    Q2/2019
                                    <span class="badge">2</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Release Galilel v5.0.0 with Hybrid Proof-of-Stake (<span class="small">gh</span>P<span class="small">o</span>S) at block TBD</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Release Galilel Android wallet v1.0 with Instant On Masternode (<span class="small">g</span>IOMN)</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    Q3/2019
                                    <span class="badge">1</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Release Galilel v5.1.0 with Term Deposit (<span class="small">g</span>TD) at block TBD</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    Q4/2019
                                    <span class="badge">2</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Release Galilel v6.0.0 with Money Supply Control (<span class="small">g</span>MSC)</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Release Galilel Android wallet v2.0 with Term Deposit (<span class="small">g</span>TD)</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    Q1/2020
                                    <span class="badge">1</span>
                                </div>
                                <div class="collapsible-body">
                                    <table class="highlight">
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Release Galilel Android wallet v3.0 with Money Supply Control (<span class="small">g</span>MSC)</td>
                                                <td><span class="new badge red lighten-2" data-badge-caption=""><b>OPEN</b></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exchanges Content -->
    <div class="container-fluid" id="exchanges">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="icon-block">
                        <h5 class="center">Buying and Trading</h5>
                        <p class="center">Galilel can be traded on the following exchanges.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer"><img src="images/exchange/graviex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">graviex.net</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://crex24.com/exchange/GALI-BTC" target="_blank" rel="noopener noreferrer"><img src="images/exchange/crex24.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://crex24.com/exchange/GALI-BTC" target="_blank" rel="noopener noreferrer">crex24.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer"><img src="images/exchange/aiodex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">aiodex.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://cratex.io/index.php?pair=GALI/BTC" target="_blank" rel="noopener noreferrer"><img src="images/exchange/cratex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://cratex.io/index.php?pair=GALI/BTC" target="_blank" rel="noopener noreferrer">cratex.io</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer"><img src="images/exchange/raisex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">raisex.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://trade.mct.plus" target="_blank" rel="noopener noreferrer"><img src="images/exchange/mct.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://trade.mct.plus" target="_blank" rel="noopener noreferrer">trade.mct.plus</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://www.finexbox.com/market/pair/GALI-BTC.html" target="_blank" rel="noopener noreferrer"><img src="images/exchange/finexbox.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://www.finexbox.com/market/pair/GALI-BTC.html" target="_blank" rel="noopener noreferrer">finexbox.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://blocknet.co/galilel-2/about/" target="_blank" rel="noopener noreferrer"><img src="images/exchange/blockdx.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://blocknet.co/galilel-2/about/" target="_blank" rel="noopener noreferrer">Block DX</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://bisq.network/markets/?currency=gali_btc" target="_blank" rel="noopener noreferrer"><img src="images/exchange/bisq.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://bisq.network/markets/?currency=gali_btc" target="_blank" rel="noopener noreferrer">bisq.network</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://amsterdex.com/exchange?market=gali" target="_blank" rel="noopener noreferrer"><img src="images/exchange/amsterdex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://amsterdex.com/exchange?market=gali" target="_blank" rel="noopener noreferrer">amsterdex.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Media Content -->
    <div class="container-fluid" id="media">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="icon-block">
                        <h5 class="center">Media</h5>
                        <p class="center">Media articles reporting on the Galilel Core.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://medium.com/@eshby/galilel-cloud-2018-a-year-in-review-c39d18a5713" target="_blank" rel="noopener noreferrer"><img src="images/media/medium.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://medium.com/@eshby/galilel-cloud-2018-a-year-in-review-c39d18a5713" target="_blank" rel="noopener noreferrer">Medium.com<br>Review 2018</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://checkthischain.com/galilel-the-multifunctional-fiat-replacer/" target="_blank" rel="noopener noreferrer"><img src="images/media/checkthischain.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://checkthischain.com/galilel-the-multifunctional-fiat-replacer/" target="_blank" rel="noopener noreferrer">checkthischain.com<br>Multifunctional Fiat Replacer</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://globalcryptonews.io/galilel-cloud-2018-a-year-in-review/" target="_blank" rel="noopener noreferrer"><img src="images/media/globalcryptonews.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://globalcryptonews.io/galilel-cloud-2018-a-year-in-review/" target="_blank" rel="noopener noreferrer">globalcryptonews.io<br>2018 a year in review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners Content -->
    <div class="container-fluid" id="partners">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="icon-block">
                        <h5 class="center">Marketing and Awareness</h5>
                        <p class="center">Partners and market capitalisation websites promoting Galilel and providing monitoring or masternode hosting services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://masternodes.online/currencies/GALI/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/mno.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://masternodes.online/currencies/GALI/" target="_blank" rel="noopener noreferrer">masternodes.online</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coinlib.io/coin/GALI/Galilel" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coinlib.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coinlib.io/coin/GALI/Galilel" target="_blank" rel="noopener noreferrer">coinlib.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://mntop.co.in/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/mntop.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://mntop.co.in/" target="_blank" rel="noopener noreferrer">mntop.co.in</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://mnode.club/g/info/GALI" target="_blank" rel="noopener noreferrer"><img src="images/marketing/mnode.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://mnode.club/g/info/GALI" target="_blank" rel="noopener noreferrer">mnode.club</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/kyd.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer">kydcoin.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://beam.works/user/galilel/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/beam.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://beam.works/user/galilel/" target="_blank" rel="noopener noreferrer">beam.works</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://satoshisolutions.online/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/satoshi.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://satoshisolutions.online/" target="_blank" rel="noopener noreferrer">satoshisolutions.online</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://gali.chopcoin.io/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/chopcoin.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://gali.chopcoin.io/" target="_blank" rel="noopener noreferrer">chopcoin.io</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://nodecheck.io/currency/GALI" target="_blank" rel="noopener noreferrer"><img src="images/marketing/nodecheck.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://nodecheck.io/currency/GALI" target="_blank" rel="noopener noreferrer">nodecheck.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coincodex.com/crypto/galilel/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coincodex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coincodex.com/crypto/galilel/" target="_blank" rel="noopener noreferrer">coincodex.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coingecko.com/en/coins/galilel" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coingecko.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coingecko.com/en/coins/galilel" target="_blank" rel="noopener noreferrer">coingecko.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://worldcoinindex.com/coin/galilel" target="_blank" rel="noopener noreferrer"><img src="images/marketing/worldcoinindex.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://worldcoinindex.com/coin/galilel" target="_blank" rel="noopener noreferrer">worldcoinindex.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coinpaprika.com/coin/gali-galilel/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coinpaprika.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coinpaprika.com/coin/gali-galilel/" target="_blank" rel="noopener noreferrer">coinpaprika.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://dextro.io/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/dextro.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://dextro.io/" target="_blank" rel="noopener noreferrer">dextro.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coinranking.com/coin/galilel-gali" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coinranking.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coinranking.com/coin/galilel-gali" target="_blank" rel="noopener noreferrer">coinranking.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coinlore.com/coin/galilel" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coinlore.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coinlore.com/coin/galilel" target="_blank" rel="noopener noreferrer">coinlore.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="http://gremlinsmarketing.com/galilel/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/gremlinsmarketing.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="http://gremlinsmarketing.com/galilel/" target="_blank" rel="noopener noreferrer">gremlinsmarketing.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://mntrend.com/en/currencies/GALI" target="_blank" rel="noopener noreferrer"><img src="images/marketing/mntrend.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://mntrend.com/en/currencies/GALI" target="_blank" rel="noopener noreferrer">mntrend.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://coinmarketdaddy.com/currencies/galilel/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/coinmarketdaddy.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://coinmarketdaddy.com/currencies/galilel/" target="_blank" rel="noopener noreferrer">coinmarketdaddy.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://ihostmn.com/hostmn.php?coin=GALI" target="_blank" rel="noopener noreferrer"><img src="images/marketing/ihostmn.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://ihostmn.com/hostmn.php?coin=GALI" target="_blank" rel="noopener noreferrer">ihostmn.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://www.mnroi.info/coin/GALI" target="_blank" rel="noopener noreferrer"><img src="images/marketing/mnroi.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://www.mnroi.info/coin/GALI" target="_blank" rel="noopener noreferrer">mnroi.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://www.poslist.org/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/poslist.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://www.poslist.org/" target="_blank" rel="noopener noreferrer">poslist.org</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://nodeasy.com/currencies/Galilel" target="_blank" rel="noopener noreferrer"><img src="images/marketing/nodeasy.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://nodeasy.com/currencies/Galilel" target="_blank" rel="noopener noreferrer">nodeasy.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://simpleco.in" target="_blank" rel="noopener noreferrer"><img src="images/marketing/simplecoin.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://simpleco.in" target="_blank" rel="noopener noreferrer">simpleco.in</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://p.ginplatform.io/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/ginplatform.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://p.ginplatform.io/" target="_blank" rel="noopener noreferrer">ginplatform.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://hub.kalkul.us" target="_blank" rel="noopener noreferrer"><img src="images/marketing/kalkulus.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://hub.kalkul.us" target="_blank" rel="noopener noreferrer">kalkul.us</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://www.cryptocompare.com/coins/gali/overview" target="_blank" rel="noopener noreferrer"><img src="images/marketing/cryptocompare.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://www.cryptocompare.com/coins/gali/overview" target="_blank" rel="noopener noreferrer">cryptocompare.com</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://pecuniaplatform.io/99HOST" target="_blank" rel="noopener noreferrer"><img src="images/marketing/pecunia.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://pecuniaplatform.io/99HOST" target="_blank" rel="noopener noreferrer">pecuniaplatform.io</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://blockspot.io/coin/galilel/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/blockspot.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://blockspot.io/coin/galilel/" target="_blank" rel="noopener noreferrer">blockspot.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://crypos.io/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/crypos.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://crypos.io/" target="_blank" rel="noopener noreferrer">crypos.io</a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://masternodes-germany.de/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/masternodesgermany.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://masternodes-germany.de/" target="_blank" rel="noopener noreferrer">masternodes-germany.de</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Merchants Content -->
    <div class="container-fluid" id="merchants">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="icon-block">
                        <h5 class="center">Merchants</h5>
                        <p class="center">Partners who accept Galilel as a payment method.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <a class="link-text" href="https://dextro.io/" target="_blank" rel="noopener noreferrer"><img src="images/marketing/dextro.svg"></a>
                        </div>
                        <div class="center">
                            <a class="link-text" href="https://dextro.io/" target="_blank" rel="noopener noreferrer">dextro.io</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <h3>Social channels</h3>
                    <ul>
                        <li><a href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer">Discord</a></li>
                        <li><a href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                        <li><a href="https://t.me/GalilelEN" target="_blank" rel="noopener noreferrer">Telegram</a></li>
                        <li><a href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer">BitcoinTalk</a></li>
                        <li><a href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                        <li><a href="https://youtube.com/channel/UC26rKBciicXp33dK8NkALmg" target="_blank" rel="noopener noreferrer">YouTube</a></li>
                        <li><a href="https://instagram.com/galilel_en/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                    </ul>
                </div>
                <div class="col s12 m4">
                    <h3>Exchanges</h3>
                    <ul>
                        <li><a href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">Graviex</a></li>
                        <li><a href="https://crex24.com/exchange/GALI-BTC" target="_blank" rel="noopener noreferrer">Crex24</a></li>
                        <li><a href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">Aiodex</a></li>
                        <li><a href="https://cratex.io/index.php?pair=GALI/BTC" target="_blank" rel="noopener noreferrer">Cratex</a></li>
                        <li><a href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">Raisex</a></li>
                        <li><a href="https://trade.mct.plus" target="_blank" rel="noopener noreferrer">MCT+</a></li>
                        <li><a href="https://www.finexbox.com/market/pair/GALI-BTC.html" target="_blank" rel="noopener noreferrer">Finexbox</a></li>
                        <li><a href="https://blocknet.co/galilel-2/about/" target="_blank" rel="noopener noreferrer">Block DX</a></li>
                        <li><a href="https://bisq.network/markets/?currency=gali_btc" target="_blank" rel="noopener noreferrer">bisq</a></li>
                        <li><a href="https://amsterdex.com/exchange?market=gali" target="_blank" rel="noopener noreferrer">Amsterdex</a></li>
                    </ul>
                </div>
                <div class="col s12 m4">
                    <h3>Wallets</h3>
                    <ul>
                        <li><a href="#wallets">Desktop Wallets</a></li>
                        <li><a href="#wallets">Paper Wallets</a></li>
                        <li><a href="https://paper.galilel.cloud/" target="_blank" rel="noopener noreferrer">Instant Wallets</a></li>
                        <li><a href="#wallets">Bootstrap</a></li>
                    </ul>
                </div>
            </div>
          </div>
        <div class="container center copyright">
            <a class="link-text" href="mailto:contact@galilel.cloud?subject=More%20Information">Copyright &copy; <?php echo date('Y'); ?> - Galilel Core</a>
        </div>
    </footer>

    <!-- Modals -->
    <div class="gali_modal" id="whitepapers">
        <div class="row">
            <h5 class="center">Galilel Whitepapers</h5>
            <div class="col s12 m6">
                <a href="downloads/whitepaper/Galilel_Core_Whitepaper_AR.pdf" target="_blank" rel="noopener noreferrer">Arabic (AR)</a>
            </div>
            <div class="col s12 m6">
                <a href="downloads/whitepaper/Galilel_Core_Whitepaper_EN.pdf" target="_blank" rel="noopener noreferrer">English (EN)</a>
            </div>
            <div class="col s12 m6">
                <a href="downloads/whitepaper/Galilel_Core_Whitepaper_IT.pdf" target="_blank" rel="noopener noreferrer">Italian (IT)</a>
            </div>
        </div>
    </div>  

    <div class="gali_modal" id="walletguides">
        <div class="row">
            <h5 class="center">Galilel Wallet Guides</h5>
            <div class="col s12 m6">
                <a href="downloads/guides/Galilel_Wallet_Guide_ES.pdf" target="_blank" rel="noopener noreferrer">Spanish (ES)</a>
            </div>
        </div>
    </div>  

</body>

</html>
