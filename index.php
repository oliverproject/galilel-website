<?php

/* include required files. */
require('lib/bootstrap.php');

/* get dynamic values. */
$GalilelStatistics = GalilelStatistics(".statistics");
$GalilelTestnetStatistics = GalilelStatistics(".statistics-testnet");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML lang="en">
<HEAD>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <META name="author" content="Maik Broemme">
  <META name="description" content="Galilel Coin - Hybrid Offline Proof-of-Stake, Proof-of-Burn, Term Deposits and Instant On Masternodes">
  <META name="revisit-after" content="30 days">
  <META name="keywords" content="Galilel, GALI, Cloud, Masternode, Hosting, Proof-of-Stake, PoS, Block Explorer, Service, Payment, Blockchain, Crypto, ghPoS, ghTD, ghMSC, gIOMN">

  <!-- Facebook (Start) -->
  <META property="og:url" content="https://galilel.cloud">
  <META property="og:site_name" content="Galilel Coin">
  <META property="article:author" content="https://www.facebook.com/mbroemme">
  <META property="article:tag" content="Galilel">
  <META property="article:tag" content="GALI">
  <META property="article:tag" content="Cloud">
  <META property="article:tag" content="Masternode">
  <META property="article:tag" content="Hosting">
  <META property="article:tag" content="Proof-of-Stake">
  <META property="article:tag" content="PoS">
  <META property="article:tag" content="Block">
  <META property="article:tag" content="Explorer">
  <META property="article:tag" content="Service">
  <META property="article:tag" content="Payment">
  <META property="article:tag" content="Blockchain">
  <META property="article:tag" content="Crypto">
  <META property="article:tag" content="ghPoS">
  <META property="article:tag" content="ghTD">
  <META property="article:tag" content="ghMSC">
  <META property="article:tag" content="gIOMN">
  <META property="article:section" content="Crypto">
  <!-- Facebook (End) -->

  <!-- Twitter (Start) -->
  <META name="twitter:card" content="summary_large_image">
  <META name="twitter:image:src" content="https://galilel.cloud/images/logo.svg">
  <META name="twitter:site" content="@GalilelEN">
  <!-- Twitter (End) -->

  <!-- Import Google Icon Font -->
  <LINK href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Import materialize.css -->
  <LINK type="text/css" rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <LINK type="text/css" rel="stylesheet" media="screen,projection" href="css/init.css">

  <!-- Let browser know website is optimized for mobile -->
  <META name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Compiled and minified JavaScript -->
  <SCRIPT src="https://code.jquery.com/jquery-3.3.1.min.js"></SCRIPT>
  <SCRIPT src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></SCRIPT>
  <SCRIPT src="js/init.js"></SCRIPT>

  <!-- Favicon -->
  <LINK rel="shortcut icon" href="images/favicon.ico">

  <!-- Website title -->
  <TITLE>Galilel Coin - Hybrid Offline Proof-of-Stake, Proof-of-Burn, Term Deposits and Instant On Masternodes</TITLE>
</HEAD>
<BODY>

  <!-- Drop Down Menu (Start) -->
  <UL id="about" class="dropdown-content" style="min-width: 150px">
    <LI><A class="grey-text text-darken-4" href="#coin">Coin</A></LI>
    <LI><A class="grey-text text-darken-4" href="#features">Features</A></LI>
    <LI><A class="grey-text text-darken-4" href="#statistics">Statistics</A></LI>
    <LI><A class="grey-text text-darken-4" href="#specifications">Specifications</A></LI>
    <LI><A class="grey-text text-darken-4" href="#team">Team</A></LI>
    <LI><A class="grey-text text-darken-4" href="#roadmap">Roadmap</A></LI>
  </UL>
  <UL id="download" class="dropdown-content" style="min-width: 150px">
    <LI><A class="grey-text text-darken-4" href="#papers">Papers</A></LI>
    <LI><A class="grey-text text-darken-4" href="#wallets">Wallets</A></LI>
    <LI><A class="grey-text text-darken-4" href="#bootstrap">Bootstrap</A></LI>
    <LI><A class="grey-text text-darken-4" href="#repositories">Repositories</A></LI>
  </UL>
  <UL id="exchange" class="dropdown-content" style="min-width: 100px">
    <LI><A class="grey-text text-darken-4" href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">Graviex</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">Raisex</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">Aiodex</A></LI>
  </UL>
  <UL id="partner" class="dropdown-content" style="min-width: 200px">
    <LI><A class="grey-text text-darken-4" href="https://beam.works/user/galilel/" target="_blank" rel="noopener noreferrer">beam.works</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://coincodex.com/crypto/galilel/" target="_blank" rel="noopener noreferrer">coincodex.com</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://coingecko.com/en/coins/galilel" target="_blank" rel="noopener noreferrer">coingecko.com</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://coinpaprika.com/coin/gali-galilel/" target="_blank" rel="noopener noreferrer">coinpaprika.com</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://gali.chopcoin.io/" target="_blank" rel="noopener noreferrer">chopcoin.io</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://coinlib.io/coin/GALI/Galilel" target="_blank" rel="noopener noreferrer">coinlib.io</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://dextro.io/" target="_blank" rel="noopener noreferrer">dextro.io</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer">kydcoin.io</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://masternodes.online/currencies/GALI/" target="_blank" rel="noopener noreferrer">masternodes.online</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://mnode.club/g/info/GALI" target="_blank" rel="noopener noreferrer">mnode.club</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://mntop.co.in/" target="_blank" rel="noopener noreferrer">mntop.co.in</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://nodecheck.io/currency/GALI" target="_blank" rel="noopener noreferrer">nodecheck.io</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://satoshisolutions.online/" target="_blank" rel="noopener noreferrer">satoshisolutions.online</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://worldcoinindex.com/coin/galilel" target="_blank" rel="noopener noreferrer">worldcoinindex.com</A></LI>
  </UL>
  <UL id="community" class="dropdown-content" style="min-width: 100px">
    <LI><A class="grey-text text-darken-4" href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer">Discord</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer">Twitter</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer">Facebook</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer">BitcoinTalk</A></LI>
  </UL>
  <UL id="explorer" class="dropdown-content" style="min-width: 170px">
    <LI><A class="grey-text text-darken-4" href="https://explorer.galilel.cloud" target="_blank" rel="noopener noreferrer">Mainnet</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://explorer.aiodex.com/GALI" target="_blank" rel="noopener noreferrer">Mainnet (Aiodex)</A></LI>
    <LI><A class="grey-text text-darken-4" href="https://explorer.testnet.galilel.cloud" target="_blank" rel="noopener noreferrer">Testnet</A></LI>
  </UL>
  <!-- Drop Down Menu (End) -->

  <!-- Main Menu (Start) -->
  <NAV class="white" role="navigation" id="top">
    <DIV class="nav-wrapper container">
      <UL class="main-menu hide-on-med-and-down">
        <LI><A class="grey-text text-darken-4 dropdown-trigger" data-target="about">About</A></LI>
        <LI><A class="grey-text text-darken-4 dropdown-trigger" data-target="download">Downloads</A></LI>
        <LI><A class="grey-text text-darken-4 dropdown-trigger" data-target="exchange">Exchanges</A></LI>
        <LI><A class="grey-text text-darken-4 dropdown-trigger" data-target="partner">Partners</A></LI>
        <LI><A class="grey-text text-darken-4 dropdown-trigger" data-target="community">Community</A></LI>
        <LI><A class="grey-text text-darken-4 dropdown-trigger" data-target="explorer">Explorers</A></LI>
      </UL>
      <UL id="nav-mobile" class="collapsible collapsible-accordion sidenav">
        <LI><A class="collapsible-header waves-effect waves-grey grey-text text-darken-4">About</A>
          <DIV class="collapsible-body">
            <UL>
              <LI><A class="grey-text text-darken-4" href="#coin">Coin</A></LI>
              <LI><A class="grey-text text-darken-4" href="#features">Features</A></LI>
              <LI><A class="grey-text text-darken-4" href="#statistics">Statistics</A></LI>
              <LI><A class="grey-text text-darken-4" href="#specifications">Specifications</A></LI>
              <LI><A class="grey-text text-darken-4" href="#team">Team</A></LI>
              <LI><A class="grey-text text-darken-4" href="#roadmap">Roadmap</A></LI>
            </UL>
          </DIV>
        </LI>
        <LI><A class="collapsible-header waves-effect waves-grey grey-text text-darken-4">Downloads</A>
          <DIV class="collapsible-body">
            <UL>
              <LI><A class="grey-text text-darken-4" href="#papers">Papers</A></LI>
              <LI><A class="grey-text text-darken-4" href="#wallets">Wallets</A></LI>
              <LI><A class="grey-text text-darken-4" href="#bootstrap">Bootstrap</A></LI>
              <LI><A class="grey-text text-darken-4" href="#repositories">Repositories</A></LI>
            </UL>
          </DIV>
        </LI>
        <LI><A class="collapsible-header waves-effect waves-grey grey-text text-darken-4">Exchanges</A>
          <DIV class="collapsible-body">
            <UL>
              <LI><A class="grey-text text-darken-4" href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">Graviex</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">Raisex</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">Aiodex</A></LI>
            </UL>
          </DIV>
        </LI>
        <LI><A class="collapsible-header waves-effect waves-grey grey-text text-darken-4">Partners</A>
          <DIV class="collapsible-body">
            <UL>
              <LI><A class="grey-text text-darken-4" href="https://beam.works/user/galilel/" target="_blank" rel="noopener noreferrer">beam.works</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://coincodex.com/crypto/galilel/" target="_blank" rel="noopener noreferrer">coincodex.com</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://gali.chopcoin.io/" target="_blank" rel="noopener noreferrer">chopcoin.io</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://coinlib.io/coin/GALI/Galilel" target="_blank" rel="noopener noreferrer">coinlib.io</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer">kydcoin.io</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://masternodes.online/currencies/GALI/" target="_blank" rel="noopener noreferrer">masternodes.online</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://mnode.club/g/info/GALI" target="_blank" rel="noopener noreferrer">mnode.club</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://mntop.co.in/" target="_blank" rel="noopener noreferrer">mntop.co.in</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://nodecheck.io/currency/GALI" target="_blank" rel="noopener noreferrer">nodecheck.io</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://satoshisolutions.online/" target="_blank" rel="noopener noreferrer">satoshisolutions.online</A></LI>
            </UL>
          </DIV>
        </LI>
        <LI><A class="collapsible-header waves-effect waves-grey grey-text text-darken-4">Community</A>
          <DIV class="collapsible-body">
            <UL>
              <LI><A class="grey-text text-darken-4" href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer">Discord</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer">Twitter</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer">Facebook</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer">BitcoinTalk</A></LI>
            </UL>
          </DIV>
        </LI>
        <LI><A class="collapsible-header waves-effect waves-grey grey-text text-darken-4">Explorers</A>
          <DIV class="collapsible-body">
            <UL>
              <LI><A class="grey-text text-darken-4" href="https://explorer.galilel.cloud" target="_blank" rel="noopener noreferrer">Mainnet</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://explorer.aiodex.com/GALI" target="_blank" rel="noopener noreferrer">Mainnet (Aiodex)</A></LI>
              <LI><A class="grey-text text-darken-4" href="https://explorer.testnet.galilel.cloud">Testnet</A></LI>
            </UL>
          </DIV>
        </LI>
      </UL>
      <A class="sidenav-trigger" data-target="nav-mobile"><I class="material-icons">menu</I></A>
    </DIV>
  </NAV>
  <!-- Main Menu (End) -->

  <!-- Information Header -->
  <DIV class="parallax-container">
    <DIV class="section no-pad-bot">
      <DIV class="container">
        <BR>
        <BR>
        <H1 class="header center teal-text text-lighten-2">Galilel Coin</H1>
        <DIV class="row center">
          <H6 class="header col m12 light">The first crypto currency with Hybrid Consensus Algorithm and Masternode voting for period based reward burning</H6>
        </DIV>
        <DIV class="row center">
          <DIV class="col m12 center">
            <A href="#wallets" class="btn-large waves-effect waves-light teal lighten-1">Get Started</A>
          </DIV>
        </DIV>
        <BR>
        <BR>
      </DIV>
    </DIV>
    <DIV class="parallax"><IMG src="images/background.png"></DIV>
  </DIV>

  <!-- Information Content -->
  <DIV class="container">
    <DIV class="section">
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block" id="coin">
            <DIV class="center"><BR><BR><IMG width="56" height="56" src="images/logo.svg"></DIV>
            <H5 class="center">Galilel Coin</H5>
            <P class="left-align light">Galilel Coin (GALI and zGALI) is an open-source public and private Proof-of-Stake digital crypto currency for fast (using SwiftX), private (Zerocoin protocol) and secure micro transactions. Our main goal is to create a decentralized fully secure and anonymous network to run applications, which do not rely on any central body control. By having a distributed system, thousands of users will be responsible for maintaining the application and data so that there is no single point of failure.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block" id="features">
            <H2 class="center brown-text"><I class="material-icons">linear_scale</I></H2>
            <H5 class="center">Hybrid Proof-of-Stake (ghPoS)</H5>
            <P class="light">While Proof-of-Stake (PoS) is an environmentally friendly consensus algorithm, it creates rewards only as long as the wallet is running. One solution to this problem is to sign-up to any shared Proof-of-Stake pool and stake in the cloud. However, the disadvantage is that user need to trust the staking pool and transfer specific amount of coins to it. It can lead to situation that huge amount of coins are stored in a few wallets. This is a weak situation for a decentralized network approach and is a fundamental part to reach consensus. Private staking, so called Zerocoin Proof-of-Stake (zPoS), has the same problems and limitations. In Galilel, the solution to this problem will be a complete hybrid consensus algorithm named Galilel Hybrid Proof-of-Stake (ghPoS). We will extend online Proof-of-Stake with offline capability for both public and private staking.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block">
            <H2 class="center brown-text"><I class="material-icons">attach_money</I></H2>
            <H5 class="center">Term Deposits (gTD)</H5>
            <P class="light">While offline staking is dependent from network difficulty and amount of staked coins, the <A class="link-text" href="https://en.wikipedia.org/wiki/Time_deposit" target="_blank" rel="noopener noreferrer">Term Deposit</A> function allow to lock coins for a certain period and generate predictable rewards. The user decides the period to lock coins. Once locked, moving or spending coins for purchases is impossible, cancellation of term deposit before expiration time is impossible. This will effectively reduce the coin supply during the lock period.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block">
            <H2 class="center brown-text"><I class="material-icons">money_off</I></H2>
            <H5 class="center">Money Supply Control (gMSC)</H5>
            <P class="light">Inflation control is the most challenging part for digital money to be recognized and accepted as alternative to fiat money. Without any controlling mechanism, the value of any digital money is unpredictable. This leads to situation when investors' starts betting on the value and this can seriously damage the market within hours and immediately eliminates the possibility to push digital money into market as accepted payment option. With inflation control, we believe that people outside the digital money sphere are attracted to use it, as there is no need to look every day at their portfolio. Unlike central banks in case of fiat money, there will be no central place for watching and maintaining money supply. In Galilel, we implement a decentralized approach to burn coins, so called <A class="link-text" href="https://en.bitcoin.it/wiki/Proof_of_burn" target="_blank" rel="noopener noreferrer">Proof-of-Burn</A> mechanism for private and public staked coins. While this is one necessary step to control money circulation, masternode owners get the possibility to vote for reward reduction or complete burning for a specific period to reduce coin generation. We name it Galilel Money Supply Control (gMSC), effectively Proof-of-Burn v2. This mechanism burns only rewards, never term deposits and development budget.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block">
            <H2 class="center brown-text"><I class="material-icons">cloud_done</I></H2>
            <H5 class="center">Instant On Masternodes (gIOMN)</H5>
            <P class="light">Masternodes gained already a lot of attraction in digital money sphere. While many new digital crypto currencies try to create ridiculous high return of investment (ROI) coins and fail after coin inflation kicks in as well as having unbalanced reward distribution between masternodes and staking wallets, this is not the main purpose for running a masternode. In Galilel, the main use-case for masternodes is securing the network while having the opportunity to vote of future development aspects as well as maintaining coin circulation. However, the main weak point for available masternode implementations is the requirement to have the blockchain synced and indexed on each machine acting as a masternode. Galilel Instant On Masternode (gIOMN) solves this problem by implementing a shared blockchain to run <A class="link-text" href="https://en.wikipedia.org/wiki/One-to-many_(data_model)" target="_blank" rel="noopener noreferrer">one-to-many</A> wallet daemons in a client server model. It is comparable to "Instant On" model available in Electrum client.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block">
            <H2 class="center brown-text"><I class="material-icons">lightbulb_outline</I></H2>
            <H5 class="center">Transparency and Trust</H5>
            <P class="light">The trust relationship between investors and the project team is key to success. Therefore, we have created a GitHub organization named <A class="link-text" href="https://github.com/Galilel-Project" target="_blank" rel="noopener noreferrer">Galilel-Project</A>, which tracks all our development activities in public repositories including all our backend code and passed <A class="link-text" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer">Know Your Developer (KYD)</A> public verification. The project uses mostly <A class="link-text" href="https://opensource.org/licenses/MIT" target="_blank" rel="noopener noreferrer">MIT</A>, <A class="link-text" href="https://www.gnu.org/licenses/gpl.txt" target="_blank" rel="noopener noreferrer">GPLv3</A> and <A class="link-text" href="https://creativecommons.org/licenses/by-nc/4.0/legalcode.txt" target="_blank" rel="noopener noreferrer">CC-BY-NC 4.0</A> open source and open content licenses. The translation and localization process uses <A class="link-text" href="https://www.transifex.com/galilel-project/galilel-project-translations/dashboard/" target="_blank" rel="noopener noreferrer">Transifex</A> platform.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="row">
        <DIV class="col m12">
          <DIV class="icon-block" id="statistics">
            <H2 class="center brown-text"><I class="material-icons">timeline</I></H2>
            <H5 class="center">Galilel Statistics</H5>
            <P class="left-align light">Galilel Statistics visualize the current real-time snapshot of the blockchain network. The wallet notification system updates the statistics automatically once a new block detected in the network.</P>
            <TABLE class="highlight">
              <THEAD>
                <TR>
                  <TH width="12%" class="left-align light"><B>Network</B></TH>
                  <TH width="16%" class="right-align light"><B>Hashrate (GH/s)</B></TH>
                  <TH width="16%" class="right-align light"><B>Difficulty</B></TH>
                  <TH width="16%" class="right-align light"><B>Height</B></TH>
                  <TH width="16%" class="right-align light"><B>Masternodes</B></TH>
                  <TH width="24%" class="right-align light"><B>Average Reward Time</B></TH>
                </TR>
              </THEAD>
              <TBODY>
                <TR>
                  <TD class="left-align light">Mainnet</TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelStatistics['HASHRATE'] ?></B></SPAN></TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelStatistics['DIFFICULTY'] ?></B></SPAN></TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelStatistics['HEIGHT'] ?></B></SPAN></TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelStatistics['MASTERNODES'] ?></B></SPAN></TD>
                  <TH class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelStatistics['REWARDS'] ?></B></SPAN></TH>
                </TR>
                <TR>
                  <TD class="left-align light">Testnet</TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelTestnetStatistics['HASHRATE'] ?></B></SPAN></TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelTestnetStatistics['DIFFICULTY'] ?></B></SPAN></TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelTestnetStatistics['HEIGHT'] ?></B></SPAN></TD>
                  <TD class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelTestnetStatistics['MASTERNODES'] ?></B></SPAN></TD>
                  <TH class="right-align light"><SPAN class="new badge brown" data-badge-caption=""><B><?php echo $GalilelTestnetStatistics['REWARDS'] ?></B></SPAN></TH>
                </TR>
              </TBODY>
            </TABLE>
          </DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- About Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Specifications</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- About Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block" id="specifications">
          <H2 class="center brown-text"><I class="material-icons">assessment</I></H2>
          <H5 class="center">Coin Information</H5>
          <P class="center light">General information about used algorithm, ticker symbol, staking and masternode collateral.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>Description</B></TH>
                <TH class="left-align light"><B>Parameter</B></TH>
              </TR>
            </THEAD>
            <TBODY>
              <TR>
                <TD class="left-align light">Coin Name</TD>
                <TD class="left-align light">Galilel</TD>
              </TR>
              <TR>
                <TD class="left-align light">Coin Ticker</TD>
                <TD class="left-align light">GALI</TD>
              </TR>
              <TR>
                <TD class="left-align light">Hash Algorithm</TD>
                <TD class="left-align light">Quark</TD>
              </TR>
              <TR>
                <TD class="left-align light">Consensus Algorithm</TD>
                <TD class="left-align light">PoS + zPoS Hybrid</TD>
              </TR>
              <TR>
                <TD class="left-align light">Block Size</TD>
                <TD class="left-align light">2 MB</TD>
              </TR>
              <TR>
                <TD class="left-align light">Block Time</TD>
                <TD class="left-align light">60 Seconds (Re-targeting every block)</TD>
              </TR>
              <TR>
                <TD class="left-align light">RPC Port</TD>
                <TD class="left-align light">36002</TD>
              </TR>
              <TR>
                <TD class="left-align light">P2P Port</TD>
                <TD class="left-align light">36001</TD>
              </TR>
              <TR>
                <TD class="left-align light">Type</TD>
                <TD class="left-align light">PoW / PoS / zPoS / MN</TD>
              </TR>
              <TR>
                <TD class="left-align light">Minimum Staking Age</TD>
                <TD class="left-align light">2 Hours</TD>
              </TR>
              <TR>
                <TD class="left-align light">Maturity</TD>
                <TD class="left-align light">120 confirmations</TD>
              </TR>
              <TR>
                <TD class="left-align light">Send Eligibility</TD>
                <TD class="left-align light">6 confirmations</TD>
              </TR>
              <TR>
                <TD class="left-align light">Rewards (till block 1500)</TD>
                <TD class="left-align light">MN 60%, PoW 40%</TD>
              </TR>
              <TR>
                <TD class="left-align light">Rewards (till block 205000)</TD>
                <TD class="left-align light">MN 60%, PoS 40%</TD>
              </TR>
              <TR>
                <TD class="left-align light">Rewards (from block 205001)</TD>
                <TD class="left-align light">MN 70%, PoS 30%</TD>
              </TR>
              <TR>
                <TD class="left-align light">Last PoW Block</TD>
                <TD class="left-align light">1,500</TD>
              </TR>
              <TR>
                <TD class="left-align light">Masternode Collateral</TD>
                <TD class="left-align light">15,000</TD>
              </TR>
              <TR>
                <TD class="left-align light">Max Coin Supply (January 2020)</TD>
                <TD class="left-align light">19,035,999</TD>
              </TR>
              <TR>
                <TD class="left-align light">Max Coin Supply (January 2030)</TD>
                <TD class="left-align light">45,315,999</TD>
              </TR>
              <TR>
                <TD class="left-align light">Max Coin Supply (January 2040)</TD>
                <TD class="left-align light">71,595,999</TD>
              </TR>
              <TR>
                <TD class="left-align light">Max Coin Supply (January 2050)</TD>
                <TD class="left-align light">97,875,999</TD>
              </TR>
              <TR>
                <TD class="left-align light">Dynamic Coin Supply</TD>
                <TD class="left-align light">All transaction fees and zGALI minting fees are burnt</TD>
              </TR>
              <TR>
                <TD class="left-align light">Community Donation Address</TD>
                <TD class="left-align light"><A class="link-text" href="https://explorer.galilel.cloud/address/UUr5nDmykhun1HWM7mJAqLVeLzoGtx19dX" target="_blank" rel="noopener noreferrer">UUr5nDmykhun1HWM7mJAqLVeLzoGtx19dX</A></TD>
              </TR>
              <TR>
                <TD class="left-align light">Dev Budget (from block 250,001)</TD>
                <TD class="left-align light">10% in monthly superblock</TD>
              </TR>
            </TBODY>
          </TABLE>
          <H5 class="center">Zerocoin Information</H5>
          <P class="center light">Zerocoin minting specifications.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>Description</B></TH>
                <TH class="left-align light"><B>Parameter</B></TH>
              </TR>
            </THEAD>
            <TBODY>
              <TR>
                <TD class="left-align light">Zerocoin v1 activation</TD>
                <TD class="left-align light">Block 245,000</TD>
              </TR>
              <TR>
                <TD class="left-align light">Zerocoin v2 activation</TD>
                <TD class="left-align light">Block 245,000</TD>
              </TR>
              <TR>
                <TD class="left-align light">zGALI Automint</TD>
                <TD class="left-align light">10%</TD>
              </TR>
              <TR>
                <TD class="left-align light">zGALI Rewards (from block 245,001)</TD>
                <TD class="left-align light">1 zGALI</TD>
              </TR>
              <TR>
                <TD class="left-align light">zGALI Rewards (from block 340,001)</TD>
                <TD class="left-align light">MN 40%, zPoS 60%</TD>
              </TR>
              <TR>
                <TD class="left-align light">zGALI Rewards (from block 430,001)</TD>
                <TD class="left-align light">MN 40%, zPoS 60%</TD>
              </TR>
              <TR>
                <TD class="left-align light">zGALI Denominators</TD>
                <TD class="left-align light">1, 5, 10, 50, 100, 500, 1000, 5000</TD>
              </TR>
              <TR>
                <TD class="left-align light">Accumulator Modulus</TD>
                <TD class="left-align light">RSA-2048</TD>
              </TR>
              <TR>
                <TD class="left-align light">Maturity</TD>
                <TD class="left-align light">240 confirmations</TD>
              </TR>
              <TR>
                <TD class="left-align light">Send Eligibility</TD>
                <TD class="left-align light">20 confirmations</TD>
              </TR>
              <TR>
                <TD class="left-align light">Fees (mint)</TD>
                <TD class="left-align light">0.01 GALI per minted zGALI denomination</TD>
              </TR>
              <TR>
                <TD class="left-align light">Fees (spend)</TD>
                <TD class="left-align light">No fee</TD>
              </TR>
            </TBODY>
          </TABLE>
          <H5 class="center">Proof-of-Work Rewards</H5>
          <P class="center light">Proof-of-Work is used as instamine protection and will end at block 1500.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>Block Height</B></TH>
                <TH class="left-align light"><B>Reward</B></TH>
                <TH class="right-align light"><B>MN</B></TH>
                <TH class="right-align light"><B>PoW</B></TH>
                <TH class="right-align light"><B>Coin Supply</B></TH>
                <TH class="right-align light"><B>Stage Runtime</B></TH>
                <TH class="right-align light"><B>Stage End</B></TH>
              </TR>
            </THEAD>
            <TBODY>
              <TR>
                <TD class="left-align light">Block 1</TD>
                <TD class="left-align light">220,000 GALI (premine)</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">220,000</TD>
                <TD class="right-align light">0 days</TD>
                <TD class="right-align light">2018-05-25</TD>
              </TR>
              <TR>
                <TD class="left-align light">Block 2 - 1500</TD>
                <TD class="left-align light">1 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">221,499</TD>
                <TD class="right-align light">1 day</TD>
                <TD class="right-align light">2018-05-26</TD>
              </TR>
            </TBODY>
          </TABLE>
          <H5 class="center">Proof-of-Stake Rewards</H5>
          <P class="center light">Proof-of-Stake will start at block 1501 until max coin emission is reached.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>Stages</B></TH>
                <TH class="right-align light"><B>Block Height</B></TH>
                <TH class="right-align light"><B>Reward</B></TH>
                <TH class="right-align light"><B>MN</B></TH>
                <TH class="right-align light"><B>PoS</B></TH>
                <TH class="right-align light"><B>Coin Supply</B></TH>
                <TH class="right-align light"><B>Stage Runtime</B></TH>
                <TH class="right-align light"><B>Stage End</B></TH>
              </TR>
            </THEAD>
            <TBODY>
              <TR>
                <TD class="left-align light">Stage 1</TD>
                <TD class="right-align light">1501-12000</TD>
                <TD class="right-align light">100 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">1,271,399</TD>
                <TD class="right-align light">7 days</TD>
                <TD class="right-align light">2018-06-02</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 2</TD>
                <TD class="right-align light">12001-22000</TD>
                <TD class="right-align light">90 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">2,171,309</TD>
                <TD class="right-align light">7 days</TD>
                <TD class="right-align light">2018-06-09</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 3</TD>
                <TD class="right-align light">22001-42000</TD>
                <TD class="right-align light">80 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">3,771,229</TD>
                <TD class="right-align light">14 days</TD>
                <TD class="right-align light">2018-06-23</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 4</TD>
                <TD class="right-align light">42001-100000</TD>
                <TD class="right-align light">70 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">7,831,159</TD>
                <TD class="right-align light">40 days</TD>
                <TD class="right-align light">2018-08-02</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 5</TD>
                <TD class="right-align light">100001-160000</TD>
                <TD class="right-align light">60 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">11,431,099</TD>
                <TD class="right-align light">42 days</TD>
                <TD class="right-align light">2018-09-13</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 6</TD>
                <TD class="right-align light">160001-205000</TD>
                <TD class="right-align light">50 GALI</TD>
                <TD class="right-align light">60%</TD>
                <TD class="right-align light">40%</TD>
                <TD class="right-align light">13,681,049</TD>
                <TD class="right-align light">31 days</TD>
                <TD class="right-align light">2018-10-14</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 7</TD>
                <TD class="right-align light">205001-250000</TD>
                <TD class="right-align light">25 GALI</TD>
                <TD class="right-align light">70%</TD>
                <TD class="right-align light">30%</TD>
                <TD class="right-align light">14,806,024</TD>
                <TD class="right-align light">31 days</TD>
                <TD class="right-align light">2018-11-14</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 8</TD>
                <TD class="right-align light">250001-340000</TD>
                <TD class="right-align light">13.5 GALI</TD>
                <TD class="right-align light">70%</TD>
                <TD class="right-align light">30%</TD>
                <TD class="right-align light">16,156,009</TD>
                <TD class="right-align light">62 days</TD>
                <TD class="right-align light">2019-01-15</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 9</TD>
                <TD class="right-align light">340001-430000</TD>
                <TD class="right-align light">10 GALI</TD>
                <TD class="right-align light">70%</TD>
                <TD class="right-align light">30%</TD>
                <TD class="right-align light">17,055,999</TD>
                <TD class="right-align light">62 days</TD>
                <TD class="right-align light">2019-03-18</TD>
              </TR>
              <TR>
                <TD class="left-align light">Stage 10</TD>
                <TD class="right-align light">430001-ongoing</TD>
                <TD class="right-align light">5 GALI</TD>
                <TD class="right-align light">70%</TD>
                <TD class="right-align light">30%</TD>
                <TD class="right-align light">ongoing</TD>
                <TD class="right-align light">ongoing</TD>
                <TD class="right-align light">ongoing</TD>
              </TR>
            </TBODY>
          </TABLE>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Downloads Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Downloads</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- Downloads Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block" id="papers">
          <H2 class="center brown-text"><I class="material-icons">file_download</I></H2>
          <H5 class="center">Whitepaper and Guides</H5>
          <P class="center light">Official Galilel media files with logos, banners, images, icons, videos and the whitepaper (WP).</P>
        </DIV>
      </DIV>
    </DIV>

    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="downloads/whitepaper/Galilel_Core_v1.5.pdf" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/papers/whitepaper.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="downloads/whitepaper/Galilel_Core_v1.5.pdf" target="_blank" rel="noopener noreferrer">Whitepaper</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="downloads/guides/Galilel_Brand_Guide_v2.pdf" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/papers/branding.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="downloads/guides/Galilel_Brand_Guide_v2.pdf" target="_blank" rel="noopener noreferrer">Brand Guide</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="downloads/guides/Galilel_TOR_Masternode_Guide.pdf" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/papers/tor.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="downloads/guides/Galilel_TOR_Masternode_Guide.pdf" target="_blank" rel="noopener noreferrer">Tor Masternode Guide</A></DIV>
        </DIV>
      </DIV>
    </DIV>

    <DIV class="row">
      <DIV class="col m12">

        <DIV class="icon-block" id="wallets">
          <H2 class="center brown-text"><I class="material-icons">cloud_download</I></H2>
          <H5 class="center">Binaries</H5>
          <P class="center light">Galilel wallet is available for a wide range of platforms and architectures.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>Windows</B></TH>
                <TH class="left-align light"><B>Linux</B></TH>
                <TH class="left-align light"><B>macOS</B></TH>
              </TR>
            </THEAD>
            <TBODY>
              <TR>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-win32.zip">galilel-v3.1.0-win32.zip</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-lin32.tar.gz">galilel-v3.1.0-lin32.tar.gz</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-osx64.tar.gz">galilel-v3.1.0-osx64.tar.gz</A></TD>
              </TR>
              <TR>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-win64.zip">galilel-v3.1.0-win64.zip</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-lin64.tar.gz">galilel-v3.1.0-lin64.tar.gz</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-osx64-unsigned.dmg">galilel-v3.1.0-osx64-unsigned.dmg</A></TD>
              </TR>
              <TR>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-win32-setup-unsigned.exe">galilel-v3.1.0-win32-setup-unsigned.exe</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-armhf.tar.gz">galilel-v3.1.0-armhf.tar.gz</A></TD>
                <TD></TD>
              </TR>
              <TR>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-win64-setup-unsigned.exe">galilel-v3.1.0-win64-setup-unsigned.exe</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0-aarch64.tar.gz">galilel-v3.1.0-aarch64.tar.gz</A></TD>
                <TD></TD>
              </TR>
            </TBODY>
          </TABLE>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block">
          <H5 class="center">Source</H5>
          <P class="center light">Galilel wallet is available in source for compilation of unsupported platform.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>Source Code</B></TH>
                <TH class="left-align light"><B>Checksums</B></TH>
                <TH class="left-align light"><B>Signatures</B></TH>
              </TR>
            </THEAD>
            <TBODY>
              <TR>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/galilel-v3.1.0.tar.gz">galilel-v3.1.0.tar.gz</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/SHA256SUMS">SHA256SUMS</A></TD>
                <TD class="left-align light"><A class="link-text" href="https://github.com/Galilel-Project/galilel/releases/download/v3.1.0/SHA256SUMS.asc">SHA256SUMS.asc</A></TD>
              </TR>
            </TBODY>
          </TABLE>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block" id="bootstrap">
          <H5 class="center">Blockchain Snapshot</H5>
          <P class="center light">Galilel blockchain snapshot is created every night, used for fast bootstrap of new wallets.</P>
          <TABLE class="highlight">
            <THEAD>
              <TR>
                <TH class="left-align light"><B>File</B></TH>
                <TH class="left-align light"><B>Size</B></TH>
                <TH class="left-align light"><B>Date</B></TH>
                <TH class="left-align light"><B>Height</B></TH>
              </TR>
            </THEAD>
            <TBODY>
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
    echo '              <TR>
                <TD class="left-align light"><A class="link-text" href="'.$directroy.'/'.$filename.'">'.$filename.'</A></TD>
                <TD class="left-align light">'.FileSizeHumanReadable(filesize($directroy.'/'.$filename)).'</TD>
                <TD class="left-align light">'.date("Y-m-d", filemtime($directroy.'/'.$filename)).'</TD>
                <TD class="left-align light"><A class="link-text" href="'.$directroy.'/'.$filename.'"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>'.$height.'</B></SPAN></A></TD>
              </TR>';
}
?>
            </TBODY>
          </TABLE>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block" id="repositories">
          <H5 class="center">Repositories</H5>
          <P class="center light">Galilel repositories include wallet, backend and daemon source as well as media files.</P>
        </DIV>
      </DIV>
      <DIV class="col m12">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://github.com/Galilel-Project" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/wallet/github.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://github.com/Galilel-Project" target="_blank" rel="noopener noreferrer">github.com</A></DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Team Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Team</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- Team Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block" id="team">
          <H2 class="center brown-text"><I class="material-icons">face</I></H2>
          <H5 class="center">Leadership and Development</H5>
          <P class="center light">Meet the team behind Galilel.</P>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m6">
        <DIV class="icon-block">
          <DIV class="center"><IMG width="300" height="300" src="images/team/maik.png"></A></DIV>
          <DIV class="center">
            <A class="link-text" href="https://www.linkedin.com/in/mbroemme/" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/linkedin.svg"></A>
            <A class="link-text" href="https://www.xing.com/profile/Maik_Broemme/cv" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/xing.svg"></A>
            <A class="link-text" href="https://www.facebook.com/mbroemme" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/facebook.svg"></A>
            <A class="link-text" href="https://github.com/mbroemme" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/github.svg"></A>
            <A class="link-text" href="https://zuppy.pm/" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/home.svg"></A>
            <A class="link-text" href="mailto:mbroemme@libmpq.org"><IMG width="32" height="32" src="images/team/email.svg"></A>
          </DIV>
          <DIV class="center light"><B>Maik Broemme</B></DIV>
          <DIV class="center light"><B>Babyface#7772</B></DIV>
          <DIV class="center light">Founder &amp; Developer</DIV>
        </DIV>
      </DIV>
      <DIV class="col m6">
        <DIV class="icon-block">
          <DIV class="center"><IMG width="300" height="300" src="images/team/miles.png"></A></DIV>
          <DIV class="center">
            <A class="link-text" href="https://twitter.com/bossteck" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/twitter.svg"></A>
            <A class="link-text" href="https://www.facebook.com/BBR.MILES.CLAY" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/facebook.svg"></A>
            <A class="link-text" href="https://github.com/Bossteck" target="_blank" rel="noopener noreferrer"><IMG width="32" height="32" src="images/team/github.svg"></A>
            <A class="link-text" href="mailto:botx@gmx.com"><IMG width="32" height="32" src="images/team/email.svg"></A>
          </DIV>
          <DIV class="center light"><B>Miles Clay</B></DIV>
          <DIV class="center light"><B>Bossteck#6262</B></DIV>
          <DIV class="center light">Co-Founder &amp; Designer</DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Roadmap Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Roadmap</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- Roadmap Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block" id="roadmap">
          <H2 class="center brown-text"><I class="material-icons">developer_board</I></H2>
          <H5 class="center">Milestones and Estimations</H5>
          <P class="center light">What we build and when you can expect it.</P>
          <UL class="collapsible">
            <LI>
              <DIV class="collapsible-header">
                Q2/2018
                <SPAN class="badge light">1</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Enable and release MAINNET</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q3/2018
                <SPAN class="badge light">11</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Create block explorer (SSL secured)</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">2.</TD><TD class="left-align light">Create discord bot for block height</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">3.</TD><TD class="left-align light">Create discord bot for donation monitoring</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">4.</TD><TD class="left-align light">Create discord bot for GitHub monitoring</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">5.</TD><TD class="left-align light">Community poll: Max Coin Supply</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">6.</TD><TD class="left-align light">Community poll: MN/PoS reward distribution</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">7.</TD><TD class="left-align light">Community poll: MN collateral amount</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">8.</TD><TD class="left-align light">Community poll: Reward structure modification</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">9.</TD><TD class="left-align light">Create branding (logos, banners and icons)</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">10.</TD><TD class="left-align light">Release Galilel v2.0.0 with community vote results</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">11.</TD><TD class="left-align light">Know Your Developer (KYD) public verification</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q4/2018
                <SPAN class="badge light">7</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Enable and release TESTNET</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">2.</TD><TD class="left-align light">Refactor Galilel codebase to latest PIVX 3.1.1</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">3.</TD><TD class="left-align light">Enable Decentralized Autonomous Organization (DAO) for blockchain voting</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">4.</TD><TD class="left-align light">Release Galilel Coin whitepaper</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">5.</TD><TD class="left-align light">Release Brand Guide</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">6.</TD><TD class="left-align light">Release Galilel v3.0.0 with Zerocoin v1 activation at block 245,000</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">7.</TD><TD class="left-align light">Release Galilel v3.1.0 with Zerocoin v2 with private Proof-of-Stake (zPoS) at block 245,000</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">8.</TD><TD class="left-align light">Create BitcoinTalk Announcement</TD><TD class="right-align light"><SPAN class="new badge green lighten-2" data-badge-caption=""><B>RESOLVED</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q1/2019
                <SPAN class="badge light">3</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Release Galilel v4.0.0 with Instant On Masternode (gIOMN) at block 380,000</TD><TD class="right-align light"><SPAN class="new badge orange lighten-2" data-badge-caption=""><B>IN PROGRESS</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">2.</TD><TD class="left-align light">Start Android wallet development</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q2/2019
                <SPAN class="badge light">2</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Release Galilel v5.0.0 with Hybrid Proof-of-Stake (ghPoS) at block TBD</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">2.</TD><TD class="left-align light">Release Galilel Android wallet v1.0 with Instant On Masternode (gIOMN)</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q3/2019
                <SPAN class="badge light">1</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Release Galilel v5.1.0 with Term Deposit (gTD) at block TBD</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q4/2019
                <SPAN class="badge light">2</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Release Galilel v6.0.0 with Money Supply Control (gMSC)</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                    <TR><TD class="right-align light">2.</TD><TD class="left-align light">Release Galilel Android wallet v2.0 with Term Deposit (gTD)</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
            <LI>
              <DIV class="collapsible-header">
                Q1/2020
                <SPAN class="badge light">1</SPAN>
              </DIV>
              <DIV class="collapsible-body">
                <TABLE class="highlight">
                  <TBODY>
                    <TR><TD class="right-align light">1.</TD><TD class="left-align light">Release Galilel Android wallet v3.0 with Money Supply Control (gMSC)</TD><TD class="right-align light"><SPAN class="new badge red lighten-2" data-badge-caption=""><B>OPEN</B></SPAN></TD></TR>
                  </TBODY>
                </TABLE>
              </DIV>
            </LI>
          </UL>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Exchanges Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Exchanges</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- Exchanges Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block">
          <H2 class="center brown-text"><I class="material-icons">monetization_on</I></H2>
          <H5 class="center">Buying and Trading</H5>
          <P class="center light">Galilel can be traded on the following exchanges.</P>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/exchange/graviex.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://graviex.net/markets/galibtc" target="_blank" rel="noopener noreferrer">graviex.net</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/exchange/raisex.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://raisex.io/trade/GALI_BTC" target="_blank" rel="noopener noreferrer">raisex.io</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/exchange/aiodex.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://aiodex.com/exchange/GALI_BTC" target="_blank" rel="noopener noreferrer">aiodex.com</A></DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Marketing Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Marketing</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- Marketing Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block">
          <H2 class="center brown-text"><I class="material-icons">beenhere</I></H2>
          <H5 class="center">Marketing and Awareness</H5>
          <P class="center light">Partners and market capitalisation websites promoting Galilel and providing monitoring or masternode hosting services.</P>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://masternodes.online/currencies/GALI/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/mno.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://masternodes.online/currencies/GALI/" target="_blank" rel="noopener noreferrer">masternodes.online</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://coinlib.io/coin/GALI/Galilel" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/coinlib.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://coinlib.io/coin/GALI/Galilel" target="_blank" rel="noopener noreferrer">coinlib.io</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://mntop.co.in/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/mntop.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://mntop.co.in/" target="_blank" rel="noopener noreferrer">mntop.co.in</A></DIV>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://mnode.club/g/info/GALI" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/mnode.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://mnode.club/g/info/GALI" target="_blank" rel="noopener noreferrer">mnode.club</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/kyd.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://review.kydcoin.io/galicoin/" target="_blank" rel="noopener noreferrer">kydcoin.io</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://beam.works/user/galilel/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/beam.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://beam.works/user/galilel/" target="_blank" rel="noopener noreferrer">beam.works</A></DIV>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://satoshisolutions.online/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/satoshi.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://satoshisolutions.online/" target="_blank" rel="noopener noreferrer">satoshisolutions.online</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://gali.chopcoin.io/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/chopcoin.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://gali.chopcoin.io/" target="_blank" rel="noopener noreferrer">chopcoin.io</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://nodecheck.io/currency/GALI" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/nodecheck.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://nodecheck.io/currency/GALI" target="_blank" rel="noopener noreferrer">nodecheck.io</A></DIV>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://coincodex.com/crypto/galilel/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/coincodex.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://coincodex.com/crypto/galilel/" target="_blank" rel="noopener noreferrer">coincodex.com</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://coingecko.com/en/coins/galilel" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/coingecko.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://coingecko.com/en/coins/galilel" target="_blank" rel="noopener noreferrer">coingecko.com</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://worldcoinindex.com/coin/galilel" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/worldcoinindex.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://worldcoinindex.com/coin/galilel" target="_blank" rel="noopener noreferrer">worldcoinindex.com</A></DIV>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://coinpaprika.com/coin/gali-galilel/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/coinpaprika.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://coinpaprika.com/coin/gali-galilel/" target="_blank" rel="noopener noreferrer">coinpaprika.com</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://dextro.io/" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/marketing/dextro.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://dextro.io/" target="_blank" rel="noopener noreferrer">dextro.io</A></DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Community Header -->
  <DIV class="parallax-container parallax-container-narrow teal lighten-1">
    <DIV class="container">
      <DIV class="row center">
        <H5 class="center teal-text text-lighten-2 headline">Community</H5>
      </DIV>
    </DIV>
  </DIV>

  <!-- Community Content -->
  <DIV class="container">
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block">
          <H2 class="center brown-text"><I class="material-icons">insert_comment</I></H2>
          <H5 class="center">Contact Us</H5>
          <P class="center light">Get in touch with the core team of Galilel, join our Discord channel, follow us on Twitter and Facebook or write a post in BitcoinTalk forum.</P>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/community/discord.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://discord.galilel.cloud" target="_blank" rel="noopener noreferrer">Discord</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/community/twitter.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://twitter.com/GalilelEN" target="_blank" rel="noopener noreferrer">Twitter</A></DIV>
        </DIV>
      </DIV>
      <DIV class="col m4">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/community/bitcointalk.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://bitcointalk.galilel.cloud" target="_blank" rel="noopener noreferrer">BitcoinTalk</A></DIV>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="row">
      <DIV class="col m12">
        <DIV class="icon-block">
          <DIV class="center"><A class="link-text" href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer"><IMG width="96" height="96" src="images/community/facebook.svg"></A></DIV>
          <DIV class="center light"><A class="link-text" href="https://facebook.com/GalilelEN" target="_blank" rel="noopener noreferrer">Facebook</A></DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>

  <!-- Footer -->
  <FOOTER class="page-footer teal">
    <DIV class="footer-copyright center">
      <DIV class="container brown-text">
        Copyright &copy; 2018 - <A class="link-text" href="mailto:galilel@galilel.cloud?subject=More%20Information">Galilel Cloud</A>
      </DIV>
    </DIV>
  </FOOTER>
  </BODY>
</HTML>
